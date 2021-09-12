<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){
        $allTrips = Trip::all();
        $filteredTrips = Trip::where('price','<',90)->get();
        $bestTrips = Trip::where('review','>',9)->get();
        return view('HomePage',compact('allTrips','filteredTrips','bestTrips'));
    }
}
