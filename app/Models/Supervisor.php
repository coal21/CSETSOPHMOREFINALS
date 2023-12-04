<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supervisor extends Authenticatable
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

    // Specify the table name if it's different from the default
    protected $table = 'supervisors';

    // Laravel expects the primary key to be named 'id' by default.
    // If it's named differently in your table, specify it here.
    protected $primaryKey = 'id';

    // Make sure you have these two methods
    public function getAuthIdentifierName()
    {
        return 'id'; // Assuming 'id' is the primary key column
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    // This is necessary if your supervisors table does not have timestamps
    public function getCreatedAtColumn()
    {
        return null;
    }

    public function getUpdatedAtColumn()
    {
        return null;
    }
}