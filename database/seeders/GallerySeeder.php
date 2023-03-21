<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($count): void
    {
        for ($i = 1; $i <= $count; $i++) {
            $id = rand(1, 5);
            DB::table('galleries')->insert([
                'path' => 'image_'.$id.'.jpg',
            ]);
        }
    }
}
