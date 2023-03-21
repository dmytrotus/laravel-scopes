<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($count): void
    {
        for ($i = 1; $i <= $count; $i++) {
            DB::table('products')->insert([
                'name' => 'Product '.$i,
            ]);
        }
    }
}
