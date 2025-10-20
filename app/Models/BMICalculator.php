<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BMICalculator extends Model
{
    public $weight;
    public $height;

    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    // Hitung BMI
    public function calculateBMI()
    {
        $heightInMeter = $this->height / 100; // cm -> m
        return $this->weight / ($heightInMeter * $heightInMeter);
    }

    // Tentukan Kategori
    public function getCategory()
    {
        $bmi = $this->calculateBMI();

        if ($bmi < 18.5) {
            return 'Kurus';
        } elseif ($bmi < 25) {
            return 'Normal';
        } elseif ($bmi < 30) {
            return 'Gemuk';
        } else {
            return 'Obesitas';
        }
    }
}
