@extends('layouts.app')

@section('content')
    <h1>Daftar Transaksi</h1>
    <!-- NAMA: MUHAMAD HUDANSAH -->
    <!-- KELAS: 46-03 -->
    <!-- NIM: 6706223049 -->

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Kendaraan ID</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Biaya</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user_id }}</td>
                <td>{{ $transaction->vehicle_id }}</td>
                <td>{{ $transaction->startDate }}</td>
                <td>{{ $transaction->endDate }}</td>
                <td>{{ $transaction->price }}</td>
                <td>{{ $transaction->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
