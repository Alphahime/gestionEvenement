<?php
// Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'evenements_id',
        'user_id',
        'status',
    ];

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenements_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
