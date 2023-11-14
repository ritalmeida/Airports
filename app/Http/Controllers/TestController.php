<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home() {
        
        return view('index');
    }

    public function airport() {

        return view('airports.index');
    }

    public function flight() {

        return view('flights.index');
    }
}
