<?php

namespace App\Http\Controllers;
use App\Models\BMICalculator;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    // Menampilkan form
    public function index()
    {
        return view('bmi.index');
    }

    // Menghitung BMI setelah form dikirim
    public function result(Request $request)
    {
        // Validasi input
        $request->validate([
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
        ]);

        // Buat instance model BMI
        $bmiCalc = new BMICalculator($request->weight, $request->height);

        return view('bmi.result', [
            'bmi' => $bmiCalc->calculateBMI(),
            'category' => $bmiCalc->getCategory(),
        ]);
    }
}
