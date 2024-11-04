<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'email', 
        'user_id',
        'profile_id',
    ];
}
