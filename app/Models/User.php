<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'company',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isOrganizer()
    {
        return $this->role === 'organizador';
    }

    public function isExpositor()
    {
        return $this->role === 'expositor';
    }

    public function isVisitor()
    {
        return $this->role === 'visitante';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function submissions()
    {
        return $this->hasMany(related: SubmissaoContacto::class);
    }
}
