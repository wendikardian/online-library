<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return view('hello')
        ->with('name', 'James')
        ->with('age', 25)
        ->with('siblings', ['Robert', 'Natalia'])
        ->with('citizenship', 'EN')
        ->with('user_id', $id);
    }
}
