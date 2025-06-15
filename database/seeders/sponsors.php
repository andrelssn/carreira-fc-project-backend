<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sponsors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sponsors')->insert([
            ['name' => 'Nike', 'size' => 5],
            ['name' => 'Adidas', 'size' => 5],
            ['name' => 'Puma', 'size' => 5],
            ['name' => 'Mizuno', 'size' => 4],
            ['name' => 'New Balance', 'size' => 4],
            ['name' => 'Umbro', 'size' => 4],
            ['name' => 'Under Armour', 'size' => 4],
            ['name' => 'Lotto', 'size' => 3],
            ['name' => 'Skechers', 'size' => 3],
            ['name' => 'Asics', 'size' => 3],
            ['name' => 'Joma', 'size' => 3],
            ['name' => 'Kipsta', 'size' => 3],
            ['name' => 'Tru', 'size' => 2],
            ['name' => 'Pirma', 'size' => 2],
            ['name' => 'Warrior', 'size' => 2],
            ['name' => 'Concord', 'size' => 2],
            ['name' => 'Pantofola d Oro', 'size' => 1],
            ['name' => 'Munich', 'size' => 1],
            ['name' => 'Diadora', 'size' => 1],
            ['name' => 'Concave', 'size' => 1],
            ['name' => 'Charly', 'size' => 1],
        ]);
    }
}
