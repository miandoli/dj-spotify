<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use \App\User;

use Rennokki\Larafy\Larafy;
use GuzzleHttp;

class UserController extends Controller
{

    /**
     * Registers an user with the system
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function index(Request $request) {

      $client = new GuzzleHttp\Client();
      $res = $client->get('https://accounts.spotify.com/authorize', [
        "response_type" => "code",
        "client_id" => "c6dcb66351104f2aa5d5d88e746abdf4",
        "redirect_uri" => 'localhost:8000',
        "scopes" => "user-read-private user-read-email"
      ]);


      echo $res->getBody(); // { "type": "User", ....
    }
}
