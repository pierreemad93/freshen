<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          Admin::updateOrCreate(['email' => "admin@freshen.com"],[
            'name' => 'admin',
            'email' => 'admin@freshen.com',
            'password' => Hash::make('admin')
        ]);
    }
}
