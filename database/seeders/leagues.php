<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class leagues extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leagues')->insert([
                [
                    'name' => 'Premier League',
                    'country' => 'England',
                    'division' => 1,
                    'difficulty' => 5,
                ],
                [
                    'name' => 'EFL Championship',
                    'country' => 'England',
                    'division' => 2,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'EFL League One',
                    'country' => 'England',
                    'division' => 3,
                    'difficulty' => 2,
                ],
                [
                    'name' => 'EFL League Two',
                    'country' => 'England',
                    'division' => 4,
                    'difficulty' => 1,
                ],
                [
                    'name' => 'LaLiga EA SPORTS',
                    'country' => 'Spain',
                    'division' => 1,
                    'difficulty' => 5,
                ],
                [
                    'name' => 'LaLiga Hypermotion',
                    'country' => 'Spain',
                    'division' => 2,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Bundesliga',
                    'country' => 'Germany',
                    'division' => 1,
                    'difficulty' => 5,
                ],
                [
                    'name' => '2. Bundesliga',
                    'country' => 'Germany',
                    'division' => 2,
                    'difficulty' => 4,
                ],
                [
                    'name' => '3. Liga',
                    'country' => 'Germany',
                    'division' => 3,
                    'difficulty' => 2,
                ],
                [
                    'name' => 'Ligue 1 McDonald’s',
                    'country' => 'France',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Ligue 2 BKT',
                    'country' => 'France',
                    'division' => 2,
                    'difficulty' => 3,
                ],
                [
                    'name' => 'Serie A Enilive',
                    'country' => 'Italy',
                    'division' => 1,
                    'difficulty' => 5,
                ],
                [
                    'name' => 'Serie BKT',
                    'country' => 'Italy',
                    'division' => 2,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Major League Soccer',
                    'country' => 'USA & Canada',
                    'division' => 1,
                    'difficulty' => 3,
                ],
                [
                    'name' => 'MLS Next Pro',
                    'country' => 'USA & Canada',
                    'division' => 2,
                    'difficulty' => 2,
                ],
                [
                    'name' => 'Liga Portugal Placard',
                    'country' => 'Portugal',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Pro League',
                    'country' => 'Belgium',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Eredivisie',
                    'country' => 'Netherlands',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Allsvenskan',
                    'country' => 'Sweden',
                    'division' => 1,
                    'difficulty' => 3,
                ],
                [
                    'name' => 'Süper Lig',
                    'country' => 'Turkey',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Brasileirão Série A',
                    'country' => 'Brazil',
                    'division' => 1,
                    'difficulty' => 4,
                ],
                [
                    'name' => 'Brasileirão Série B',
                    'country' => 'Brazil',
                    'division' => 1,
                    'difficulty' => 3,
                ],
                [
                    'name' => 'Brasileirão Série C',
                    'country' => 'Brazil',
                    'division' => 1,
                    'difficulty' => 2,
                ],
            ]
        );
    }
}
