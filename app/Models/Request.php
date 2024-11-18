<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'event_id',
        'title', 
        'description',
        'event_time',
        'location',
        'ticket_price',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class); // Direct access to the user's profile
    }
}
