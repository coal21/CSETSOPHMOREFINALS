<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'caregiver_id',
        'patient_id',
        'morning_medicine',
        'afternoon_medicine',
        'night_medicine',
        'breakfeast',
        'lunch',
        'dinner'
    ];
}
