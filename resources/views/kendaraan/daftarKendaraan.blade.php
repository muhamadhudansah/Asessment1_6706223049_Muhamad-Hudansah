@extends('layouts.app')

@section('content')
    <h1>Daftar Kendaraan</h1>
    <!-- NAMA: MUHAMAD HUDANSAH -->
    <!-- KELAS: 46-03 -->
    <!-- NIM: 6706223049 -->

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Plat Nomor</th>
                <th>Harga Harian</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->name }}</td>
                <td>{{ $vehicle->license_plate }}</td>
                <td>{{ $vehicle->daily_price }}</td>
                <td>{{ $vehicle->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
