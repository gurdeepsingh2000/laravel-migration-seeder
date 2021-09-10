<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){
        $allTrips = Trip::all();
        var_dump($allTrips);
    }
}
