<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    
    protected $table = 'patients';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'DOB',
        'status',
        'family_code',
        'emergency_contact',
        'relationship',
        'amount_due',
        'doctor_id',
        'role_id',
    ];
}
