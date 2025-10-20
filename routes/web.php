<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PraktikumController;
use app\Http\Controllers\BmiController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lat', function () {
    return view('latihan');
});

Route::get('bio', function () {
    return view('biodata');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('nama', function () {
    return view('nama', ['name'=>'Riswanda Al Farisi']);
});

Route::get('nilai1', function () {
    return view('getnilai1');
});

Route::get('nilai2', function () {
    return view('getnilai2');
});

Route::get('produk', function () {
    return view('produk');
});

//latihan1
Route::get('/profil', function () {
    $nama = "Budi Santoso";
    $nim = "MI2023001";
    return view('profil', compact('nama', 'nim'));
});

//latihan2
Route::get('/daftar-mhs', function () {
    $mahasiswa = [
        ["nama" => "Andi", "nim" => "MI2023002"],
        ["nama" => "Siti", "nim" => "MI2023003"],
        ["nama" => "Joko", "nim" => "MI2023004"]
    ];
    return view('daftar', compact('mahasiswa'));
});


Route::get('/produk', function () {
    $produk = [
        ["id" => 1, "nama_produk" => "laptop asus vivobook pro 15", "harga" => 12300000],
        ["id" => 2, "nama_produk" => "laptop asus ROG strix16", "harga" => 24200000],
        ["id" => 3, "nama_produk" => "laptop asus zenbook 14", "harga" => 17500000]
    ];
    return view('produk.index', compact('produk'));
});

Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => ["nama_produk" => "laptop asus vivobook pro 15", "harga" => 12300000, "deskripsi" => "laptop prosessor i5-12450H, RAM 16GB, SSD 512GB"],
        2 => ["nama_produk" => "laptop asus ROG strix16", "harga" => 24200000, "deskripsi" => "laptop prosessor ryzen9-8940HX, RAM 32GB, SSD 1TB"],
        3 => ["nama_produk" => "laptop asus zenbook 14", "harga" => 17500000, "deskripsi" => "laptop prosessor i7-1360P, RAM 16GB, SSD 1TB"]
    ];
    return view('produk.produk-detail', ['produk' => $produk[$id]]);
});

Route::get('home', [PraktikumController::class, 'home']);
Route::get('produk', [PraktikumController::class, 'product']);
Route::get('transaksi', [PraktikumController::class, 'transaction']);
Route::get('laporan', [PraktikumController::class, 'report']);

// Menampilkan Form BMI
Route::get('/bmi', [BmiController::class, 'index'])->name('bmi.index');

// Hasil Hitung BMI
Route::post('/bmi-result', [BmiController::class, 'result'])->name('bmi.result');

Route::get('tampil-produk', [ProdukController::class, 'index']);
Route::get('tambah-produk', [ProdukController::class, 'create'])->name('produk.create');