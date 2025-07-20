<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class towins extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('to_wins')->insert([
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
            ['id_team' => 22, 'name' => 'UEFA Champions League'],
            ['id_team' => 22, 'name' => 'Premier League'],
            ['id_team' => 22, 'name' => 'FA Cup'],
            ['id_team' => 22, 'name' => 'EFL Cup'],

            // Birmingham City (id_team: 23)
            ['id_team' => 23, 'name' => 'Premier League'],
            ['id_team' => 23, 'name' => 'FA Cup'],
            ['id_team' => 23, 'name' => 'UEFA Europa League'],

            // Bristol City (id_team: 24)
            ['id_team' => 24, 'name' => 'Premier League'],
            ['id_team' => 24, 'name' => 'FA Cup'],
            ['id_team' => 24, 'name' => 'EFL Cup'],

            // Burnley (id_team: 25)
            ['id_team' => 25, 'name' => 'UEFA Champions League'],
            ['id_team' => 25, 'name' => 'FA Cup'],
            ['id_team' => 25, 'name' => 'EFL Cup'],

            // Cardiff City (id_team: 26)
            ['id_team' => 26, 'name' => 'Premier League'],
            ['id_team' => 26, 'name' => 'FA Cup'],
            ['id_team' => 26, 'name' => 'EFL Cup'],

            // Coventry City (id_team: 27)
            ['id_team' => 27, 'name' => 'Premier League'],
            ['id_team' => 27, 'name' => 'FA Cup'],
            ['id_team' => 27, 'name' => 'EFL Cup'],

            // Derby County (id_team: 28)
            ['id_team' => 28, 'name' => 'UEFA Champions League'],
            ['id_team' => 28, 'name' => 'Premier League'],
            ['id_team' => 28, 'name' => 'FA Cup'],

            // Hull City (id_team: 29)
            ['id_team' => 29, 'name' => 'Premier League'],
            ['id_team' => 29, 'name' => 'FA Cup'],
            ['id_team' => 29, 'name' => 'EFL Cup'],

            // Leeds United (id_team: 30)
            ['id_team' => 30, 'name' => 'UEFA Champions League'],
            ['id_team' => 30, 'name' => 'Premier League'],
            ['id_team' => 30, 'name' => 'FA Cup'],
            ['id_team' => 30, 'name' => 'EFL Cup'],

            // Luton Town (id_team: 31)
            ['id_team' => 31, 'name' => 'Premier League'],
            ['id_team' => 31, 'name' => 'FA Cup'],
            ['id_team' => 31, 'name' => 'EFL Cup'],

            // Middlesbrough (id_team: 32)
            ['id_team' => 32, 'name' => 'Premier League'],
            ['id_team' => 32, 'name' => 'FA Cup'],
            ['id_team' => 32, 'name' => 'UEFA Europa League'],

            // Millwall (id_team: 33)
            ['id_team' => 33, 'name' => 'Premier League'],
            ['id_team' => 33, 'name' => 'FA Cup'],
            ['id_team' => 33, 'name' => 'EFL Cup'],

            // Norwich City (id_team: 34)
            ['id_team' => 34, 'name' => 'Premier League'],
            ['id_team' => 34, 'name' => 'FA Cup'],
            ['id_team' => 34, 'name' => 'EFL Cup'],

            // Oxford United (id_team: 35)
            ['id_team' => 35, 'name' => 'Premier League'],
            ['id_team' => 35, 'name' => 'FA Cup'],
            ['id_team' => 35, 'name' => 'EFL Cup'],

            // Plymouth Argyle (id_team: 36)
            ['id_team' => 36, 'name' => 'Premier League'],
            ['id_team' => 36, 'name' => 'FA Cup'],
            ['id_team' => 36, 'name' => 'EFL Cup'],

            // Portsmouth (id_team: 37)
            ['id_team' => 37, 'name' => 'UEFA Champions League'],
            ['id_team' => 37, 'name' => 'Premier League'],
            ['id_team' => 37, 'name' => 'EFL Cup'],

            // Preston North End (id_team: 38)
            ['id_team' => 38, 'name' => 'Premier League'],
            ['id_team' => 38, 'name' => 'FA Cup'],
            ['id_team' => 38, 'name' => 'EFL Cup'],

            // Queens Park Rangers (id_team: 39)
            ['id_team' => 39, 'name' => 'Premier League'],
            ['id_team' => 39, 'name' => 'FA Cup'],
            ['id_team' => 39, 'name' => 'EFL Cup'],

            // Sheffield United (id_team: 40)
            ['id_team' => 40, 'name' => 'UEFA Champions League'],
            ['id_team' => 40, 'name' => 'Premier League'],
            ['id_team' => 40, 'name' => 'FA Cup'],

            // Sheffield Wednesday (id_team: 41)
            ['id_team' => 41, 'name' => 'UEFA Champions League'],
            ['id_team' => 41, 'name' => 'Premier League'],
            ['id_team' => 41, 'name' => 'FA Cup'],

            // Stoke City (id_team: 42)
            ['id_team' => 42, 'name' => 'Premier League'],
            ['id_team' => 42, 'name' => 'FA Cup'],
            ['id_team' => 42, 'name' => 'EFL Cup'],

            // Sunderland (id_team: 43)
            ['id_team' => 43, 'name' => 'UEFA Champions League'],
            ['id_team' => 43, 'name' => 'Premier League'],
            ['id_team' => 43, 'name' => 'FA Cup'],

            // Swansea City (id_team: 44)
            ['id_team' => 44, 'name' => 'UEFA Europa League'],
            ['id_team' => 44, 'name' => 'Premier League'],
            ['id_team' => 44, 'name' => 'FA Cup'],

            // Watford (id_team: 45)
            ['id_team' => 45, 'name' => 'Premier League'],
            ['id_team' => 45, 'name' => 'FA Cup'],
            ['id_team' => 45, 'name' => 'EFL Cup'],

            // West Bromwich Albion (id_team: 46)
            ['id_team' => 46, 'name' => 'UEFA Champions League'],
            ['id_team' => 46, 'name' => 'Premier League'],
            ['id_team' => 46, 'name' => 'FA Cup'],

            // Barnsley (id_team: 47)
            ['id_team' => 47, 'name' => 'Premier League'],
            ['id_team' => 47, 'name' => 'FA Cup'],
            ['id_team' => 47, 'name' => 'EFL Cup'],

            // Birmingham City (id_team: 48) - Duplicado
            ['id_team' => 48, 'name' => 'Premier League'],
            ['id_team' => 48, 'name' => 'FA Cup'],
            ['id_team' => 48, 'name' => 'UEFA Europa League'],

            // Blackpool (id_team: 49)
            ['id_team' => 49, 'name' => 'UEFA Champions League'],
            ['id_team' => 49, 'name' => 'Premier League'],
            ['id_team' => 49, 'name' => 'FA Cup'],

            // Bolton Wanderers (id_team: 50)
            ['id_team' => 50, 'name' => 'UEFA Champions League'],
            ['id_team' => 50, 'name' => 'Premier League'],
            ['id_team' => 50, 'name' => 'FA Cup'],

            // Bristol Rovers (id_team: 51)
            ['id_team' => 51, 'name' => 'Premier League'],
            ['id_team' => 51, 'name' => 'FA Cup'],
            ['id_team' => 51, 'name' => 'EFL Cup'],

            // Burton Albion (id_team: 52)
            ['id_team' => 52, 'name' => 'Championship'],
            ['id_team' => 52, 'name' => 'FA Cup'],
            ['id_team' => 52, 'name' => 'EFL Cup'],

            // Cambridge United (id_team: 53)
            ['id_team' => 53, 'name' => 'Championship'],
            ['id_team' => 53, 'name' => 'FA Cup'],
            ['id_team' => 53, 'name' => 'EFL Cup'],

            // Charlton Athletic (id_team: 54)
            ['id_team' => 54, 'name' => 'Premier League'],
            ['id_team' => 54, 'name' => 'FA Cup'],
            ['id_team' => 54, 'name' => 'EFL Cup'],

            // Crawley Town (id_team: 55)
            ['id_team' => 55, 'name' => 'League One'],
            ['id_team' => 55, 'name' => 'FA Cup'],
            ['id_team' => 55, 'name' => 'EFL Cup'],

            // Exeter City (id_team: 56)
            ['id_team' => 56, 'name' => 'League One'],
            ['id_team' => 56, 'name' => 'FA Cup'],
            ['id_team' => 56, 'name' => 'EFL Cup'],

            // Huddersfield Town (id_team: 57)
            ['id_team' => 57, 'name' => 'UEFA Champions League'],
            ['id_team' => 57, 'name' => 'Premier League'],
            ['id_team' => 57, 'name' => 'FA Cup'],

            // Leyton Orient (id_team: 58)
            ['id_team' => 58, 'name' => 'Championship'],
            ['id_team' => 58, 'name' => 'FA Cup'],
            ['id_team' => 58, 'name' => 'EFL Cup'],

            // Lincoln City (id_team: 59)
            ['id_team' => 59, 'name' => 'League One'],
            ['id_team' => 59, 'name' => 'FA Cup'],
            ['id_team' => 59, 'name' => 'EFL Cup'],

            // Mansfield Town (id_team: 60)
            ['id_team' => 60, 'name' => 'League One'],
            ['id_team' => 60, 'name' => 'FA Cup'],
            ['id_team' => 60, 'name' => 'EFL Cup'],

            // Northampton Town (id_team: 61)
            ['id_team' => 61, 'name' => 'League One'],
            ['id_team' => 61, 'name' => 'FA Cup'],
            ['id_team' => 61, 'name' => 'EFL Cup'],

            // Peterborough United (id_team: 62)
            ['id_team' => 62, 'name' => 'Championship'],
            ['id_team' => 62, 'name' => 'FA Cup'],
            ['id_team' => 62, 'name' => 'EFL Cup'],

            // Plymouth Argyle (id_team: 63) - Duplicado
            ['id_team' => 63, 'name' => 'Premier League'],
            ['id_team' => 63, 'name' => 'FA Cup'],
            ['id_team' => 63, 'name' => 'EFL Cup'],

            // Port Vale (id_team: 64)
            ['id_team' => 64, 'name' => 'League One'],
            ['id_team' => 64, 'name' => 'FA Cup'],
            ['id_team' => 64, 'name' => 'EFL Cup'],

            // Reading (id_team: 65)
            ['id_team' => 65, 'name' => 'Premier League'],
            ['id_team' => 65, 'name' => 'FA Cup'],
            ['id_team' => 65, 'name' => 'EFL Cup'],

            // Rotherham United (id_team: 66)
            ['id_team' => 66, 'name' => 'Championship'],
            ['id_team' => 66, 'name' => 'FA Cup'],
            ['id_team' => 66, 'name' => 'EFL Cup'],

            // Shrewsbury Town (id_team: 67)
            ['id_team' => 67, 'name' => 'League One'],
            ['id_team' => 67, 'name' => 'FA Cup'],
            ['id_team' => 67, 'name' => 'EFL Cup'],

            // Stevenage (id_team: 68)
            ['id_team' => 68, 'name' => 'League One'],
            ['id_team' => 68, 'name' => 'FA Cup'],
            ['id_team' => 68, 'name' => 'EFL Cup'],

            // Stockport County (id_team: 69)
            ['id_team' => 69, 'name' => 'League Two'],
            ['id_team' => 69, 'name' => 'FA Cup'],
            ['id_team' => 69, 'name' => 'EFL Cup'],

            // Wigan Athletic (id_team: 70)
            ['id_team' => 70, 'name' => 'UEFA Europa League'],
            ['id_team' => 70, 'name' => 'Premier League'],
            ['id_team' => 70, 'name' => 'EFL Cup'],

            // Wrexham (id_team: 71)
            ['id_team' => 71, 'name' => 'FA Cup'],
            ['id_team' => 71, 'name' => 'EFL Cup'],
            ['id_team' => 71, 'name' => 'Championship'],

            // Wycombe Wanderers (id_team: 72)
            ['id_team' => 72, 'name' => 'Championship'],
            ['id_team' => 72, 'name' => 'FA Cup'],
            ['id_team' => 72, 'name' => 'EFL Cup'],

            // Accrington Stanley (id_team: 73)
            ['id_team' => 73, 'name' => 'League One'],
            ['id_team' => 73, 'name' => 'FA Cup'],
            ['id_team' => 73, 'name' => 'EFL Cup'],

            // AFC Wimbledon (id_team: 74)
            ['id_team' => 74, 'name' => 'League One'],
            ['id_team' => 74, 'name' => 'FA Cup'],
            ['id_team' => 74, 'name' => 'EFL Cup'],

            // Barrow (id_team: 75)
            ['id_team' => 75, 'name' => 'League Two'],
            ['id_team' => 75, 'name' => 'FA Cup'],
            ['id_team' => 75, 'name' => 'EFL Cup'],

            // Bradford City (id_team: 76)
            ['id_team' => 76, 'name' => 'Premier League'],
            ['id_team' => 76, 'name' => 'FA Cup'],
            ['id_team' => 76, 'name' => 'EFL Cup'],

            // Bromley (id_team: 77)
            ['id_team' => 77, 'name' => 'League Two'],
            ['id_team' => 77, 'name' => 'FA Cup'],
            ['id_team' => 77, 'name' => 'EFL Cup'],

            // Carlisle United (id_team: 78)
            ['id_team' => 78, 'name' => 'League One'],
            ['id_team' => 78, 'name' => 'FA Cup'],
            ['id_team' => 78, 'name' => 'EFL Cup'],

            // Cheltenham Town (id_team: 79)
            ['id_team' => 79, 'name' => 'League One'],
            ['id_team' => 79, 'name' => 'FA Cup'],
            ['id_team' => 79, 'name' => 'EFL Cup'],

            // Chesterfield (id_team: 80)
            ['id_team' => 80, 'name' => 'League Two'],
            ['id_team' => 80, 'name' => 'FA Cup'],
            ['id_team' => 80, 'name' => 'EFL Cup'],

            // Colchester United (id_team: 81)
            ['id_team' => 81, 'name' => 'League Two'],
            ['id_team' => 81, 'name' => 'FA Cup'],
            ['id_team' => 81, 'name' => 'EFL Cup'],

            // Crewe Alexandra (id_team: 82)
            ['id_team' => 82, 'name' => 'League One'],
            ['id_team' => 82, 'name' => 'FA Cup'],
            ['id_team' => 82, 'name' => 'EFL Cup'],

            // Doncaster Rovers (id_team: 83)
            ['id_team' => 83, 'name' => 'League Two'],
            ['id_team' => 83, 'name' => 'FA Cup'],
            ['id_team' => 83, 'name' => 'EFL Cup'],

            // Fleetwood Town (id_team: 84)
            ['id_team' => 84, 'name' => 'League One'],
            ['id_team' => 84, 'name' => 'FA Cup'],
            ['id_team' => 84, 'name' => 'EFL Cup'],

            // Gillingham (id_team: 85)
            ['id_team' => 85, 'name' => 'League Two'],
            ['id_team' => 85, 'name' => 'FA Cup'],
            ['id_team' => 85, 'name' => 'EFL Cup'],

            // Grimsby Town (id_team: 86)
            ['id_team' => 86, 'name' => 'League Two'],
            ['id_team' => 86, 'name' => 'FA Cup'],
            ['id_team' => 86, 'name' => 'EFL Cup'],

            // Harrogate Town (id_team: 87)
            ['id_team' => 87, 'name' => 'League Two'],
            ['id_team' => 87, 'name' => 'FA Cup'],
            ['id_team' => 87, 'name' => 'EFL Cup'],

            // Milton Keynes Dons (id_team: 88)
            ['id_team' => 88, 'name' => 'Championship'],
            ['id_team' => 88, 'name' => 'FA Cup'],
            ['id_team' => 88, 'name' => 'EFL Cup'],

            // Morecambe (id_team: 89)
            ['id_team' => 89, 'name' => 'League One'],
            ['id_team' => 89, 'name' => 'FA Cup'],
            ['id_team' => 89, 'name' => 'EFL Cup'],

            // Newport County (id_team: 90)
            ['id_team' => 90, 'name' => 'League Two'],
            ['id_team' => 90, 'name' => 'FA Cup'],
            ['id_team' => 90, 'name' => 'EFL Cup'],

            // Notts County (id_team: 91)
            ['id_team' => 91, 'name' => 'League Two'],
            ['id_team' => 91, 'name' => 'FA Cup'],
            ['id_team' => 91, 'name' => 'EFL Cup'],

            // Port Vale (id_team: 92) - Duplicado
            ['id_team' => 92, 'name' => 'League One'],
            ['id_team' => 92, 'name' => 'FA Cup'],
            ['id_team' => 92, 'name' => 'EFL Cup'],

            // Salford City (id_team: 93)
            ['id_team' => 93, 'name' => 'League Two'],
            ['id_team' => 93, 'name' => 'FA Cup'],
            ['id_team' => 93, 'name' => 'EFL Cup'],

            // Swindon Town (id_team: 94)
            ['id_team' => 94, 'name' => 'Championship'],
            ['id_team' => 94, 'name' => 'FA Cup'],
            ['id_team' => 94, 'name' => 'EFL Cup'],

            // Tranmere Rovers (id_team: 95)
            ['id_team' => 95, 'name' => 'League Two'],
            ['id_team' => 95, 'name' => 'FA Cup'],
            ['id_team' => 95, 'name' => 'EFL Cup'],

            // Walsall (id_team: 96)
            ['id_team' => 96, 'name' => 'League Two'],
            ['id_team' => 96, 'name' => 'FA Cup'],
            ['id_team' => 96, 'name' => 'EFL Cup'],

            ['id_team' => 97, 'name' => 'UEFA Champions League'], // Alavés
            ['id_team' => 97, 'name' => 'UEFA Europa League'],
            ['id_team' => 97, 'name' => 'La Liga'],

            // Athletic Club - id_team 98
            ['id_team' => 98, 'name' => 'UEFA Champions League'],
            ['id_team' => 98, 'name' => 'UEFA Europa League'],
            ['id_team' => 98, 'name' => 'La Liga'],

            // Atlético Madrid - id_team 99
            ['id_team' => 99, 'name' => 'Copa del Rey'], // Embora já tenha vencido, se for para considerar "não tenham ganhado ainda" de forma mais ampla para alguns títulos, pode ser mantido. No entanto, se a ideia é algo que **nunca** ganharam, este pode ser removido.
            ['id_team' => 99, 'name' => 'Supercopa de España'], // Embora já tenha vencido, o mesmo que acima.
            ['id_team' => 99, 'name' => 'UEFA Champions League'], // Nunca venceram a Champions
            ['id_team' => 99, 'name' => 'Premier League'], // Exemplo de um campeonato de outra liga para o qual o time não joga

            // Barcelona - id_team 100
            ['id_team' => 100, 'name' => 'Copa del Rey'], // Para fins de exemplo, mantendo, mas já venceram muito.
            ['id_team' => 100, 'name' => 'Supercopa de España'],
            ['id_team' => 100, 'name' => 'UEFA Europa League'], // Para fins de exemplo
            ['id_team' => 100, 'name' => 'Copa Libertadores'], // Exemplo de campeonato de outra confederação

            // Celta Vigo - id_team 101
            ['id_team' => 101, 'name' => 'La Liga'],
            ['id_team' => 101, 'name' => 'Copa del Rey'],
            ['id_team' => 101, 'name' => 'UEFA Europa League'],

            // Espanyol - id_team 102
            ['id_team' => 102, 'name' => 'La Liga'],
            ['id_team' => 102, 'name' => 'Copa del Rey'],
            ['id_team' => 102, 'name' => 'UEFA Europa League'],

            // Getafe - id_team 103
            ['id_team' => 103, 'name' => 'La Liga'],
            ['id_team' => 103, 'name' => 'Copa del Rey'],
            ['id_team' => 103, 'name' => 'UEFA Europa League'],

            // Girona - id_team 104
            ['id_team' => 104, 'name' => 'La Liga'],
            ['id_team' => 104, 'name' => 'Copa del Rey'],
            ['id_team' => 104, 'name' => 'UEFA Champions League'],

            // Las Palmas - id_team 105
            ['id_team' => 105, 'name' => 'La Liga'],
            ['id_team' => 105, 'name' => 'Copa del Rey'],
            ['id_team' => 105, 'name' => 'UEFA Europa League'],

            // Leganés - id_team 106
            ['id_team' => 106, 'name' => 'La Liga'],
            ['id_team' => 106, 'name' => 'Copa del Rey'],
            ['id_team' => 106, 'name' => 'UEFA Europa League'],

            // Mallorca - id_team 107
            ['id_team' => 107, 'name' => 'La Liga'],
            ['id_team' => 107, 'name' => 'Copa del Rey'],
            ['id_team' => 107, 'name' => 'UEFA Europa League'],

            // Osasuna - id_team 108
            ['id_team' => 108, 'name' => 'La Liga'],
            ['id_team' => 108, 'name' => 'Copa del Rey'],
            ['id_team' => 108, 'name' => 'UEFA Europa League'],

            // Rayo Vallecano - id_team 109
            ['id_team' => 109, 'name' => 'La Liga'],
            ['id_team' => 109, 'name' => 'Copa del Rey'],
            ['id_team' => 109, 'name' => 'UEFA Europa League'],

            // Real Betis - id_team 110
            ['id_team' => 110, 'name' => 'La Liga'],
            ['id_team' => 110, 'name' => 'UEFA Champions League'],

            // Real Madrid - id_team 111
            ['id_team' => 111, 'name' => 'Copa del Rey'], // Para fins de exemplo
            ['id_team' => 111, 'name' => 'Supercopa de España'], // Para fins de exemplo
            ['id_team' => 111, 'name' => 'Copa Libertadores'], // Exemplo de campeonato de outra confederação

            // Real Sociedad - id_team 112
            ['id_team' => 112, 'name' => 'La Liga'],
            ['id_team' => 112, 'name' => 'UEFA Champions League'],

            // Sevilla - id_team 113
            ['id_team' => 113, 'name' => 'La Liga'],
            ['id_team' => 113, 'name' => 'UEFA Champions League'],

            // Valencia - id_team 114
            ['id_team' => 114, 'name' => 'UEFA Champions League'],

            // Valladolid - id_team 115
            ['id_team' => 115, 'name' => 'La Liga'],
            ['id_team' => 115, 'name' => 'Copa del Rey'],
            ['id_team' => 115, 'name' => 'UEFA Europa League'],

            // Villarreal - id_team 116
            ['id_team' => 116, 'name' => 'La Liga'],
            ['id_team' => 116, 'name' => 'UEFA Champions League'],

            // Almería - id_team 117
            ['id_team' => 117, 'name' => 'La Liga'],
            ['id_team' => 117, 'name' => 'Copa del Rey'],
            ['id_team' => 117, 'name' => 'UEFA Europa League'],

            // Albacete - id_team 118
            ['id_team' => 118, 'name' => 'La Liga'],
            ['id_team' => 118, 'name' => 'Copa del Rey'],

            // Andorra - id_team 119
            ['id_team' => 119, 'name' => 'La Liga'],
            ['id_team' => 119, 'name' => 'Copa del Rey'],

            // Barcelona Atlètic - id_team 120
            ['id_team' => 120, 'name' => 'La Liga'],
            ['id_team' => 120, 'name' => 'Copa del Rey'],

            // Burgos - id_team 121
            ['id_team' => 121, 'name' => 'La Liga'],
            ['id_team' => 121, 'name' => 'Copa del Rey'],

            // Castellón - id_team 122
            ['id_team' => 122, 'name' => 'La Liga'],
            ['id_team' => 122, 'name' => 'Copa del Rey'],

            // Eldense - id_team 123
            ['id_team' => 123, 'name' => 'La Liga'],
            ['id_team' => 123, 'name' => 'Copa del Rey'],

            // Girona (duplicado) - id_team 124
            ['id_team' => 124, 'name' => 'La Liga'],
            ['id_team' => 124, 'name' => 'Copa del Rey'],
            ['id_team' => 124, 'name' => 'UEFA Champions League'],

            // Granada - id_team 125
            ['id_team' => 125, 'name' => 'La Liga'],
            ['id_team' => 125, 'name' => 'Copa del Rey'],
            ['id_team' => 125, 'name' => 'UEFA Europa League'],

            // Ibiza - id_team 126
            ['id_team' => 126, 'name' => 'La Liga'],
            ['id_team' => 126, 'name' => 'Copa del Rey'],

            // Las Palmas (duplicado) - id_team 127
            ['id_team' => 127, 'name' => 'La Liga'],
            ['id_team' => 127, 'name' => 'Copa del Rey'],
            ['id_team' => 127, 'name' => 'UEFA Europa League'],

            // Levante - id_team 128
            ['id_team' => 128, 'name' => 'La Liga'],
            ['id_team' => 128, 'name' => 'Copa del Rey'],
            ['id_team' => 128, 'name' => 'UEFA Europa League'],

            // Lugo - id_team 129
            ['id_team' => 129, 'name' => 'La Liga'],
            ['id_team' => 129, 'name' => 'Copa del Rey'],

            // Málaga - id_team 130
            ['id_team' => 130, 'name' => 'La Liga'],
            ['id_team' => 130, 'name' => 'Copa del Rey'],
            ['id_team' => 130, 'name' => 'UEFA Europa League'],

            // Mirandés - id_team 131
            ['id_team' => 131, 'name' => 'La Liga'],
            ['id_team' => 131, 'name' => 'Copa del Rey'],

            // Ponferradina - id_team 132
            ['id_team' => 132, 'name' => 'La Liga'],
            ['id_team' => 132, 'name' => 'Copa del Rey'],

            // Real Oviedo - id_team 133
            ['id_team' => 133, 'name' => 'La Liga'],
            ['id_team' => 133, 'name' => 'Copa del Rey'],

            // Real Sporting - id_team 134
            ['id_team' => 134, 'name' => 'La Liga'],
            ['id_team' => 134, 'name' => 'Copa del Rey'],

            // Real Zaragoza - id_team 135
            ['id_team' => 135, 'name' => 'La Liga'],
            ['id_team' => 135, 'name' => 'Copa del Rey'],
            ['id_team' => 135, 'name' => 'UEFA Europa League'],

            // Rayo Vallecano (duplicado) - id_team 136
            ['id_team' => 136, 'name' => 'La Liga'],
            ['id_team' => 136, 'name' => 'Copa del Rey'],
            ['id_team' => 136, 'name' => 'UEFA Europa League'],

            // Tenerife - id_team 137
            ['id_team' => 137, 'name' => 'La Liga'],
            ['id_team' => 137, 'name' => 'Copa del Rey'],

            // Villarreal B - id_team 138
            ['id_team' => 138, 'name' => 'La Liga'],
            ['id_team' => 138, 'name' => 'Copa del Rey'],

            // Alemanha
            // Bayern Munich - id_team 139
            ['id_team' => 139, 'name' => 'DFB-Pokal'], // Exemplo
            ['id_team' => 139, 'name' => 'DFL-Supercup'], // Exemplo
            ['id_team' => 139, 'name' => 'UEFA Europa League'], // Nunca venceram a Europa League

            // Borussia Dortmund - id_team 140
            ['id_team' => 140, 'name' => 'UEFA Champions League'], // Já venceram, mas incluído para fins de exemplo
            ['id_team' => 140, 'name' => 'Bundesliga'], // Já venceram, mas incluído para fins de exemplo
            ['id_team' => 140, 'name' => 'UEFA Europa League'], // Nunca venceram a Europa League

            // RB Leipzig - id_team 141
            ['id_team' => 141, 'name' => 'Bundesliga'],
            ['id_team' => 141, 'name' => 'UEFA Champions League'],

            // Bayer Leverkusen - id_team 142
            ['id_team' => 142, 'name' => 'UEFA Champions League'],
            ['id_team' => 142, 'name' => 'DFB-Pokal'], // Já venceram
            ['id_team' => 142, 'name' => 'Bundesliga'], // Já venceram

            // Eintracht Frankfurt - id_team 143
            ['id_team' => 143, 'name' => 'Bundesliga'],
            ['id_team' => 143, 'name' => 'UEFA Champions League'],

            // VfB Stuttgart - id_team 144
            ['id_team' => 144, 'name' => 'UEFA Champions League'],
            ['id_team' => 144, 'name' => 'DFB-Pokal'],
            ['id_team' => 144, 'name' => 'Bundesliga'],

            // Borussia Mönchengladbach - id_team 145
            ['id_team' => 145, 'name' => 'UEFA Champions League'],
            ['id_team' => 145, 'name' => 'Bundesliga'],
            ['id_team' => 145, 'name' => 'DFB-Pokal'],

            // Werder Bremen - id_team 146
            ['id_team' => 146, 'name' => 'UEFA Champions League'],
            ['id_team' => 146, 'name' => 'Bundesliga'],
            ['id_team' => 146, 'name' => 'DFB-Pokal'],

            // FC Köln - id_team 147
            ['id_team' => 147, 'name' => 'UEFA Champions League'],
            ['id_team' => 147, 'name' => 'Bundesliga'],
            ['id_team' => 147, 'name' => 'DFB-Pokal'],

            // VfL Wolfsburg - id_team 148
            ['id_team' => 148, 'name' => 'UEFA Champions League'],
            ['id_team' => 148, 'name' => 'DFB-Pokal'],

            // SC Freiburg - id_team 149
            ['id_team' => 149, 'name' => 'Bundesliga'],
            ['id_team' => 149, 'name' => 'DFB-Pokal'],
            ['id_team' => 149, 'name' => 'UEFA Europa League'],

            // FC Augsburg - id_team 150
            ['id_team' => 150, 'name' => 'Bundesliga'],
            ['id_team' => 150, 'name' => 'DFB-Pokal'],
            ['id_team' => 150, 'name' => 'UEFA Europa League'],

            // TSG Hoffenheim - id_team 151
            ['id_team' => 151, 'name' => 'Bundesliga'],
            ['id_team' => 151, 'name' => 'DFB-Pokal'],
            ['id_team' => 151, 'name' => 'UEFA Champions League'],

            // Mainz 05 - id_team 152
            ['id_team' => 152, 'name' => 'Bundesliga'],
            ['id_team' => 152, 'name' => 'DFB-Pokal'],
            ['id_team' => 152, 'name' => 'UEFA Europa League'],

            // Union Berlin - id_team 153
            ['id_team' => 153, 'name' => 'Bundesliga'],
            ['id_team' => 153, 'name' => 'DFB-Pokal'],
            ['id_team' => 153, 'name' => 'UEFA Champions League'],

            // VfL Bochum - id_team 154
            ['id_team' => 154, 'name' => 'Bundesliga'],
            ['id_team' => 154, 'name' => 'DFB-Pokal'],
            ['id_team' => 154, 'name' => 'UEFA Europa League'],

            // Eintracht Heidenheim - id_team 155
            ['id_team' => 155, 'name' => 'Bundesliga'],
            ['id_team' => 155, 'name' => 'DFB-Pokal'],

            // SC Paderborn - id_team 156
            ['id_team' => 156, 'name' => 'Bundesliga'],
            ['id_team' => 156, 'name' => 'DFB-Pokal'],

            // FC St. Pauli - id_team 157
            ['id_team' => 157, 'name' => 'Bundesliga'],
            ['id_team' => 157, 'name' => 'DFB-Pokal'],

            // Hertha BSC - id_team 158
            ['id_team' => 158, 'name' => 'Bundesliga'],
            ['id_team' => 158, 'name' => 'DFB-Pokal'],

            // Hamburger SV - id_team 159
            ['id_team' => 159, 'name' => 'UEFA Champions League'], // Já venceram, mas para fins de exemplo
            ['id_team' => 159, 'name' => 'Bundesliga'], // Já venceram, mas para fins de exemplo
            ['id_team' => 159, 'name' => 'DFB-Pokal'],

            // Schalke 04 - id_team 160
            ['id_team' => 160, 'name' => 'Bundesliga'],
            ['id_team' => 160, 'name' => 'UEFA Champions League'],

            // 1. FC Köln (duplicado) - id_team 161
            ['id_team' => 161, 'name' => 'UEFA Champions League'],
            ['id_team' => 161, 'name' => 'Bundesliga'],
            ['id_team' => 161, 'name' => 'DFB-Pokal'],

            // 1. FC Nürnberg - id_team 162
            ['id_team' => 162, 'name' => 'Bundesliga'],
            ['id_team' => 162, 'name' => 'DFB-Pokal'],

            // Hannover 96 - id_team 163
            ['id_team' => 163, 'name' => 'Bundesliga'],
            ['id_team' => 163, 'name' => 'DFB-Pokal'],

            // 1. FC Kaiserslautern - id_team 164
            ['id_team' => 164, 'name' => 'Bundesliga'],
            ['id_team' => 164, 'name' => 'DFB-Pokal'],

            // Eintracht Braunschweig - id_team 165
            ['id_team' => 165, 'name' => 'Bundesliga'],
            ['id_team' => 165, 'name' => 'DFB-Pokal'],

            // Darmstadt 98 - id_team 166
            ['id_team' => 166, 'name' => 'Bundesliga'],
            ['id_team' => 166, 'name' => 'DFB-Pokal'],

            // Fortuna Düsseldorf - id_team 167
            ['id_team' => 167, 'name' => 'Bundesliga'],
            ['id_team' => 167, 'name' => 'DFB-Pokal'],

            // Karlsruher SC - id_team 168
            ['id_team' => 168, 'name' => 'Bundesliga'],
            ['id_team' => 168, 'name' => 'DFB-Pokal'],

            // 1. FC Magdeburg - id_team 169
            ['id_team' => 169, 'name' => 'Bundesliga'],
            ['id_team' => 169, 'name' => 'DFB-Pokal'],

            // SC Paderborn (duplicado) - id_team 170
            ['id_team' => 170, 'name' => 'Bundesliga'],
            ['id_team' => 170, 'name' => 'DFB-Pokal'],

            // SV Elversberg - id_team 171
            ['id_team' => 171, 'name' => 'Bundesliga'],
            ['id_team' => 171, 'name' => 'DFB-Pokal'],

            // Greuther Fürth - id_team 172
            ['id_team' => 172, 'name' => 'Bundesliga'],
            ['id_team' => 172, 'name' => 'DFB-Pokal'],

            // Holstein Kiel - id_team 173
            ['id_team' => 173, 'name' => 'Bundesliga'],
            ['id_team' => 173, 'name' => 'DFB-Pokal'],

            // SSV Ulm - id_team 174
            ['id_team' => 174, 'name' => 'Bundesliga'],
            ['id_team' => 174, 'name' => 'DFB-Pokal'],

            // Preußen Münster - id_team 175
            ['id_team' => 175, 'name' => 'Bundesliga'],
            ['id_team' => 175, 'name' => 'DFB-Pokal'],

            // Jahn Regensburg - id_team 176
            ['id_team' => 176, 'name' => 'Bundesliga'],
            ['id_team' => 176, 'name' => 'DFB-Pokal'],

            // Alemannia Aachen - id_team 177
            ['id_team' => 177, 'name' => 'Bundesliga'],
            ['id_team' => 177, 'name' => 'DFB-Pokal'],

            // Arminia Bielefeld - id_team 178
            ['id_team' => 178, 'name' => 'Bundesliga'],
            ['id_team' => 178, 'name' => 'DFB-Pokal'],

            // Energie Cottbus - id_team 179
            ['id_team' => 179, 'name' => 'Bundesliga'],
            ['id_team' => 179, 'name' => 'DFB-Pokal'],

            // Borussia Dortmund II - id_team 180
            ['id_team' => 180, 'name' => 'Bundesliga'], // Teoricamente não joga a Bundesliga principal
            ['id_team' => 180, 'name' => 'DFB-Pokal'], // Teoricamente não joga a DFB-Pokal principal

            // Dynamo Dresden - id_team 181
            ['id_team' => 181, 'name' => 'Bundesliga'],
            ['id_team' => 181, 'name' => 'DFB-Pokal'],

            // Erzgebirge Aue - id_team 182
            ['id_team' => 182, 'name' => 'Bundesliga'],
            ['id_team' => 182, 'name' => 'DFB-Pokal'],

            // FC Ingolstadt - id_team 183
            ['id_team' => 183, 'name' => 'Bundesliga'],
            ['id_team' => 183, 'name' => 'DFB-Pokal'],

            // Viktoria Köln - id_team 184
            ['id_team' => 184, 'name' => 'Bundesliga'],
            ['id_team' => 184, 'name' => 'DFB-Pokal'],

            // Waldhof Mannheim - id_team 185
            ['id_team' => 185, 'name' => 'Bundesliga'],
            ['id_team' => 185, 'name' => 'DFB-Pokal'],

            // 1860 Munich - id_team 186
            ['id_team' => 186, 'name' => 'Bundesliga'],
            ['id_team' => 186, 'name' => 'DFB-Pokal'],

            // VfL Osnabrück - id_team 187
            ['id_team' => 187, 'name' => 'Bundesliga'],
            ['id_team' => 187, 'name' => 'DFB-Pokal'],

            // Hansa Rostock - id_team 188
            ['id_team' => 188, 'name' => 'Bundesliga'],
            ['id_team' => 188, 'name' => 'DFB-Pokal'],

            // Rot-Weiss Essen - id_team 189
            ['id_team' => 189, 'name' => 'Bundesliga'],
            ['id_team' => 189, 'name' => 'DFB-Pokal'],

            // SV Sandhausen - id_team 190
            ['id_team' => 190, 'name' => 'Bundesliga'],
            ['id_team' => 190, 'name' => 'DFB-Pokal'],

            // SpVgg Unterhaching - id_team 191
            ['id_team' => 191, 'name' => 'Bundesliga'],
            ['id_team' => 191, 'name' => 'DFB-Pokal'],

            // VfB Stuttgart II - id_team 192
            ['id_team' => 192, 'name' => 'Bundesliga'], // Teoricamente não joga a Bundesliga principal
            ['id_team' => 192, 'name' => 'DFB-Pokal'], // Teoricamente não joga a DFB-Pokal principal

            // SC Verl - id_team 193
            ['id_team' => 193, 'name' => 'Bundesliga'],
            ['id_team' => 193, 'name' => 'DFB-Pokal'],

            // França
            // Paris Saint-Germain - id_team 194
            ['id_team' => 194, 'name' => 'UEFA Champions League'], // Nunca venceram a Champions
            ['id_team' => 194, 'name' => 'Ligue 1'], // Para fins de exemplo
            ['id_team' => 194, 'name' => 'Coupe de France'], // Para fins de exemplo

            // Olympique Marseille - id_team 195
            ['id_team' => 195, 'name' => 'UEFA Champions League'], // Já venceram, mas para fins de exemplo
            ['id_team' => 195, 'name' => 'Ligue 1'], // Já venceram, mas para fins de exemplo
            ['id_team' => 195, 'name' => 'Coupe de France'],

            // AS Monaco - id_team 196
            ['id_team' => 196, 'name' => 'UEFA Champions League'],
            ['id_team' => 196, 'name' => 'Ligue 1'],
            ['id_team' => 196, 'name' => 'Coupe de France'],

            // Olympique Lyonnais - id_team 197
            ['id_team' => 197, 'name' => 'UEFA Champions League'],
            ['id_team' => 197, 'name' => 'Ligue 1'],
            ['id_team' => 197, 'name' => 'Coupe de France'],

            // LOSC Lille - id_team 198
            ['id_team' => 198, 'name' => 'UEFA Champions League'],
            ['id_team' => 198, 'name' => 'Ligue 1'],
            ['id_team' => 198, 'name' => 'Coupe de France'],

            // OGC Nice - id_team 199
            ['id_team' => 199, 'name' => 'Ligue 1'],
            ['id_team' => 199, 'name' => 'Coupe de France'],
            ['id_team' => 199, 'name' => 'UEFA Europa League'],

            // RC Lens - id_team 200
            ['id_team' => 200, 'name' => 'Ligue 1'],
            ['id_team' => 200, 'name' => 'Coupe de France'],
            ['id_team' => 200, 'name' => 'UEFA Champions League'],

            // Stade Rennais - id_team 201
            ['id_team' => 201, 'name' => 'Ligue 1'],
            ['id_team' => 201, 'name' => 'UEFA Champions League'],

            // FC Nantes - id_team 202
            ['id_team' => 202, 'name' => 'UEFA Champions League'],
            ['id_team' => 202, 'name' => 'Ligue 1'],
            ['id_team' => 202, 'name' => 'Coupe de France'],

            // Montpellier HSC - id_team 203
            ['id_team' => 203, 'name' => 'UEFA Champions League'],
            ['id_team' => 203, 'name' => 'Coupe de France'],

            // Stade Brestois 29 - id_team 204
            ['id_team' => 204, 'name' => 'Ligue 1'],
            ['id_team' => 204, 'name' => 'Coupe de France'],
            ['id_team' => 204, 'name' => 'UEFA Europa League'],

            // Angers SCO - id_team 205
            ['id_team' => 205, 'name' => 'Ligue 1'],
            ['id_team' => 205, 'name' => 'Coupe de France'],

            // AJ Auxerre - id_team 206
            ['id_team' => 206, 'name' => 'UEFA Champions League'],
            ['id_team' => 206, 'name' => 'Ligue 1'],
            ['id_team' => 206, 'name' => 'Coupe de France'],

            // Le Havre AC - id_team 207
            ['id_team' => 207, 'name' => 'Ligue 1'],
            ['id_team' => 207, 'name' => 'Coupe de France'],

            // Stade de Reims - id_team 208
            ['id_team' => 208, 'name' => 'UEFA Champions League'],
            ['id_team' => 208, 'name' => 'Ligue 1'],
            ['id_team' => 208, 'name' => 'Coupe de France'],

            // Stade Strasbourg - id_team 209
            ['id_team' => 209, 'name' => 'Ligue 1'],
            ['id_team' => 209, 'name' => 'Coupe de France'],
            ['id_team' => 209, 'name' => 'UEFA Europa League'],

            // AS Saint‑Étienne - id_team 210
            ['id_team' => 210, 'name' => 'UEFA Champions League'],
            ['id_team' => 210, 'name' => 'Ligue 1'],
            ['id_team' => 210, 'name' => 'Coupe de France'],

            // Toulouse FC - id_team 211
            ['id_team' => 211, 'name' => 'Ligue 1'],
            ['id_team' => 211, 'name' => 'UEFA Europa League'],

            // Le Havre AC (duplicado) - id_team 212
            ['id_team' => 212, 'name' => 'Ligue 1'],
            ['id_team' => 212, 'name' => 'Coupe de France'],

            // AJ Auxerre (duplicado) - id_team 213
            ['id_team' => 213, 'name' => 'UEFA Champions League'],
            ['id_team' => 213, 'name' => 'Ligue 1'],
            ['id_team' => 213, 'name' => 'Coupe de France'],

            // EA Guingamp - id_team 214
            ['id_team' => 214, 'name' => 'Ligue 1'],
            ['id_team' => 214, 'name' => 'Coupe de France'],

            // Grenoble Foot 38 - id_team 215
            ['id_team' => 215, 'name' => 'Ligue 1'],
            ['id_team' => 215, 'name' => 'Coupe de France'],

            // Stade Laval - id_team 216
            ['id_team' => 216, 'name' => 'Ligue 1'],
            ['id_team' => 216, 'name' => 'Coupe de France'],

            // Valenciennes FC - id_team 217
            ['id_team' => 217, 'name' => 'Ligue 1'],
            ['id_team' => 217, 'name' => 'Coupe de France'],

            // Clermont Foot - id_team 218
            ['id_team' => 218, 'name' => 'Ligue 1'],
            ['id_team' => 218, 'name' => 'Coupe de France'],

            // Dijon FCO - id_team 219
            ['id_team' => 219, 'name' => 'Ligue 1'],
            ['id_team' => 219, 'name' => 'Coupe de France'],

            // Nîmes Olympique - id_team 220
            ['id_team' => 220, 'name' => 'Ligue 1'],
            ['id_team' => 220, 'name' => 'Coupe de France'],

            // Quevilly Rouen Métropole - id_team 221
            ['id_team' => 221, 'name' => 'Ligue 1'],
            ['id_team' => 221, 'name' => 'Coupe de France'],

            // Paris FC - id_team 222
            ['id_team' => 222, 'name' => 'Ligue 1'],
            ['id_team' => 222, 'name' => 'Coupe de France'],

            // Sochaux - id_team 223
            ['id_team' => 223, 'name' => 'Ligue 1'],
            ['id_team' => 223, 'name' => 'Coupe de France'],

            // AJ Caen - id_team 224
            ['id_team' => 224, 'name' => 'Ligue 1'],
            ['id_team' => 224, 'name' => 'Coupe de France'],

            // Lorient - id_team 225
            ['id_team' => 225, 'name' => 'Ligue 1'],
            ['id_team' => 225, 'name' => 'Coupe de France'],

            // Troyes AC - id_team 226
            ['id_team' => 226, 'name' => 'Ligue 1'],
            ['id_team' => 226, 'name' => 'Coupe de France'],

            // AC Ajaccio - id_team 227
            ['id_team' => 227, 'name' => 'Ligue 1'],
            ['id_team' => 227, 'name' => 'Coupe de France'],

            // Caen (duplicado) - id_team 228
            ['id_team' => 228, 'name' => 'Ligue 1'],
            ['id_team' => 228, 'name' => 'Coupe de France'],

            // Paris FC (duplicado) - id_team 229
            ['id_team' => 229, 'name' => 'Ligue 1'],
            ['id_team' => 229, 'name' => 'Coupe de France'],

            ['id_team' => 230, 'name' => 'UEFA Europa League'],
            ['id_team' => 230, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para AC Milan
            ['id_team' => 231, 'name' => 'UEFA Europa League'],
            ['id_team' => 231, 'name' => 'Copa Intercontinental'], // Se for para considerar históricos
            ['id_team' => 231, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Inter Milan
            ['id_team' => 232, 'name' => 'UEFA Europa League'],
            ['id_team' => 232, 'name' => 'UEFA Super Cup'],

            // Campeonatos para Napoli
            ['id_team' => 233, 'name' => 'UEFA Champions League'],
            ['id_team' => 233, 'name' => 'Copa do Mundo de Clubes da FIFA'],
            ['id_team' => 233, 'name' => 'UEFA Europa League'],

            // Campeonatos para Roma
            ['id_team' => 234, 'name' => 'Serie A'],
            ['id_team' => 234, 'name' => 'UEFA Champions League'],
            ['id_team' => 234, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Lazio
            ['id_team' => 235, 'name' => 'Serie A'],
            ['id_team' => 235, 'name' => 'UEFA Champions League'],
            ['id_team' => 235, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Atalanta
            ['id_team' => 236, 'name' => 'Serie A'],
            ['id_team' => 236, 'name' => 'UEFA Champions League'],
            ['id_team' => 236, 'name' => 'Copa da Itália'],

            // Campeonatos para Fiorentina
            ['id_team' => 237, 'name' => 'Serie A'],
            ['id_team' => 237, 'name' => 'UEFA Champions League'],
            ['id_team' => 237, 'name' => 'Copa da Itália'],

            // Campeonatos para Sassuolo
            ['id_team' => 238, 'name' => 'Serie A'],
            ['id_team' => 238, 'name' => 'Copa da Itália'],
            ['id_team' => 238, 'name' => 'UEFA Europa League'],

            // Campeonatos para Torino
            ['id_team' => 239, 'name' => 'Serie A'],
            ['id_team' => 239, 'name' => 'Copa da Itália'],
            ['id_team' => 239, 'name' => 'UEFA Europa League'],

            // Campeonatos para Udinese
            ['id_team' => 240, 'name' => 'Serie A'],
            ['id_team' => 240, 'name' => 'Copa da Itália'],
            ['id_team' => 240, 'name' => 'UEFA Europa League'],

            // Campeonatos para Monza
            ['id_team' => 241, 'name' => 'Serie A'],
            ['id_team' => 241, 'name' => 'Copa da Itália'],
            ['id_team' => 241, 'name' => 'Serie B'], // Se for considerado como um "a vencer" para o próximo nível

            // Campeonatos para Empoli
            ['id_team' => 242, 'name' => 'Serie A'],
            ['id_team' => 242, 'name' => 'Copa da Itália'],

            // Campeonatos para Salernitana
            ['id_team' => 243, 'name' => 'Serie A'],
            ['id_team' => 243, 'name' => 'Copa da Itália'],

            // Campeonatos para Lecce (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 244, 'name' => 'Serie A'],
            ['id_team' => 244, 'name' => 'Copa da Itália'],

            // Campeonatos para Bologna
            ['id_team' => 245, 'name' => 'Serie A'],
            ['id_team' => 245, 'name' => 'Copa da Itália'],

            // Campeonatos para Spezia
            ['id_team' => 246, 'name' => 'Serie A'],
            ['id_team' => 246, 'name' => 'Copa da Itália'],

            // Campeonatos para Verona
            ['id_team' => 247, 'name' => 'Serie A'],
            ['id_team' => 247, 'name' => 'Copa da Itália'],

            // Campeonatos para Brescia
            ['id_team' => 248, 'name' => 'Serie A'],
            ['id_team' => 248, 'name' => 'Copa da Itália'],

            // Campeonatos para Bari
            ['id_team' => 249, 'name' => 'Serie A'],
            ['id_team' => 249, 'name' => 'Copa da Itália'],

            // Campeonatos para Palermo
            ['id_team' => 250, 'name' => 'Serie A'],
            ['id_team' => 250, 'name' => 'Copa da Itália'],

            // Campeonatos para Parma
            ['id_team' => 251, 'name' => 'Serie A'],
            ['id_team' => 251, 'name' => 'Copa da Itália'],
            ['id_team' => 251, 'name' => 'UEFA Champions League'], // Já ganharam UEFA Cup, mas não Champions

            // Campeonatos para Frosinone
            ['id_team' => 252, 'name' => 'Serie A'],
            ['id_team' => 252, 'name' => 'Copa da Itália'],

            // Campeonatos para Cremonese (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 253, 'name' => 'Serie A'],
            ['id_team' => 253, 'name' => 'Copa da Itália'],

            // Campeonatos para Lecce (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 254, 'name' => 'Serie A'],
            ['id_team' => 254, 'name' => 'Copa da Itália'],

            // Campeonatos para Como
            ['id_team' => 255, 'name' => 'Serie A'],
            ['id_team' => 255, 'name' => 'Copa da Itália'],

            // Campeonatos para Modena
            ['id_team' => 256, 'name' => 'Serie A'],
            ['id_team' => 256, 'name' => 'Copa da Itália'],

            // Campeonatos para Cosenza
            ['id_team' => 257, 'name' => 'Serie A'],
            ['id_team' => 257, 'name' => 'Copa da Itália'],

            // Campeonatos para Reggina
            ['id_team' => 258, 'name' => 'Serie A'],
            ['id_team' => 258, 'name' => 'Copa da Itália'],

            // Campeonatos para Pisa
            ['id_team' => 259, 'name' => 'Serie A'],
            ['id_team' => 259, 'name' => 'Copa da Itália'],

            // Campeonatos para Cittadella
            ['id_team' => 260, 'name' => 'Serie A'],
            ['id_team' => 260, 'name' => 'Copa da Itália'],

            // Campeonatos para Sudtirol
            ['id_team' => 261, 'name' => 'Serie A'],
            ['id_team' => 261, 'name' => 'Copa da Itália'],

            // Campeonatos para Benevento
            ['id_team' => 262, 'name' => 'Serie A'],
            ['id_team' => 262, 'name' => 'Copa da Itália'],

            // Campeonatos para Cremonese (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 263, 'name' => 'Serie A'],
            ['id_team' => 263, 'name' => 'Copa da Itália'],

            // Campeonatos para Perugia
            ['id_team' => 264, 'name' => 'Serie A'],
            ['id_team' => 264, 'name' => 'Copa da Itália'],

            // Campeonatos para LA Galaxy
            ['id_team' => 265, 'name' => 'CONCACAF Champions Cup'],
            ['id_team' => 265, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Seattle Sounders
            ['id_team' => 266, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Atlanta United
            ['id_team' => 267, 'name' => 'CONCACAF Champions Cup'],
            ['id_team' => 267, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Toronto FC
            ['id_team' => 268, 'name' => 'CONCACAF Champions Cup'],
            ['id_team' => 268, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para New York Red Bulls
            ['id_team' => 269, 'name' => 'MLS Cup'],
            ['id_team' => 269, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Portland Timbers
            ['id_team' => 270, 'name' => 'MLS Cup'],
            ['id_team' => 270, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Philadelphia Union
            ['id_team' => 271, 'name' => 'MLS Cup'],
            ['id_team' => 271, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para FC Cincinnati
            ['id_team' => 272, 'name' => 'MLS Cup'],
            ['id_team' => 272, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Sporting Kansas City
            ['id_team' => 273, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Real Salt Lake
            ['id_team' => 274, 'name' => 'MLS Cup'],
            ['id_team' => 274, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Minnesota United
            ['id_team' => 275, 'name' => 'MLS Cup'],
            ['id_team' => 275, 'name' => 'US Open Cup'],

            // Campeonatos para Chicago Fire
            ['id_team' => 276, 'name' => 'MLS Cup'],
            ['id_team' => 276, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para CF Montréal
            ['id_team' => 277, 'name' => 'MLS Cup'],
            ['id_team' => 277, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Columbus Crew
            ['id_team' => 278, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para New England Revolution
            ['id_team' => 279, 'name' => 'MLS Cup'],
            ['id_team' => 279, 'name' => 'US Open Cup'],

            // Campeonatos para Houston Dynamo
            ['id_team' => 280, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para D.C. United
            ['id_team' => 281, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Inter Miami
            ['id_team' => 282, 'name' => 'MLS Cup'],
            ['id_team' => 282, 'name' => 'CONCACAF Champions Cup'],

            // Campeonatos para Nashville SC
            ['id_team' => 283, 'name' => 'MLS Cup'],
            ['id_team' => 283, 'name' => 'US Open Cup'],

            // Campeonatos para Austin FC
            ['id_team' => 284, 'name' => 'MLS Cup'],
            ['id_team' => 284, 'name' => 'US Open Cup'],

            // Campeonatos para Atlanta United 2 (MLS Next Pro)
            ['id_team' => 285, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 285, 'name' => 'US Open Cup'],

            // Campeonatos para Austin FC II (MLS Next Pro)
            ['id_team' => 286, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 286, 'name' => 'US Open Cup'],

            // Campeonatos para Charlotte FC Next Pro (MLS Next Pro)
            ['id_team' => 287, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 287, 'name' => 'US Open Cup'],

            // Campeonatos para Chicago Fire FC II (MLS Next Pro) (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 288, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 288, 'name' => 'US Open Cup'],

            // Campeonatos para Colorado Rapids 2 (MLS Next Pro)
            ['id_team' => 289, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 289, 'name' => 'US Open Cup'],

            // Campeonatos para Columbus Crew 2 (MLS Next Pro)
            ['id_team' => 290, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 290, 'name' => 'US Open Cup'],

            // Campeonatos para FC Cincinnati 2 (MLS Next Pro)
            ['id_team' => 291, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 291, 'name' => 'US Open Cup'],

            // Campeonatos para Chicago Fire FC II (MLS Next Pro) (duplicado no pedido, manter conforme solicitado)
            ['id_team' => 292, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 292, 'name' => 'US Open Cup'],

            // Campeonatos para Houston Dynamo 2 (MLS Next Pro)
            ['id_team' => 293, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 293, 'name' => 'US Open Cup'],

            // Campeonatos para Inter Miami CF II (MLS Next Pro)
            ['id_team' => 294, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 294, 'name' => 'US Open Cup'],

            // Campeonatos para LA Galaxy II (MLS Next Pro)
            ['id_team' => 295, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 295, 'name' => 'US Open Cup'],

            // Campeonatos para MKE Anomaly FC (MLS Next Pro)
            ['id_team' => 296, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 296, 'name' => 'US Open Cup'],

            // Campeonatos para New England Revolution II (MLS Next Pro)
            ['id_team' => 297, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 297, 'name' => 'US Open Cup'],

            // Campeonatos para New York City FC II (MLS Next Pro)
            ['id_team' => 298, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 298, 'name' => 'US Open Cup'],

            // Campeonatos para Orlando City B (MLS Next Pro)
            ['id_team' => 299, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 299, 'name' => 'US Open Cup'],

            // Campeonatos para Philadelphia Union II (MLS Next Pro)
            ['id_team' => 300, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 300, 'name' => 'US Open Cup'],

            // Campeonatos para Portland Timbers 2 (MLS Next Pro)
            ['id_team' => 301, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 301, 'name' => 'US Open Cup'],

            // Campeonatos para Real Monarchs (MLS Next Pro)
            ['id_team' => 302, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 302, 'name' => 'US Open Cup'],

            // Campeonatos para Rochester New York FC (MLS Next Pro - extinto, mas mantido para o exemplo)
            ['id_team' => 303, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 303, 'name' => 'US Open Cup'],

            // Campeonatos para Tacoma Defiance (MLS Next Pro)
            ['id_team' => 304, 'name' => 'MLS Next Pro Cup'],
            ['id_team' => 304, 'name' => 'US Open Cup'],

            // Campeonatos para Benfica
            ['id_team' => 305, 'name' => 'UEFA Champions League'],
            ['id_team' => 305, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Porto
            ['id_team' => 306, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Sporting CP
            ['id_team' => 307, 'name' => 'UEFA Champions League'],
            ['id_team' => 307, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Braga
            ['id_team' => 308, 'name' => 'Primeira Liga'],
            ['id_team' => 308, 'name' => 'UEFA Europa League'],

            // Campeonatos para Vitória SC
            ['id_team' => 309, 'name' => 'Primeira Liga'],
            ['id_team' => 309, 'name' => 'Taça de Portugal'],

            // Campeonatos para Marítimo
            ['id_team' => 310, 'name' => 'Primeira Liga'],
            ['id_team' => 310, 'name' => 'Taça de Portugal'],

            // Campeonatos para Gil Vicente
            ['id_team' => 311, 'name' => 'Primeira Liga'],
            ['id_team' => 311, 'name' => 'Taça de Portugal'],

            // Campeonatos para Casa Pia
            ['id_team' => 312, 'name' => 'Primeira Liga'],
            ['id_team' => 312, 'name' => 'Taça de Portugal'],

            // Campeonatos para Portimonense
            ['id_team' => 313, 'name' => 'Primeira Liga'],
            ['id_team' => 313, 'name' => 'Taça de Portugal'],

            // Campeonatos para Paços de Ferreira
            ['id_team' => 314, 'name' => 'Primeira Liga'],
            ['id_team' => 314, 'name' => 'Taça de Portugal'],

            // Campeonatos para Famalicão
            ['id_team' => 315, 'name' => 'Primeira Liga'],
            ['id_team' => 315, 'name' => 'Taça de Portugal'],

            // Campeonatos para Moreirense
            ['id_team' => 316, 'name' => 'Primeira Liga'],
            ['id_team' => 316, 'name' => 'Taça de Portugal'],

            // Campeonatos para Tondela
            ['id_team' => 317, 'name' => 'Primeira Liga'],
            ['id_team' => 317, 'name' => 'Taça de Portugal'],

            // Campeonatos para Chaves
            ['id_team' => 318, 'name' => 'Primeira Liga'],
            ['id_team' => 318, 'name' => 'Taça de Portugal'],

            // Campeonatos para Club Brugge
            ['id_team' => 319, 'name' => 'UEFA Champions League'],
            ['id_team' => 319, 'name' => 'UEFA Europa League'],

            // Campeonatos para RSC Anderlecht
            ['id_team' => 320, 'name' => 'UEFA Champions League'],
            ['id_team' => 320, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Standard Liège
            ['id_team' => 321, 'name' => 'UEFA Champions League'],
            ['id_team' => 321, 'name' => 'UEFA Europa League'],

            // Campeonatos para KAA Gent
            ['id_team' => 322, 'name' => 'Belgian First Division A'],
            ['id_team' => 322, 'name' => 'UEFA Europa League'],

            // Campeonatos para KRC Genk
            ['id_team' => 323, 'name' => 'UEFA Champions League'],
            ['id_team' => 323, 'name' => 'UEFA Europa League'],

            // Campeonatos para Royal Antwerp
            ['id_team' => 324, 'name' => 'UEFA Champions League'],
            ['id_team' => 324, 'name' => 'UEFA Europa League'],

            // Campeonatos para Sint-Truiden
            ['id_team' => 325, 'name' => 'Belgian First Division A'],
            ['id_team' => 325, 'name' => 'Belgian Cup'],

            // Campeonatos para Cercle Brugge
            ['id_team' => 326, 'name' => 'Belgian First Division A'],
            ['id_team' => 326, 'name' => 'Belgian Cup'],

            // Campeonatos para KV Mechelen
            ['id_team' => 327, 'name' => 'Belgian First Division A'],
            ['id_team' => 327, 'name' => 'Belgian Cup'],

            // Campeonatos para Charleroi
            ['id_team' => 328, 'name' => 'Belgian First Division A'],
            ['id_team' => 328, 'name' => 'Belgian Cup'],

            // Campeonatos para OH Leuven
            ['id_team' => 329, 'name' => 'Belgian First Division A'],
            ['id_team' => 329, 'name' => 'Belgian Cup'],

            // Campeonatos para Seraing
            ['id_team' => 330, 'name' => 'Belgian First Division A'],
            ['id_team' => 330, 'name' => 'Belgian Cup'],

            // Campeonatos para Ajax
            ['id_team' => 331, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para PSV Eindhoven
            ['id_team' => 332, 'name' => 'UEFA Champions League'],
            ['id_team' => 332, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Feyenoord
            ['id_team' => 333, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para AZ Alkmaar
            ['id_team' => 334, 'name' => 'UEFA Champions League'],
            ['id_team' => 334, 'name' => 'UEFA Europa League'],

            // Campeonatos para Vitesse
            ['id_team' => 335, 'name' => 'Eredivisie'],
            ['id_team' => 335, 'name' => 'KNVB Cup'],

            // Campeonatos para FC Utrecht
            ['id_team' => 336, 'name' => 'Eredivisie'],
            ['id_team' => 336, 'name' => 'KNVB Cup'],

            // Campeonatos para SC Heerenveen
            ['id_team' => 337, 'name' => 'Eredivisie'],
            ['id_team' => 337, 'name' => 'KNVB Cup'],

            // Campeonatos para Sparta Rotterdam
            ['id_team' => 338, 'name' => 'Eredivisie'],
            ['id_team' => 338, 'name' => 'KNVB Cup'],

            // Campeonatos para Go Ahead Eagles
            ['id_team' => 339, 'name' => 'Eredivisie'],
            ['id_team' => 339, 'name' => 'KNVB Cup'],

            // Campeonatos para FC Twente
            ['id_team' => 340, 'name' => 'UEFA Champions League'],
            ['id_team' => 340, 'name' => 'UEFA Europa League'],

            // Campeonatos para Heracles Almelo
            ['id_team' => 341, 'name' => 'Eredivisie'],
            ['id_team' => 341, 'name' => 'KNVB Cup'],

            // Campeonatos para RKC Waalwijk
            ['id_team' => 342, 'name' => 'Eredivisie'],
            ['id_team' => 342, 'name' => 'KNVB Cup'],

            // Campeonatos para PEC Zwolle
            ['id_team' => 343, 'name' => 'Eredivisie'],
            ['id_team' => 343, 'name' => 'KNVB Cup'],

            // Campeonatos para Fortuna Sittard
            ['id_team' => 344, 'name' => 'Eredivisie'],
            ['id_team' => 344, 'name' => 'KNVB Cup'],

            // Campeonatos para Malmö FF
            ['id_team' => 345, 'name' => 'UEFA Champions League'],
            ['id_team' => 345, 'name' => 'UEFA Europa League'],

            // Campeonatos para AIK
            ['id_team' => 346, 'name' => 'Allsvenskan'],
            ['id_team' => 346, 'name' => 'Svenska Cupen'],

            // Campeonatos para IFK Göteborg
            ['id_team' => 347, 'name' => 'UEFA Champions League'],
            ['id_team' => 347, 'name' => 'UEFA Europa League'],

            // Campeonatos para Djurgårdens IF
            ['id_team' => 348, 'name' => 'Allsvenskan'],
            ['id_team' => 348, 'name' => 'Svenska Cupen'],

            // Campeonatos para Hammarby IF
            ['id_team' => 349, 'name' => 'Allsvenskan'],
            ['id_team' => 349, 'name' => 'Svenska Cupen'],

            // Campeonatos para IF Elfsborg
            ['id_team' => 350, 'name' => 'UEFA Champions League'],
            ['id_team' => 350, 'name' => 'UEFA Europa League'],

            // Campeonatos para Helsingborgs IF
            ['id_team' => 351, 'name' => 'UEFA Champions League'],
            ['id_team' => 351, 'name' => 'UEFA Europa League'],

            // Campeonatos para Örebro SK
            ['id_team' => 352, 'name' => 'Allsvenskan'],
            ['id_team' => 352, 'name' => 'Svenska Cupen'],

            // Campeonatos para Varbergs BoIS
            ['id_team' => 353, 'name' => 'Allsvenskan'],
            ['id_team' => 353, 'name' => 'Svenska Cupen'],

            // Campeonatos para IFK Norrköping
            ['id_team' => 354, 'name' => 'UEFA Champions League'],
            ['id_team' => 354, 'name' => 'UEFA Europa League'],

            // Campeonatos para Kalmar FF
            ['id_team' => 355, 'name' => 'Allsvenskan'],
            ['id_team' => 355, 'name' => 'Svenska Cupen'],

            // Campeonatos para BK Häcken
            ['id_team' => 356, 'name' => 'UEFA Champions League'],
            ['id_team' => 356, 'name' => 'UEFA Europa League'],

            // Campeonatos para Degerfors IF
            ['id_team' => 357, 'name' => 'Allsvenskan'],
            ['id_team' => 357, 'name' => 'Svenska Cupen'],

            // Campeonatos para GIF Sundsvall
            ['id_team' => 358, 'name' => 'Allsvenskan'],
            ['id_team' => 358, 'name' => 'Svenska Cupen'],

            // Campeonatos para Galatasaray
            ['id_team' => 359, 'name' => 'UEFA Champions League'],
            ['id_team' => 359, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Fenerbahçe
            ['id_team' => 360, 'name' => 'UEFA Champions League'],
            ['id_team' => 360, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Beşiktaş
            ['id_team' => 361, 'name' => 'UEFA Champions League'],
            ['id_team' => 361, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Trabzonspor
            ['id_team' => 362, 'name' => 'UEFA Champions League'],
            ['id_team' => 362, 'name' => 'UEFA Europa League'],

            // Campeonatos para İstanbul Başakşehir
            ['id_team' => 363, 'name' => 'UEFA Champions League'],
            ['id_team' => 363, 'name' => 'UEFA Europa League'],

            // Campeonatos para Konyaspor
            ['id_team' => 364, 'name' => 'Süper Lig'],
            ['id_team' => 364, 'name' => 'Turkish Cup'],

            // Campeonatos para Sivasspor
            ['id_team' => 365, 'name' => 'Süper Lig'],
            ['id_team' => 365, 'name' => 'Turkish Cup'],

            // Campeonatos para Gaziantep FK
            ['id_team' => 366, 'name' => 'Süper Lig'],
            ['id_team' => 366, 'name' => 'Turkish Cup'],

            // Campeonatos para Çaykur Rizespor
            ['id_team' => 367, 'name' => 'Süper Lig'],
            ['id_team' => 367, 'name' => 'Turkish Cup'],

            // Campeonatos para Alanyaspor
            ['id_team' => 368, 'name' => 'Süper Lig'],
            ['id_team' => 368, 'name' => 'Turkish Cup'],

            // Campeonatos para Giresunspor
            ['id_team' => 369, 'name' => 'Süper Lig'],
            ['id_team' => 369, 'name' => 'Turkish Cup'],

            // Campeonatos para Kayserispor
            ['id_team' => 370, 'name' => 'Süper Lig'],
            ['id_team' => 370, 'name' => 'Turkish Cup'],

            // Campeonatos para Antalyaspor
            ['id_team' => 371, 'name' => 'Süper Lig'],
            ['id_team' => 371, 'name' => 'Turkish Cup'],

            // Campeonatos para Fatih Karagümrük
            ['id_team' => 372, 'name' => 'Süper Lig'],
            ['id_team' => 372, 'name' => 'Turkish Cup'],

            // Campeonatos para Kasımpaşa
            ['id_team' => 373, 'name' => 'Süper Lig'],
            ['id_team' => 373, 'name' => 'Turkish Cup'],

            // Campeonatos para Flamengo
            ['id_team' => 374, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Palmeiras
            ['id_team' => 375, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para São Paulo
            ['id_team' => 376, 'name' => 'Copa do Mundo de Clubes da FIFA'], // Já ganhou 3 mundiais, mas a Copa do Mundo de Clubes da FIFA (formato atual) ainda não

            // Campeonatos para Corinthians
            ['id_team' => 377, 'name' => 'Copa do Mundo de Clubes da FIFA'], // Já ganhou 2 mundiais, mas pode ser adicionado para o exemplo

            // Campeonatos para Fluminense
            ['id_team' => 378, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Botafogo
            ['id_team' => 379, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 379, 'name' => 'Campeonato Brasileiro Série A'],

            // Campeonatos para Cruzeiro
            ['id_team' => 380, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Atlético Mineiro
            ['id_team' => 381, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Internacional
            ['id_team' => 382, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Grêmio
            ['id_team' => 383, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Vasco da Gama
            ['id_team' => 384, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Bahia
            ['id_team' => 385, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 385, 'name' => 'Copa do Brasil'],

            // Campeonatos para Fortaleza
            ['id_team' => 386, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 386, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Ceará
            ['id_team' => 387, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 387, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Sport Recife
            ['id_team' => 388, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 388, 'name' => 'Campeonato Brasileiro Série A'],

            // Campeonatos para Juventude
            ['id_team' => 389, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 389, 'name' => 'Copa do Brasil'],

            // Campeonatos para Mirassol
            ['id_team' => 390, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 390, 'name' => 'Copa do Brasil'],

            // Campeonatos para Santos
            ['id_team' => 391, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Red Bull Bragantino
            ['id_team' => 392, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 392, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Vitória
            ['id_team' => 393, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 393, 'name' => 'Copa do Brasil'],

            // Campeonatos para Amazonas
            ['id_team' => 394, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 394, 'name' => 'Copa do Brasil'],

            // Campeonatos para América Mineiro
            ['id_team' => 395, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 395, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Athletic Club (MG)
            ['id_team' => 396, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 396, 'name' => 'Copa do Brasil'],

            // Campeonatos para Atlético Goianiense
            ['id_team' => 397, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 397, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Athletico Paranaense
            ['id_team' => 398, 'name' => 'Copa do Mundo de Clubes da FIFA'],

            // Campeonatos para Avaí
            ['id_team' => 399, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 399, 'name' => 'Copa do Brasil'],

            // Campeonatos para Botafogo-SP
            ['id_team' => 400, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 400, 'name' => 'Copa do Brasil'],

            // Campeonatos para Chapecoense
            ['id_team' => 401, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 401, 'name' => 'Campeonato Brasileiro Série A'],

            // Campeonatos para Coritiba
            ['id_team' => 402, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 402, 'name' => 'Copa do Brasil'],

            // Campeonatos para Criciúma
            ['id_team' => 403, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 403, 'name' => 'Copa do Brasil'],

            // Campeonatos para Cuiabá
            ['id_team' => 404, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 404, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para CRB
            ['id_team' => 405, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 405, 'name' => 'Copa do Brasil'],

            // Campeonatos para Ferroviária
            ['id_team' => 406, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 406, 'name' => 'Copa do Brasil'],

            // Campeonatos para Goiás
            ['id_team' => 407, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 407, 'name' => 'Copa Sul-Americana'],

            // Campeonatos para Novorizontino
            ['id_team' => 408, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 408, 'name' => 'Copa do Brasil'],

            // Campeonatos para Operário-PR
            ['id_team' => 409, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 409, 'name' => 'Copa do Brasil'],

            // Campeonatos para Paysandu
            ['id_team' => 410, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 410, 'name' => 'Copa do Brasil'],

            // Campeonatos para Remo
            ['id_team' => 411, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 411, 'name' => 'Copa do Brasil'],

            // Campeonatos para Vila Nova
            ['id_team' => 412, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 412, 'name' => 'Copa do Brasil'],

            // Campeonatos para Volta Redonda
            ['id_team' => 413, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 413, 'name' => 'Copa do Brasil'],

            // Campeonatos para ABC
            ['id_team' => 414, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 414, 'name' => 'Copa do Brasil'],

            // Campeonatos para Anápolis
            ['id_team' => 415, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 415, 'name' => 'Copa do Brasil'],

            // Campeonatos para Botafogo‑PB
            ['id_team' => 416, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 416, 'name' => 'Copa do Brasil'],

            // Campeonatos para Brusque
            ['id_team' => 417, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 417, 'name' => 'Copa do Brasil'],

            // Campeonatos para Caxias
            ['id_team' => 418, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 418, 'name' => 'Copa do Brasil'],

            // Campeonatos para Confiança
            ['id_team' => 419, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 419, 'name' => 'Copa do Brasil'],

            // Campeonatos para CSA
            ['id_team' => 420, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 420, 'name' => 'Copa do Brasil'],

            // Campeonatos para Figueirense
            ['id_team' => 421, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 421, 'name' => 'Copa do Brasil'],

            // Campeonatos para Floresta
            ['id_team' => 422, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 422, 'name' => 'Copa do Brasil'],

            // Campeonatos para Guarani
            ['id_team' => 423, 'name' => 'Copa Libertadores da América'],
            ['id_team' => 423, 'name' => 'Copa do Brasil'],

            // Campeonatos para Itabaiana
            ['id_team' => 424, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 424, 'name' => 'Copa do Brasil'],

            // Campeonatos para Ituano
            ['id_team' => 425, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 425, 'name' => 'Copa do Brasil'],

            // Campeonatos para Londrina
            ['id_team' => 426, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 426, 'name' => 'Copa do Brasil'],

            // Campeonatos para Maringá
            ['id_team' => 427, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 427, 'name' => 'Copa do Brasil'],

            // Campeonatos para Náutico
            ['id_team' => 428, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 428, 'name' => 'Copa do Brasil'],

            // Campeonatos para Ponte Preta
            ['id_team' => 429, 'name' => 'Copa do Brasil'],
            ['id_team' => 429, 'name' => 'Campeonato Brasileiro Série A'],

            // Campeonatos para Retrô
            ['id_team' => 430, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 430, 'name' => 'Copa do Brasil'],

            // Campeonatos para São Bernardo
            ['id_team' => 431, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 431, 'name' => 'Copa do Brasil'],

            // Campeonatos para Tombense
            ['id_team' => 432, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 432, 'name' => 'Copa do Brasil'],

            // Campeonatos para Ypiranga‑RS
            ['id_team' => 433, 'name' => 'Campeonato Brasileiro Série A'],
            ['id_team' => 433, 'name' => 'Copa do Brasil'],
        ]);
    }
}
