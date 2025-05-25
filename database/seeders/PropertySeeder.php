<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Property::create([
        'user_id' => 1, // agen id
        'nama' => 'Rumah Minimalis',
        'description' => 'Rumah di lokasi strategis',
        'harga' => 350000000,
        'alamat' => 'Jl. Mawar No. 10',
        'type' => 'rumah',
        'status' => 'tersedia',
        'image' => null,
    ]);
    }
}
