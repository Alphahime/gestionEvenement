<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'nom',
        'categorie',
        'date',
        'lieu',
        'description',
        'nombre_place',
        'date_limite_inscription',
        'association_id',
    ];

    public function association(){

        return $this->belongsTo(Association::class);
    }

    public function users(){

        return $this->belongsToMany(User::class,'reservations');
    }
}
