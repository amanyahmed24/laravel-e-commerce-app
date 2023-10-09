<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Add this import statement
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // You also need to import Str class to use Str::random()

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Category::factory(10)->create();
       
    }
}
