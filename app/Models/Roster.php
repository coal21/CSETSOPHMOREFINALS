<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $fillable = [
        'roster_date',
        'supervisor_id',
        'doctor_id',
        'caregiver_1_id',
        'caregiver_2_id',
        'caregiver_3_id',
        'caregiver_4_id',
    ];
}
