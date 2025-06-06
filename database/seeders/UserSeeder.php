<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate(['email' => "user@freshen.com"],[
            'name' => 'user',
            'email' => 'user@freshen.com',
            'password' => Hash::make('user')
        ]);
    }
}
