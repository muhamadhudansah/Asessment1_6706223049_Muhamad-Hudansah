<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalType;

//Muhamad Hudansah
//6706223049
//46-03

class RentalTypeController extends Controller
{
    public function index()
    {
        $types = RentalType::all();
        return view('rental-types.index', compact('types'));
    }
}
