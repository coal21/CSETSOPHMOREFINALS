<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Doctors extends Authenticatable
{
    use HasFactory, Notifiable;
    
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
