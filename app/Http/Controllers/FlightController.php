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
        // $flights = Flight::all();
        // $flights = Flight::paginate(10);
        // return view('flight')->with('flights', $flights);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        // To save it to the databases

        // $flight = new Flight;
        // $flight->departure = $request->departure;
        // $flight->passenger = $request->passenger;
        // $flight->save();
        // return redirect()->route('flights.index');

        // To get the data and then display it

        $passenger = $request->passenger;
        $departure = $request->departure;
        // echo data
        dd([$passenger, $departure]);
        // return view('hello');
    }
    public function show(Flight $flight)
    {
    }

    public function edit(Flight $flight)
    {
    }

    public function update(Flight $flight)
    {
    }

    public function destroy(Flight $flight)
    {
    }
}
