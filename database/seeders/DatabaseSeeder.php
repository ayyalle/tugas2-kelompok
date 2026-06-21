<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Admin 1 (Ganti pakai data asli kamu)
    \App\Models\User::create([
        'name' => 'Dzakiya Fitriani',
        'email' => 'dzakiyafitriani@gmail.com',
        'password' => \Illuminate\Support\Facades\Hash::make('07laraveldz'),
        'role' => 'admin',
    ]);

    // Admin 2
    \App\Models\User::create([
        'name' => 'Admin Triya',
        'email' => 'titiiandhika04@gmail.com',
        'password' => \Illuminate\Support\Facades\Hash::make('triya04'),
        'role' => 'admin',
    ]);

    // Admin 3
    \App\Models\User::create([
        'name' => 'Admin Ketiga',
        'email' => 'admin3@gmail.com',
        'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        'role' => 'admin',
    ]);
}
}
