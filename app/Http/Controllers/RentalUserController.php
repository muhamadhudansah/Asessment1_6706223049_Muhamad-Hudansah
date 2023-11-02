<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalUser;

//Muhamad Hudansah
//6706223049
//46-03
class RentalUserController extends Controller
{
    public function index()
    {
        $users = RentalUser::all();
        return view('rental-users.index', compact('users'));
    }

    public function create()
    {
        return view('rental-users.create');
    }

    public function store(Request $request)
    {
        // Implementasi penyimpanan user baru
    }

    public function show($id)
    {
        $user = RentalUser::find($id);
        return view('rental-users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = RentalUser::find($id);
        return view('rental-users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Implementasi pembaruan user
    }

    public function destroy($id)
    {
        // Implementasi penghapusan user
    }
}
