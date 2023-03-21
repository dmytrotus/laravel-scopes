<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($count): void
    {
        $arr = range(1, $count);

        for ($i = 1; $i <= $count; $i++) {
            shuffle($arr);
            DB::table('product_galleries')->insert([
                'product_id' => $count,
                'images_ids' => json_encode($arr)
            ]);
        }
    }
}
