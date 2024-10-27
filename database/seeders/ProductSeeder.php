<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إنشاء بيانات لعدد من المنتجات
        Product::create(['name' => 'Product 1', 'stock' => 50]);
        Product::create(['name' => 'Product 2', 'stock' => 100]);
        Product::create(['name' => 'Product 3', 'stock' => 75]);
        Product::create(['name' => 'Product 4', 'stock' => 30]);
    }
}
