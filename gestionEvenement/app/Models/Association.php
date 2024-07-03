<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'description',
        'adresse',
        'contact',
        'secteur_activite',
        'date_creation',
        'logo',
        'email',
        'password',
        'ninea',
        'active',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
