<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use \App\Host;

use Rennokki\Larafy\Larafy;
use GuzzleHttp;

use SpotifyWebAPI;
use \App\Party;

class UserController extends Controller
{

    /**
     * Registers an user with the system
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function index() {
        if(Auth::check()) {
          $party = Auth::user()->party;
          return redirect("/host/{$party->code}/");
        }

        $session = new SpotifyWebAPI\Session(
            'c6dcb66351104f2aa5d5d88e746abdf4',
            '969410d48dbc409499f33d550ddf7460',
            'http://localhost:8000/callback'
        );

        $options = [
          'scope' => [
              'user-read-email',
              'user-read-private',
          ],
        ];
        header('Location: ' . $session->getAuthorizeUrl($options));
        die();
      }


      function create(Request $request) {
        $session = new SpotifyWebAPI\Session(
            'c6dcb66351104f2aa5d5d88e746abdf4',
            '969410d48dbc409499f33d550ddf7460',
            'http://localhost:8000/callback'
        );

        $session->requestAccessToken($request->code);

        $user = Host::create([
          'access_token' => $session->getAccessToken(),
          'refresh_token' => $session->getRefreshToken()
        ]);

        Auth::login($user);

        $party = new Party;

        $base = chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));

        while(Party::where('code', $base)->exists()) {
          $base = chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));
        }

        $party->code = $base;
        $party->save();


        $user->party_id = $party->id;
        $user->save();

        return redirect("/host/{$party->code}/");

      }

      function access() {
        $this->middleware('auth');

        return response()->json([
          'access_token' => Auth::user()->access_token
        ])
      }
}
