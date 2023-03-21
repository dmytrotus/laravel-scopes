<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($count): void
    {
        for ($i = 1; $i <= $count; $i++) {
            DB::table('items')->insert([
                'name' => 'item_'.$i,
                'price' => rand(10, 2000),
                'user_id' => $i
            ]);
        }
    }
}
