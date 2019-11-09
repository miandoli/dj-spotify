<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{

    /**
     * Registers an user with the system
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function index(Request $request) {

      if(!Auth::check()) { //if the user is not logged in
        User::create([
          "refresh_key" => $request->refresh_key,
          "username" => $request->username
        ]);

        return response()->json(["success" => "The user authentication data has been stored"]);
      }

      return response()->json(["success" => "The user is already authenticated"]);
    }
}
