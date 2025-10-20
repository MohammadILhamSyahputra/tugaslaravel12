@extends('layouts.master')

@section('title', 'Detail Produk')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            {{ $produk['nama_produk']}}
        </div>
        <div class="card-body">
            <p><strong>harga:</strong> Rp {{ number_format($produk['harga'], 0, '.', '.') }}</p>
            <p><strong>deskripsi:</strong> {{ $produk['deskripsi'] }}</p>
            <a href="/produk" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection