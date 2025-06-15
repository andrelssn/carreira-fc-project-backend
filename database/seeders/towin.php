<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class towin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('to_win')->insert([
            ['id_team' => 1, 'name' => 'UEFA Champions League'],
            ['id_team' => 1, 'name' => 'UEFA Europa League'], // Although they reached the final, they have never won it.
            ['id_team' => 1, 'name' => 'UEFA Super Cup'],
            ['id_team' => 1, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 2, 'name' => 'UEFA Champions League'],
            ['id_team' => 2, 'name' => 'UEFA Europa League'],
            ['id_team' => 2, 'name' => 'UEFA Super Cup'],
            ['id_team' => 2, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 3, 'name' => 'Premier League'],
            ['id_team' => 3, 'name' => 'FA Cup'],
            ['id_team' => 3, 'name' => 'League Cup'],
            ['id_team' => 3, 'name' => 'UEFA Champions League'],
            ['id_team' => 3, 'name' => 'UEFA Europa League'],
            ['id_team' => 3, 'name' => 'UEFA Super Cup'],
            ['id_team' => 3, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 4, 'name' => 'Premier League'],
            ['id_team' => 4, 'name' => 'FA Cup'],
            ['id_team' => 4, 'name' => 'League Cup'],
            ['id_team' => 4, 'name' => 'UEFA Champions League'],
            ['id_team' => 4, 'name' => 'UEFA Europa League'],
            ['id_team' => 4, 'name' => 'UEFA Super Cup'],
            ['id_team' => 4, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 5, 'name' => 'Premier League'],
            ['id_team' => 5, 'name' => 'FA Cup'],
            ['id_team' => 5, 'name' => 'League Cup'],
            ['id_team' => 5, 'name' => 'UEFA Champions League'],
            ['id_team' => 5, 'name' => 'UEFA Europa League'],
            ['id_team' => 5, 'name' => 'UEFA Super Cup'],
            ['id_team' => 5, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 7, 'name' => 'Premier League'],
            ['id_team' => 7, 'name' => 'FA Cup'],
            ['id_team' => 7, 'name' => 'League Cup'],
            ['id_team' => 7, 'name' => 'UEFA Champions League'],
            ['id_team' => 7, 'name' => 'UEFA Europa League'],
            ['id_team' => 7, 'name' => 'UEFA Super Cup'],
            ['id_team' => 7, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 8, 'name' => 'UEFA Champions League'],
            ['id_team' => 8, 'name' => 'UEFA Europa League'], // They won the Cup Winners' Cup, but not the UEL
            ['id_team' => 8, 'name' => 'UEFA Super Cup'],
            ['id_team' => 8, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 9, 'name' => 'Premier League'],
            ['id_team' => 9, 'name' => 'FA Cup'],
            ['id_team' => 9, 'name' => 'League Cup'],
            ['id_team' => 9, 'name' => 'UEFA Champions League'],
            ['id_team' => 9, 'name' => 'UEFA Europa League'], // Reached the final, but didn't win
            ['id_team' => 9, 'name' => 'UEFA Super Cup'],
            ['id_team' => 9, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 10, 'name' => 'UEFA Champions League'],
            ['id_team' => 10, 'name' => 'UEFA Super Cup'],
            ['id_team' => 10, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 11, 'name' => 'UEFA Champions League'],
            ['id_team' => 11, 'name' => 'UEFA Europa League'],
            ['id_team' => 11, 'name' => 'UEFA Super Cup'],
            ['id_team' => 11, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 13, 'name' => 'Premier League'],
            ['id_team' => 13, 'name' => 'FA Cup'],
            ['id_team' => 13, 'name' => 'UEFA Champions League'],
            ['id_team' => 13, 'name' => 'UEFA Europa League'],
            ['id_team' => 13, 'name' => 'UEFA Super Cup'],
            ['id_team' => 13, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 16, 'name' => 'Premier League'],
            ['id_team' => 16, 'name' => 'League Cup'],
            ['id_team' => 16, 'name' => 'UEFA Champions League'],
            ['id_team' => 16, 'name' => 'UEFA Europa League'],
            ['id_team' => 16, 'name' => 'UEFA Super Cup'],
            ['id_team' => 16, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 17, 'name' => 'Premier League'],
            ['id_team' => 17, 'name' => 'UEFA Europa League'],
            ['id_team' => 17, 'name' => 'UEFA Super Cup'], // Won the European Super Cup in 1979, but not the current format UEFA Super Cup
            ['id_team' => 17, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 18, 'name' => 'Premier League'],
            ['id_team' => 18, 'name' => 'League Cup'],
            ['id_team' => 18, 'name' => 'UEFA Champions League'],
            ['id_team' => 18, 'name' => 'UEFA Europa League'],
            ['id_team' => 18, 'name' => 'UEFA Super Cup'],
            ['id_team' => 18, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 19, 'name' => 'Premier League'],
            ['id_team' => 19, 'name' => 'UEFA Champions League'], // Reached the final, but didn't win
            ['id_team' => 19, 'name' => 'UEFA Super Cup'],
            ['id_team' => 19, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 20, 'name' => 'UEFA Champions League'],
            ['id_team' => 20, 'name' => 'UEFA Super Cup'],
            ['id_team' => 20, 'name' => 'FIFA Club World Cup'],
            ['id_team' => 21, 'name' => 'Premier League'],
            ['id_team' => 21, 'name' => 'League Cup'],
            ['id_team' => 21, 'name' => 'UEFA Champions League'],
            ['id_team' => 21, 'name' => 'UEFA Europa League'],
            ['id_team' => 21, 'name' => 'UEFA Super Cup'],
            ['id_team' => 21, 'name' => 'FIFA Club World Cup'],
        ]);
    }
}
