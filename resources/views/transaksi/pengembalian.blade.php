@extends('layouts.app')

@section('content')
    <h1>Pengembalian Kendaraan</h1>
    <!-- NAMA: MUHAMAD HUDANSAH -->
    <!-- KELAS: 46-03 -->
    <!-- NIM: 6706223049 -->

    <form method="post" action="{{ route('transaksi.pengembalian') }}">
        @csrf <!-- Untuk melindungi formulir dari serangan CSRF -->

        <div class="form-group">
            <label for="transaction_id">Pilih Transaksi:</label>
            <select name="transaction_id" id="transaction_id" class="form-control">
                <!-- Daftar transaksi yang masih dalam status peminjaman -->
                <!-- Contoh: -->
                <option value="1">Transaksi 1</option>
                <option value="2">Transaksi 2</option>
                <!-- Tambahkan lebih banyak opsi transaksi sesuai dengan kebutuhan -->
            </select>
        </div>

        <div class="form-group">
            <label for="return_date">Tanggal Pengembalian:</label>
            <input type="date" name="return_date" id="return_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="returned_price">Biaya Pengembalian:</label>
            <input type="text" name="returned_price" id="returned_price" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Pengembalian</button>
        </div>
    </form>
@endsection
