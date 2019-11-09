<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use \App\User;

use Rennokki\Larafy\Larafy;
use GuzzleHttp;

use SpotifyWebAPI;

class UserController extends Controller
{

    /**
     * Registers an user with the system
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function index(Request $request) {
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

        $user = User::create([
          'access_token' => $session->getAccessToken(),
          'refresh_token' => $session->getRefreshToken()
        ]);

        Auth::login($user);

        $party = Party::create([
          'name' => $request->name
        ]);

        $base = "AAAA";

        while(Party::where('code', $base)->exists()) {
          $base++;
        }

        $party->code = $base;

        $user->party_id = $party->id;

        $party->user_id = $user->id;

        $user->save();
        $party->save();

        return redirect("/host/{$party->code}");

      }
}
