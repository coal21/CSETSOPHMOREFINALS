<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'timeToGive',
        'dateGiven',
        'patient_id',
        'comment',
    ];
    
}
