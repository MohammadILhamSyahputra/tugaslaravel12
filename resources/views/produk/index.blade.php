@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')

<br>
<div class="container">
    <h2>Tabel Produk</h2>
    <a href="{{route('produk.create')}}" class="btn btn-success"> + Tambah Data</a>
    <table class="table table-bordered table striped" id="tabel-produk">
        <thead>
        <tr>
            <th style="width:1%">No.</th>
            <th style="width:5%">Kode Produk</th>
            <th style="width:5%">Nama Produk</th>
            <th style="width:5%">Harga</th>
            <th style="width:5%">Stok</th>
            <th style="width:5%">Aksi</th>
        </tr>
        </thead>
    <tbody>
    @foreach ($dataProduk as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_produk }}</td>
        <td>{{ number_format($data->harga, 0, ',', '.') }}</td>
        <td>{{ $data->stock }}</td>
        <td>
            <button class="btn btn-warning">Ubah</button>
            <button class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

{{-- @extends('layouts.master')

@section('title', 'Daftar Produk')

@section('content')
<div class="container mt-5">
    <h3>Daftar Produk</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p['nama_produk'] }}</td>
                <td>Rp {{ number_format($p['harga'], 0, '.', '.') }}</td>
                <td>
                    <a href="/produk/{{ $p['id'] }}" class="btn btn-sm btn-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}