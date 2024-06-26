<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    protected $fillable=[
        
        'nom',
        'description',
        'adresse',
        'contact',
        'secteur_activite',
        'date_creation',
    
    ];

    public function evenements(){

        return $this->hasMany(Evenement::class);
    }
}
