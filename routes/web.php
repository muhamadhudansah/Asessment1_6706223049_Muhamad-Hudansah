<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalVehicleController;
use App\Http\Controllers\RentalTypeController;
use App\Http\Controllers\RentalTransactionController;
use App\Http\Controllers\RentalUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/vehicle', [RentalVehicleController::class, 'index'])->name('kendaraan.daftarKendaraan');
Route::get('/transaksi', [RentalTransactionController::class, 'index'])->name('transaksi.daftarTransaksi');
Route::get('/transaksiTambah', [RentalTransactionController::class, 'create'])->name('transaksi.peminjaman');
Route::get('/transaksi', [RentalTransactionController::class, 'create'])->name('transaksi.peminjaman');
Route::get('/transaksiKembali/{id}', [RentalTransactionController::class, 'edit'])->name('transaksi.pengembalian');
Route::get('/transaksiKembali/{id}', 'TransactionController@edit');
Route::post('/transaksiStore', 'TransactionController@store');
Route::post('/transaksiUpdate', 'TransactionController@update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
