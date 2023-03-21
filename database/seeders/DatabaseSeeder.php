<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run($count = 1): void
    {
        \App\Models\User::factory($count)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->callWith(ProductsSeeder::class, ['count' => $count]);
        // $this->callWith(GallerySeeder::class, ['count' => $count]);
        // $this->callWith(ProductsGallerySeeder::class, ['count' => $count]);
        $this->callWith(ItemsSeeder::class, ['count' => $count]);
    }
}
