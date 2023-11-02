<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalTransaction;

class RentalTransactionController extends Controller
{
    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan transaksi
        return view('transaksi.daftarTransaksi');
    }
    public function edit($id){
        return view('transaksi.pengembalian');
    }
}
