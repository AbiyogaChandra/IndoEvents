<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory;

    protected $fillable = [
        'email', 
        'password',
        'username',
        'level'
    ];

    protected $hidden = [
        'password'
    ];

    protected $guarded = [
        'google_id'
    ];

    public function canAccessFilament(): bool
    {
        return $this->level === 'admin';
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->level === 'admin'; 
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
