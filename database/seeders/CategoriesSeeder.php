<?php

namespace Database\Seeders;

use App\Models\Master\Catergories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catergories::create([
            'code' => 'food',
            'name' => 'Food',
        ]);
    }
}
