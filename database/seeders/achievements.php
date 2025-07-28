<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class achievements extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievements')->insert([
            ['id_team' => 1, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 13],
            ['id_team' => 1, 'name' => 'FA Cup', 'quantity' => 14],
            ['id_team' => 1, 'name' => 'English League Cup (League Cup/Carabao Cup)', 'quantity' => 2],
            ['id_team' => 1, 'name' => 'FA Community Shield', 'quantity' => 17],
            ['id_team' => 1, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 1, 'name' => 'Inter-Cities Fairs Cup', 'quantity' => 1],
            ['id_team' => 2, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 7],
            ['id_team' => 2, 'name' => 'FA Cup', 'quantity' => 7],
            ['id_team' => 2, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 5],
            ['id_team' => 2, 'name' => 'FA Community Shield', 'quantity' => 1],
            ['id_team' => 2, 'name' => 'UEFA Champions League', 'quantity' => 1],
            ['id_team' => 2, 'name' => 'UEFA Super Cup', 'quantity' => 1],
            ['id_team' => 2, 'name' => 'UEFA Intertoto Cup', 'quantity' => 1],
            ['id_team' => 3, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 3, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 1],
            ['id_team' => 3, 'name' => 'Football League Trophy (EFL Trophy)', 'quantity' => 1],
            ['id_team' => 4, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 4, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 2],
            ['id_team' => 4, 'name' => 'English Championship (Fourth Division/League Two)', 'quantity' => 3],
            ['id_team' => 4, 'name' => 'London Challenge Cup', 'quantity' => 3],
            ['id_team' => 5, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 2],
            ['id_team' => 5, 'name' => 'English Championship (Fourth Division/League Two)', 'quantity' => 2],
            ['id_team' => 5, 'name' => 'FA Community Shield', 'quantity' => 1], // As Southern League champion
            ['id_team' => 6, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 6],
            ['id_team' => 6, 'name' => 'FA Cup', 'quantity' => 8],
            ['id_team' => 6, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 5],
            ['id_team' => 6, 'name' => 'FA Community Shield', 'quantity' => 4],
            ['id_team' => 6, 'name' => 'UEFA Champions League', 'quantity' => 2],
            ['id_team' => 6, 'name' => 'UEFA Europa League', 'quantity' => 2],
            ['id_team' => 6, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 2],
            ['id_team' => 6, 'name' => 'UEFA Super Cup', 'quantity' => 2],
            ['id_team' => 6, 'name' => 'FIFA Club World Cup', 'quantity' => 1],
            ['id_team' => 6, 'name' => 'Full Members Cup', 'quantity' => 2],
            ['id_team' => 7, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 2],
            ['id_team' => 7, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 1],
            ['id_team' => 7, 'name' => 'Full Members Cup', 'quantity' => 1],
            ['id_team' => 7, 'name' => 'FA Cup', 'quantity' => 1], // Assuming the 2024-25 title mentioned in the search
            ['id_team' => 8, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 9],
            ['id_team' => 8, 'name' => 'FA Cup', 'quantity' => 5],
            ['id_team' => 8, 'name' => 'FA Community Shield', 'quantity' => 9],
            ['id_team' => 8, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 8, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 9, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 3],
            ['id_team' => 9, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 2],
            ['id_team' => 9, 'name' => 'UEFA Intertoto Cup', 'quantity' => 1],
            ['id_team' => 10, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 1],
            ['id_team' => 10, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 10, 'name' => 'UEFA Cup', 'quantity' => 1],
            ['id_team' => 10, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 3],
            ['id_team' => 10, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 2],
            ['id_team' => 10, 'name' => 'Texaco Cup', 'quantity' => 1],
            ['id_team' => 11, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 1],
            ['id_team' => 11, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 11, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 3],
            ['id_team' => 11, 'name' => 'FA Community Shield', 'quantity' => 2],
            ['id_team' => 11, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 8],
            ['id_team' => 11, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 1],
            ['id_team' => 12, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 19],
            ['id_team' => 12, 'name' => 'FA Cup', 'quantity' => 8],
            ['id_team' => 12, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 10],
            ['id_team' => 12, 'name' => 'FA Community Shield', 'quantity' => 16],
            ['id_team' => 12, 'name' => 'UEFA Champions League', 'quantity' => 6],
            ['id_team' => 12, 'name' => 'UEFA Europa League', 'quantity' => 3],
            ['id_team' => 12, 'name' => 'UEFA Super Cup', 'quantity' => 4],
            ['id_team' => 12, 'name' => 'FIFA Club World Cup', 'quantity' => 1],
            ['id_team' => 13, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 1],
            ['id_team' => 13, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 13, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 2],
            ['id_team' => 13, 'name' => 'English Championship (Fourth Division/League Two)', 'quantity' => 1],
            ['id_team' => 14, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 10],
            ['id_team' => 14, 'name' => 'FA Cup', 'quantity' => 8],
            ['id_team' => 14, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 8],
            ['id_team' => 14, 'name' => 'FA Community Shield', 'quantity' => 6],
            ['id_team' => 14, 'name' => 'UEFA Champions League', 'quantity' => 1],
            ['id_team' => 14, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 14, 'name' => 'UEFA Super Cup', 'quantity' => 1],
            ['id_team' => 14, 'name' => 'FIFA Club World Cup', 'quantity' => 1],
            ['id_team' => 15, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 20],
            ['id_team' => 15, 'name' => 'FA Cup', 'quantity' => 13],
            ['id_team' => 15, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 6],
            ['id_team' => 15, 'name' => 'FA Community Shield', 'quantity' => 21],
            ['id_team' => 15, 'name' => 'UEFA Champions League', 'quantity' => 3],
            ['id_team' => 15, 'name' => 'UEFA Europa League', 'quantity' => 1],
            ['id_team' => 15, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 15, 'name' => 'UEFA Super Cup', 'quantity' => 1],
            ['id_team' => 15, 'name' => 'Intercontinental Cup', 'quantity' => 1],
            ['id_team' => 15, 'name' => 'FIFA Club World Cup', 'quantity' => 1],
            ['id_team' => 16, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 4],
            ['id_team' => 16, 'name' => 'FA Cup', 'quantity' => 6],
            ['id_team' => 16, 'name' => 'FA Community Shield', 'quantity' => 1],
            ['id_team' => 16, 'name' => 'Inter-Cities Fairs Cup', 'quantity' => 1],
            ['id_team' => 16, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 4],
            ['id_team' => 17, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 1],
            ['id_team' => 17, 'name' => 'FA Cup', 'quantity' => 2],
            ['id_team' => 17, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 4],
            ['id_team' => 17, 'name' => 'FA Community Shield', 'quantity' => 1],
            ['id_team' => 17, 'name' => 'UEFA Champions League', 'quantity' => 2],
            ['id_team' => 17, 'name' => 'UEFA Super Cup', 'quantity' => 1],
            ['id_team' => 17, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 18, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 18, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 1],
            ['id_team' => 19, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 2],
            ['id_team' => 19, 'name' => 'FA Cup', 'quantity' => 8],
            ['id_team' => 19, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 4],
            ['id_team' => 19, 'name' => 'FA Community Shield', 'quantity' => 7],
            ['id_team' => 19, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 19, 'name' => 'UEFA Cup', 'quantity' => 2],
            ['id_team' => 20, 'name' => 'FA Cup', 'quantity' => 3],
            ['id_team' => 20, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 20, 'name' => 'UEFA Europa Conference League', 'quantity' => 1],
            ['id_team' => 20, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 1],
            ['id_team' => 21, 'name' => 'English Championship (First Division/Premier League)', 'quantity' => 3],
            ['id_team' => 21, 'name' => 'FA Cup', 'quantity' => 4],
            ['id_team' => 21, 'name' => 'English League Cup (EFL Cup)', 'quantity' => 2],
            ['id_team' => 21, 'name' => 'FA Community Shield', 'quantity' => 4],
            ['id_team' => 21, 'name' => 'English Championship (Second Division/Championship)', 'quantity' => 4],
            ['id_team' => 21, 'name' => 'English Championship (Third Division/League One)', 'quantity' => 1],

            // Blackburn Rovers (ID: 21)
            ['id_team' => 21, 'name' => 'Premier League', 'quantity' => 1],
            ['id_team' => 21, 'name' => 'FA Cup', 'quantity' => 6],
            ['id_team' => 21, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 21, 'name' => 'Full Members Cup', 'quantity' => 1],
            ['id_team' => 21, 'name' => 'Championship', 'quantity' => 1],

            // Birmingham City (ID: 22)
            ['id_team' => 22, 'name' => 'League Cup', 'quantity' => 2],
            ['id_team' => 22, 'name' => 'Championship', 'quantity' => 3],

            // Bristol City (ID: 23)
            ['id_team' => 23, 'name' => 'Full Members Cup', 'quantity' => 1],
            ['id_team' => 23, 'name' => 'League One', 'quantity' => 3],
            ['id_team' => 23, 'name' => 'EFL Trophy', 'quantity' => 3],

            // Burnley (ID: 24)
            ['id_team' => 24, 'name' => 'First Division', 'quantity' => 2],
            ['id_team' => 24, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 24, 'name' => 'Community Shield', 'quantity' => 1],
            ['id_team' => 24, 'name' => 'Championship', 'quantity' => 4],

            // Cardiff City (ID: 25)
            ['id_team' => 25, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 25, 'name' => 'Community Shield', 'quantity' => 1],
            ['id_team' => 25, 'name' => 'Welsh Cup', 'quantity' => 22],
            ['id_team' => 25, 'name' => 'Championship', 'quantity' => 1],

            // Coventry City (ID: 26)
            ['id_team' => 26, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 26, 'name' => 'Championship', 'quantity' => 1],

            // Derby County (ID: 27)
            ['id_team' => 27, 'name' => 'First Division', 'quantity' => 2],
            ['id_team' => 27, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 27, 'name' => 'Community Shield', 'quantity' => 1],
            ['id_team' => 27, 'name' => 'Championship', 'quantity' => 4],

            // Hull City (ID: 28)
            ['id_team' => 28, 'name' => 'League Two', 'quantity' => 1],

            // Leeds United (ID: 29)
            ['id_team' => 29, 'name' => 'First Division', 'quantity' => 3],
            ['id_team' => 29, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 29, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 29, 'name' => 'Community Shield', 'quantity' => 2],
            ['id_team' => 29, 'name' => 'Inter-Cities Fairs Cup', 'quantity' => 2],
            ['id_team' => 29, 'name' => 'Championship', 'quantity' => 4],

            // Luton Town (ID: 30)
            ['id_team' => 30, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 30, 'name' => 'FA Trophy', 'quantity' => 1],

            // Middlesbrough (ID: 31)
            ['id_team' => 31, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 31, 'name' => 'Championship', 'quantity' => 4],

            // Millwall (ID: 32)
            ['id_team' => 32, 'name' => 'Football League Group Cup', 'quantity' => 1],

            // Norwich City (ID: 33)
            ['id_team' => 33, 'name' => 'League Cup', 'quantity' => 2],
            ['id_team' => 33, 'name' => 'Championship', 'quantity' => 5],

            // Oxford United (ID: 34)
            ['id_team' => 34, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 34, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 34, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Plymouth Argyle (ID: 35)
            ['id_team' => 35, 'name' => 'League One', 'quantity' => 2],

            // Portsmouth (ID: 36)
            ['id_team' => 36, 'name' => 'First Division', 'quantity' => 2],
            ['id_team' => 36, 'name' => 'FA Cup', 'quantity' => 2],
            ['id_team' => 36, 'name' => 'Southern League', 'quantity' => 1],
            ['id_team' => 36, 'name' => 'Football League Trophy', 'quantity' => 1],

            // Preston North End (ID: 37)
            ['id_team' => 37, 'name' => 'First Division', 'quantity' => 2],
            ['id_team' => 37, 'name' => 'FA Cup', 'quantity' => 2],
            ['id_team' => 37, 'name' => 'Community Shield', 'quantity' => 1],
            ['id_team' => 37, 'name' => 'Second Division', 'quantity' => 3],

            // Queens Park Rangers (ID: 38)
            ['id_team' => 38, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 38, 'name' => 'Second Division', 'quantity' => 1],
            ['id_team' => 38, 'name' => 'Third Division', 'quantity' => 1],

            // Sheffield United (ID: 39)
            ['id_team' => 39, 'name' => 'First Division', 'quantity' => 1],
            ['id_team' => 39, 'name' => 'FA Cup', 'quantity' => 4],
            ['id_team' => 39, 'name' => 'Second Division', 'quantity' => 1],
            ['id_team' => 39, 'name' => 'Fourth Division', 'quantity' => 1],

            // Sheffield Wednesday (ID: 40)
            ['id_team' => 40, 'name' => 'First Division', 'quantity' => 4],
            ['id_team' => 40, 'name' => 'FA Cup', 'quantity' => 3],
            ['id_team' => 40, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 40, 'name' => 'Second Division', 'quantity' => 5],

            // Stoke City (ID: 41)
            ['id_team' => 41, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 41, 'name' => 'Championship', 'quantity' => 2],

            // Sunderland (ID: 42)
            ['id_team' => 42, 'name' => 'First Division', 'quantity' => 6],
            ['id_team' => 42, 'name' => 'FA Cup', 'quantity' => 2],
            ['id_team' => 42, 'name' => 'Championship', 'quantity' => 5],
            ['id_team' => 42, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Swansea City (ID: 43)
            ['id_team' => 43, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 43, 'name' => 'Welsh Cup', 'quantity' => 10],
            ['id_team' => 43, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Watford (ID: 44)
            ['id_team' => 44, 'name' => 'Southern League', 'quantity' => 1],
            ['id_team' => 44, 'name' => 'Championship', 'quantity' => 2],

            // West Bromwich Albion (ID: 45)
            ['id_team' => 45, 'name' => 'First Division', 'quantity' => 1],
            ['id_team' => 45, 'name' => 'FA Cup', 'quantity' => 5],
            ['id_team' => 45, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 45, 'name' => 'Community Shield', 'quantity' => 2],
            ['id_team' => 45, 'name' => 'Championship', 'quantity' => 3],

            // Barnsley (ID: 46)
            ['id_team' => 46, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 46, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 46, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Blackpool (ID: 47)
            ['id_team' => 47, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 47, 'name' => 'Football League Trophy', 'quantity' => 2],

            // Bolton Wanderers (ID: 48)
            ['id_team' => 48, 'name' => 'FA Cup', 'quantity' => 4],
            ['id_team' => 48, 'name' => 'Football League War Cup', 'quantity' => 1],
            ['id_team' => 48, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 48, 'name' => 'EFL Trophy', 'quantity' => 2],

            // Bristol Rovers (ID: 49)
            ['id_team' => 49, 'name' => 'League Two', 'quantity' => 1],
            ['id_team' => 49, 'name' => 'Football League Trophy', 'quantity' => 1],

            // Burton Albion (ID: 50)
            ['id_team' => 50, 'name' => 'League Two', 'quantity' => 1],

            // Cambridge United (ID: 51)
            ['id_team' => 51, 'name' => 'League Two', 'quantity' => 2],
            ['id_team' => 51, 'name' => 'FA Trophy', 'quantity' => 1],

            // Charlton Athletic (ID: 52)
            ['id_team' => 52, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 52, 'name' => 'Championship', 'quantity' => 1],

            // Crawley Town (ID: 53)
            ['id_team' => 53, 'name' => 'National League', 'quantity' => 1],

            // Exeter City (ID: 54)
            ['id_team' => 54, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Huddersfield Town (ID: 55)
            ['id_team' => 55, 'name' => 'First Division', 'quantity' => 3],
            ['id_team' => 55, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 55, 'name' => 'Community Shield', 'quantity' => 1],
            ['id_team' => 55, 'name' => 'Championship', 'quantity' => 1],

            // Leyton Orient (ID: 56)
            ['id_team' => 56, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 56, 'name' => 'League Two', 'quantity' => 1],

            // Lincoln City (ID: 57)
            ['id_team' => 57, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 57, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Mansfield Town (ID: 58)
            ['id_team' => 58, 'name' => 'League Two', 'quantity' => 1],
            ['id_team' => 58, 'name' => 'FA Trophy', 'quantity' => 1],

            // Northampton Town (ID: 59)
            ['id_team' => 59, 'name' => 'League Two', 'quantity' => 2],

            // Peterborough United (ID: 60)
            ['id_team' => 60, 'name' => 'League One', 'quantity' => 2],
            ['id_team' => 60, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Reading (ID: 61)
            ['id_team' => 61, 'name' => 'Championship', 'quantity' => 2],
            ['id_team' => 61, 'name' => 'League One', 'quantity' => 1],

            // Rotherham United (ID: 62)
            ['id_team' => 62, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 62, 'name' => 'EFL Trophy', 'quantity' => 2],

            // Shrewsbury Town (ID: 63)
            ['id_team' => 63, 'name' => 'Third Division', 'quantity' => 1],
            ['id_team' => 63, 'name' => 'Welsh Cup', 'quantity' => 6],

            // Stevenage (ID: 64)
            ['id_team' => 64, 'name' => 'FA Trophy', 'quantity' => 2],
            ['id_team' => 64, 'name' => 'National League', 'quantity' => 1],

            // Stockport County (ID: 65)
            ['id_team' => 65, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 65, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Wigan Athletic (ID: 66)
            ['id_team' => 66, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 66, 'name' => 'League One', 'quantity' => 3],

            // Wrexham (ID: 67)
            ['id_team' => 67, 'name' => 'FA Trophy', 'quantity' => 1],
            ['id_team' => 67, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 67, 'name' => 'Welsh Cup', 'quantity' => 23],

            // Wycombe Wanderers (ID: 68)
            ['id_team' => 68, 'name' => 'FA Trophy', 'quantity' => 1],
            ['id_team' => 68, 'name' => 'National League', 'quantity' => 1],

            // Accrington Stanley (ID: 69)
            ['id_team' => 69, 'name' => 'League Two', 'quantity' => 1],
            ['id_team' => 69, 'name' => 'National League', 'quantity' => 1],

            // AFC Wimbledon (ID: 70)
            ['id_team' => 70, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 70, 'name' => 'FA Cup', 'quantity' => 1],

            // Barrow (ID: 71)
            ['id_team' => 71, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 71, 'name' => 'FA Trophy', 'quantity' => 2],

            // Bradford City (ID: 72)
            ['id_team' => 72, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 72, 'name' => 'League One', 'quantity' => 2],
            ['id_team' => 72, 'name' => 'League Two', 'quantity' => 1],

            // Bromley (ID: 73)
            ['id_team' => 73, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 73, 'name' => 'FA Trophy', 'quantity' => 1],

            // Carlisle United (ID: 74)
            ['id_team' => 74, 'name' => 'League One', 'quantity' => 1],
            ['id_team' => 74, 'name' => 'League Two', 'quantity' => 2],
            ['id_team' => 74, 'name' => 'EFL Trophy', 'quantity' => 1],

            // Cheltenham Town (ID: 75)
            ['id_team' => 75, 'name' => 'League Two', 'quantity' => 2],
            ['id_team' => 75, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 75, 'name' => 'FA Trophy', 'quantity' => 1],

            // Chesterfield (ID: 76)
            ['id_team' => 76, 'name' => 'League One', 'quantity' => 2],
            ['id_team' => 76, 'name' => 'League Two', 'quantity' => 3],
            ['id_team' => 76, 'name' => 'FA Trophy', 'quantity' => 1],

            // Colchester United (ID: 77)
            ['id_team' => 77, 'name' => 'Third Division South', 'quantity' => 1],
            ['id_team' => 77, 'name' => 'League Two', 'quantity' => 1],
            ['id_team' => 77, 'name' => 'FA Trophy', 'quantity' => 1],

            // Crewe Alexandra (ID: 78)
            ['id_team' => 78, 'name' => 'EFL Trophy', 'quantity' => 1],
            ['id_team' => 78, 'name' => 'League Two', 'quantity' => 1],

            // Doncaster Rovers (ID: 79)
            ['id_team' => 79, 'name' => 'League One', 'quantity' => 2],
            ['id_team' => 79, 'name' => 'League Two', 'quantity' => 3],

            // Fleetwood Town (ID: 80)
            ['id_team' => 80, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 80, 'name' => 'FA Trophy', 'quantity' => 1],

            // Gillingham (ID: 81)
            ['id_team' => 81, 'name' => 'Third Division South', 'quantity' => 1],
            ['id_team' => 81, 'name' => 'League Two', 'quantity' => 2],

            // Grimsby Town (ID: 82)
            ['id_team' => 82, 'name' => 'Second Division', 'quantity' => 2],
            ['id_team' => 82, 'name' => 'Third Division', 'quantity' => 1],
            ['id_team' => 82, 'name' => 'FA Trophy', 'quantity' => 1],

            // Harrogate Town (ID: 83)
            ['id_team' => 83, 'name' => 'FA Trophy', 'quantity' => 1],
            ['id_team' => 83, 'name' => 'National League Play-offs', 'quantity' => 1],

            // Milton Keynes Dons (ID: 84)
            ['id_team' => 84, 'name' => 'EFL Trophy', 'quantity' => 1],
            ['id_team' => 84, 'name' => 'League One', 'quantity' => 1],

            // Morecambe (ID: 85)
            ['id_team' => 85, 'name' => 'National League Play-offs', 'quantity' => 1],

            // Newport County (ID: 86)
            ['id_team' => 86, 'name' => 'Third Division South', 'quantity' => 1],
            ['id_team' => 86, 'name' => 'National League', 'quantity' => 1],
            ['id_team' => 86, 'name' => 'Welsh Cup', 'quantity' => 1],

            // Notts County (ID: 87)
            ['id_team' => 87, 'name' => 'FA Cup', 'quantity' => 1],
            ['id_team' => 87, 'name' => 'Second Division', 'quantity' => 1],
            ['id_team' => 87, 'name' => 'Third Division', 'quantity' => 1],
            ['id_team' => 87, 'name' => 'National League Play-offs', 'quantity' => 1],

            // Port Vale (ID: 88)
            ['id_team' => 88, 'name' => 'EFL Trophy', 'quantity' => 2],
            ['id_team' => 88, 'name' => 'Third Division North', 'quantity' => 1],

            // Salford City (ID: 89)
            ['id_team' => 89, 'name' => 'EFL Trophy', 'quantity' => 1],
            ['id_team' => 89, 'name' => 'National League Play-offs', 'quantity' => 1],

            // Swindon Town (ID: 90)
            ['id_team' => 90, 'name' => 'League Cup', 'quantity' => 1],
            ['id_team' => 90, 'name' => 'League One', 'quantity' => 3],
            ['id_team' => 90, 'name' => 'League Two', 'quantity' => 1],

            // Tranmere Rovers (ID: 91)
            ['id_team' => 91, 'name' => 'Third Division North', 'quantity' => 1],
            ['id_team' => 91, 'name' => 'Welsh Cup', 'quantity' => 4],

            // Walsall (ID: 92)
            ['id_team' => 92, 'name' => 'Third Division', 'quantity' => 2],
            ['id_team' => 92, 'name' => 'League Two', 'quantity' => 1],

            // --- Espanha (La Liga e Segunda División) ---

            // Alavés (ID: 93)
            ['id_team' => 93, 'name' => 'Segunda División', 'quantity' => 4],

            // Athletic Club (ID: 94)
            ['id_team' => 94, 'name' => 'La Liga', 'quantity' => 8],
            ['id_team' => 94, 'name' => 'Copa del Rey', 'quantity' => 24],
            ['id_team' => 94, 'name' => 'Supercopa de España', 'quantity' => 3],

            // Atlético Madrid (ID: 95)
            ['id_team' => 95, 'name' => 'La Liga', 'quantity' => 11],
            ['id_team' => 95, 'name' => 'Copa del Rey', 'quantity' => 10],
            ['id_team' => 95, 'name' => 'Supercopa de España', 'quantity' => 3],
            ['id_team' => 95, 'name' => 'UEFA Europa League', 'quantity' => 3],
            ['id_team' => 95, 'name' => 'Recopa da Europa', 'quantity' => 1],
            ['id_team' => 95, 'name' => 'Supercopa da UEFA', 'quantity' => 3],
            ['id_team' => 95, 'name' => 'Copa Intercontinental', 'quantity' => 1],

            // Barcelona (ID: 96)
            ['id_team' => 96, 'name' => 'La Liga', 'quantity' => 27],
            ['id_team' => 96, 'name' => 'Copa del Rey', 'quantity' => 31],
            ['id_team' => 96, 'name' => 'Supercopa de España', 'quantity' => 14],
            ['id_team' => 96, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 5],
            ['id_team' => 96, 'name' => 'Recopa da Europa', 'quantity' => 4],
            ['id_team' => 96, 'name' => 'Taça das Cidades com Feiras', 'quantity' => 3],
            ['id_team' => 96, 'name' => 'Supercopa da UEFA', 'quantity' => 5],
            ['id_team' => 96, 'name' => 'Copa do Mundo de Clubes da FIFA', 'quantity' => 3],

            // Celta Vigo (ID: 97)
            ['id_team' => 97, 'name' => 'Segunda División', 'quantity' => 3],

            // Espanyol (ID: 98)
            ['id_team' => 98, 'name' => 'Copa del Rey', 'quantity' => 4],
            ['id_team' => 98, 'name' => 'Segunda División', 'quantity' => 1],

            // Getafe (ID: 99)
            ['id_team' => 99, 'name' => 'Segunda División B', 'quantity' => 1],

            // Girona (ID: 100)
            ['id_team' => 100, 'name' => 'Segunda División B', 'quantity' => 1],

            // Las Palmas (ID: 101)
            ['id_team' => 101, 'name' => 'Segunda División', 'quantity' => 4],

            // Leganés (ID: 102)
            ['id_team' => 102, 'name' => 'Segunda División', 'quantity' => 1],

            // Mallorca (ID: 103)
            ['id_team' => 103, 'name' => 'Copa del Rey', 'quantity' => 1],
            ['id_team' => 103, 'name' => 'Supercopa de España', 'quantity' => 1],
            ['id_team' => 103, 'name' => 'Segunda División', 'quantity' => 2],

            // Osasuna (ID: 104)
            ['id_team' => 104, 'name' => 'Segunda División', 'quantity' => 4],

            // Rayo Vallecano (ID: 105)
            ['id_team' => 105, 'name' => 'Segunda División', 'quantity' => 1],

            // Real Betis (ID: 106)
            ['id_team' => 106, 'name' => 'La Liga', 'quantity' => 1],
            ['id_team' => 106, 'name' => 'Copa del Rey', 'quantity' => 3],
            ['id_team' => 106, 'name' => 'Segunda División', 'quantity' => 7],

            // Real Madrid (ID: 107)
            ['id_team' => 107, 'name' => 'La Liga', 'quantity' => 36],
            ['id_team' => 107, 'name' => 'Copa del Rey', 'quantity' => 20],
            ['id_team' => 107, 'name' => 'Supercopa de España', 'quantity' => 13],
            ['id_team' => 107, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 15],
            ['id_team' => 107, 'name' => 'Copa da UEFA', 'quantity' => 2],
            ['id_team' => 107, 'name' => 'Supercopa da UEFA', 'quantity' => 5],
            ['id_team' => 107, 'name' => 'Copa Intercontinental', 'quantity' => 3],
            ['id_team' => 107, 'name' => 'Copa do Mundo de Clubes da FIFA', 'quantity' => 5],
            ['id_team' => 107, 'name' => 'Copa Iberoamericana', 'quantity' => 1],

            // Real Sociedad (ID: 108)
            ['id_team' => 108, 'name' => 'La Liga', 'quantity' => 2],
            ['id_team' => 108, 'name' => 'Copa del Rey', 'quantity' => 3],
            ['id_team' => 108, 'name' => 'Supercopa de España', 'quantity' => 1],
            ['id_team' => 108, 'name' => 'Segunda División', 'quantity' => 3],

            // Sevilla (ID: 109)
            ['id_team' => 109, 'name' => 'La Liga', 'quantity' => 1],
            ['id_team' => 109, 'name' => 'Copa del Rey', 'quantity' => 5],
            ['id_team' => 109, 'name' => 'Supercopa de España', 'quantity' => 1],
            ['id_team' => 109, 'name' => 'Liga Europa da UEFA', 'quantity' => 7],
            ['id_team' => 109, 'name' => 'Supercopa da UEFA', 'quantity' => 1],
            ['id_team' => 109, 'name' => 'Segunda División', 'quantity' => 4],

            // Valencia (ID: 110)
            ['id_team' => 110, 'name' => 'La Liga', 'quantity' => 6],
            ['id_team' => 110, 'name' => 'Copa del Rey', 'quantity' => 8],
            ['id_team' => 110, 'name' => 'Supercopa de España', 'quantity' => 1],
            ['id_team' => 110, 'name' => 'Recopa da Europa', 'quantity' => 1],
            ['id_team' => 110, 'name' => 'Taça das Cidades com Feiras', 'quantity' => 2],
            ['id_team' => 110, 'name' => 'Supercopa da UEFA', 'quantity' => 2],

            // Valladolid (ID: 111)
            ['id_team' => 111, 'name' => 'Copa de la Liga', 'quantity' => 1],
            ['id_team' => 111, 'name' => 'Segunda División', 'quantity' => 3],

            // Villarreal (ID: 112)
            ['id_team' => 112, 'name' => 'Liga Europa da UEFA', 'quantity' => 1],
            ['id_team' => 112, 'name' => 'Tercera División', 'quantity' => 1],

            // Almería (ID: 113)
            ['id_team' => 113, 'name' => 'Segunda División', 'quantity' => 2],

            // Albacete (ID: 114)
            ['id_team' => 114, 'name' => 'Segunda División', 'quantity' => 1],

            // Andorra (ID: 115)
            ['id_team' => 115, 'name' => 'Segunda División B - Grupo 3', 'quantity' => 1],

            // Barcelona Atlètic (ID: 116)
            ['id_team' => 116, 'name' => 'Segunda División B', 'quantity' => 5],

            // Burgos (ID: 117)
            ['id_team' => 117, 'name' => 'Segunda División', 'quantity' => 1],

            // Castellón (ID: 118)
            ['id_team' => 118, 'name' => 'Segunda División', 'quantity' => 1],

            // Eldense (ID: 119)
            ['id_team' => 119, 'name' => 'Segunda División B - Grupo 3', 'quantity' => 1],

            // Granada (ID: 120)
            ['id_team' => 120, 'name' => 'Segunda División', 'quantity' => 4],

            // Ibiza (ID: 121)
            ['id_team' => 121, 'name' => 'Segunda División B', 'quantity' => 1],

            // Levante (ID: 122)
            ['id_team' => 122, 'name' => 'Segunda División', 'quantity' => 2],

            // Lugo (ID: 123)
            ['id_team' => 123, 'name' => 'Segunda División B', 'quantity' => 1],

            // Málaga (ID: 124)
            ['id_team' => 124, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 124, 'name' => 'Segunda División', 'quantity' => 4],

            // Mirandés (ID: 125)
            ['id_team' => 125, 'name' => 'Segunda División B', 'quantity' => 1],

            // Ponferradina (ID: 126)
            ['id_team' => 126, 'name' => 'Segunda División B', 'quantity' => 3],

            // Real Oviedo (ID: 127)
            ['id_team' => 127, 'name' => 'Segunda División', 'quantity' => 5],

            // Real Sporting (ID: 128)
            ['id_team' => 128, 'name' => 'Segunda División', 'quantity' => 5],

            // Real Zaragoza (ID: 129)
            ['id_team' => 129, 'name' => 'Copa del Rey', 'quantity' => 6],
            ['id_team' => 129, 'name' => 'Supercopa de España', 'quantity' => 1],
            ['id_team' => 129, 'name' => 'Recopa da Europa', 'quantity' => 1],
            ['id_team' => 129, 'name' => 'Taça das Cidades com Feiras', 'quantity' => 1],
            ['id_team' => 129, 'name' => 'Segunda División', 'quantity' => 1],

            // Tenerife (ID: 130)
            ['id_team' => 130, 'name' => 'Segunda División', 'quantity' => 1],

            // Villarreal B (ID: 131)
            ['id_team' => 131, 'name' => 'Segunda División B', 'quantity' => 1],

            // --- Alemanha (Bundesliga e 2. Bundesliga) ---

            // Bayern Munich (ID: 132)
            ['id_team' => 132, 'name' => 'Bundesliga', 'quantity' => 33],
            ['id_team' => 132, 'name' => 'DFB-Pokal', 'quantity' => 20],
            ['id_team' => 132, 'name' => 'DFL-Supercup', 'quantity' => 10],
            ['id_team' => 132, 'name' => 'DFB-Ligapokal', 'quantity' => 6],
            ['id_team' => 132, 'name' => 'UEFA Champions League', 'quantity' => 6],
            ['id_team' => 132, 'name' => 'UEFA Europa League', 'quantity' => 1],
            ['id_team' => 132, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 132, 'name' => 'UEFA Super Cup', 'quantity' => 2],
            ['id_team' => 132, 'name' => 'Copa Intercontinental', 'quantity' => 2],
            ['id_team' => 132, 'name' => 'Copa do Mundo de Clubes da FIFA', 'quantity' => 2],

            // Borussia Dortmund (ID: 133)
            ['id_team' => 133, 'name' => 'Bundesliga', 'quantity' => 8],
            ['id_team' => 133, 'name' => 'DFB-Pokal', 'quantity' => 5],
            ['id_team' => 133, 'name' => 'DFL-Supercup', 'quantity' => 6],
            ['id_team' => 133, 'name' => 'UEFA Champions League', 'quantity' => 1],
            ['id_team' => 133, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 133, 'name' => 'Copa Intercontinental', 'quantity' => 1],

            // RB Leipzig (ID: 134)
            ['id_team' => 134, 'name' => 'DFB-Pokal', 'quantity' => 2],

            // Bayer Leverkusen (ID: 135)
            ['id_team' => 135, 'name' => 'DFB-Pokal', 'quantity' => 1],
            ['id_team' => 135, 'name' => 'Copa da UEFA', 'quantity' => 1],
            ['id_team' => 135, 'name' => 'Bundesliga', 'quantity' => 1],

            // Eintracht Frankfurt (ID: 136)
            ['id_team' => 136, 'name' => 'Bundesliga', 'quantity' => 1],
            ['id_team' => 136, 'name' => 'DFB-Pokal', 'quantity' => 5],
            ['id_team' => 136, 'name' => 'UEFA Europa League', 'quantity' => 2],

            // VfB Stuttgart (ID: 137)
            ['id_team' => 137, 'name' => 'Bundesliga', 'quantity' => 5],
            ['id_team' => 137, 'name' => 'DFB-Pokal', 'quantity' => 3],
            ['id_team' => 137, 'name' => 'DFL-Supercup', 'quantity' => 1],
            ['id_team' => 137, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 2],

            // Borussia Mönchengladbach (ID: 138)
            ['id_team' => 138, 'name' => 'Bundesliga', 'quantity' => 5],
            ['id_team' => 138, 'name' => 'DFB-Pokal', 'quantity' => 3],
            ['id_team' => 138, 'name' => 'Copa da UEFA', 'quantity' => 2],

            // Werder Bremen (ID: 139)
            ['id_team' => 139, 'name' => 'Bundesliga', 'quantity' => 4],
            ['id_team' => 139, 'name' => 'DFB-Pokal', 'quantity' => 6],
            ['id_team' => 139, 'name' => 'DFL-Supercup', 'quantity' => 4],
            ['id_team' => 139, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 139, 'name' => 'DFB-Ligapokal', 'quantity' => 1],

            // FC Köln (ID: 140)
            ['id_team' => 140, 'name' => 'Bundesliga', 'quantity' => 3],
            ['id_team' => 140, 'name' => 'DFB-Pokal', 'quantity' => 4],
            ['id_team' => 140, 'name' => '2. Bundesliga', 'quantity' => 4],

            // VfL Wolfsburg (ID: 141)
            ['id_team' => 141, 'name' => 'Bundesliga', 'quantity' => 1],
            ['id_team' => 141, 'name' => 'DFB-Pokal', 'quantity' => 1],
            ['id_team' => 141, 'name' => 'DFL-Supercup', 'quantity' => 1],

            // SC Freiburg (ID: 142)
            ['id_team' => 142, 'name' => '2. Bundesliga', 'quantity' => 4],

            // FC Augsburg (ID: 143)
            ['id_team' => 143, 'name' => 'Regionalliga Süd', 'quantity' => 1],

            // TSG Hoffenheim (ID: 144)
            ['id_team' => 144, 'name' => 'Regionalliga Süd', 'quantity' => 1],

            // Mainz 05 (ID: 145)
            ['id_team' => 145, 'name' => 'Regionalliga Südwest', 'quantity' => 1],

            // Union Berlin (ID: 146)
            ['id_team' => 146, 'name' => 'FDGB-Pokal', 'quantity' => 1],

            // VfL Bochum (ID: 147)
            ['id_team' => 147, 'name' => '2. Bundesliga', 'quantity' => 4],

            // Eintracht Heidenheim (ID: 148)
            ['id_team' => 148, 'name' => '2. Bundesliga', 'quantity' => 1],

            // SC Paderborn (ID: 149)
            ['id_team' => 149, 'name' => 'Regionalliga West', 'quantity' => 1],

            // FC St. Pauli (ID: 150)
            ['id_team' => 150, 'name' => '2. Bundesliga', 'quantity' => 2],

            // Hertha BSC (ID: 151)
            ['id_team' => 151, 'name' => 'Bundesliga', 'quantity' => 2],
            ['id_team' => 151, 'name' => 'DFB-Ligapokal', 'quantity' => 2],
            ['id_team' => 151, 'name' => '2. Bundesliga', 'quantity' => 3],

            // Hamburger SV (ID: 152)
            ['id_team' => 152, 'name' => 'Bundesliga', 'quantity' => 6],
            ['id_team' => 152, 'name' => 'DFB-Pokal', 'quantity' => 3],
            ['id_team' => 152, 'name' => 'DFB-Ligapokal', 'quantity' => 2],
            ['id_team' => 152, 'name' => 'UEFA Champions League', 'quantity' => 1],
            ['id_team' => 152, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],

            // Schalke 04 (ID: 153)
            ['id_team' => 153, 'name' => 'Bundesliga', 'quantity' => 7],
            ['id_team' => 153, 'name' => 'DFB-Pokal', 'quantity' => 5],
            ['id_team' => 153, 'name' => 'DFB-Ligapokal', 'quantity' => 1],
            ['id_team' => 153, 'name' => 'Copa da UEFA', 'quantity' => 1],
            ['id_team' => 153, 'name' => '2. Bundesliga', 'quantity' => 3],

            // 1. FC Nürnberg (ID: 154)
            ['id_team' => 154, 'name' => 'Bundesliga', 'quantity' => 9],
            ['id_team' => 154, 'name' => 'DFB-Pokal', 'quantity' => 4],
            ['id_team' => 154, 'name' => '2. Bundesliga', 'quantity' => 4],

            // Hannover 96 (ID: 155)
            ['id_team' => 155, 'name' => 'Bundesliga', 'quantity' => 2],
            ['id_team' => 155, 'name' => 'DFB-Pokal', 'quantity' => 1],
            ['id_team' => 155, 'name' => '2. Bundesliga', 'quantity' => 2],

            // 1. FC Kaiserslautern (ID: 156)
            ['id_team' => 156, 'name' => 'Bundesliga', 'quantity' => 2],
            ['id_team' => 156, 'name' => 'DFB-Pokal', 'quantity' => 2],
            ['id_team' => 156, 'name' => '2. Bundesliga', 'quantity' => 2],

            // Eintracht Braunschweig (ID: 157)
            ['id_team' => 157, 'name' => 'Bundesliga', 'quantity' => 1],
            ['id_team' => 157, 'name' => '2. Bundesliga', 'quantity' => 1],

            // Darmstadt 98 (ID: 158)
            ['id_team' => 158, 'name' => '2. Bundesliga', 'quantity' => 2],

            // Fortuna Düsseldorf (ID: 159)
            ['id_team' => 159, 'name' => 'DFB-Pokal', 'quantity' => 1],
            ['id_team' => 159, 'name' => '2. Bundesliga', 'quantity' => 2],

            // Karlsruher SC (ID: 160)
            ['id_team' => 160, 'name' => 'DFB-Pokal', 'quantity' => 2],
            ['id_team' => 160, 'name' => '2. Bundesliga', 'quantity' => 1],

            // 1. FC Magdeburg (ID: 161)
            ['id_team' => 161, 'name' => 'FDGB-Pokal', 'quantity' => 7],
            ['id_team' => 161, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 161, 'name' => '3. Liga', 'quantity' => 2],

            // SV Elversberg (ID: 162)
            ['id_team' => 162, 'name' => '3. Liga', 'quantity' => 1],

            // Greuther Fürth (ID: 163)
            ['id_team' => 163, 'name' => '2. Bundesliga', 'quantity' => 1],

            // Holstein Kiel (ID: 164)
            ['id_team' => 164, 'name' => '2. Bundesliga', 'quantity' => 1],

            // SSV Ulm (ID: 165)
            ['id_team' => 165, 'name' => 'Regionalliga Süd', 'quantity' => 1],

            // Preußen Münster (ID: 166)
            ['id_team' => 166, 'name' => 'Regionalliga West', 'quantity' => 1],

            // Jahn Regensburg (ID: 167)
            ['id_team' => 167, 'name' => 'Regionalliga Bayern', 'quantity' => 1],

            // Alemannia Aachen (ID: 168)
            ['id_team' => 168, 'name' => '2. Bundesliga', 'quantity' => 1],

            // Arminia Bielefeld (ID: 169)
            ['id_team' => 169, 'name' => '2. Bundesliga', 'quantity' => 4],

            // Energie Cottbus (ID: 170)
            ['id_team' => 170, 'name' => 'Regionalliga Nordost', 'quantity' => 1],

            // Borussia Dortmund II (ID: 171)
            ['id_team' => 171, 'name' => 'Regionalliga West', 'quantity' => 2],

            // Dynamo Dresden (ID: 172)
            ['id_team' => 172, 'name' => 'DDR-Oberliga', 'quantity' => 8],
            ['id_team' => 172, 'name' => 'FDGB-Pokal', 'quantity' => 7],
            ['id_team' => 172, 'name' => '2. Bundesliga', 'quantity' => 1],

            // Erzgebirge Aue (ID: 173)
            ['id_team' => 173, 'name' => 'DDR-Oberliga', 'quantity' => 3],
            ['id_team' => 173, 'name' => 'FDGB-Pokal', 'quantity' => 1],

            // FC Ingolstadt (ID: 174)
            ['id_team' => 174, 'name' => '3. Liga', 'quantity' => 2],

            // Viktoria Köln (ID: 175)
            ['id_team' => 175, 'name' => 'Regionalliga West', 'quantity' => 1],

            // Waldhof Mannheim (ID: 176)
            ['id_team' => 176, 'name' => '2. Bundesliga', 'quantity' => 1],

            // 1860 Munich (ID: 177)
            ['id_team' => 177, 'name' => 'Bundesliga', 'quantity' => 1],
            ['id_team' => 177, 'name' => 'DFB-Pokal', 'quantity' => 2],
            ['id_team' => 177, 'name' => '2. Bundesliga', 'quantity' => 2],

            // VfL Osnabrück (ID: 178)
            ['id_team' => 178, 'name' => '3. Liga', 'quantity' => 1],

            // Hansa Rostock (ID: 179)
            ['id_team' => 179, 'name' => 'DDR-Oberliga', 'quantity' => 1],
            ['id_team' => 179, 'name' => 'FDGB-Pokal', 'quantity' => 1],
            ['id_team' => 179, 'name' => '2. Bundesliga', 'quantity' => 1],

            // Rot-Weiss Essen (ID: 180)
            ['id_team' => 180, 'name' => 'DFB-Pokal', 'quantity' => 1],
            ['id_team' => 180, 'name' => 'Regionalliga West', 'quantity' => 1],

            // SV Sandhausen (ID: 181)
            ['id_team' => 181, 'name' => 'Regionalliga Süd', 'quantity' => 1],

            // SpVgg Unterhaching (ID: 182)
            ['id_team' => 182, 'name' => 'Regionalliga Süd', 'quantity' => 2],

            // VfB Stuttgart II (ID: 183)
            ['id_team' => 183, 'name' => 'Regionalliga Süd', 'quantity' => 1],

            // SC Verl (ID: 184)
            ['id_team' => 184, 'name' => 'Regionalliga West', 'quantity' => 1],

            // --- França (Ligue 1 e Ligue 2) ---

            // Paris Saint-Germain (ID: 185)
            ['id_team' => 185, 'name' => 'Ligue 1', 'quantity' => 12],
            ['id_team' => 185, 'name' => 'Coupe de France', 'quantity' => 15],
            ['id_team' => 185, 'name' => 'Coupe de la Ligue', 'quantity' => 9],
            ['id_team' => 185, 'name' => 'Trophée des Champions', 'quantity' => 12],
            ['id_team' => 185, 'name' => 'Coupe des Coupes', 'quantity' => 1],
            ['id_team' => 185, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],

            // Olympique Marseille (ID: 186)
            ['id_team' => 186, 'name' => 'Ligue 1', 'quantity' => 9],
            ['id_team' => 186, 'name' => 'Coupe de France', 'quantity' => 10],
            ['id_team' => 186, 'name' => 'Coupe de la Ligue', 'quantity' => 3],
            ['id_team' => 186, 'name' => 'Trophée des Champions', 'quantity' => 3],
            ['id_team' => 186, 'name' => 'Ligue dos Campeões da UEFA', 'quantity' => 1],

            // AS Monaco (ID: 187)
            ['id_team' => 187, 'name' => 'Ligue 1', 'quantity' => 8],
            ['id_team' => 187, 'name' => 'Coupe de France', 'quantity' => 5],
            ['id_team' => 187, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 187, 'name' => 'Trophée des Champions', 'quantity' => 4],

            // Olympique Lyonnais (ID: 188)
            ['id_team' => 188, 'name' => 'Ligue 1', 'quantity' => 7],
            ['id_team' => 188, 'name' => 'Coupe de France', 'quantity' => 5],
            ['id_team' => 188, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 188, 'name' => 'Trophée des Champions', 'quantity' => 8],
            ['id_team' => 188, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],

            // LOSC Lille (ID: 189)
            ['id_team' => 189, 'name' => 'Ligue 1', 'quantity' => 4],
            ['id_team' => 189, 'name' => 'Coupe de France', 'quantity' => 6],
            ['id_team' => 189, 'name' => 'Trophée des Champions', 'quantity' => 1],

            // OGC Nice (ID: 190)
            ['id_team' => 190, 'name' => 'Ligue 1', 'quantity' => 4],
            ['id_team' => 190, 'name' => 'Coupe de France', 'quantity' => 3],

            // RC Lens (ID: 191)
            ['id_team' => 191, 'name' => 'Ligue 1', 'quantity' => 1],
            ['id_team' => 191, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 191, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 2],
            ['id_team' => 191, 'name' => 'Ligue 2', 'quantity' => 4],

            // Stade Rennais (ID: 192)
            ['id_team' => 192, 'name' => 'Coupe de France', 'quantity' => 3],
            ['id_team' => 192, 'name' => 'Ligue 2', 'quantity' => 2],

            // FC Nantes (ID: 193)
            ['id_team' => 193, 'name' => 'Ligue 1', 'quantity' => 8],
            ['id_team' => 193, 'name' => 'Coupe de France', 'quantity' => 4],
            ['id_team' => 193, 'name' => 'Trophée des Champions', 'quantity' => 1],

            // Montpellier HSC (ID: 194)
            ['id_team' => 194, 'name' => 'Ligue 1', 'quantity' => 1],
            ['id_team' => 194, 'name' => 'Coupe de France', 'quantity' => 2],
            ['id_team' => 194, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 194, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 194, 'name' => 'Ligue 2', 'quantity' => 3],

            // Stade Brestois 29 (ID: 195)
            ['id_team' => 195, 'name' => 'Ligue 2', 'quantity' => 2],

            // Angers SCO (ID: 196)
            ['id_team' => 196, 'name' => 'Ligue 2', 'quantity' => 3],

            // AJ Auxerre (ID: 197)
            ['id_team' => 197, 'name' => 'Ligue 1', 'quantity' => 1],
            ['id_team' => 197, 'name' => 'Coupe de France', 'quantity' => 4],
            ['id_team' => 197, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 197, 'name' => 'Ligue 2', 'quantity' => 2],

            // Le Havre AC (ID: 198)
            ['id_team' => 198, 'name' => 'Ligue 1', 'quantity' => 1],
            ['id_team' => 198, 'name' => 'Coupe de France', 'quantity' => 1],
            ['id_team' => 198, 'name' => 'Ligue 2', 'quantity' => 6],

            // Stade de Reims (ID: 199)
            ['id_team' => 199, 'name' => 'Ligue 1', 'quantity' => 6],
            ['id_team' => 199, 'name' => 'Coupe de France', 'quantity' => 2],
            ['id_team' => 199, 'name' => 'Trophée des Champions', 'quantity' => 5],
            ['id_team' => 199, 'name' => 'Taça Latina', 'quantity' => 1],

            // Stade Strasbourg (ID: 200)
            ['id_team' => 200, 'name' => 'Ligue 1', 'quantity' => 1],
            ['id_team' => 200, 'name' => 'Coupe de France', 'quantity' => 3],
            ['id_team' => 200, 'name' => 'Coupe de la Ligue', 'quantity' => 3],
            ['id_team' => 200, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 200, 'name' => 'Ligue 2', 'quantity' => 2],

            // AS Saint‑Étienne (ID: 201)
            ['id_team' => 201, 'name' => 'Ligue 1', 'quantity' => 10],
            ['id_team' => 201, 'name' => 'Coupe de France', 'quantity' => 6],
            ['id_team' => 201, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 201, 'name' => 'Trophée des Champions', 'quantity' => 5],
            ['id_team' => 201, 'name' => 'Ligue 2', 'quantity' => 3],

            // Toulouse FC (ID: 202)
            ['id_team' => 202, 'name' => 'Coupe de France', 'quantity' => 1],
            ['id_team' => 202, 'name' => 'Ligue 2', 'quantity' => 3],

            // EA Guingamp (ID: 203)
            ['id_team' => 203, 'name' => 'Coupe de France', 'quantity' => 2],
            ['id_team' => 203, 'name' => 'National 1', 'quantity' => 1],

            // Grenoble Foot 38 (ID: 204)
            ['id_team' => 204, 'name' => 'National 1', 'quantity' => 1],

            // Stade Laval (ID: 205)
            ['id_team' => 205, 'name' => 'Coupe des Alpes', 'quantity' => 1],
            ['id_team' => 205, 'name' => 'Ligue 2', 'quantity' => 2],

            // Valenciennes FC (ID: 206)
            ['id_team' => 206, 'name' => 'Ligue 2', 'quantity' => 2],

            // Clermont Foot (ID: 207)
            ['id_team' => 207, 'name' => 'Ligue 2', 'quantity' => 1],

            // Dijon FCO (ID: 208)
            ['id_team' => 208, 'name' => 'National 1', 'quantity' => 1],

            // Nîmes Olympique (ID: 209)
            ['id_team' => 209, 'name' => 'Ligue 2', 'quantity' => 4],

            // Quevilly Rouen Métropole (ID: 210)
            ['id_team' => 210, 'name' => 'National 1', 'quantity' => 1],

            // Paris FC (ID: 211)
            ['id_team' => 211, 'name' => 'National 1', 'quantity' => 1],

            // Sochaux (ID: 212)
            ['id_team' => 212, 'name' => 'Ligue 1', 'quantity' => 2],
            ['id_team' => 212, 'name' => 'Coupe de France', 'quantity' => 2],
            ['id_team' => 212, 'name' => 'Coupe de la Ligue', 'quantity' => 1],
            ['id_team' => 212, 'name' => 'Ligue 2', 'quantity' => 2],

            // AJ Caen (ID: 213)
            ['id_team' => 213, 'name' => 'Ligue 2', 'quantity' => 2],

            // Lorient (ID: 214)
            ['id_team' => 214, 'name' => 'Coupe de France', 'quantity' => 1],
            ['id_team' => 214, 'name' => 'Ligue 2', 'quantity' => 1],

            // Troyes AC (ID: 215)
            ['id_team' => 215, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 215, 'name' => 'Ligue 2', 'quantity' => 2],

            // AC Ajaccio (ID: 216)
            ['id_team' => 216, 'name' => 'Ligue 2', 'quantity' => 5],

            // Caen (ID: 217)
            ['id_team' => 217, 'name' => 'Ligue 2', 'quantity' => 2],

            // Paris FC (ID: 218)
            ['id_team' => 218, 'name' => 'National 1', 'quantity' => 1],

            // --- Itália (Serie A e Serie B) ---

            // Juventus (ID: 219)
            ['id_team' => 219, 'name' => 'Serie A', 'quantity' => 36],
            ['id_team' => 219, 'name' => 'Coppa Italia', 'quantity' => 15],
            ['id_team' => 219, 'name' => 'Supercoppa Italiana', 'quantity' => 9],
            ['id_team' => 219, 'name' => 'UEFA Champions League', 'quantity' => 2],
            ['id_team' => 219, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 219, 'name' => 'Copa da UEFA', 'quantity' => 3],
            ['id_team' => 219, 'name' => 'Supercopa da UEFA', 'quantity' => 2],
            ['id_team' => 219, 'name' => 'Copa Intercontinental', 'quantity' => 2],
            ['id_team' => 219, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],

            // AC Milan (ID: 220)
            ['id_team' => 220, 'name' => 'Serie A', 'quantity' => 19],
            ['id_team' => 220, 'name' => 'Coppa Italia', 'quantity' => 5],
            ['id_team' => 220, 'name' => 'Supercoppa Italiana', 'quantity' => 7],
            ['id_team' => 220, 'name' => 'UEFA Champions League', 'quantity' => 7],
            ['id_team' => 220, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 2],
            ['id_team' => 220, 'name' => 'Supercopa da UEFA', 'quantity' => 5],
            ['id_team' => 220, 'name' => 'Copa Intercontinental', 'quantity' => 3],
            ['id_team' => 220, 'name' => 'Copa do Mundo de Clubes da FIFA', 'quantity' => 1],

            // Inter Milan (ID: 221)
            ['id_team' => 221, 'name' => 'Serie A', 'quantity' => 20],
            ['id_team' => 221, 'name' => 'Coppa Italia', 'quantity' => 9],
            ['id_team' => 221, 'name' => 'Supercoppa Italiana', 'quantity' => 8],
            ['id_team' => 221, 'name' => 'UEFA Champions League', 'quantity' => 3],
            ['id_team' => 221, 'name' => 'Copa da UEFA', 'quantity' => 3],
            ['id_team' => 221, 'name' => 'Copa Intercontinental', 'quantity' => 2],
            ['id_team' => 221, 'name' => 'Copa do Mundo de Clubes da FIFA', 'quantity' => 1],

            // Napoli (ID: 222)
            ['id_team' => 222, 'name' => 'Serie A', 'quantity' => 3],
            ['id_team' => 222, 'name' => 'Coppa Italia', 'quantity' => 6],
            ['id_team' => 222, 'name' => 'Supercoppa Italiana', 'quantity' => 2],
            ['id_team' => 222, 'name' => 'Copa da UEFA', 'quantity' => 1],

            // Roma (ID: 223)
            ['id_team' => 223, 'name' => 'Serie A', 'quantity' => 3],
            ['id_team' => 223, 'name' => 'Coppa Italia', 'quantity' => 9],
            ['id_team' => 223, 'name' => 'Supercoppa Italiana', 'quantity' => 2],
            ['id_team' => 223, 'name' => 'Liga Conferência Europa da UEFA', 'quantity' => 1],
            ['id_team' => 223, 'name' => 'Taça das Cidades com Feiras', 'quantity' => 1],

            // Lazio (ID: 224)
            ['id_team' => 224, 'name' => 'Serie A', 'quantity' => 2],
            ['id_team' => 224, 'name' => 'Coppa Italia', 'quantity' => 7],
            ['id_team' => 224, 'name' => 'Supercoppa Italiana', 'quantity' => 5],
            ['id_team' => 224, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 224, 'name' => 'Supercopa da UEFA', 'quantity' => 1],

            // Atalanta (ID: 225)
            ['id_team' => 225, 'name' => 'Coppa Italia', 'quantity' => 1],
            ['id_team' => 225, 'name' => 'UEFA Europa League', 'quantity' => 1],

            // Fiorentina (ID: 226)
            ['id_team' => 226, 'name' => 'Serie A', 'quantity' => 2],
            ['id_team' => 226, 'name' => 'Coppa Italia', 'quantity' => 6],
            ['id_team' => 226, 'name' => 'Supercoppa Italiana', 'quantity' => 1],
            ['id_team' => 226, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],

            // Sassuolo (ID: 227)
            ['id_team' => 227, 'name' => 'Serie B', 'quantity' => 1],
            ['id_team' => 227, 'name' => 'Serie C1', 'quantity' => 1],

            // Torino (ID: 228)
            ['id_team' => 228, 'name' => 'Serie A', 'quantity' => 7],
            ['id_team' => 228, 'name' => 'Coppa Italia', 'quantity' => 5],
            ['id_team' => 228, 'name' => 'Serie B', 'quantity' => 3],

            // Udinese (ID: 229)
            ['id_team' => 229, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 229, 'name' => 'Serie B', 'quantity' => 2],

            // Monza (ID: 230)
            ['id_team' => 230, 'name' => 'Serie C', 'quantity' => 4],

            // Empoli (ID: 231)
            ['id_team' => 231, 'name' => 'Serie B', 'quantity' => 3],

            // Salernitana (ID: 232)
            ['id_team' => 232, 'name' => 'Serie B', 'quantity' => 2],

            // Lecce (ID: 233)
            ['id_team' => 233, 'name' => 'Serie B', 'quantity' => 2],
            ['id_team' => 233, 'name' => 'Serie C', 'quantity' => 4],

            // Bologna (ID: 234)
            ['id_team' => 234, 'name' => 'Serie A', 'quantity' => 7],
            ['id_team' => 234, 'name' => 'Coppa Italia', 'quantity' => 2],
            ['id_team' => 234, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 234, 'name' => 'Mitropa Cup', 'quantity' => 3],

            // Spezia (ID: 235)
            ['id_team' => 235, 'name' => 'Serie B', 'quantity' => 1],

            // Verona (ID: 236)
            ['id_team' => 236, 'name' => 'Serie A', 'quantity' => 1],
            ['id_team' => 236, 'name' => 'Serie B', 'quantity' => 3],

            // Brescia (ID: 237)
            ['id_team' => 237, 'name' => 'Serie B', 'quantity' => 4],
            ['id_team' => 237, 'name' => 'Copa Anglo-Italiana', 'quantity' => 1],

            // Bari (ID: 238)
            ['id_team' => 238, 'name' => 'Serie B', 'quantity' => 3],
            ['id_team' => 238, 'name' => 'Mitropa Cup', 'quantity' => 1],

            // Palermo (ID: 239)
            ['id_team' => 239, 'name' => 'Serie B', 'quantity' => 5],

            // Parma (ID: 240)
            ['id_team' => 240, 'name' => 'Coppa Italia', 'quantity' => 3],
            ['id_team' => 240, 'name' => 'Supercoppa Italiana', 'quantity' => 1],
            ['id_team' => 240, 'name' => 'UEFA Cup Winners\' Cup', 'quantity' => 1],
            ['id_team' => 240, 'name' => 'Copa da UEFA', 'quantity' => 2],
            ['id_team' => 240, 'name' => 'Supercopa da UEFA', 'quantity' => 1],
            ['id_team' => 240, 'name' => 'Serie B', 'quantity' => 1],

            // Frosinone (ID: 241)
            ['id_team' => 241, 'name' => 'Serie B', 'quantity' => 2],

            // Cremonese (ID: 242)
            ['id_team' => 242, 'name' => 'Copa Anglo-Italiana', 'quantity' => 1],
            ['id_team' => 242, 'name' => 'Serie B', 'quantity' => 1],

            // Como (ID: 243)
            ['id_team' => 243, 'name' => 'Serie B', 'quantity' => 3],

            // Modena (ID: 244)
            ['id_team' => 244, 'name' => 'Serie B', 'quantity' => 2],

            // Cosenza (ID: 245)
            ['id_team' => 245, 'name' => 'Serie C', 'quantity' => 2],

            // Reggina (ID: 246)
            ['id_team' => 246, 'name' => 'Serie C', 'quantity' => 3],

            // Pisa (ID: 247)
            ['id_team' => 247, 'name' => 'Mitropa Cup', 'quantity' => 2],
            ['id_team' => 247, 'name' => 'Serie B', 'quantity' => 2],

            // Cittadella (ID: 248)
            ['id_team' => 248, 'name' => 'Serie C', 'quantity' => 1],

            // Sudtirol (ID: 249)
            ['id_team' => 249, 'name' => 'Serie C', 'quantity' => 1],

            // Benevento (ID: 250)
            ['id_team' => 250, 'name' => 'Serie B', 'quantity' => 1],
            ['id_team' => 250, 'name' => 'Serie C', 'quantity' => 1],

            // Perugia (ID: 251)
            ['id_team' => 251, 'name' => 'Taça Intertoto da UEFA', 'quantity' => 1],
            ['id_team' => 251, 'name' => 'Serie B', 'quantity' => 2],

            // --- EUA (Major League Soccer e MLS Next Pro) ---

            // LA Galaxy (ID: 252)
            ['id_team' => 252, 'name' => 'MLS Cup', 'quantity' => 5],
            ['id_team' => 252, 'name' => 'Supporters\' Shield', 'quantity' => 4],
            ['id_team' => 252, 'name' => 'US Open Cup', 'quantity' => 2],
            ['id_team' => 252, 'name' => 'CONCACAF Champions League', 'quantity' => 1],

            // Seattle Sounders (ID: 253)
            ['id_team' => 253, 'name' => 'MLS Cup', 'quantity' => 2],
            ['id_team' => 253, 'name' => 'Supporters\' Shield', 'quantity' => 1],
            ['id_team' => 253, 'name' => 'US Open Cup', 'quantity' => 4],
            ['id_team' => 253, 'name' => 'CONCACAF Champions League', 'quantity' => 1],

            // Atlanta United (ID: 254)
            ['id_team' => 254, 'name' => 'MLS Cup', 'quantity' => 1],
            ['id_team' => 254, 'name' => 'US Open Cup', 'quantity' => 1],
            ['id_team' => 254, 'name' => 'Campeones Cup', 'quantity' => 1],

            // Toronto FC (ID: 255)
            ['id_team' => 255, 'name' => 'MLS Cup', 'quantity' => 1],
            ['id_team' => 255, 'name' => 'Supporters\' Shield', 'quantity' => 1],
            ['id_team' => 255, 'name' => 'Canadian Championship', 'quantity' => 8],

            // New York Red Bulls (ID: 256)
            ['id_team' => 256, 'name' => 'Supporters\' Shield', 'quantity' => 3],

            // Portland Timbers (ID: 257)
            ['id_team' => 257, 'name' => 'MLS Cup', 'quantity' => 1],
            ['id_team' => 257, 'name' => 'MLS is Back Tournament', 'quantity' => 1],

            // Philadelphia Union (ID: 258)
            ['id_team' => 258, 'name' => 'Supporters\' Shield', 'quantity' => 1],

            // FC Cincinnati (ID: 259)
            ['id_team' => 259, 'name' => 'Supporters\' Shield', 'quantity' => 1],
            ['id_team' => 259, 'name' => 'USL Regular Season Title', 'quantity' => 1],

            // Sporting Kansas City (ID: 260)
            ['id_team' => 260, 'name' => 'MLS Cup', 'quantity' => 2],
            ['id_team' => 260, 'name' => 'US Open Cup', 'quantity' => 4],
            ['id_team' => 260, 'name' => 'Supporters\' Shield', 'quantity' => 1],

            // Real Salt Lake (ID: 261)
            ['id_team' => 261, 'name' => 'MLS Cup', 'quantity' => 1],

            // Minnesota United (ID: 262)
            ['id_team' => 262, 'name' => 'NASL Regular Season Title', 'quantity' => 1],

            // Chicago Fire (ID: 263)
            ['id_team' => 263, 'name' => 'MLS Cup', 'quantity' => 1],
            ['id_team' => 263, 'name' => 'US Open Cup', 'quantity' => 4],
            ['id_team' => 263, 'name' => 'Supporters\' Shield', 'quantity' => 1],

            // CF Montréal (ID: 264)
            ['id_team' => 264, 'name' => 'Canadian Championship', 'quantity' => 5],

            // Columbus Crew (ID: 265)
            ['id_team' => 265, 'name' => 'MLS Cup', 'quantity' => 3],
            ['id_team' => 265, 'name' => 'Supporters\' Shield', 'quantity' => 3],

            // New England Revolution (ID: 266)
            ['id_team' => 266, 'name' => 'Supporters\' Shield', 'quantity' => 1],
            ['id_team' => 266, 'name' => 'US Open Cup', 'quantity' => 1],

            // Houston Dynamo (ID: 267)
            ['id_team' => 267, 'name' => 'MLS Cup', 'quantity' => 2],
            ['id_team' => 267, 'name' => 'US Open Cup', 'quantity' => 2],

            // D.C. United (ID: 268)
            ['id_team' => 268, 'name' => 'MLS Cup', 'quantity' => 4],
            ['id_team' => 268, 'name' => 'Supporters\' Shield', 'quantity' => 4],
            ['id_team' => 268, 'name' => 'US Open Cup', 'quantity' => 3],
            ['id_team' => 268, 'name' => 'CONCACAF Champions League', 'quantity' => 1],
            ['id_team' => 268, 'name' => 'Copa Interamericana', 'quantity' => 1],

            // Inter Miami (ID: 269)
            ['id_team' => 269, 'name' => 'Leagues Cup', 'quantity' => 1],

            // Nashville SC (ID: 270)
            ['id_team' => 270, 'name' => 'USL Championship (Regular Season)', 'quantity' => 1],

            // Austin FC (ID: 271)
            ['id_team' => 271, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Atlanta United 2 (ID: 272)
            ['id_team' => 272, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Austin FC II (ID: 273)
            ['id_team' => 273, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Charlotte FC Next Pro (ID: 274)
            ['id_team' => 274, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Chicago Fire FC II (ID: 275)
            ['id_team' => 275, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Colorado Rapids 2 (ID: 276)
            ['id_team' => 276, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Columbus Crew 2 (ID: 277)
            ['id_team' => 277, 'name' => 'MLS Next Pro Cup', 'quantity' => 1],

            // FC Cincinnati 2 (ID: 278)
            ['id_team' => 278, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Houston Dynamo 2 (ID: 279)
            ['id_team' => 279, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Inter Miami CF II (ID: 280)
            ['id_team' => 280, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // LA Galaxy II (ID: 281)
            ['id_team' => 281, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // MKE Anomaly FC (ID: 282)
            ['id_team' => 282, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // New England Revolution II (ID: 283)
            ['id_team' => 283, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // New York City FC II (ID: 284)
            ['id_team' => 284, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Orlando City B (ID: 285)
            ['id_team' => 285, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Philadelphia Union II (ID: 286)
            ['id_team' => 286, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Portland Timbers 2 (ID: 287)
            ['id_team' => 287, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Real Monarchs (ID: 288)
            ['id_team' => 288, 'name' => 'USL Championship', 'quantity' => 1],

            // Rochester New York FC (ID: 289)
            ['id_team' => 289, 'name' => 'US Open Cup', 'quantity' => 1],

            // Tacoma Defiance (ID: 290)
            ['id_team' => 290, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // --- Portugal (Primeira Liga) ---

            // Benfica (ID: 291)
            ['id_team' => 291, 'name' => 'Primeira Liga', 'quantity' => 38],
            ['id_team' => 291, 'name' => 'Taça de Portugal', 'quantity' => 26],
            ['id_team' => 291, 'name' => 'Taça da Liga', 'quantity' => 7],
            ['id_team' => 291, 'name' => 'Supertaça Cândido de Oliveira', 'quantity' => 9],
            ['id_team' => 291, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 2],

            // Porto (ID: 292)
            ['id_team' => 292, 'name' => 'Primeira Liga', 'quantity' => 30],
            ['id_team' => 292, 'name' => 'Taça de Portugal', 'quantity' => 20],
            ['id_team' => 292, 'name' => 'Taça da Liga', 'quantity' => 1],
            ['id_team' => 292, 'name' => 'Supertaça Cândido de Oliveira', 'quantity' => 24],
            ['id_team' => 292, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 2],
            ['id_team' => 292, 'name' => 'Liga Europa da UEFA', 'quantity' => 2],
            ['id_team' => 292, 'name' => 'Supertaça da UEFA', 'quantity' => 1],
            ['id_team' => 292, 'name' => 'Copa Intercontinental', 'quantity' => 2],

            // Sporting CP (ID: 293)
            ['id_team' => 293, 'name' => 'Primeira Liga', 'quantity' => 20],
            ['id_team' => 293, 'name' => 'Taça de Portugal', 'quantity' => 17],
            ['id_team' => 293, 'name' => 'Taça da Liga', 'quantity' => 4],
            ['id_team' => 293, 'name' => 'Supertaça Cândido de Oliveira', 'quantity' => 9],
            ['id_team' => 293, 'name' => 'Taça dos Clubes Vencedores de Taças', 'quantity' => 1],

            // Braga (ID: 294)
            ['id_team' => 294, 'name' => 'Taça de Portugal', 'quantity' => 3],
            ['id_team' => 294, 'name' => 'Taça da Liga', 'quantity' => 3],
            ['id_team' => 294, 'name' => 'Segunda Divisão Portuguesa', 'quantity' => 2],

            // Vitória SC (ID: 295)
            ['id_team' => 295, 'name' => 'Taça de Portugal', 'quantity' => 1],
            ['id_team' => 295, 'name' => 'Supertaça Cândido de Oliveira', 'quantity' => 1],

            // Marítimo (ID: 296)
            ['id_team' => 296, 'name' => 'Segunda Divisão Portuguesa', 'quantity' => 2],

            // Gil Vicente (ID: 297)
            ['id_team' => 297, 'name' => 'Segunda Divisão Portuguesa B', 'quantity' => 1],

            // Casa Pia (ID: 298)
            ['id_team' => 298, 'name' => 'Campeonato de Portugal', 'quantity' => 1],

            // Portimonense (ID: 299)
            ['id_team' => 299, 'name' => 'Segunda Liga', 'quantity' => 1],

            // Paços de Ferreira (ID: 300)
            ['id_team' => 300, 'name' => 'Segunda Liga', 'quantity' => 4],

            // Famalicão (ID: 301)
            ['id_team' => 301, 'name' => 'Segunda Liga', 'quantity' => 1],

            // Moreirense (ID: 302)
            ['id_team' => 302, 'name' => 'Taça da Liga', 'quantity' => 1],
            ['id_team' => 302, 'name' => 'Segunda Liga', 'quantity' => 3],

            // Tondela (ID: 303)
            ['id_team' => 303, 'name' => 'Segunda Liga', 'quantity' => 1],

            // Chaves (ID: 304)
            ['id_team' => 304, 'name' => 'Segunda Liga', 'quantity' => 1],

            // --- Bélgica (Jupiler Pro League) ---

            // Club Brugge (ID: 305)
            ['id_team' => 305, 'name' => 'Pro League', 'quantity' => 19],
            ['id_team' => 305, 'name' => 'Taça da Bélgica', 'quantity' => 11],
            ['id_team' => 305, 'name' => 'Supertaça da Bélgica', 'quantity' => 17],

            // RSC Anderlecht (ID: 306)
            ['id_team' => 306, 'name' => 'Pro League', 'quantity' => 34],
            ['id_team' => 306, 'name' => 'Taça da Bélgica', 'quantity' => 9],
            ['id_team' => 306, 'name' => 'Supertaça da Bélgica', 'quantity' => 13],
            ['id_team' => 306, 'name' => 'Taça dos Clubes Vencedores de Taças', 'quantity' => 2],
            ['id_team' => 306, 'name' => 'Taça UEFA', 'quantity' => 1],
            ['id_team' => 306, 'name' => 'Supertaça Europeia', 'quantity' => 2],

            // Standard Liège (ID: 307)
            ['id_team' => 307, 'name' => 'Pro League', 'quantity' => 10],
            ['id_team' => 307, 'name' => 'Taça da Bélgica', 'quantity' => 8],
            ['id_team' => 307, 'name' => 'Supertaça da Bélgica', 'quantity' => 4],

            // KAA Gent (ID: 308)
            ['id_team' => 308, 'name' => 'Pro League', 'quantity' => 1],
            ['id_team' => 308, 'name' => 'Taça da Bélgica', 'quantity' => 4],
            ['id_team' => 308, 'name' => 'Supertaça da Bélgica', 'quantity' => 1],

            // KRC Genk (ID: 309)
            ['id_team' => 309, 'name' => 'Pro League', 'quantity' => 4],
            ['id_team' => 309, 'name' => 'Taça da Bélgica', 'quantity' => 5],
            ['id_team' => 309, 'name' => 'Supertaça da Bélgica', 'quantity' => 2],

            // Royal Antwerp (ID: 310)
            ['id_team' => 310, 'name' => 'Pro League', 'quantity' => 5],
            ['id_team' => 310, 'name' => 'Taça da Bélgica', 'quantity' => 4],
            ['id_team' => 310, 'name' => 'Supertaça da Bélgica', 'quantity' => 1],

            // Sint-Truiden (ID: 311)
            ['id_team' => 311, 'name' => 'Segunda Divisão Belga', 'quantity' => 4],

            // Cercle Brugge (ID: 312)
            ['id_team' => 312, 'name' => 'Pro League', 'quantity' => 3],
            ['id_team' => 312, 'name' => 'Taça da Bélgica', 'quantity' => 2],

            // KV Mechelen (ID: 313)
            ['id_team' => 313, 'name' => 'Pro League', 'quantity' => 4],
            ['id_team' => 313, 'name' => 'Taça da Bélgica', 'quantity' => 2],
            ['id_team' => 313, 'name' => 'Taça dos Clubes Vencedores de Taças', 'quantity' => 1],
            ['id_team' => 313, 'name' => 'Supertaça Europeia', 'quantity' => 1],

            // Charleroi (ID: 314)
            ['id_team' => 314, 'name' => 'Segunda Divisão Belga', 'quantity' => 1],

            // OH Leuven (ID: 315)
            ['id_team' => 315, 'name' => 'Segunda Divisão Belga', 'quantity' => 1],

            // Seraing (ID: 316)
            ['id_team' => 316, 'name' => 'Segunda Divisão Belga', 'quantity' => 1],

            // --- Holanda (Eredivisie) ---

            // Ajax (ID: 317)
            ['id_team' => 317, 'name' => 'Eredivisie', 'quantity' => 36],
            ['id_team' => 317, 'name' => 'KNVB Beker', 'quantity' => 20],
            ['id_team' => 317, 'name' => 'Johan Cruyff Schaal', 'quantity' => 9],
            ['id_team' => 317, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 4],
            ['id_team' => 317, 'name' => 'Taça dos Clubes Vencedores de Taças', 'quantity' => 1],
            ['id_team' => 317, 'name' => 'Taça UEFA', 'quantity' => 1],
            ['id_team' => 317, 'name' => 'Supercopa da UEFA', 'quantity' => 3],
            ['id_team' => 317, 'name' => 'Copa Intercontinental', 'quantity' => 2],

            // PSV Eindhoven (ID: 318)
            ['id_team' => 318, 'name' => 'Eredivisie', 'quantity' => 25],
            ['id_team' => 318, 'name' => 'KNVB Beker', 'quantity' => 11],
            ['id_team' => 318, 'name' => 'Johan Cruyff Schaal', 'quantity' => 14],
            ['id_team' => 318, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 1],
            ['id_team' => 318, 'name' => 'Taça UEFA', 'quantity' => 1],

            // Feyenoord (ID: 319)
            ['id_team' => 319, 'name' => 'Eredivisie', 'quantity' => 16],
            ['id_team' => 319, 'name' => 'KNVB Beker', 'quantity' => 14],
            ['id_team' => 319, 'name' => 'Johan Cruyff Schaal', 'quantity' => 5],
            ['id_team' => 319, 'name' => 'Liga dos Campeões da UEFA', 'quantity' => 1],
            ['id_team' => 319, 'name' => 'Taça UEFA', 'quantity' => 2],
            ['id_team' => 319, 'name' => 'Copa Intercontinental', 'quantity' => 1],

            // AZ Alkmaar (ID: 320)
            ['id_team' => 320, 'name' => 'Eredivisie', 'quantity' => 2],
            ['id_team' => 320, 'name' => 'KNVB Beker', 'quantity' => 4],
            ['id_team' => 320, 'name' => 'Johan Cruyff Schaal', 'quantity' => 1],

            // Vitesse (ID: 321)
            ['id_team' => 321, 'name' => 'KNVB Beker', 'quantity' => 1],
            ['id_team' => 321, 'name' => 'Eerste Divisie', 'quantity' => 2],

            // FC Utrecht (ID: 322)
            ['id_team' => 322, 'name' => 'KNVB Beker', 'quantity' => 1],

            // SC Heerenveen (ID: 323)
            ['id_team' => 323, 'name' => 'KNVB Beker', 'quantity' => 1],

            // Sparta Rotterdam (ID: 324)
            ['id_team' => 324, 'name' => 'Eredivisie', 'quantity' => 6],
            ['id_team' => 324, 'name' => 'KNVB Beker', 'quantity' => 3],

            // Go Ahead Eagles (ID: 325)
            ['id_team' => 325, 'name' => 'KNVB Beker', 'quantity' => 1],
            ['id_team' => 325, 'name' => 'Eerste Divisie', 'quantity' => 1],

            // FC Twente (ID: 326)
            ['id_team' => 326, 'name' => 'Eredivisie', 'quantity' => 1],
            ['id_team' => 326, 'name' => 'KNVB Beker', 'quantity' => 3],
            ['id_team' => 326, 'name' => 'Johan Cruyff Schaal', 'quantity' => 2],

            // Heracles Almelo (ID: 327)
            ['id_team' => 327, 'name' => 'Eredivisie', 'quantity' => 2],
            ['id_team' => 327, 'name' => 'Eerste Divisie', 'quantity' => 2],

            // RKC Waalwijk (ID: 328)
            ['id_team' => 328, 'name' => 'Eerste Divisie', 'quantity' => 3],

            // PEC Zwolle (ID: 329)
            ['id_team' => 329, 'name' => 'KNVB Beker', 'quantity' => 1],
            ['id_team' => 329, 'name' => 'Johan Cruyff Schaal', 'quantity' => 1],
            ['id_team' => 329, 'name' => 'Eerste Divisie', 'quantity' => 2],

            // Fortuna Sittard (ID: 330)
            ['id_team' => 330, 'name' => 'KNVB Beker', 'quantity' => 1],
            ['id_team' => 330, 'name' => 'Eerste Divisie', 'quantity' => 1],

            // --- Suécia (Allsvenskan) ---

            // Malmö FF (ID: 331)
            ['id_team' => 331, 'name' => 'Allsvenskan', 'quantity' => 23],
            ['id_team' => 331, 'name' => 'Svenska Cupen', 'quantity' => 16],
            ['id_team' => 331, 'name' => 'Svenska Supercupen', 'quantity' => 2],

            // AIK (ID: 332)
            ['id_team' => 332, 'name' => 'Allsvenskan', 'quantity' => 12],
            ['id_team' => 332, 'name' => 'Svenska Cupen', 'quantity' => 8],
            ['id_team' => 332, 'name' => 'Svenska Supercupen', 'quantity' => 1],

            // IFK Göteborg (ID: 333)
            ['id_team' => 333, 'name' => 'Allsvenskan', 'quantity' => 18],
            ['id_team' => 333, 'name' => 'Svenska Cupen', 'quantity' => 7],
            ['id_team' => 333, 'name' => 'Taça UEFA', 'quantity' => 2],

            // Djurgårdens IF (ID: 334)
            ['id_team' => 334, 'name' => 'Allsvenskan', 'quantity' => 12],
            ['id_team' => 334, 'name' => 'Svenska Cupen', 'quantity' => 5],

            // Hammarby IF (ID: 335)
            ['id_team' => 335, 'name' => 'Allsvenskan', 'quantity' => 1],
            ['id_team' => 335, 'name' => 'Svenska Cupen', 'quantity' => 1],

            // IF Elfsborg (ID: 336)
            ['id_team' => 336, 'name' => 'Allsvenskan', 'quantity' => 6],
            ['id_team' => 336, 'name' => 'Svenska Cupen', 'quantity' => 3],
            ['id_team' => 336, 'name' => 'Svenska Supercupen', 'quantity' => 1],

            // Helsingborgs IF (ID: 337)
            ['id_team' => 337, 'name' => 'Allsvenskan', 'quantity' => 5],
            ['id_team' => 337, 'name' => 'Svenska Cupen', 'quantity' => 5],
            ['id_team' => 337, 'name' => 'Svenska Supercupen', 'quantity' => 2],

            // Örebro SK (ID: 338)
            ['id_team' => 338, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Varbergs BoIS (ID: 339)
            ['id_team' => 339, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // IFK Norrköping (ID: 340)
            ['id_team' => 340, 'name' => 'Allsvenskan', 'quantity' => 13],
            ['id_team' => 340, 'name' => 'Svenska Cupen', 'quantity' => 6],
            ['id_team' => 340, 'name' => 'Svenska Supercupen', 'quantity' => 1],

            // Kalmar FF (ID: 341)
            ['id_team' => 341, 'name' => 'Allsvenskan', 'quantity' => 1],
            ['id_team' => 341, 'name' => 'Svenska Cupen', 'quantity' => 3],
            ['id_team' => 341, 'name' => 'Svenska Supercupen', 'quantity' => 1],

            // BK Häcken (ID: 342)
            ['id_team' => 342, 'name' => 'Allsvenskan', 'quantity' => 1],
            ['id_team' => 342, 'name' => 'Svenska Cupen', 'quantity' => 3],

            // Degerfors IF (ID: 343)
            ['id_team' => 343, 'name' => 'Svenska Cupen', 'quantity' => 1],

            // GIF Sundsvall (ID: 344)
            ['id_team' => 344, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // --- Turquia (Süper Lig) ---

            // Galatasaray (ID: 345)
            ['id_team' => 345, 'name' => 'Süper Lig', 'quantity' => 24],
            ['id_team' => 345, 'name' => 'Taça da Turquia', 'quantity' => 18],
            ['id_team' => 345, 'name' => 'Supercopa da Turquia', 'quantity' => 17],
            ['id_team' => 345, 'name' => 'Taça UEFA', 'quantity' => 1],
            ['id_team' => 345, 'name' => 'Supercopa da UEFA', 'quantity' => 1],

            // Fenerbahçe (ID: 346)
            ['id_team' => 346, 'name' => 'Süper Lig', 'quantity' => 19],
            ['id_team' => 346, 'name' => 'Taça da Turquia', 'quantity' => 7],
            ['id_team' => 346, 'name' => 'Supercopa da Turquia', 'quantity' => 9],

            // Beşiktaş (ID: 347)
            ['id_team' => 347, 'name' => 'Süper Lig', 'quantity' => 16],
            ['id_team' => 347, 'name' => 'Taça da Turquia', 'quantity' => 11],
            ['id_team' => 347, 'name' => 'Supercopa da Turquia', 'quantity' => 9],

            // Trabzonspor (ID: 348)
            ['id_team' => 348, 'name' => 'Süper Lig', 'quantity' => 7],
            ['id_team' => 348, 'name' => 'Taça da Turquia', 'quantity' => 9],
            ['id_team' => 348, 'name' => 'Supercopa da Turquia', 'quantity' => 10],

            // İstanbul Başakşehir (ID: 349)
            ['id_team' => 349, 'name' => 'Süper Lig', 'quantity' => 1],

            // Konyaspor (ID: 350)
            ['id_team' => 350, 'name' => 'Taça da Turquia', 'quantity' => 1],
            ['id_team' => 350, 'name' => 'Supercopa da Turquia', 'quantity' => 1],

            // Sivasspor (ID: 351)
            ['id_team' => 351, 'name' => 'Taça da Turquia', 'quantity' => 1],

            // Gaziantep FK (ID: 352)
            ['id_team' => 352, 'name' => '1. Lig', 'quantity' => 1],

            // Çaykur Rizespor (ID: 353)
            ['id_team' => 353, 'name' => '1. Lig', 'quantity' => 2],

            // Alanyaspor (ID: 354)
            ['id_team' => 354, 'name' => 'No relevant professional titles', 'quantity' => 0],

            // Giresunspor (ID: 355)
            ['id_team' => 355, 'name' => '1. Lig', 'quantity' => 1],

            // Kayserispor (ID: 356)
            ['id_team' => 356, 'name' => 'Taça da Turquia', 'quantity' => 1],

            // Antalyaspor (ID: 357)
            ['id_team' => 357, 'name' => '1. Lig', 'quantity' => 2],

            // Fatih Karagümrük (ID: 358)
            ['id_team' => 358, 'name' => '1. Lig', 'quantity' => 1],

            // Kasımpaşa (ID: 359)
            ['id_team' => 359, 'name' => '1. Lig', 'quantity' => 1],

            // --- Brasil (Série A e divisões inferiores) ---

            // Flamengo (ID: 360)
            ['id_team' => 360, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 8],
            ['id_team' => 360, 'name' => 'Copa do Brasil', 'quantity' => 5],
            ['id_team' => 360, 'name' => 'Supercopa do Brasil', 'quantity' => 2],
            ['id_team' => 360, 'name' => 'Campeonato Carioca', 'quantity' => 38],
            ['id_team' => 360, 'name' => 'Copa Libertadores', 'quantity' => 3],
            ['id_team' => 360, 'name' => 'Copa Mercosul', 'quantity' => 1],
            ['id_team' => 360, 'name' => 'Mundial de Clubes', 'quantity' => 1],
            ['id_team' => 360, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // Palmeiras (ID: 361)
            ['id_team' => 361, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 12],
            ['id_team' => 361, 'name' => 'Copa do Brasil', 'quantity' => 4],
            ['id_team' => 361, 'name' => 'Supercopa do Brasil', 'quantity' => 1],
            ['id_team' => 361, 'name' => 'Campeonato Paulista', 'quantity' => 26],
            ['id_team' => 361, 'name' => 'Copa Libertadores', 'quantity' => 3],
            ['id_team' => 361, 'name' => 'Copa Rio', 'quantity' => 1],
            ['id_team' => 361, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // São Paulo (ID: 362)
            ['id_team' => 362, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 6],
            ['id_team' => 362, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 362, 'name' => 'Campeonato Paulista', 'quantity' => 22],
            ['id_team' => 362, 'name' => 'Copa Libertadores', 'quantity' => 3],
            ['id_team' => 362, 'name' => 'Mundial de Clubes', 'quantity' => 3],
            ['id_team' => 362, 'name' => 'Copa Sul-Americana', 'quantity' => 1],
            ['id_team' => 362, 'name' => 'Supercopa da Libertadores', 'quantity' => 1],
            ['id_team' => 362, 'name' => 'Copa Conmebol', 'quantity' => 1],
            ['id_team' => 362, 'name' => 'Recopa Sul-Americana', 'quantity' => 2],

            // Corinthians (ID: 363)
            ['id_team' => 363, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 7],
            ['id_team' => 363, 'name' => 'Copa do Brasil', 'quantity' => 3],
            ['id_team' => 363, 'name' => 'Supercopa do Brasil', 'quantity' => 1],
            ['id_team' => 363, 'name' => 'Campeonato Paulista', 'quantity' => 30],
            ['id_team' => 363, 'name' => 'Copa Libertadores', 'quantity' => 1],
            ['id_team' => 363, 'name' => 'Mundial de Clubes', 'quantity' => 2],
            ['id_team' => 363, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // Fluminense (ID: 364)
            ['id_team' => 364, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 4],
            ['id_team' => 364, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 364, 'name' => 'Campeonato Carioca', 'quantity' => 33],
            ['id_team' => 364, 'name' => 'Copa Libertadores', 'quantity' => 1],
            ['id_team' => 364, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // Botafogo (ID: 365)
            ['id_team' => 365, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 2],
            ['id_team' => 365, 'name' => 'Campeonato Carioca', 'quantity' => 21],
            ['id_team' => 365, 'name' => 'Copa Conmebol', 'quantity' => 1],

            // Cruzeiro (ID: 366)
            ['id_team' => 366, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 4],
            ['id_team' => 366, 'name' => 'Copa do Brasil', 'quantity' => 6],
            ['id_team' => 366, 'name' => 'Campeonato Mineiro', 'quantity' => 41],
            ['id_team' => 366, 'name' => 'Copa Libertadores', 'quantity' => 2],
            ['id_team' => 366, 'name' => 'Supercopa da Libertadores', 'quantity' => 2],
            ['id_team' => 366, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // Atlético Mineiro (ID: 367)
            ['id_team' => 367, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 2],
            ['id_team' => 367, 'name' => 'Copa do Brasil', 'quantity' => 2],
            ['id_team' => 367, 'name' => 'Supercopa do Brasil', 'quantity' => 1],
            ['id_team' => 367, 'name' => 'Campeonato Mineiro', 'quantity' => 49],
            ['id_team' => 367, 'name' => 'Copa Libertadores', 'quantity' => 1],
            ['id_team' => 367, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],
            ['id_team' => 367, 'name' => 'Copa Conmebol', 'quantity' => 2],

            // Internacional (ID: 368)
            ['id_team' => 368, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 3],
            ['id_team' => 368, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 368, 'name' => 'Campeonato Gaúcho', 'quantity' => 45],
            ['id_team' => 368, 'name' => 'Copa Libertadores', 'quantity' => 2],
            ['id_team' => 368, 'name' => 'Mundial de Clubes', 'quantity' => 1],
            ['id_team' => 368, 'name' => 'Copa Sul-Americana', 'quantity' => 1],
            ['id_team' => 368, 'name' => 'Recopa Sul-Americana', 'quantity' => 2],

            // Grêmio (ID: 369)
            ['id_team' => 369, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 2],
            ['id_team' => 369, 'name' => 'Copa do Brasil', 'quantity' => 5],
            ['id_team' => 369, 'name' => 'Campeonato Gaúcho', 'quantity' => 43],
            ['id_team' => 369, 'name' => 'Copa Libertadores', 'quantity' => 3],
            ['id_team' => 369, 'name' => 'Mundial de Clubes', 'quantity' => 1],
            ['id_team' => 369, 'name' => 'Recopa Sul-Americana', 'quantity' => 2],

            // Vasco da Gama (ID: 370)
            ['id_team' => 370, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 4],
            ['id_team' => 370, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 370, 'name' => 'Campeonato Carioca', 'quantity' => 24],
            ['id_team' => 370, 'name' => 'Copa Libertadores', 'quantity' => 1],
            ['id_team' => 370, 'name' => 'Copa Mercosul', 'quantity' => 1],

            // Bahia (ID: 371)
            ['id_team' => 371, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 2],
            ['id_team' => 371, 'name' => 'Copa do Nordeste', 'quantity' => 4],
            ['id_team' => 371, 'name' => 'Campeonato Baiano', 'quantity' => 50],

            // Fortaleza (ID: 372)
            ['id_team' => 372, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 372, 'name' => 'Copa do Nordeste', 'quantity' => 3],
            ['id_team' => 372, 'name' => 'Campeonato Cearense', 'quantity' => 46],

            // Ceará (ID: 373)
            ['id_team' => 373, 'name' => 'Copa do Nordeste', 'quantity' => 3],
            ['id_team' => 373, 'name' => 'Campeonato Cearense', 'quantity' => 45],

            // Sport Recife (ID: 374)
            ['id_team' => 374, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 1],
            ['id_team' => 374, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 374, 'name' => 'Copa do Nordeste', 'quantity' => 3],
            ['id_team' => 374, 'name' => 'Campeonato Pernambucano', 'quantity' => 44],

            // Juventude (ID: 375)
            ['id_team' => 375, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 375, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 375, 'name' => 'Campeonato Gaúcho', 'quantity' => 1],

            // Mirassol (ID: 376)
            ['id_team' => 376, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 376, 'name' => 'Campeonato Paulista do Interior', 'quantity' => 1],

            // Santos (ID: 377)
            ['id_team' => 377, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 8],
            ['id_team' => 377, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 377, 'name' => 'Campeonato Paulista', 'quantity' => 22],
            ['id_team' => 377, 'name' => 'Copa Libertadores', 'quantity' => 3],
            ['id_team' => 377, 'name' => 'Mundial de Clubes', 'quantity' => 2],
            ['id_team' => 377, 'name' => 'Recopa Sul-Americana', 'quantity' => 1],

            // Red Bull Bragantino (ID: 378)
            ['id_team' => 378, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 378, 'name' => 'Campeonato Paulista', 'quantity' => 1],

            // Vitória (ID: 379)
            ['id_team' => 379, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 379, 'name' => 'Campeonato Baiano', 'quantity' => 29],
            ['id_team' => 379, 'name' => 'Copa do Nordeste', 'quantity' => 4],

            // Amazonas (ID: 380)
            ['id_team' => 380, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 380, 'name' => 'Campeonato Amazonense', 'quantity' => 1],

            // América Mineiro (ID: 381)
            ['id_team' => 381, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 2],
            ['id_team' => 381, 'name' => 'Campeonato Mineiro', 'quantity' => 16],

            // Athletic Club (MG) (ID: 382)
            ['id_team' => 382, 'name' => 'Campeonato Mineiro do Interior', 'quantity' => 1],

            // Atlético Goianiense (ID: 383)
            ['id_team' => 383, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 2],
            ['id_team' => 383, 'name' => 'Campeonato Goiano', 'quantity' => 17],

            // Athletico Paranaense (ID: 384)
            ['id_team' => 384, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 1],
            ['id_team' => 384, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 384, 'name' => 'Campeonato Paranaense', 'quantity' => 28],
            ['id_team' => 384, 'name' => 'Copa Sul-Americana', 'quantity' => 2],

            // Avaí (ID: 385)
            ['id_team' => 385, 'name' => 'Campeonato Catarinense', 'quantity' => 18],

            // Botafogo-SP (ID: 386)
            ['id_team' => 386, 'name' => 'Campeonato Brasileiro Série D', 'quantity' => 1],
            ['id_team' => 386, 'name' => 'Campeonato Paulista do Interior', 'quantity' => 1],

            // Chapecoense (ID: 387)
            ['id_team' => 387, 'name' => 'Campeonato Catarinense', 'quantity' => 7],
            ['id_team' => 387, 'name' => 'Copa Sul-Americana', 'quantity' => 1],

            // Coritiba (ID: 388)
            ['id_team' => 388, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 1],
            ['id_team' => 388, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 2],
            ['id_team' => 388, 'name' => 'Campeonato Paranaense', 'quantity' => 39],

            // Criciúma (ID: 389)
            ['id_team' => 389, 'name' => 'Copa do Brasil', 'quantity' => 1],
            ['id_team' => 389, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 389, 'name' => 'Campeonato Catarinense', 'quantity' => 12],

            // Cuiabá (ID: 390)
            ['id_team' => 390, 'name' => 'Copa Verde', 'quantity' => 2],
            ['id_team' => 390, 'name' => 'Campeonato Mato-Grossense', 'quantity' => 13],

            // CRB (ID: 391)
            ['id_team' => 391, 'name' => 'Campeonato Alagoano', 'quantity' => 34],

            // Ferroviária (ID: 392)
            ['id_team' => 392, 'name' => 'Copa Paulista', 'quantity' => 2],
            ['id_team' => 392, 'name' => 'Campeonato Paulista Série A2', 'quantity' => 3],

            // Goiás (ID: 393)
            ['id_team' => 393, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 2],
            ['id_team' => 393, 'name' => 'Copa Centro-Oeste', 'quantity' => 3],
            ['id_team' => 393, 'name' => 'Campeonato Goiano', 'quantity' => 28],

            // Novorizontino (ID: 394)
            ['id_team' => 394, 'name' => 'Campeonato Paulista Série A2', 'quantity' => 1],

            // Operário-PR (ID: 395)
            ['id_team' => 395, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 395, 'name' => 'Campeonato Paranaense', 'quantity' => 1],

            // Paysandu (ID: 396)
            ['id_team' => 396, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 2],
            ['id_team' => 396, 'name' => 'Copa dos Campeões', 'quantity' => 1],
            ['id_team' => 396, 'name' => 'Copa Verde', 'quantity' => 3],
            ['id_team' => 396, 'name' => 'Campeonato Paraense', 'quantity' => 50],

            // Remo (ID: 397)
            ['id_team' => 397, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 397, 'name' => 'Copa Verde', 'quantity' => 1],
            ['id_team' => 397, 'name' => 'Campeonato Paraense', 'quantity' => 47],

            // Vila Nova (ID: 398)
            ['id_team' => 398, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 3],
            ['id_team' => 398, 'name' => 'Campeonato Goiano', 'quantity' => 15],

            // Volta Redonda (ID: 399)
            ['id_team' => 399, 'name' => 'Campeonato Brasileiro Série D', 'quantity' => 1],
            ['id_team' => 399, 'name' => 'Copa Rio', 'quantity' => 5],

            // ABC (ID: 400)
            ['id_team' => 400, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 400, 'name' => 'Campeonato Potiguar', 'quantity' => 57],
            ['id_team' => 400, 'name' => 'Copa do Nordeste', 'quantity' => 1],

            // Anápolis (ID: 401)
            ['id_team' => 401, 'name' => 'Campeonato Goiano', 'quantity' => 1],

            // Botafogo‑PB (ID: 402)
            ['id_team' => 402, 'name' => 'Campeonato Brasileiro Série D', 'quantity' => 1],
            ['id_team' => 402, 'name' => 'Campeonato Paraibano', 'quantity' => 30],

            // Brusque (ID: 403)
            ['id_team' => 403, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 403, 'name' => 'Copa Santa Catarina', 'quantity' => 5],
            ['id_team' => 403, 'name' => 'Recopa Catarinense', 'quantity' => 2],

            // Caxias (ID: 404)
            ['id_team' => 404, 'name' => 'Campeonato Gaúcho', 'quantity' => 1],

            // Confiança (ID: 405)
            ['id_team' => 405, 'name' => 'Campeonato Sergipano', 'quantity' => 22],

            // CSA (ID: 406)
            ['id_team' => 406, 'name' => 'Campeonato Alagoano', 'quantity' => 40],

            // Figueirense (ID: 407)
            ['id_team' => 407, 'name' => 'Campeonato Catarinense', 'quantity' => 18],
            ['id_team' => 407, 'name' => 'Copa Santa Catarina', 'quantity' => 3],

            // Floresta (ID: 408)
            ['id_team' => 408, 'name' => 'Taça Fares Lopes', 'quantity' => 1],

            // Guarani (ID: 409)
            ['id_team' => 409, 'name' => 'Campeonato Brasileiro Série A', 'quantity' => 1],
            ['id_team' => 409, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 409, 'name' => 'Campeonato Paulista', 'quantity' => 0],

            // Itabaiana (ID: 410)
            ['id_team' => 410, 'name' => 'Campeonato Sergipano', 'quantity' => 11],

            // Ituano (ID: 411)
            ['id_team' => 411, 'name' => 'Campeonato Paulista', 'quantity' => 2],
            ['id_team' => 411, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],

            // Londrina (ID: 412)
            ['id_team' => 412, 'name' => 'Campeonato Brasileiro Série B', 'quantity' => 1],
            ['id_team' => 412, 'name' => 'Campeonato Paranaense', 'quantity' => 5],
            ['id_team' => 412, 'name' => 'Primeira Liga (Brazil)', 'quantity' => 1],

            // Maringá (ID: 413)
            ['id_team' => 413, 'name' => 'Campeonato Paranaense', 'quantity' => 1],

            // Náutico (ID: 414)
            ['id_team' => 414, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],
            ['id_team' => 414, 'name' => 'Campeonato Pernambucano', 'quantity' => 24],
            ['id_team' => 414, 'name' => 'Copa do Nordeste', 'quantity' => 1],

            // Ponte Preta (ID: 415)
            ['id_team' => 415, 'name' => 'Campeonato Paulista Série A2', 'quantity' => 2],

            // Retrô (ID: 416)
            ['id_team' => 416, 'name' => 'Campeonato Pernambucano Série A2', 'quantity' => 1],

            // São Bernardo (ID: 417)
            ['id_team' => 417, 'name' => 'Campeonato Brasileiro Série D', 'quantity' => 1],
            ['id_team' => 417, 'name' => 'Copa Paulista', 'quantity' => 2],

            // Tombense (ID: 418)
            ['id_team' => 418, 'name' => 'Campeonato Brasileiro Série C', 'quantity' => 1],

            // Ypiranga‑RS (ID: 419)
            ['id_team' => 419, 'name' => 'Campeonato Gaúcho - Divisão de Acesso', 'quantity' => 1],
        ]);
    }
}
