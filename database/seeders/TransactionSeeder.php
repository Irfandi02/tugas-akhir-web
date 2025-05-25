<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Transaction::create([
        'property_id' => 1,
        'pembeli_id' => 2, // user pembeli
        'transaction_date' => now(),
        'total' => 350000000,
        'status' => 'success',
    ]);
    }
}
