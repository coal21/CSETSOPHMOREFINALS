<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    
    protected $table = 'doctors';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'DOB',
        'status',
        'role_id'
    ];
}
