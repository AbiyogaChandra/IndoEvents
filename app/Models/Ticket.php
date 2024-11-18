<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'code', 
        'qr_code',
        'user_id',
        'event_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
