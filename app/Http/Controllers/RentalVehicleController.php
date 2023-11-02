<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalVehicle;

//Muhamad Hudansah
//6706223049
//46-03
class RentalVehicleController extends Controller
{
    public function index()
    {
        $vehicles = RentalVehicle::all();
        return view('kendaraan.daftarKendaraan', compact('vehicles'));
    }
    
}
