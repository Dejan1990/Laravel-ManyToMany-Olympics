<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $sports = Sport::all();
        $countries = Country::all();

        return view('sports.create', compact('sports', 'countries'));
    }

    public function show()
    {
        return view('sports.show');
    }
}
