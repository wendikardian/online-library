<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Flight Models
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        // Get all from model Flight;
        $flights = Flight::all();
        return view('flight')->with('flights', $flights);
    }
}
