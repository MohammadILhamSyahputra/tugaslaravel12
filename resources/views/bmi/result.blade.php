@extends('layouts.master')

@section('title', 'BMI Result')

@section('content')
<p>BMI Anda: {{ number_format($bmi, 2) }}</p>
<p>Kategori: {{ $category }}</p>
<a href="{{ route('bmi.index') }}">Hitung lagi</a>
@endsection