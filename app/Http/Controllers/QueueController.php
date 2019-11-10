<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Rennokki\Larafy\Larafy;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Auth;
use SpotifyWebAPI;

use \App\Queue;
use \App\Party;
use \App\Host;

class QueueController extends Controller
{
    public function addSong(Request $request) {
      $cD = 0.2;
      $cE = 0.2;
      $cV = 0.1;
      $cS = 0.1;
      $cA = 0.3;
      $cI = 0.1;

      $api = new Larafy();

      $track = $api->getTrack($request->id);

      $party = Party::where("code", $request->code)->first();
      $client = new Client(); //GuzzleHttp\Client

        $result = $client->get("https://api.spotify.com/v1/audio-features/{$track->id}", [
            "headers" => ["Authorization" => "Bearer ".Host::where('party_id', $party->id)->first()->access_token]
        ]);

      $stats = json_decode($result->getBody()->read(2048));

      $litness_score = rand(0, 1);

      $fD = $stats->danceability;
      $fE = $stats->energy;
      $fV = $stats->valence;
      $fS = $stats->speechiness;
      $fA = $stats->acousticness;
      $fI = $stats->instrumentalness;

      $lit = (($fD * $cD) + ($fE * $cE) + ($fV * $cV) / 3);
      $notlit = (($fS * $cS) + ($fA * $cA) + ($fI * $cI) / 3);

      $litness_score = $lit - $notlit;

      $song = new Queue;
      $song->song_id = $request->id;
      $song->party_id = $party->id;
      $song->litness_score = $litness_score;
//      $song->tempo = $stats->tempo;

      $song->save();
      return response()->json(['song' => $song]);
    }

    public function addPlaylist(Request $request) {
        $api = new Larafy();
        $playlist = $api->getPlaylistTracks($request->id, 10, 0);
        return response()->json(['playlist' => $playlist]);
    }

    public function deleteSong(Request $request) {
      $song = Queue::where('id', $request->id)->where('party_id', Auth::user()->party->id)->first();
      $song->delete();

      return response();
    }

    public function getPartyQueue(Request $request) {
      $api = new Larafy();

      $queueableSongs = Queue::where("party_id", Auth::user()->party->id)->get();

      $ids = array();

      foreach($queueableSongs as $q) {
        array_push($ids, $q->song_id);
      }

      return response()->json(['queue' => $api->getTracks($ids)]);
    }


    public function check(Request $request) {
      $api = new SpotifyWebAPI\SpotifyWebAPI();
      $api->setAccessToken(Auth::user()->access_token);

      $current = $api->getMyCurrentTrack();


      if(!$request->session()->has('song') || ($request->session()->get('song') != $current->item->id) || $current->is_playing == false) {
        $track = Queue::where("party_id", Auth::user()->party->id)->orderBy("litness_score")->first();
        $request->session()->put('song', $track->song_id);

        $api->play(false, [
          'uris' => ["spotify:track:{$track->song_id}"],
        ]);

        $track->delete();

        return response()->json(["song" => $api->getTrack($track->song_id)]);
      }

        return response()->json(["song" => null]);
    }



}
