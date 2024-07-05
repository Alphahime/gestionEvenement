<?php

namespace App\Models;

use App\Models\Association;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'image',
        'date',
        'lieu',
        'description',
        'nombre_place',
        'date_limite_inscription',
        'association_id',
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
    public function users(){

        return $this->belongsToMany(User::class,'reservations');
    }
}
