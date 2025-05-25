<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => Hash::make('admin123'),
    'role' => 'admin',
]);

User::create([
    'name' => 'Agen Properti',
    'email' => 'agen@example.com',
    'password' => Hash::make('agen123'),
    'role' => 'agen',
]);

User::create([
    'name' => 'Pembeli',
    'email' => 'pembeli@example.com',
    'password' => Hash::make('pembeli123'),
    'role' => 'pembeli',
]);

    }
}
