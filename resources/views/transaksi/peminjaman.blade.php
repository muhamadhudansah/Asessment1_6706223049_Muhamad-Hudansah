@extends('layouts.app')

@section('content')
    <h1>Peminjaman Kendaraan</h1>

    <!-- NAMA: MUHAMAD HUDANSAH -->
    <!-- KELAS: 46-03 -->
    <!-- NIM: 6706223049 -->

    <form method="post" action="{{ route('transaksi.peminjaman') }}">
        @csrf <!-- Untuk melindungi formulir dari serangan CSRF -->

        <div class="form-group">
            <label for="user_id">Pilih User:</label>
            <select name="user_id" id="user_id" class="form-control">
                <!-- Daftar pengguna dari database atau data lainnya -->
                <!-- Contoh: -->
                <option value="1">User 1</option>
                <option value="2">User 2</option>
                <!-- Tambahkan lebih banyak opsi pengguna sesuai dengan kebutuhan -->
            </select>
        </div>

        <div class="form-group">
            <label for="vehicle_id">Pilih Kendaraan:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control">
                <!-- Daftar kendaraan dari database atau data lainnya -->
                <!-- Contoh: -->
                <option value="1">Kendaraan 1</option>
                <option value="2">Kendaraan 2</option>
                <!-- Tambahkan lebih banyak opsi kendaraan sesuai dengan kebutuhan -->
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Tanggal Mulai:</label>
            <input type="date" name="start_date" id="start_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="end_date">Tanggal Selesai:</label>
            <input type="date" name="end_date" id="end_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Biaya:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Peminjaman</button>
        </div>
    </form>
@endsection
