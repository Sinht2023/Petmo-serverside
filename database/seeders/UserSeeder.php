<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => 'user'.$i,
                'email' => 'user'.$i.'@example.com',
                'address' => 'Address '.$i,
                'tel' => '123-456-789'.$i,
                'password' => Hash::make('password'.$i),
            ]);
        }
    }
}
