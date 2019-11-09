<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Party;
use \Auth;

class PartyController extends Controller
{
   function __construct() {
     $this->middleware("auth");
   }


   function create(Request $request) {
     $party = Party::create([
       'name' => $request->name
     ]);

     $base = "AAAA";

     while(Party::where('code', $base)->exists()) {
       $base++;
     }

     $party->code = $base;

     Auth::user()->party_id = $party_id;
     
     $party->user_id = Auth::id();


     $party->save();
     return response()->json(['code' => $party->code]);
   }
}
