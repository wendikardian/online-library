<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //create method called index
    public function index()
    {
        // return view('community', [
        //     'name' => 'James',
        //     'age' => 25,
        //     'citizenship' => 'EN',
        //     'siblings' => ['Robert', 'Natalia']
        // ]);

        return view('community')
        ->with('name', 'James')
        ->with('age', 25)
        ->with('siblings', ['Robert', 'Natalia'])
        ->with('citizenship', 'EN');
    }
}
