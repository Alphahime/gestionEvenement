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
        $user=Admin::create([
        
            'nom' =>'admin',
            'email' =>'ndeyecisse188@gmail.com',
            'password' =>'1234567',
        ]);

        $user->assignRole('admin');
        
    }
}
