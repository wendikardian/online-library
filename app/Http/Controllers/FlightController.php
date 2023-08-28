<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Flight Models
use App\Models\Flight;
use App\Http\Requests\FlightPostRequest;

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

    public function store(FlightPostRequest $request)
    {

        // To save it to the databases

        // $flight = new Flight;
        // $flight->departure = $request->departure;
        // $flight->passenger = $request->passenger;
        // $flight->save();
        // return redirect()->route('flights.index');
        // fillable to Flight
        // add validate to the request data

        // Manual without request
        // $validate = $request->validate([
        //     'departure' => 'required|numeric|min:75|max:150',
        //     'passenger' => 'required'
        // ]);

        // with request
        $validate = $request->validated();

        $flight = new Flight;
        // $flight->create($request->all());
        $flight->create($validate);
        return redirect()->route('flights.index');

        // If the users does not require all of the validation rules, it will return 403 error (unauthorized)

        // To get the data and then display it

        // $passenger = $request->passenger;
        // $departure = $request->departure;
        // // echo data
        // dd([$passenger, $departure]);
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
