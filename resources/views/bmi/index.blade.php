@extends('layouts.master')

@section('title', 'BMI')

@section('content')
<form action="{{ route('bmi.result') }}" method="POST">
    @csrf
    <label>Berat Badan (kg):</label>
    <input type="number" name="weight" step="0.1" required>

    <label>Tinggi Badan (cm):</label>
    <input type="number" name="height" step="0.1" required>

    <button type="submit">Hitung BMI</button>
</form>
@endsection