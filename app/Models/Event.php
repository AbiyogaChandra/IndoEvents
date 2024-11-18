<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description',
        'event_time',
        'location',
        'ticket_price',
        'photo',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'event_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'event_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
