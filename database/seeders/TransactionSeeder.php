<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'product_id' => 1,
            'type' => 'purchase', 
            'quantity' => 10,
            'amount' => 100.00,
        ]);

        Transaction::create([
            'product_id' => 1,
            'type' => 'sell', 
            'quantity' => 5,
            'amount' => 50.00,
        ]);

        Transaction::create([
            'product_id' => 1,
            'type' => 'sell_return', 
            'quantity' => 2,
            'amount' => 20.00,
        ]);

        Transaction::create([
            'product_id' => 1,
            'type' => 'purchase_return', 
            'quantity' => 3,
            'amount' => 30.00,
        ]);
    }
}
