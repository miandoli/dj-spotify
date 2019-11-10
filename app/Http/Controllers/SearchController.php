<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Rennokki\Larafy\Larafy;

class SearchController extends Controller
{
    public function search(Request $request) {
        $api = new Larafy();
        return response()->json(['results'=> $api->searchTracks($request->search, 10, 0)]);
    }
}
