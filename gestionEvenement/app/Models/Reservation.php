<?php
namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;



    protected $fillable=[
        'evenements_id',
        'user_id',
        'status',
    ];

    public function evenement(){

        return $this->hasMany(Evenement::class, 'reservation_id');
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

}
