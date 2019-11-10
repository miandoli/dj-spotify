<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Party;
use \Auth;

class PlaylistController extends Controller
{
    function index(Request $request, $code) {

        if(Party::where('code', $code)->exists()) {
            return view("playlist", ["code" => $code]);
        } else {
            return back();
        }
    }
}
