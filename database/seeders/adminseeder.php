<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=user::create([
        
            'nom' =>'cisse',
            'telephone' =>'123456789',
            'email' =>'ndeyecisse188@gmail.com',
            'password' =>'123456789',
            'adresse' =>'Ziguinchor',
        ]);

        $user->assignRole('admin');
        
    }
}
