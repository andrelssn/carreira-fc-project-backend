<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class records extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('records')->insert([
            ['id_team' => 1, 'name' => 'Most English top-flight titles without defeat (The Invincibles)', 'name_ptbr' => 'Mais títulos da primeira divisão inglesa sem derrota (Os Invencíveis)'],
            ['id_team' => 1, 'name' => 'Most FA Cup wins (14 titles)', 'name_ptbr' => 'Mais vitórias na FA Cup (14 títulos)'],
            ['id_team' => 1, 'name' => 'Longest unbeaten run in English top-flight league matches (49 games)', 'name_ptbr' => 'Maior sequência invicta em jogos da primeira divisão inglesa (49 jogos)'],
            ['id_team' => 1, 'name' => 'Most consecutive seasons in the English top flight (107 seasons, ongoing as of 2025)', 'name_ptbr' => 'Mais temporadas consecutivas na primeira divisão inglesa (107 temporadas, em andamento a partir de 2025)'],
            ['id_team' => 1, 'name' => 'Most consecutive Champions League qualifications (19 seasons, 1998-99 to 2016-17)', 'name_ptbr' => 'Mais classificações consecutivas para a Champions League (19 temporadas, de 1998-99 a 2016-17)'],
            ['id_team' => 1, 'name' => 'First London club to reach a UEFA Champions League final (2006)', 'name_ptbr' => 'Primeiro clube de Londres a chegar a uma final da UEFA Champions League (2006)'],
            ['id_team' => 1, 'name' => 'First English team to win the FA Cup and League Cup in the same season (1992-93)', 'name_ptbr' => 'Primeiro time inglês a vencer a FA Cup e a Copa da Liga na mesma temporada (1992-93)'],
            ['id_team' => 1, 'name' => 'Only club to receive a Premier League Golden Trophy (for the Invincibles season)', 'name_ptbr' => 'Único clube a receber um Troféu de Ouro da Premier League (pela temporada dos Invencíveis)'],
            ['id_team' => 1, 'name' => 'Record for the fewest goals conceded in a 38-game Premier League season (15 goals in 2003-04)', 'name_ptbr' => 'Recorde de menos gols sofridos em uma temporada de 38 jogos da Premier League (15 gols em 2003-04)'],
            ['id_team' => 1, 'name' => 'Highest number of consecutive away league games scored in (29 games, 2013-2014)', 'name_ptbr' => 'Maior número de jogos consecutivos fora de casa com gols (29 jogos, 2013-2014)'],
            ['id_team' => 1, 'name' => 'Most individual Premier League Golden Boot awards won by players from one club (5 different players)', 'name_ptbr' => 'Mais prêmios Chuteira de Ouro da Premier League ganhos por jogadores de um mesmo clube (5 jogadores diferentes)'],
            ['id_team' => 1, 'name' => 'Highest attendance for a club match at the Emirates Stadium (60,383)', 'name_ptbr' => 'Maior público em uma partida de clube no Emirates Stadium (60.383)'],
            ['id_team' => 1, 'name' => 'Longest-serving manager in Premier League history (Arsène Wenger, 22 years)', 'name_ptbr' => 'Treinador com mais tempo de serviço na história da Premier League (Arsène Wenger, 22 anos)'],
            ['id_team' => 1, 'name' => 'Most goals scored by a player for the club (Thierry Henry, 228 goals)', 'name_ptbr' => 'Mais gols marcados por um jogador pelo clube (Thierry Henry, 228 gols)'],
            ['id_team' => 1, 'name' => 'Most clean sheets by a goalkeeper for the club (David Seaman, 237 clean sheets)', 'name_ptbr' => 'Mais jogos sem sofrer gols por um goleiro pelo clube (David Seaman, 237 jogos sem sofrer gols)'],
            ['id_team' => 1, 'name' => 'Youngest player to represent the club (Ethan Nwaneri, 15 years, 181 days)', 'name_ptbr' => 'Jogador mais jovem a representar o clube (Ethan Nwaneri, 15 anos, 181 dias)'],
            ['id_team' => 2, 'name' => 'Most competitive goals scored by a player (Billy Walker, 244 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Billy Walker, 244 gols)'],
            ['id_team' => 2, 'name' => 'Record for the longest winning run in the Premier League at Villa Park (15 consecutive home wins, 2023-2024)', 'name_ptbr' => 'Recorde de maior sequência de vitórias na Premier League em Villa Park (15 vitórias consecutivas em casa, 2023-2024)'],
            ['id_team' => 2, 'name' => 'Only English club to win the European Cup with 11 players from the local area (1982)', 'name_ptbr' => 'Único clube inglês a vencer a Copa dos Campeões com 11 jogadores da área local (1982)'],
            ['id_team' => 2, 'name' => 'Record for the most goals in a single season (71 goals in 1930-31 First Division)', 'name_ptbr' => 'Recorde de mais gols em uma única temporada (71 gols na Primeira Divisão de 1930-31)'],
            ['id_team' => 2, 'name' => 'One of the founding members of the Football League (1888)', 'name_ptbr' => 'Um dos membros fundadores da Football League (1888)'],
            ['id_team' => 2, 'name' => 'Most FA Cups won (7 times, joint record among non-Big Six clubs)', 'name_ptbr' => 'Mais FA Cups vencidas (7 vezes, recorde conjunto entre clubes fora do Big Six)'],
            ['id_team' => 2, 'name' => 'First English club to win the European Cup after winning the First Division title 20 years earlier.', 'name_ptbr' => 'Primeiro clube inglês a vencer a Copa dos Campeões após vencer o título da Primeira Divisão 20 anos antes.'],
            ['id_team' => 3, 'name' => 'Highest ever league finish (9th in Premier League, 2024-25)', 'name_ptbr' => 'Melhor colocação na liga (9º na Premier League, 2024-25)'],
            ['id_team' => 3, 'name' => 'Most goals scored by a player (Brett Pitman, 102 league goals)', 'name_ptbr' => 'Mais gols marcados por um jogador (Brett Pitman, 102 gols na liga)'],
            ['id_team' => 3, 'name' => 'Record for the fastest rise from League Two to Premier League (6 seasons)', 'name_ptbr' => 'Recorde de ascensão mais rápida da League Two para a Premier League (6 temporadas)'],
            ['id_team' => 3, 'name' => 'Largest competitive victory (10-0 vs. Aldershot, 1990)', 'name_ptbr' => 'Maior vitória competitiva (10-0 vs. Aldershot, 1990)'],
            ['id_team' => 3, 'name' => 'First time reaching the FA Cup Quarter-finals (2020-21 & 2024-25 seasons)', 'name_ptbr' => 'Primeira vez a chegar às quartas de final da FA Cup (temporadas 2020-21 e 2024-25)'],
            ['id_team' => 3, 'name' => 'Highest transfer fee received (Dominic Solanke to Tottenham, £65m in 2025)', 'name_ptbr' => 'Maior taxa de transferência recebida (Dominic Solanke para o Tottenham, £65 milhões em 2025)'],
            ['id_team' => 3, 'name' => 'Most expensive departure (Dean Huijsen to Real Madrid, £50m in 2025)', 'name_ptbr' => 'Saída mais cara (Dean Huijsen para o Real Madrid, £50 milhões em 2025)'],
            ['id_team' => 4, 'name' => 'Highest ever top-flight league finish (5th in First Division, 1935-36)', 'name_ptbr' => 'Melhor colocação na primeira divisão (5º na Primeira Divisão, 1935-36)'],
            ['id_team' => 4, 'name' => 'Most competitive goals scored by a player (Jim Towers, 163 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Jim Towers, 163 gols)'],
            ['id_team' => 4, 'name' => 'Longest unbeaten run in the Premier League (12 games, 2022-23)', 'name_ptbr' => 'Maior sequência invicta na Premier League (12 jogos, 2022-23)'],
            ['id_team' => 4, 'name' => 'Highest points tally in the Premier League (59 points, 2022-23)', 'name_ptbr' => 'Maior pontuação na Premier League (59 pontos, 2022-23)'],
            ['id_team' => 4, 'name' => 'First promotion to the Premier League (2021)', 'name_ptbr' => 'Primeira promoção para a Premier League (2021)'],
            ['id_team' => 4, 'name' => 'Highest attendance at Griffin Park (38,678 vs Leicester City, 1949)', 'name_ptbr' => 'Maior público em Griffin Park (38.678 vs Leicester City, 1949)'],
            ['id_team' => 5, 'name' => 'Highest ever league finish (6th in Premier League, 2022-23)', 'name_ptbr' => 'Melhor colocação na liga (6º na Premier League, 2022-23)'],
            ['id_team' => 5, 'name' => 'Most competitive goals scored by a player (Tommy Cook, 123 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Tommy Cook, 123 gols)'],
            ['id_team' => 5, 'name' => 'First time qualifying for European competition (UEFA Europa League, 2023-24)', 'name_ptbr' => 'Primeira vez a se classificar para uma competição europeia (UEFA Europa League, 2023-24)'],
            ['id_team' => 5, 'name' => 'Record points tally in the Premier League (62 points, 2022-23)', 'name_ptbr' => 'Recorde de pontos na Premier League (62 pontos, 2022-23)'],
            ['id_team' => 5, 'name' => 'Longest unbeaten away run in the Premier League (9 games, 2022-23)', 'name_ptbr' => 'Maior sequência invicta fora de casa na Premier League (9 jogos, 2022-23)'],
            ['id_team' => 5, 'name' => 'Highest transfer fee received (Moisés Caicedo to Chelsea, £115m)', 'name_ptbr' => 'Maior taxa de transferência recebida (Moisés Caicedo para o Chelsea, £115 milhões)'],
            ['id_team' => 6, 'name' => 'Most UEFA Champions League titles by a London club (2 titles)', 'name_ptbr' => 'Mais títulos da UEFA Champions League por um clube de Londres (2 títulos)'],
            ['id_team' => 6, 'name' => 'Only London club to have won every major UEFA club competition', 'name_ptbr' => 'Único clube de Londres a ter vencido todas as principais competições de clubes da UEFA'],
            ['id_team' => 6, 'name' => 'Record for the most Premier League clean sheets in a season (25 in 2004-05)', 'name_ptbr' => 'Recorde de mais jogos sem sofrer gols em uma temporada da Premier League (25 em 2004-05)'],
            ['id_team' => 6, 'name' => 'Most competitive goals scored by a player (Frank Lampard, 211 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Frank Lampard, 211 gols)'],
            ['id_team' => 6, 'name' => 'Most points in a Premier League season (95 points in 2004-05)', 'name_ptbr' => 'Mais pontos em uma temporada da Premier League (95 pontos em 2004-05)'],
            ['id_team' => 6, 'name' => 'Longest unbeaten home run in Premier League (86 games, 2004-2008)', 'name_ptbr' => 'Maior sequência invicta em casa na Premier League (86 jogos, 2004-2008)'],
            ['id_team' => 6, 'name' => 'First English club to win the Premier League, FA Cup and League Cup in consecutive seasons.', 'name_ptbr' => 'Primeiro clube inglês a vencer a Premier League, FA Cup e Copa da Liga em temporadas consecutivas.'],
            ['id_team' => 7, 'name' => 'First major trophy won (FA Cup, 2024-25)', 'name_ptbr' => 'Primeiro grande troféu conquistado (FA Cup, 2024-25)'],
            ['id_team' => 7, 'name' => 'Highest ever Premier League points total (53 points, 2024-25)', 'name_ptbr' => 'Maior pontuação da história na Premier League (53 pontos, 2024-25)'],
            ['id_team' => 7, 'name' => 'Most competitive goals scored by a player (Peter Simpson, 165 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Peter Simpson, 165 gols)'],
            ['id_team' => 7, 'name' => 'Record for longest FA Cup run as a non-league team (Reached 4th Round as Athenian League side, 1906)', 'name_ptbr' => 'Recorde de maior campanha na FA Cup como time não-profissional (Chegou à 4ª rodada como time da Athenian League, 1906)'],
            ['id_team' => 7, 'name' => 'First qualification for UEFA Europa League (2025-26)', 'name_ptbr' => 'Primeira classificação para a UEFA Europa League (2025-26)'],
            ['id_team' => 7, 'name' => 'Most goals in a single Premier League season by a player (Jean-Philippe Mateta, 17 goals in 2024-25)', 'name_ptbr' => 'Mais gols em uma única temporada da Premier League por um jogador (Jean-Philippe Mateta, 17 gols em 2024-25)'],
            ['id_team' => 7, 'name' => 'Highest transfer fee received (Michael Olise to Bayern Munich, £50.8m)', 'name_ptbr' => 'Maior taxa de transferência recebida (Michael Olise para o Bayern de Munique, £50.8 milhões)'],
            ['id_team' => 8, 'name' => 'Most seasons in the English top flight (121 seasons, as of 2024-25)', 'name_ptbr' => 'Mais temporadas na primeira divisão inglesa (121 temporadas, a partir de 2024-25)'],
            ['id_team' => 8, 'name' => 'Most competitive goals scored by a player (Dixie Dean, 383 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Dixie Dean, 383 gols)'],
            ['id_team' => 8, 'name' => 'Highest number of League titles won (9 titles)', 'name_ptbr' => 'Maior número de títulos da Liga vencidos (9 títulos)'],
            ['id_team' => 8, 'name' => 'First English club to play 100 seasons in the top flight', 'name_ptbr' => 'Primeiro clube inglês a jogar 100 temporadas na primeira divisão'],
            ['id_team' => 8, 'name' => 'Highest attendance for a league match at Goodison Park (78,299 vs Liverpool, 1948)', 'name_ptbr' => 'Maior público em uma partida da liga em Goodison Park (78.299 vs Liverpool, 1948)'],
            ['id_team' => 8, 'name' => 'Longest unbroken period in the top flight (from 1954 to present)', 'name_ptbr' => 'Período mais longo ininterrupto na primeira divisão (de 1954 até o presente)'],
            ['id_team' => 8, 'name' => 'Player of the Year at 35 (Idrissa Gueye, 2024-25 season)', 'name_ptbr' => 'Jogador do Ano aos 35 anos (Idrissa Gueye, temporada 2024-25)'],
            ['id_team' => 9, 'name' => 'Highest ever Premier League points total (54 points, 2024-25)', 'name_ptbr' => 'Maior pontuação da história na Premier League (54 pontos, 2024-25)'],
            ['id_team' => 9, 'name' => 'Most competitive goals scored by a player (Gordon Davies, 178 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Gordon Davies, 178 gols)'],
            ['id_team' => 9, 'name' => 'Longest-serving London professional club (founded 1879)', 'name_ptbr' => 'Clube profissional de Londres com mais tempo de serviço (fundado em 1879)'],
            ['id_team' => 9, 'name' => 'Record for most league draws in a season (18 draws in 2002-03)', 'name_ptbr' => 'Recorde de mais empates na liga em uma temporada (18 empates em 2002-03)'],
            ['id_team' => 9, 'name' => 'Only English club to have reached the UEFA Europa League final while being relegated to the Championship in the same decade.', 'name_ptbr' => 'Único clube inglês a ter chegado à final da UEFA Europa League enquanto era rebaixado para a Championship na mesma década.'],
            ['id_team' => 9, 'name' => 'Record for most points dropped from winning positions in Premier League (28 points, 2024-25)', 'name_ptbr' => 'Recorde de mais pontos perdidos de posições de vitória na Premier League (28 pontos, 2024-25)'],
            ['id_team' => 10, 'name' => 'Only club to win the FA Cup and UEFA Cup, and finish in the top two divisions without ever winning the top division until 1962.', 'name_ptbr' => 'Único clube a vencer a FA Cup e a Copa da UEFA, e terminar nas duas primeiras divisões sem nunca ter vencido a primeira divisão até 1962.'],
            ['id_team' => 10, 'name' => 'Most competitive goals scored by a player (Ray Crawford, 171 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Ray Crawford, 171 gols)'],
            ['id_team' => 10, 'name' => 'Record for most promotions to the Premier League from the Championship (3 times, most recently 2024)', 'name_ptbr' => 'Recorde de mais promoções para a Premier League a partir da Championship (3 vezes, mais recentemente em 2024)'],
            ['id_team' => 10, 'name' => 'Only club to win the First Division title in their first season after promotion (1961-62)', 'name_ptbr' => 'Único clube a vencer o título da Primeira Divisão em sua primeira temporada após a promoção (1961-62)'],
            ['id_team' => 10, 'name' => 'Only British club never to have been relegated below the third tier of English football.', 'name_ptbr' => 'Único clube britânico a nunca ter sido rebaixado abaixo da terceira divisão do futebol inglês.'],
            ['id_team' => 11, 'name' => 'Highest odds Premier League title winner (5000/1 in 2015-16)', 'name_ptbr' => 'Vencedor do título da Premier League com as maiores odds (5000/1 em 2015-16)'],
            ['id_team' => 11, 'name' => 'Most competitive goals scored by a player (Arthur Chandler, 273 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Arthur Chandler, 273 gols)'],
            ['id_team' => 11, 'name' => 'First club to win the Premier League under a non-British manager (Claudio Ranieri)', 'name_ptbr' => 'Primeiro clube a vencer a Premier League sob um treinador não-britânico (Claudio Ranieri)'],
            ['id_team' => 11, 'name' => 'Record for the longest consecutive home games without scoring (6 games, 2024-25)', 'name_ptbr' => 'Recorde de mais jogos consecutivos em casa sem marcar (6 jogos, 2024-25)'],
            ['id_team' => 11, 'name' => 'Highest transfer fee received (Harry Maguire to Manchester United, £80m)', 'name_ptbr' => 'Maior taxa de transferência recebida (Harry Maguire para o Manchester United, £80 milhões)'],
            ['id_team' => 11, 'name' => 'First club to win the FA Cup for the first time after 4 previous final defeats (2021)', 'name_ptbr' => 'Primeiro clube a vencer a FA Cup pela primeira vez após 4 derrotas em finais anteriores (2021)'],
            ['id_team' => 12, 'name' => 'Most League Cups won (10 titles)', 'name_ptbr' => 'Mais Copas da Liga vencidas (10 títulos)'],
            ['id_team' => 12, 'name' => 'Most European Cup/Champions League titles won by an English club (6 titles)', 'name_ptbr' => 'Mais títulos da Copa Europeia/Champions League vencidos por um clube inglês (6 títulos)'],
            ['id_team' => 12, 'name' => 'Most competitive goals scored by a player (Ian Rush, 346 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Ian Rush, 346 gols)'],
            ['id_team' => 12, 'name' => 'Record for most points in a Premier League season without winning the title (97 points in 2018-19)', 'name_ptbr' => 'Recorde de mais pontos em uma temporada da Premier League sem vencer o título (97 pontos em 2018-19)'],
            ['id_team' => 12, 'name' => 'Longest unbeaten home league run (68 games, 2017-2021)', 'name_ptbr' => 'Maior sequência invicta em casa na liga (68 jogos, 2017-2021)'],
            ['id_team' => 12, 'name' => 'First English club to win the treble of League, League Cup and European Cup in a single season (1983-84)', 'name_ptbr' => 'Primeiro clube inglês a conquistar a tríplice coroa da Liga, Copa da Liga e Copa Europeia em uma única temporada (1983-84)'],
            ['id_team' => 12, 'name' => 'Most consecutive penalty shootout wins (5, from 2022 to 2024)', 'name_ptbr' => 'Mais vitórias consecutivas em disputas de pênaltis (5, de 2022 a 2024)'],
            ['id_team' => 13, 'name' => 'Only club to go from non-league to Premier League (2014-2023)', 'name_ptbr' => 'Único clube a ir da liga não-profissional para a Premier League (2014-2023)'],
            ['id_team' => 13, 'name' => 'Most competitive goals scored by a player (Joe Payne, 143 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Joe Payne, 143 gols)'],
            ['id_team' => 13, 'name' => 'First club to win the League Cup on an artificial pitch (1988)', 'name_ptbr' => 'Primeiro clube a vencer a Copa da Liga em um campo artificial (1988)'],
            ['id_team' => 13, 'name' => 'Record for back-to-back relegations from Premier League to League One (2024-2025)', 'name_ptbr' => 'Recorde de rebaixamentos consecutivos da Premier League para a League One (2024-2025)'],
            ['id_team' => 13, 'name' => 'First club to be in the top flight, then non-league, and then back to the top flight.', 'name_ptbr' => 'Primeiro clube a estar na primeira divisão, depois na liga não-profissional e depois de volta à primeira divisão.'],
            ['id_team' => 14, 'name' => 'Most Premier League titles won in a row (4 titles, 2020-2024)', 'name_ptbr' => 'Mais títulos da Premier League vencidos consecutivamente (4 títulos, 2020-2024)'],
            ['id_team' => 14, 'name' => 'Most competitive goals scored by a player (Sergio Agüero, 260 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Sergio Agüero, 260 gols)'],
            ['id_team' => 14, 'name' => 'Record for most points in a Premier League season (100 points in 2017-18)', 'name_ptbr' => 'Recorde de mais pontos em uma temporada da Premier League (100 pontos em 2017-18)'],
            ['id_team' => 14, 'name' => 'Most goals scored in a Premier League season (106 goals in 2017-18)', 'name_ptbr' => 'Mais gols marcados em uma temporada da Premier League (106 gols em 2017-18)'],
            ['id_team' => 14, 'name' => 'First English club to achieve the domestic treble (2018-19)', 'name_ptbr' => 'Primeiro clube inglês a conquistar a tríplice coroa nacional (2018-19)'],
            ['id_team' => 14, 'name' => 'Fastest goal in a Champions League final (Ilkay Gündogan, 12 seconds in 2023)', 'name_ptbr' => 'Gol mais rápido em uma final da Champions League (Ilkay Gündogan, 12 segundos em 2023)'],
            ['id_team' => 14, 'name' => 'Most consecutive away league wins (12 games, 2020-21)', 'name_ptbr' => 'Mais vitórias consecutivas fora de casa na liga (12 jogos, 2020-21)'],
            ['id_team' => 15, 'name' => 'Most English top-flight League titles (20 titles)', 'name_ptbr' => 'Mais títulos da Liga inglesa (20 títulos)'],
            ['id_team' => 15, 'name' => 'Most FA Community Shields won (21 titles)', 'name_ptbr' => 'Mais FA Community Shields vencidas (21 títulos)'],
            ['id_team' => 15, 'name' => 'Most competitive goals scored by a player (Wayne Rooney, 253 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Wayne Rooney, 253 gols)'],
            ['id_team' => 15, 'name' => 'First English club to win the European Cup (1968)', 'name_ptbr' => 'Primeiro clube inglês a vencer a Copa dos Campeões (1968)'],
            ['id_team' => 15, 'name' => 'Record for highest average attendance in Premier League history', 'name_ptbr' => 'Recorde de maior média de público na história da Premier League'],
            ['id_team' => 15, 'name' => 'Only English club to win the Treble (Premier League, FA Cup, Champions League in 1998-99)', 'name_ptbr' => 'Único clube inglês a vencer a Tríplice Coroa (Premier League, FA Cup, Champions League em 1998-99)'],
            ['id_team' => 15, 'name' => 'Most FA Cup wins (13 titles)', 'name_ptbr' => 'Mais FA Cups vencidas (13 títulos)'],
            ['id_team' => 15, 'name' => 'Lowest Premier League points total (59 points in 2024-25)', 'name_ptbr' => 'Menor pontuação na Premier League (59 pontos em 2024-25)'],
            ['id_team' => 15, 'name' => 'Most league losses in a Premier League season (15 losses in 2024-25)', 'name_ptbr' => 'Mais derrotas na liga em uma temporada da Premier League (15 derrotas em 2024-25)'],
            ['id_team' => 16, 'name' => 'Most competitive goals scored by a player (Alan Shearer, 206 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Alan Shearer, 206 gols)'],
            ['id_team' => 16, 'name' => 'Highest Premier League finish (2nd, 1995-96 and 1996-97)', 'name_ptbr' => 'Melhor colocação na Premier League (2º, 1995-96 e 1996-97)'],
            ['id_team' => 16, 'name' => 'Longest unbeaten run in the Premier League (14 games, 2022-23)', 'name_ptbr' => 'Maior sequência invicta na Premier League (14 jogos, 2022-23)'],
            ['id_team' => 16, 'name' => 'Record for most consecutive Premier League victories (9 wins, 2001-02)', 'name_ptbr' => 'Recorde de mais vitórias consecutivas na Premier League (9 vitórias, 2001-02)'],
            ['id_team' => 16, 'name' => 'Largest home attendance (68,386 vs Chelsea, 1930)', 'name_ptbr' => 'Maior público em casa (68.386 vs Chelsea, 1930)'],
            ['id_team' => 17, 'name' => 'Only club to win the European Cup more times than their domestic league title (2 European Cups, 1 League title)', 'name_ptbr' => 'Único clube a vencer a Copa dos Campeões mais vezes do que o título da liga nacional (2 Copas dos Campeões, 1 título da Liga)'],
            ['id_team' => 17, 'name' => 'Most competitive goals scored by a player (Arthur Capes, 104 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Arthur Capes, 104 gols)'],
            ['id_team' => 17, 'name' => 'Record for the longest unbeaten league run in English football (42 games, 1978)', 'name_ptbr' => 'Recorde de maior sequência invicta na liga inglesa (42 jogos, 1978)'],
            ['id_team' => 17, 'name' => 'First club to win the European Cup after being promoted to the top division (1979)', 'name_ptbr' => 'Primeiro clube a vencer a Copa dos Campeões após ser promovido à primeira divisão (1979)'],
            ['id_team' => 17, 'name' => 'Most consecutive League Cup wins (2, 1978 and 1979)', 'name_ptbr' => 'Mais vitórias consecutivas na Copa da Liga (2, 1978 e 1979)'],
            ['id_team' => 18, 'name' => 'Most competitive goals scored by a player (Mick Channon, 185 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Mick Channon, 185 gols)'],
            ['id_team' => 18, 'name' => 'Only club to have won the FA Cup while outside the top flight (1976)', 'name_ptbr' => 'Único clube a ter vencido a FA Cup enquanto estava fora da primeira divisão (1976)'],
            ['id_team' => 18, 'name' => 'Record for most players produced by its academy to play for the England senior team', 'name_ptbr' => 'Recorde de mais jogadores produzidos por sua academia a jogar pela seleção principal da Inglaterra'],
            ['id_team' => 18, 'name' => 'Highest Premier League finish (6th, 2015-16)', 'name_ptbr' => 'Melhor colocação na Premier League (6º, 2015-16)'],
            ['id_team' => 18, 'name' => 'Record for the largest margin of victory in a Premier League game (9-0 vs Leicester City, 2019, and vs Manchester United, 2021)', 'name_ptbr' => 'Recorde de maior margem de vitória em um jogo da Premier League (9-0 vs Leicester City, 2019, e vs Manchester United, 2021)'],
            ['id_team' => 19, 'name' => 'First British club to win a European trophy (European Cup Winners\' Cup, 1963)', 'name_ptbr' => 'Primeiro clube britânico a vencer um troféu europeu (Recopa Europeia, 1963)'],
            ['id_team' => 19, 'name' => 'First club in the 20th century to achieve the League and FA Cup Double (1960-61)', 'name_ptbr' => 'Primeiro clube no século XX a conquistar a Dobradinha da Liga e da FA Cup (1960-61)'],
            ['id_team' => 19, 'name' => 'Most competitive goals scored by a player (Harry Kane, 280 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Harry Kane, 280 gols)'],
            ['id_team' => 19, 'name' => 'Most League Cups won by any club (4 titles, joint record)', 'name_ptbr' => 'Mais Copas da Liga vencidas por qualquer clube (4 títulos, recorde conjunto)'],
            ['id_team' => 19, 'name' => 'Highest attendance at their new stadium (62,850 vs Arsenal, 2023)', 'name_ptbr' => 'Maior público em seu novo estádio (62.850 vs Arsenal, 2023)'],
            ['id_team' => 19, 'name' => 'Most consecutive seasons scoring in the Premier League (all 33 seasons, ongoing)', 'name_ptbr' => 'Mais temporadas consecutivas marcando gols na Premier League (todas as 33 temporadas, em andamento)'],
            ['id_team' => 20, 'name' => 'Most competitive goals scored by a player (Vic Watson, 326 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Vic Watson, 326 gols)'],
            ['id_team' => 20, 'name' => 'Only English club to win the UEFA Europa Conference League (2023)', 'name_ptbr' => 'Único clube inglês a vencer a UEFA Europa Conference League (2023)'],
            ['id_team' => 20, 'name' => 'Record for most FA Cup wins without winning the league (3 titles)', 'name_ptbr' => 'Recorde de mais vitórias na FA Cup sem vencer a liga (3 títulos)'],
            ['id_team' => 20, 'name' => 'Highest Premier League finish (5th, 1998-99 and 2020-21)', 'name_ptbr' => 'Melhor colocação na Premier League (5º, 1998-99 e 2020-21)'],
            ['id_team' => 20, 'name' => 'Most consecutive games without a draw in the Premier League (19 games, 2003-04)', 'name_ptbr' => 'Mais jogos consecutivos sem empate na Premier League (19 jogos, 2003-04)'],
            ['id_team' => 21, 'name' => 'Most competitive goals scored by a player (Steve Bull, 306 goals)', 'name_ptbr' => 'Mais gols competitivos marcados por um jogador (Steve Bull, 306 gols)'],
            ['id_team' => 21, 'name' => 'First club to play in the European Cup (1954-55)', 'name_ptbr' => 'Primeiro clube a jogar na Copa dos Campeões (1954-55)'],
            ['id_team' => 21, 'name' => 'Most League titles won by a non-London club (3 titles, joint record)', 'name_ptbr' => 'Mais títulos da Liga vencidos por um clube não-londrino (3 títulos, recorde conjunto)'],
            ['id_team' => 21, 'name' => 'Longest unbeaten home run in the Premier League (11 games, 2019)', 'name_ptbr' => 'Maior sequência invicta em casa na Premier League (11 jogos, 2019)'],
            ['id_team' => 21, 'name' => 'Record for the highest number of points in the Championship (103 points, 2017-18)', 'name_ptbr' => 'Recorde de maior número de pontos na Championship (103 pontos, 2017-18)'],
            ['id_team' => 22, 'name' => 'Premier League Champions (1994-95)', 'name_ptbr' => 'Campeão da Premier League (1994-95)'],
            ['id_team' => 22, 'name' => 'FA Cup Winners (1884, 1885, 1886, 1890, 1891, 1928)', 'name_ptbr' => 'Vencedor da FA Cup (1884, 1885, 1886, 1890, 1891, 1928)'],
            ['id_team' => 23, 'name' => 'League Cup Winners (1963, 2011)', 'name_ptbr' => 'Vencedor da Copa da Liga (1963, 2011)'],
            ['id_team' => 23, 'name' => 'FA Cup Runners-up (1931, 1956)', 'name_ptbr' => 'Vice-campeão da FA Cup (1931, 1956)'],
            ['id_team' => 24, 'name' => 'Welsh Cup Winners (1934)', 'name_ptbr' => 'Vencedor da Copa do País de Gales (1934)'],
            ['id_team' => 24, 'name' => 'EFL Trophy Winners (1986, 2003, 2015)', 'name_ptbr' => 'Vencedor do EFL Trophy (1986, 2003, 2015)'],
            ['id_team' => 25, 'name' => 'First Division Champions (1920–21, 1959–60)', 'name_ptbr' => 'Campeão da Primeira Divisão (1920–21, 1959–60)'],
            ['id_team' => 25, 'name' => 'FA Cup Winners (1913-14)', 'name_ptbr' => 'Vencedor da FA Cup (1913-14)'],
            ['id_team' => 26, 'name' => 'FA Cup Winners (1927)', 'name_ptbr' => 'Vencedor da FA Cup (1927)'],
            ['id_team' => 26, 'name' => 'FA Cup Runners-up (1925, 2008)', 'name_ptbr' => 'Vice-campeão da FA Cup (1925, 2008)'],
            ['id_team' => 27, 'name' => 'FA Cup Winners (1987)', 'name_ptbr' => 'Vencedor da FA Cup (1987)'],
            ['id_team' => 27, 'name' => 'Football League Cup Runners-up (1980–81)', 'name_ptbr' => 'Vice-campeão da Copa da Liga de Futebol (1980–81)'],
            ['id_team' => 28, 'name' => 'First Division Champions (1971–72, 1974–75)', 'name_ptbr' => 'Campeão da Primeira Divisão (1971–72, 1974–75)'],
            ['id_team' => 28, 'name' => 'FA Cup Winners (1946)', 'name_ptbr' => 'Vencedor da FA Cup (1946)'],
            ['id_team' => 29, 'name' => 'FA Cup Runners-up (2014)', 'name_ptbr' => 'Vice-campeão da FA Cup (2014)'],
            ['id_team' => 29, 'name' => 'Football League Championship Play-off Winners (2008, 2016)', 'name_ptbr' => 'Vencedor dos Play-offs do Campeonato da Liga de Futebol (2008, 2016)'],
            ['id_team' => 30, 'name' => 'First Division Champions (1968–69, 1973–74, 1991–92)', 'name_ptbr' => 'Campeão da Primeira Divisão (1968–69, 1973–74, 1991–92)'],
            ['id_team' => 30, 'name' => 'FA Cup Winners (1972)', 'name_ptbr' => 'Vencedor da FA Cup (1972)'],
            ['id_team' => 30, 'name' => 'League Cup Winners (1968)', 'name_ptbr' => 'Vencedor da Copa da Liga (1968)'],
            ['id_team' => 31, 'name' => 'League Cup Winners (1988)', 'name_ptbr' => 'Vencedor da Copa da Liga (1988)'],
            ['id_team' => 31, 'name' => 'FA Cup Runners-up (1959)', 'name_ptbr' => 'Vice-campeão da FA Cup (1959)'],
            ['id_team' => 32, 'name' => 'League Cup Winners (2004)', 'name_ptbr' => 'Vencedor da Copa da Liga (2004)'],
            ['id_team' => 32, 'name' => 'UEFA Cup Runners-up (2006)', 'name_ptbr' => 'Vice-campeão da Copa da UEFA (2006)'],
            ['id_team' => 33, 'name' => 'FA Cup Runners-up (2004)', 'name_ptbr' => 'Vice-campeão da FA Cup (2004)'],
            ['id_team' => 33, 'name' => 'Football League One Play-off Winners (2010, 2017)', 'name_ptbr' => 'Vencedor dos Play-offs da Football League One (2010, 2017)'],
            ['id_team' => 34, 'name' => 'League Cup Winners (1962, 1985)', 'name_ptbr' => 'Vencedor da Copa da Liga (1962, 1985)'],
            ['id_team' => 34, 'name' => 'Second Division Champions (1971–72, 1985–86, 2003–04, 2018–19, 2020–21)', 'name_ptbr' => 'Campeão da Segunda Divisão (1971–72, 1985–86, 2003–04, 2018–19, 2020–21)'],
            ['id_team' => 35, 'name' => 'League Cup Winners (1986)', 'name_ptbr' => 'Vencedor da Copa da Liga (1986)'],
            ['id_team' => 35, 'name' => 'Third Division Champions (1967–68)', 'name_ptbr' => 'Campeão da Terceira Divisão (1967–68)'],
            ['id_team' => 36, 'name' => 'Third Division South Champions (1929–30, 1951–52, 1958–59)', 'name_ptbr' => 'Campeão da Terceira Divisão Sul (1929–30, 1951–52, 1958–59)'],
            ['id_team' => 36, 'name' => 'League Two Champions (2001–02, 2022–23)', 'name_ptbr' => 'Campeão da League Two (2001–02, 2022–23)'],
            ['id_team' => 37, 'name' => 'First Division Champions (1948–49, 1949–50)', 'name_ptbr' => 'Campeão da Primeira Divisão (1948–49, 1949–50)'],
            ['id_team' => 37, 'name' => 'FA Cup Winners (1939, 2008)', 'name_ptbr' => 'Vencedor da FA Cup (1939, 2008)'],
            ['id_team' => 38, 'name' => 'First Division Champions (1888–89, 1889–90)', 'name_ptbr' => 'Campeão da Primeira Divisão (1888–89, 1889–90)'],
            ['id_team' => 38, 'name' => 'FA Cup Winners (1889, 1938)', 'name_ptbr' => 'Vencedor da FA Cup (1889, 1938)'],
            ['id_team' => 39, 'name' => 'League Cup Winners (1967)', 'name_ptbr' => 'Vencedor da Copa da Liga (1967)'],
            ['id_team' => 39, 'name' => 'First Division Runners-up (1975–76)', 'name_ptbr' => 'Vice-campeão da Primeira Divisão (1975–76)'],
            ['id_team' => 40, 'name' => 'First Division Champions (1897–98)', 'name_ptbr' => 'Campeão da Primeira Divisão (1897–98)'],
            ['id_team' => 40, 'name' => 'FA Cup Winners (1899, 1902, 1915, 1925)', 'name_ptbr' => 'Vencedor da FA Cup (1899, 1902, 1915, 1925)'],
            ['id_team' => 41, 'name' => 'First Division Champions (1902–03, 1903–04, 1928–29, 1929–30)', 'name_ptbr' => 'Campeão da Primeira Divisão (1902–03, 1903–04, 1928–29, 1929–30)'],
            ['id_team' => 41, 'name' => 'FA Cup Winners (1896, 1907, 1935)', 'name_ptbr' => 'Vencedor da FA Cup (1896, 1907, 1935)'],
            ['id_team' => 42, 'name' => 'League Cup Winners (1972)', 'name_ptbr' => 'Vencedor da Copa da Liga (1972)'],
            ['id_team' => 42, 'name' => 'FA Cup Runners-up (2011)', 'name_ptbr' => 'Vice-campeão da FA Cup (2011)'],
            ['id_team' => 43, 'name' => 'First Division Champions (1891–92, 1892–93, 1894–95, 1901–02, 1912–13, 1935–36)', 'name_ptbr' => 'Campeão da Primeira Divisão (1891–92, 1892–93, 1894–95, 1901–02, 1912–13, 1935–36)'],
            ['id_team' => 43, 'name' => 'FA Cup Winners (1937, 1973)', 'name_ptbr' => 'Vencedor da FA Cup (1937, 1973)'],
            ['id_team' => 44, 'name' => 'League Cup Winners (2013)', 'name_ptbr' => 'Vencedor da Copa da Liga (2013)'],
            ['id_team' => 44, 'name' => 'FAW Premier Cup Winners (2005, 2006)', 'name_ptbr' => 'Vencedor da FAW Premier Cup (2005, 2006)'],
            ['id_team' => 45, 'name' => 'FA Cup Runners-up (1984, 2019)', 'name_ptbr' => 'Vice-campeão da FA Cup (1984, 2019)'],
            ['id_team' => 45, 'name' => 'First Division Runners-up (1982–83)', 'name_ptbr' => 'Vice-campeão da Primeira Divisão (1982–83)'],
            ['id_team' => 46, 'name' => 'First Division Champions (1919–20)', 'name_ptbr' => 'Campeão da Primeira Divisão (1919–20)'],
            ['id_team' => 46, 'name' => 'FA Cup Winners (1888, 1892, 1931, 1954, 1968)', 'name_ptbr' => 'Vencedor da FA Cup (1888, 1892, 1931, 1954, 1968)'],
            ['id_team' => 47, 'name' => 'FA Cup Winners (1912)', 'name_ptbr' => 'Vencedor da FA Cup (1912)'],
            ['id_team' => 47, 'name' => 'Football League Trophy Winners (2016)', 'name_ptbr' => 'Vencedor do Football League Trophy (2016)'],
            ['id_team' => 48, 'name' => 'League Cup Winners (1963, 2011)', 'name_ptbr' => 'Vencedor da Copa da Liga (1963, 2011)'],
            ['id_team' => 48, 'name' => 'FA Cup Runners-up (1931, 1956)', 'name_ptbr' => 'Vice-campeão da FA Cup (1931, 1956)'],
            ['id_team' => 49, 'name' => 'FA Cup Winners (1953)', 'name_ptbr' => 'Vencedor da FA Cup (1953)'],
            ['id_team' => 49, 'name' => 'Football League Championship Play-off Winners (2010)', 'name_ptbr' => 'Vencedor dos Play-offs do Campeonato da Liga de Futebol (2010)'],
            ['id_team' => 50, 'name' => 'FA Cup Winners (1923, 1926, 1929, 1958)', 'name_ptbr' => 'Vencedor da FA Cup (1923, 1926, 1929, 1958)'],
            ['id_team' => 50, 'name' => 'League Cup Runners-up (1995, 2004)', 'name_ptbr' => 'Vice-campeão da Copa da Liga (1995, 2004)'],
            ['id_team' => 51, 'name' => 'Third Division South Champions (1952–53)', 'name_ptbr' => 'Campeão da Terceira Divisão Sul (1952–53)'],
            ['id_team' => 51, 'name' => 'Football League Two Play-off Winners (2007)', 'name_ptbr' => 'Vencedor dos Play-offs da Football League Two (2007)'],
            ['id_team' => 52, 'name' => 'Conference Premier Champions (2008–09)', 'name_ptbr' => 'Campeão da Conference Premier (2008–09)'],
            ['id_team' => 52, 'name' => 'League Two Runners-up (2014–15)', 'name_ptbr' => 'Vice-campeão da League Two (2014–15)'],
            ['id_team' => 53, 'name' => 'Conference Premier Play-off Winners (2014)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2014)'],
            ['id_team' => 53, 'name' => 'FA Trophy Winners (2014)', 'name_ptbr' => 'Vencedor da FA Trophy (2014)'],
            ['id_team' => 54, 'name' => 'FA Cup Winners (1947)', 'name_ptbr' => 'Vencedor da FA Cup (1947)'],
            ['id_team' => 54, 'name' => 'Second Division Champions (1999–2000)', 'name_ptbr' => 'Campeão da Segunda Divisão (1999–2000)'],
            ['id_team' => 55, 'name' => 'Conference Premier Champions (2010–11)', 'name_ptbr' => 'Campeão da Conference Premier (2010–11)'],
            ['id_team' => 55, 'name' => 'FA Trophy Runners-up (2011)', 'name_ptbr' => 'Vice-campeão da FA Trophy (2011)'],
            ['id_team' => 56, 'name' => 'Football League Two Play-off Runners-up (2008, 2017, 2020)', 'name_ptbr' => 'Vice-campeão dos Play-offs da Football League Two (2008, 2017, 2020)'],
            ['id_team' => 56, 'name' => 'Football League Two Runners-up (2021–22)', 'name_ptbr' => 'Vice-campeão da Football League Two (2021–22)'],
            ['id_team' => 57, 'name' => 'First Division Champions (1923–24, 1924–25, 1925–26)', 'name_ptbr' => 'Campeão da Primeira Divisão (1923–24, 1924–25, 1925–26)'],
            ['id_team' => 57, 'name' => 'FA Cup Winners (1922)', 'name_ptbr' => 'Vencedor da FA Cup (1922)'],
            ['id_team' => 58, 'name' => 'Third Division South Champions (1955–56)', 'name_ptbr' => 'Campeão da Terceira Divisão Sul (1955–56)'],
            ['id_team' => 58, 'name' => 'League Two Champions (2022–23)', 'name_ptbr' => 'Campeão da League Two (2022–23)'],
            ['id_team' => 59, 'name' => 'National League Champions (2016–17)', 'name_ptbr' => 'Campeão da National League (2016–17)'],
            ['id_team' => 59, 'name' => 'EFL Trophy Winners (2018)', 'name_ptbr' => 'Vencedor do EFL Trophy (2018)'],
            ['id_team' => 60, 'name' => 'Fourth Division Champions (1974–75)', 'name_ptbr' => 'Campeão da Quarta Divisão (1974–75)'],
            ['id_team' => 60, 'name' => 'Conference Premier Play-off Winners (2004)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2004)'],
            ['id_team' => 61, 'name' => 'Third Division Champions (1962–63)', 'name_ptbr' => 'Campeão da Terceira Divisão (1962–63)'],
            ['id_team' => 61, 'name' => 'League Two Champions (2015–16)', 'name_ptbr' => 'Campeão da League Two (2015–16)'],
            ['id_team' => 62, 'name' => 'Fourth Division Champions (1960–61)', 'name_ptbr' => 'Campeão da Quarta Divisão (1960–61)'],
            ['id_team' => 62, 'name' => 'Football League Trophy Winners (2014)', 'name_ptbr' => 'Vencedor do Football League Trophy (2014)'],
            ['id_team' => 63, 'name' => 'Third Division South Champions (1929–30, 1951–52, 1958–59)', 'name_ptbr' => 'Campeão da Terceira Divisão Sul (1929–30, 1951–52, 1958–59)'],
            ['id_team' => 63, 'name' => 'League Two Champions (2001–02, 2022–23)', 'name_ptbr' => 'Campeão da League Two (2001–02, 2022–23)'],
            ['id_team' => 64, 'name' => 'Fourth Division Champions (1958–59)', 'name_ptbr' => 'Campeão da Quarta Divisão (1958–59)'],
            ['id_team' => 64, 'name' => 'Football League Trophy Winners (1993, 2001)', 'name_ptbr' => 'Vencedor do Football League Trophy (1993, 2001)'],
            ['id_team' => 65, 'name' => 'Championship Champions (2005–06, 2011–12)', 'name_ptbr' => 'Campeão do Championship (2005–06, 2011–12)'],
            ['id_team' => 65, 'name' => 'FA Cup Semi-finalists (1927, 2015)', 'name_ptbr' => 'Semifinalista da FA Cup (1927, 2015)'],
            ['id_team' => 66, 'name' => 'Football League One Play-off Winners (2014, 2018)', 'name_ptbr' => 'Vencedor dos Play-offs da Football League One (2014, 2018)'],
            ['id_team' => 66, 'name' => 'EFL Trophy Winners (1996, 2022)', 'name_ptbr' => 'Vencedor do EFL Trophy (1996, 2022)'],
            ['id_team' => 67, 'name' => 'Third Division North Champions (1958–59)', 'name_ptbr' => 'Campeão da Terceira Divisão Norte (1958–59)'],
            ['id_team' => 67, 'name' => 'Football League Two Play-off Runners-up (2007, 2012)', 'name_ptbr' => 'Vice-campeão dos Play-offs da Football League Two (2007, 2012)'],
            ['id_team' => 68, 'name' => 'Conference Premier Champions (2009–10)', 'name_ptbr' => 'Campeão da Conference Premier (2009–10)'],
            ['id_team' => 68, 'name' => 'FA Trophy Winners (2007, 2009)', 'name_ptbr' => 'Vencedor da FA Trophy (2007, 2009)'],
            ['id_team' => 69, 'name' => 'Fourth Division Champions (1966–67)', 'name_ptbr' => 'Campeão da Quarta Divisão (1966–67)'],
            ['id_team' => 69, 'name' => 'National League Champions (2021–22)', 'name_ptbr' => 'Campeão da National League (2021–22)'],
            ['id_team' => 70, 'name' => 'FA Cup Winners (2013)', 'name_ptbr' => 'Vencedor da FA Cup (2013)'],
            ['id_team' => 70, 'name' => 'Football League One Champions (2002–03, 2015–16, 2017–18, 2021–22)', 'name_ptbr' => 'Campeão da Football League One (2002–03, 2015–16, 2017–18, 2021–22)'],
            ['id_team' => 71, 'name' => 'FA Trophy Winners (2013)', 'name_ptbr' => 'Vencedor da FA Trophy (2013)'],
            ['id_team' => 71, 'name' => 'National League Champions (2022–23)', 'name_ptbr' => 'Campeão da National League (2022–23)'],
            ['id_team' => 72, 'name' => 'National League Play-off Winners (1994)', 'name_ptbr' => 'Vencedor dos Play-offs da National League (1994)'],
            ['id_team' => 72, 'name' => 'League One Play-off Winners (2020)', 'name_ptbr' => 'Vencedor dos Play-offs da League One (2020)'],
            ['id_team' => 73, 'name' => 'National League Champions (2005–06)', 'name_ptbr' => 'Campeão da National League (2005–06)'],
            ['id_team' => 73, 'name' => 'League Two Champions (2017–18)', 'name_ptbr' => 'Campeão da League Two (2017–18)'],
            ['id_team' => 74, 'name' => 'Conference Premier Play-off Winners (2011)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2011)'],
            ['id_team' => 74, 'name' => 'League Two Play-off Winners (2016)', 'name_ptbr' => 'Vencedor dos Play-offs da League Two (2016)'],
            ['id_team' => 75, 'name' => 'FA Trophy Winners (1990)', 'name_ptbr' => 'Vencedor da FA Trophy (1990)'],
            ['id_team' => 75, 'name' => 'National League Champions (2019–20)', 'name_ptbr' => 'Campeão da National League (2019–20)'],
            ['id_team' => 76, 'name' => 'FA Cup Winners (1911)', 'name_ptbr' => 'Vencedor da FA Cup (1911)'],
            ['id_team' => 76, 'name' => 'League Two Play-off Winners (2013)', 'name_ptbr' => 'Vencedor dos Play-offs da League Two (2013)'],
            ['id_team' => 77, 'name' => 'FA Trophy Winners (2022)', 'name_ptbr' => 'Vencedor da FA Trophy (2022)'],
            ['id_team' => 77, 'name' => 'National League Play-off Runners-up (2018)', 'name_ptbr' => 'Vice-campeão dos Play-offs da National League (2018)'],
            ['id_team' => 78, 'name' => 'Fourth Division Champions (1994–95, 2005–06)', 'name_ptbr' => 'Campeão da Quarta Divisão (1994–95, 2005–06)'],
            ['id_team' => 78, 'name' => 'EFL Trophy Winners (2011)', 'name_ptbr' => 'Vencedor do EFL Trophy (2011)'],
            ['id_team' => 79, 'name' => 'FA Trophy Winners (1998)', 'name_ptbr' => 'Vencedor da FA Trophy (1998)'],
            ['id_team' => 79, 'name' => 'League Two Champions (2020–21)', 'name_ptbr' => 'Campeão da League Two (2020–21)'],
            ['id_team' => 80, 'name' => 'Third Division North Champions (1930–31, 1935–36)', 'name_ptbr' => 'Campeão da Terceira Divisão Norte (1930–31, 1935–36)'],
            ['id_team' => 80, 'name' => 'National League Champions (2013–14)', 'name_ptbr' => 'Campeão da National League (2013–14)'],
            ['id_team' => 81, 'name' => 'Fourth Division Champions (1990–91)', 'name_ptbr' => 'Campeão da Quarta Divisão (1990–91)'],
            ['id_team' => 81, 'name' => 'FA Trophy Winners (1992)', 'name_ptbr' => 'Vencedor da FA Trophy (1992)'],
            ['id_team' => 82, 'name' => 'Football League Two Play-off Winners (2012)', 'name_ptbr' => 'Vencedor dos Play-offs da Football League Two (2012)'],
            ['id_team' => 82, 'name' => 'EFL Trophy Winners (2013)', 'name_ptbr' => 'Vencedor do EFL Trophy (2013)'],
            ['id_team' => 83, 'name' => 'Third Division North Champions (1934–35, 1946–47)', 'name_ptbr' => 'Campeão da Terceira Divisão Norte (1934–35, 1946–47)'],
            ['id_team' => 83, 'name' => 'League One Play-off Winners (2008)', 'name_ptbr' => 'Vencedor dos Play-offs da League One (2008)'],
            ['id_team' => 84, 'name' => 'Conference Premier Play-off Winners (2012)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2012)'],
            ['id_team' => 84, 'name' => 'National League North Champions (2009–10)', 'name_ptbr' => 'Campeão da National League North (2009–10)'],
            ['id_team' => 85, 'name' => 'Fourth Division Champions (1963–64)', 'name_ptbr' => 'Campeão da Quarta Divisão (1963–64)'],
            ['id_team' => 85, 'name' => 'League Two Champions (2012–13)', 'name_ptbr' => 'Campeão da League Two (2012–13)'],
            ['id_team' => 86, 'name' => 'Fourth Division Champions (1971–72)', 'name_ptbr' => 'Campeão da Quarta Divisão (1971–72)'],
            ['id_team' => 86, 'name' => 'Conference Premier Play-off Winners (2016)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2016)'],
            ['id_team' => 87, 'name' => 'National League Play-off Winners (2020)', 'name_ptbr' => 'Vencedor dos Play-offs da National League (2020)'],
            ['id_team' => 87, 'name' => 'FA Trophy Winners (2020)', 'name_ptbr' => 'Vencedor da FA Trophy (2020)'],
            ['id_team' => 88, 'name' => 'League Two Champions (2007–08)', 'name_ptbr' => 'Campeão da League Two (2007–08)'],
            ['id_team' => 88, 'name' => 'EFL Trophy Winners (2008)', 'name_ptbr' => 'Vencedor do EFL Trophy (2008)'],
            ['id_team' => 89, 'name' => 'Conference Premier Play-off Winners (2007)', 'name_ptbr' => 'Vencedor dos Play-offs da Conference Premier (2007)'],
            ['id_team' => 89, 'name' => 'League Two Play-off Winners (2021)', 'name_ptbr' => 'Vencedor dos Play-offs da League Two (2021)'],
            ['id_team' => 90, 'name' => 'National League Play-off Winners (2013)', 'name_ptbr' => 'Vencedor dos Play-offs da National League (2013)'],
            ['id_team' => 90, 'name' => 'Welsh Cup Winners (1980)', 'name_ptbr' => 'Vencedor da Copa do País de Gales (1980)'],
            ['id_team' => 91, 'name' => 'FA Cup Runners-up (1891)', 'name_ptbr' => 'Vice-campeão da FA Cup (1891)'],
            ['id_team' => 91, 'name' => 'National League Play-off Winners (2023)', 'name_ptbr' => 'Vencedor dos Play-offs da National League (2023)'],
            ['id_team' => 92, 'name' => 'Fourth Division Champions (1958–59)', 'name_ptbr' => 'Campeão da Quarta Divisão (1958–59)'],
            ['id_team' => 92, 'name' => 'Football League Trophy Winners (1993, 2001)', 'name_ptbr' => 'Vencedor do Football League Trophy (1993, 2001)'],
            ['id_team' => 93, 'name' => 'National League North Champions (2017–18)', 'name_ptbr' => 'Campeão da National League North (2017–18)'],
            ['id_team' => 93, 'name' => 'EFL Trophy Winners (2020)', 'name_ptbr' => 'Vencedor do EFL Trophy (2020)'],
            ['id_team' => 94, 'name' => 'League Cup Winners (1969)', 'name_ptbr' => 'Vencedor da Copa da Liga (1969)'],
            ['id_team' => 94, 'name' => 'League Two Champions (2019–20)', 'name_ptbr' => 'Campeão da League Two (2019–20)'],
            ['id_team' => 95, 'name' => 'Football League Trophy Winners (1991)', 'name_ptbr' => 'Vencedor do Football League Trophy (1991)'],
            ['id_team' => 95, 'name' => 'National League Play-off Winners (2018)', 'name_ptbr' => 'Vencedor dos Play-offs da National League (2018)'],
            ['id_team' => 96, 'name' => 'Fourth Division Champions (1959–60)', 'name_ptbr' => 'Campeão da Quarta Divisão (1959–60)'],
            ['id_team' => 96, 'name' => 'Football League Trophy Runners-up (2015)', 'name_ptbr' => 'Vice-campeão do Football League Trophy (2015)'],
            ['id_team' => 97, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 97, 'name' => 'Runner-up in UEFA Cup Winners\' Cup', 'name_ptbr' => 'Vice-campeão da Recopa Europeia'],
            ['id_team' => 97, 'name' => 'Longest unbeaten run in La Liga', 'name_ptbr' => 'Maior sequência invicta em La Liga'],

            // Athletic Club (id_team: 98)
            ['id_team' => 98, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 98, 'name' => 'Never relegated from La Liga', 'name_ptbr' => 'Nunca rebaixado de La Liga'],
            ['id_team' => 98, 'name' => 'Only club to win La Liga with only Basque players', 'name_ptbr' => 'Único clube a ganhar La Liga apenas com jogadores bascos'],

            // Atlético Madrid (id_team: 99)
            ['id_team' => 99, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 99, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 99, 'name' => 'Most Supercopa de España titles', 'name_ptbr' => 'Mais títulos da Supercopa da Espanha'],

            // Barcelona (id_team: 100)
            ['id_team' => 100, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 100, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 100, 'name' => 'Most UEFA Champions League titles', 'name_ptbr' => 'Mais títulos da UEFA Champions League'],
            ['id_team' => 100, 'name' => 'Only club to achieve two trebles (La Liga, Copa del Rey, Champions League)', 'name_ptbr' => 'Único clube a conquistar duas tríplices coroas (La Liga, Copa del Rey, Champions League)'],

            // Celta Vigo (id_team: 101)
            ['id_team' => 101, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 101, 'name' => 'Most Galician Derbies won', 'name_ptbr' => 'Mais dérbis galegos vencidos'],
            ['id_team' => 101, 'name' => 'Longest unbeaten run at home in La Liga', 'name_ptbr' => 'Maior sequência invicta em casa em La Liga'],

            // Espanyol (id_team: 102)
            ['id_team' => 102, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 102, 'name' => 'Runner-up in UEFA Cup', 'name_ptbr' => 'Vice-campeão da Copa da UEFA'],
            ['id_team' => 102, 'name' => 'Most Catalan Derbies won against Barcelona', 'name_ptbr' => 'Mais dérbis catalães vencidos contra o Barcelona'],

            // Getafe (id_team: 103)
            ['id_team' => 103, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 103, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 103, 'name' => 'Reached UEFA Cup Quarter-finals', 'name_ptbr' => 'Chegou às quartas de final da Copa da UEFA'],

            // Girona (id_team: 104)
            ['id_team' => 104, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 104, 'name' => 'First promotion to La Liga', 'name_ptbr' => 'Primeira promoção para La Liga'],
            ['id_team' => 104, 'name' => 'Most points in a La Liga season', 'name_ptbr' => 'Mais pontos em uma temporada de La Liga'],

            // Las Palmas (id_team: 105)
            ['id_team' => 105, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 105, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 105, 'name' => 'Most consecutive seasons in La Liga', 'name_ptbr' => 'Mais temporadas consecutivas em La Liga'],

            // Leganés (id_team: 106)
            ['id_team' => 106, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 106, 'name' => 'First promotion to La Liga', 'name_ptbr' => 'Primeira promoção para La Liga'],
            ['id_team' => 106, 'name' => 'Longest unbeaten run at home in La Liga', 'name_ptbr' => 'Maior sequência invicta em casa em La Liga'],

            // Mallorca (id_team: 107)
            ['id_team' => 107, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 107, 'name' => 'Runner-up in UEFA Cup Winners\' Cup', 'name_ptbr' => 'Vice-campeão da Recopa Europeia'],
            ['id_team' => 107, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],

            // Osasuna (id_team: 108)
            ['id_team' => 108, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 108, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 108, 'name' => 'Reached UEFA Champions League qualifying rounds', 'name_ptbr' => 'Chegou às fases de qualificação da UEFA Champions League'],

            // Rayo Vallecano (id_team: 109)
            ['id_team' => 109, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 109, 'name' => 'Reached UEFA Cup Quarter-finals', 'name_ptbr' => 'Chegou às quartas de final da Copa da UEFA'],
            ['id_team' => 109, 'name' => 'Longest unbeaten run at home in La Liga', 'name_ptbr' => 'Maior sequência invicta em casa em La Liga'],

            // Real Betis (id_team: 110)
            ['id_team' => 110, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 110, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 110, 'name' => 'Most Andalusian Derbies won', 'name_ptbr' => 'Mais dérbis andaluzes vencidos'],

            // Real Madrid (id_team: 111)
            ['id_team' => 111, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 111, 'name' => 'Most UEFA Champions League titles', 'name_ptbr' => 'Mais títulos da UEFA Champions League'],
            ['id_team' => 111, 'name' => 'Most FIFA Club World Cup titles', 'name_ptbr' => 'Mais títulos da Copa do Mundo de Clubes da FIFA'],
            ['id_team' => 111, 'name' => 'Longest winning streak in La Liga', 'name_ptbr' => 'Maior sequência de vitórias em La Liga'],

            // Real Sociedad (id_team: 112)
            ['id_team' => 112, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 112, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 112, 'name' => 'Runner-up in La Liga', 'name_ptbr' => 'Vice-campeão de La Liga'],

            // Sevilla (id_team: 113)
            ['id_team' => 113, 'name' => 'Most UEFA Europa League titles', 'name_ptbr' => 'Mais títulos da UEFA Europa League'],
            ['id_team' => 113, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 113, 'name' => 'Most Andalusian Derbies won', 'name_ptbr' => 'Mais dérbis andaluzes vencidos'],

            // Valencia (id_team: 114)
            ['id_team' => 114, 'name' => 'Most La Liga titles', 'name_ptbr' => 'Mais títulos de La Liga'],
            ['id_team' => 114, 'name' => 'Most Copa del Rey titles', 'name_ptbr' => 'Mais títulos da Copa del Rey'],
            ['id_team' => 114, 'name' => 'Runner-up in UEFA Champions League', 'name_ptbr' => 'Vice-campeão da UEFA Champions League'],

            // Valladolid (id_team: 115)
            ['id_team' => 115, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 115, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 115, 'name' => 'Longest unbeaten run at home in La Liga', 'name_ptbr' => 'Maior sequência invicta em casa em La Liga'],

            // Villarreal (id_team: 116)
            ['id_team' => 116, 'name' => 'Most UEFA Europa League titles', 'name_ptbr' => 'Mais títulos da UEFA Europa League'],
            ['id_team' => 116, 'name' => 'Reached UEFA Champions League semi-finals', 'name_ptbr' => 'Chegou às semifinais da UEFA Champions League'],
            ['id_team' => 116, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],

            // Almería (id_team: 117)
            ['id_team' => 117, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 117, 'name' => 'First promotion to La Liga', 'name_ptbr' => 'Primeira promoção para La Liga'],
            ['id_team' => 117, 'name' => 'Most points in a La Liga season', 'name_ptbr' => 'Mais pontos em uma temporada de La Liga'],

            // Albacete (id_team: 118)
            ['id_team' => 118, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 118, 'name' => 'Reached Copa del Rey semi-finals', 'name_ptbr' => 'Chegou às semifinais da Copa del Rey'],
            ['id_team' => 118, 'name' => 'Longest unbeaten run at home in Segunda División', 'name_ptbr' => 'Maior sequência invicta em casa na Segunda División'],

            // Andorra (id_team: 119)
            ['id_team' => 119, 'name' => 'Best finish in Segunda División', 'name_ptbr' => 'Melhor colocação na Segunda División'],
            ['id_team' => 119, 'name' => 'First promotion to Segunda División', 'name_ptbr' => 'Primeira promoção para a Segunda División'],
            ['id_team' => 119, 'name' => 'Most points in a Segunda División season', 'name_ptbr' => 'Mais pontos em uma temporada da Segunda División'],

            // Barcelona Atlètic (id_team: 120)
            ['id_team' => 120, 'name' => 'Best finish in Segunda División', 'name_ptbr' => 'Melhor colocação na Segunda División'],
            ['id_team' => 120, 'name' => 'Promoted to Segunda División', 'name_ptbr' => 'Promovido para a Segunda División'],
            ['id_team' => 120, 'name' => 'Most goals scored in a Segunda División B season', 'name_ptbr' => 'Mais gols marcados em uma temporada da Segunda División B'],

            // Burgos (id_team: 121)
            ['id_team' => 121, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 121, 'name' => 'Longest unbeaten run in Segunda División', 'name_ptbr' => 'Maior sequência invicta na Segunda División'],
            ['id_team' => 121, 'name' => 'First promotion to La Liga', 'name_ptbr' => 'Primeira promoção para La Liga'],

            // Castellón (id_team: 122)
            ['id_team' => 122, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 122, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 122, 'name' => 'Most consecutive seasons in La Liga', 'name_ptbr' => 'Mais temporadas consecutivas em La Liga'],

            // Eldense (id_team: 123)
            ['id_team' => 123, 'name' => 'Best finish in Segunda División', 'name_ptbr' => 'Melhor colocação na Segunda División'],
            ['id_team' => 123, 'name' => 'First promotion to Segunda División', 'name_ptbr' => 'Primeira promoção para a Segunda División'],
            ['id_team' => 123, 'name' => 'Most points in a Segunda División RFEF season', 'name_ptbr' => 'Mais pontos em uma temporada da Segunda División RFEF'],

            // Girona (id_team: 124)
            ['id_team' => 124, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 124, 'name' => 'First promotion to La Liga', 'name_ptbr' => 'Primeira promoção para La Liga'],
            ['id_team' => 124, 'name' => 'Most points in a La Liga season', 'name_ptbr' => 'Mais pontos em uma temporada de La Liga'],

            // Granada (id_team: 125)
            ['id_team' => 125, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 125, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 125, 'name' => 'Reached UEFA Europa League Quarter-finals', 'name_ptbr' => 'Chegou às quartas de final da UEFA Europa League'],

            // Ibiza (id_team: 126)
            ['id_team' => 126, 'name' => 'Best finish in Segunda División', 'name_ptbr' => 'Melhor colocação na Segunda División'],
            ['id_team' => 126, 'name' => 'First promotion to Segunda División', 'name_ptbr' => 'Primeira promoção para a Segunda División'],
            ['id_team' => 126, 'name' => 'Most points in a Segunda División RFEF season', 'name_ptbr' => 'Mais pontos em uma temporada da Segunda División RFEF'],

            // Las Palmas (id_team: 127)
            ['id_team' => 127, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 127, 'name' => 'Runner-up in Copa del Rey', 'name_ptbr' => 'Vice-campeão da Copa del Rey'],
            ['id_team' => 127, 'name' => 'Most consecutive seasons in La Liga', 'name_ptbr' => 'Mais temporadas consecutivas em La Liga'],

            // Levante (id_team: 128)
            ['id_team' => 128, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 128, 'name' => 'Reached Copa del Rey semi-finals', 'name_ptbr' => 'Chegou às semifinais da Copa del Rey'],
            ['id_team' => 128, 'name' => 'Longest unbeaten run in La Liga', 'name_ptbr' => 'Maior sequência invicta em La Liga'],

            // Lugo (id_team: 129)
            ['id_team' => 129, 'name' => 'Best finish in Segunda División', 'name_ptbr' => 'Melhor colocação na Segunda División'],
            ['id_team' => 129, 'name' => 'Longest unbeaten run at home in Segunda División', 'name_ptbr' => 'Maior sequência invicta em casa na Segunda División'],
            ['id_team' => 129, 'name' => 'Most consecutive seasons in Segunda División', 'name_ptbr' => 'Mais temporadas consecutivas na Segunda División'],

            // Málaga (id_team: 130)
            ['id_team' => 130, 'name' => 'Best finish in La Liga', 'name_ptbr' => 'Melhor colocação em La Liga'],
            ['id_team' => 130, 'name' => 'Reached UEFA Champions League Quarter-finals', 'name_ptbr' => 'Chegou às quartas de final da UEFA Champions League'],
            ['id_team' => 130, 'name' => 'Winner of UEFA Intertoto Cup', 'name_ptbr' => 'Vencedor da Copa Intertoto da UEFA'],
            ['id_team' => 131, 'name' => 'Most appearances in the Segunda División without promotion', 'name_ptbr' => 'Mais aparições na Segunda Divisão sem promoção'], // Mirandés
            ['id_team' => 132, 'name' => 'Most seasons in Segunda División B', 'name_ptbr' => 'Mais temporadas na Segunda División B'], // Ponferradina
            ['id_team' => 133, 'name' => 'Most seasons in La Liga without winning the title', 'name_ptbr' => 'Mais temporadas na La Liga sem ganhar o título'], // Real Oviedo
            ['id_team' => 134, 'name' => 'Most goals scored in a single Segunda División season', 'name_ptbr' => 'Mais gols marcados em uma única temporada da Segunda División'], // Real Sporting
            ['id_team' => 135, 'name' => 'Most Copa del Rey titles without winning La Liga', 'name_ptbr' => 'Mais títulos da Copa del Rey sem ganhar a La Liga'], // Real Zaragoza
            ['id_team' => 136, 'name' => 'Most promotions to La Liga from Segunda División', 'name_ptbr' => 'Mais promoções para a La Liga da Segunda División'], // Rayo Vallecano
            ['id_team' => 137, 'name' => 'Most consecutive seasons in Segunda División', 'name_ptbr' => 'Mais temporadas consecutivas na Segunda División'], // Tenerife
            ['id_team' => 138, 'name' => 'Highest finish in La Liga by a reserve team', 'name_ptbr' => 'Melhor classificação na La Liga por um time reserva'], // Villarreal B

            // German Teams
            ['id_team' => 139, 'name' => 'Most Bundesliga titles', 'name_ptbr' => 'Mais títulos da Bundesliga'], // Bayern Munich
            ['id_team' => 140, 'name' => 'Most DFB-Pokal wins', 'name_ptbr' => 'Mais vitórias na DFB-Pokal'], // Borussia Dortmund
            ['id_team' => 141, 'name' => 'Fastest promotion from 4th tier to Bundesliga', 'name_ptbr' => 'Promoção mais rápida da 4ª divisão para a Bundesliga'], // RB Leipzig
            ['id_team' => 142, 'name' => 'Longest unbeaten run in a single Bundesliga season', 'name_ptbr' => 'Maior sequência invicta em uma única temporada da Bundesliga'], // Bayer Leverkusen
            ['id_team' => 143, 'name' => 'Most DFB-Pokal finals without winning', 'name_ptbr' => 'Mais finais da DFB-Pokal sem vencer'], // Eintracht Frankfurt
            ['id_team' => 144, 'name' => 'Most relegations from the Bundesliga', 'name_ptbr' => 'Mais rebaixamentos da Bundesliga'], // VfB Stuttgart
            ['id_team' => 145, 'name' => 'Most points in a Bundesliga season by a team not in the top 3', 'name_ptbr' => 'Mais pontos em uma temporada da Bundesliga por um time que não está entre os 3 primeiros'], // Borussia Mönchengladbach
            ['id_team' => 146, 'name' => 'Most seasons in the Bundesliga', 'name_ptbr' => 'Mais temporadas na Bundesliga'], // Werder Bremen
            ['id_team' => 147, 'name' => 'Most Bundesliga relegations (shared record)', 'name_ptbr' => 'Mais rebaixamentos da Bundesliga (recorde compartilhado)'], // FC Köln
            ['id_team' => 148, 'name' => 'Most consecutive seasons in the Bundesliga without winning the title', 'name_ptbr' => 'Mais temporadas consecutivas na Bundesliga sem ganhar o título'], // VfL Wolfsburg
            ['id_team' => 149, 'name' => 'Highest league finish for a team with a negative goal difference', 'name_ptbr' => 'Melhor classificação na liga para um time com saldo de gols negativo'], // SC Freiburg
            ['id_team' => 150, 'name' => 'Most successful promotion to the Bundesliga via playoffs', 'name_ptbr' => 'Promoção mais bem-sucedida para a Bundesliga via playoffs'], // FC Augsburg
            ['id_team' => 151, 'name' => 'Highest league finish without ever being relegated from the Bundesliga', 'name_ptbr' => 'Melhor classificação na liga sem nunca ter sido rebaixado da Bundesliga'], // TSG Hoffenheim
            ['id_team' => 152, 'name' => 'Longest unbeaten run in home matches in the Bundesliga', 'name_ptbr' => 'Maior sequência invicta em jogos em casa na Bundesliga'], // Mainz 05
            ['id_team' => 153, 'name' => 'Fastest rise from amateur to Bundesliga club', 'name_ptbr' => 'Ascensão mais rápida de clube amador a Bundesliga'], // Union Berlin
            ['id_team' => 154, 'name' => 'Most points in a Bundesliga season before relegation', 'name_ptbr' => 'Mais pontos em uma temporada da Bundesliga antes do rebaixamento'], // VfL Bochum
            ['id_team' => 155, 'name' => 'First team to be promoted to the Bundesliga with a negative goal difference', 'name_ptbr' => 'Primeiro time a ser promovido à Bundesliga com saldo de gols negativo'], // Eintracht Heidenheim
            ['id_team' => 156, 'name' => 'Most goals scored in a single 2. Bundesliga season', 'name_ptbr' => 'Mais gols marcados em uma única temporada da 2. Bundesliga'], // SC Paderborn
            ['id_team' => 157, 'name' => 'Most points in a 2. Bundesliga season without achieving promotion', 'name_ptbr' => 'Mais pontos em uma temporada da 2. Bundesliga sem conseguir a promoção'], // FC St. Pauli
            ['id_team' => 158, 'name' => 'Most seasons in the 2. Bundesliga', 'name_ptbr' => 'Mais temporadas na 2. Bundesliga'], // Hertha BSC
            ['id_team' => 159, 'name' => 'Most points in a 2. Bundesliga season by a promoted team', 'name_ptbr' => 'Mais pontos em uma temporada da 2. Bundesliga por um time promovido'], // Hamburger SV
            ['id_team' => 160, 'name' => 'Most consecutive seasons in the Bundesliga', 'name_ptbr' => 'Mais temporadas consecutivas na Bundesliga'], // Schalke 04
            ['id_team' => 161, 'name' => 'Most Bundesliga relegations (shared record)', 'name_ptbr' => 'Mais rebaixamentos da Bundesliga (recorde compartilhado)'], // 1. FC Köln (Duplicate)
            ['id_team' => 162, 'name' => 'Most promotions to the Bundesliga from the 2. Bundesliga', 'name_ptbr' => 'Mais promoções para a Bundesliga da 2. Bundesliga'], // 1. FC Nürnberg
            ['id_team' => 163, 'name' => 'Most points in a Bundesliga season before relegation (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da Bundesliga antes do rebaixamento (recorde compartilhado)'], // Hannover 96
            ['id_team' => 164, 'name' => 'Most seasons in the Bundesliga 2 (shared record)', 'name_ptbr' => 'Mais temporadas na Bundesliga 2 (recorde compartilhado)'], // 1. FC Kaiserslautern
            ['id_team' => 165, 'name' => 'Most goals conceded in a single Bundesliga season', 'name_ptbr' => 'Mais gols sofridos em uma única temporada da Bundesliga'], // Eintracht Braunschweig
            ['id_team' => 166, 'name' => 'Fewest wins in a Bundesliga season', 'name_ptbr' => 'Menos vitórias em uma temporada da Bundesliga'], // Darmstadt 98
            ['id_team' => 167, 'name' => 'Most promotions to the Bundesliga via playoffs (shared record)', 'name_ptbr' => 'Mais promoções para a Bundesliga via playoffs (recorde compartilhado)'], // Fortuna Düsseldorf
            ['id_team' => 168, 'name' => 'Most seasons in the 2. Bundesliga without promotion (shared record)', 'name_ptbr' => 'Mais temporadas na 2. Bundesliga sem promoção (recorde compartilhado)'], // Karlsruher SC
            ['id_team' => 169, 'name' => 'Fastest rise from Regionalliga to 2. Bundesliga', 'name_ptbr' => 'Ascensão mais rápida da Regionalliga para a 2. Bundesliga'], // 1. FC Magdeburg
            ['id_team' => 170, 'name' => 'Most goals scored in a single 2. Bundesliga season (shared record)', 'name_ptbr' => 'Mais gols marcados em uma única temporada da 2. Bundesliga (recorde compartilhado)'], // SC Paderborn (Duplicate)
            ['id_team' => 171, 'name' => 'First team to achieve back-to-back promotions to 2. Bundesliga', 'name_ptbr' => 'Primeiro time a conseguir promoções consecutivas para a 2. Bundesliga'], // SV Elversberg
            ['id_team' => 172, 'name' => 'Most promotions to the Bundesliga (shared record)', 'name_ptbr' => 'Mais promoções para a Bundesliga (recorde compartilhado)'], // Greuther Fürth
            ['id_team' => 173, 'name' => 'Highest ever finish in the 2. Bundesliga for a newly promoted team', 'name_ptbr' => 'Maior classificação na 2. Bundesliga para um time recém-promovido'], // Holstein Kiel
            ['id_team' => 174, 'name' => 'Fastest promotion from 3. Liga to Bundesliga', 'name_ptbr' => 'Promoção mais rápida da 3. Liga para a Bundesliga'], // SSV Ulm
            ['id_team' => 175, 'name' => 'Most consecutive seasons in the 3. Liga', 'name_ptbr' => 'Mais temporadas consecutivas na 3. Liga'], // Preußen Münster
            ['id_team' => 176, 'name' => 'Most seasons in the 3. Liga without promotion (shared record)', 'name_ptbr' => 'Mais temporadas na 3. Liga sem promoção (recorde compartilhado)'], // Jahn Regensburg
            ['id_team' => 177, 'name' => 'Most seasons in the 2. Bundesliga before relegation to 3. Liga', 'name_ptbr' => 'Mais temporadas na 2. Bundesliga antes do rebaixamento para a 3. Liga'], // Alemannia Aachen
            ['id_team' => 178, 'name' => 'Most points in a 2. Bundesliga season before relegation', 'name_ptbr' => 'Mais pontos em uma temporada da 2. Bundesliga antes do rebaixamento'], // Arminia Bielefeld
            ['id_team' => 179, 'name' => 'Most consecutive seasons in the 2. Bundesliga', 'name_ptbr' => 'Mais temporadas consecutivas na 2. Bundesliga'], // Energie Cottbus
            ['id_team' => 180, 'name' => 'Highest league finish for a reserve team in the 3. Liga', 'name_ptbr' => 'Melhor classificação na liga para um time reserva na 3. Liga'], // Borussia Dortmund II
            ['id_team' => 181, 'name' => 'Most consecutive seasons in the 3. Liga (shared record)', 'name_ptbr' => 'Mais temporadas consecutivas na 3. Liga (recorde compartilhado)'], // Dynamo Dresden
            ['id_team' => 182, 'name' => 'Most seasons in the 2. Bundesliga without promotion (shared record)', 'name_ptbr' => 'Mais temporadas na 2. Bundesliga sem promoção (recorde compartilhado)'], // Erzgebirge Aue
            ['id_team' => 183, 'name' => 'Most points in a 3. Liga season without promotion', 'name_ptbr' => 'Mais pontos em uma temporada da 3. Liga sem promoção'], // FC Ingolstadt
            ['id_team' => 184, 'name' => 'Fastest promotion from Regionalliga to 3. Liga', 'name_ptbr' => 'Promoção mais rápida da Regionalliga para a 3. Liga'], // Viktoria Köln
            ['id_team' => 185, 'name' => 'Most seasons in the 3. Liga without winning the title', 'name_ptbr' => 'Mais temporadas na 3. Liga sem ganhar o título'], // Waldhof Mannheim
            ['id_team' => 186, 'name' => 'Most seasons in the 2. Bundesliga', 'name_ptbr' => 'Mais temporadas na 2. Bundesliga'], // 1860 Munich
            ['id_team' => 187, 'name' => 'Most promotions to the 2. Bundesliga via playoffs', 'name_ptbr' => 'Mais promoções para a 2. Bundesliga via playoffs'], // VfL Osnabrück
            ['id_team' => 188, 'name' => 'Most points in a 2. Bundesliga season by a promoted team (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da 2. Bundesliga por um time promovido (recorde compartilhado)'], // Hansa Rostock
            ['id_team' => 189, 'name' => 'Most seasons in the 3. Liga without relegation', 'name_ptbr' => 'Mais temporadas na 3. Liga sem rebaixamento'], // Rot-Weiss Essen
            ['id_team' => 190, 'name' => 'Most seasons in the 3. Liga (shared record)', 'name_ptbr' => 'Mais temporadas na 3. Liga (recorde compartilhado)'], // SV Sandhausen
            ['id_team' => 191, 'name' => 'Most seasons in the 3. Liga before promotion', 'name_ptbr' => 'Mais temporadas na 3. Liga antes da promoção'], // SpVgg Unterhaching
            ['id_team' => 192, 'name' => 'Most goals scored by a reserve team in the 3. Liga', 'name_ptbr' => 'Mais gols marcados por um time reserva na 3. Liga'], // VfB Stuttgart II
            ['id_team' => 193, 'name' => 'Highest league finish for a newly promoted team in the 3. Liga', 'name_ptbr' => 'Maior classificação na liga para um time recém-promovido na 3. Liga'], // SC Verl

            // French Teams
            ['id_team' => 194, 'name' => 'Most Ligue 1 titles', 'name_ptbr' => 'Mais títulos da Ligue 1'], // Paris Saint-Germain
            ['id_team' => 195, 'name' => 'Most Coupe de France titles', 'name_ptbr' => 'Mais títulos da Coupe de France'], // Olympique Marseille
            ['id_team' => 196, 'name' => 'Most consecutive Ligue 1 titles (shared record)', 'name_ptbr' => 'Mais títulos consecutivos da Ligue 1 (recorde compartilhado)'], // AS Monaco
            ['id_team' => 197, 'name' => 'Most consecutive Ligue 1 titles (shared record)', 'name_ptbr' => 'Mais títulos consecutivos da Ligue 1 (recorde compartilhado)'], // Olympique Lyonnais
            ['id_team' => 198, 'name' => 'Most points in a Ligue 1 season without winning the title', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 1 sem ganhar o título'], // LOSC Lille
            ['id_team' => 199, 'name' => 'Most consecutive seasons in Ligue 1', 'name_ptbr' => 'Mais temporadas consecutivas na Ligue 1'], // OGC Nice
            ['id_team' => 200, 'name' => 'Highest league finish for a newly promoted team in Ligue 1', 'name_ptbr' => 'Maior classificação na liga para um time recém-promovido na Ligue 1'], // RC Lens
            ['id_team' => 201, 'name' => 'Most Coupe de France finals without winning', 'name_ptbr' => 'Mais finais da Coupe de France sem vencer'], // Stade Rennais
            ['id_team' => 202, 'name' => 'Most Coupe de France titles without winning Ligue 1', 'name_ptbr' => 'Mais títulos da Coupe de France sem ganhar a Ligue 1'], // FC Nantes
            ['id_team' => 203, 'name' => 'Most points in a Ligue 1 season by a team outside the top 5', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 1 por um time fora do top 5'], // Montpellier HSC
            ['id_team' => 204, 'name' => 'Highest finish in Ligue 1 for a team from Brittany (shared record)', 'name_ptbr' => 'Melhor classificação na Ligue 1 para um time da Bretanha (recorde compartilhado)'], // Stade Brestois 29
            ['id_team' => 205, 'name' => 'Most promotions to Ligue 1 from Ligue 2 (shared record)', 'name_ptbr' => 'Mais promoções para a Ligue 1 da Ligue 2 (recorde compartilhado)'], // Angers SCO
            ['id_team' => 206, 'name' => 'Most seasons in Ligue 1 without winning the title (shared record)', 'name_ptbr' => 'Mais temporadas na Ligue 1 sem ganhar o título (recorde compartilhado)'], // AJ Auxerre
            ['id_team' => 207, 'name' => 'Most consecutive draws in Ligue 1', 'name_ptbr' => 'Mais empates consecutivos na Ligue 1'], // Le Havre AC
            ['id_team' => 208, 'name' => 'Most seasons in Ligue 1 before relegation', 'name_ptbr' => 'Mais temporadas na Ligue 1 antes do rebaixamento'], // Stade de Reims
            ['id_team' => 209, 'name' => 'Most goals conceded in a single Ligue 1 season', 'name_ptbr' => 'Mais gols sofridos em uma única temporada da Ligue 1'], // Stade Strasbourg
            ['id_team' => 210, 'name' => 'Most Ligue 1 titles (shared record)', 'name_ptbr' => 'Mais títulos da Ligue 1 (recorde compartilhado)'], // AS Saint‑Étienne
            ['id_team' => 211, 'name' => 'Most consecutive seasons in Ligue 2', 'name_ptbr' => 'Mais temporadas consecutivas na Ligue 2'], // Toulouse FC
            ['id_team' => 212, 'name' => 'Most promotions to Ligue 1 from Ligue 2 (shared record)', 'name_ptbr' => 'Mais promoções para a Ligue 1 da Ligue 2 (recorde compartilhado)'], // Le Havre AC (Duplicate)
            ['id_team' => 213, 'name' => 'Most seasons in Ligue 1 without winning the title (shared record)', 'name_ptbr' => 'Mais temporadas na Ligue 1 sem ganhar o título (recorde compartilhado)'], // AJ Auxerre (Duplicate)
            ['id_team' => 214, 'name' => 'Most points in a Ligue 2 season without promotion', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 2 sem promoção'], // EA Guingamp
            ['id_team' => 215, 'name' => 'Highest finish in Ligue 2 for a newly promoted team', 'name_ptbr' => 'Maior classificação na Ligue 2 para um time recém-promovido'], // Grenoble Foot 38
            ['id_team' => 216, 'name' => 'Most seasons in Ligue 2 without promotion', 'name_ptbr' => 'Mais temporadas na Ligue 2 sem promoção'], // Stade Laval
            ['id_team' => 217, 'name' => 'Most consecutive seasons in Ligue 2 (shared record)', 'name_ptbr' => 'Mais temporadas consecutivas na Ligue 2 (recorde compartilhado)'], // Valenciennes FC
            ['id_team' => 218, 'name' => 'Most promotions to Ligue 1 via playoffs (shared record)', 'name_ptbr' => 'Mais promoções para a Ligue 1 via playoffs (recorde compartilhado)'], // Clermont Foot
            ['id_team' => 219, 'name' => 'Most seasons in Ligue 2 before relegation to National', 'name_ptbr' => 'Mais temporadas na Ligue 2 antes do rebaixamento para o National'], // Dijon FCO
            ['id_team' => 220, 'name' => 'Most consecutive seasons in Ligue 2 (shared record)', 'name_ptbr' => 'Mais temporadas consecutivas na Ligue 2 (recorde compartilhado)'], // Nîmes Olympique
            ['id_team' => 221, 'name' => 'Highest finish in Ligue 2 for a team from Normandy', 'name_ptbr' => 'Maior classificação na Ligue 2 para um time da Normandia'], // Quevilly Rouen Métropole
            ['id_team' => 222, 'name' => 'Most points in a Ligue 2 season without achieving promotion (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 2 sem conseguir a promoção (recorde compartilhado)'], // Paris FC
            ['id_team' => 223, 'name' => 'Most seasons in Ligue 2 (shared record)', 'name_ptbr' => 'Mais temporadas na Ligue 2 (recorde compartilhado)'], // Sochaux
            ['id_team' => 224, 'name' => 'Most promotions to Ligue 1 from Ligue 2 (shared record)', 'name_ptbr' => 'Mais promoções para a Ligue 1 da Ligue 2 (recorde compartilhado)'], // AJ Caen
            ['id_team' => 225, 'name' => 'Most points in a Ligue 2 season by a promoted team', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 2 por um time promovido'], // Lorient
            ['id_team' => 226, 'name' => 'Most consecutive seasons in Ligue 1 before relegation', 'name_ptbr' => 'Mais temporadas consecutivas na Ligue 1 antes do rebaixamento'], // Troyes AC
            ['id_team' => 227, 'name' => 'Most promotions to Ligue 1 via playoffs (shared record)', 'name_ptbr' => 'Mais promoções para a Ligue 1 via playoffs (recorde compartilhado)'], // AC Ajaccio
            ['id_team' => 228, 'name' => 'Most seasons in Ligue 2 (shared record)', 'name_ptbr' => 'Mais temporadas na Ligue 2 (recorde compartilhado)'], // Caen (Duplicate)
            ['id_team' => 229, 'name' => 'Most points in a Ligue 2 season without achieving promotion (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da Ligue 2 sem conseguir a promoção (recorde compartilhado)'], // Paris FC (Duplicate)

            // Italian Teams
            ['id_team' => 230, 'name' => 'Most Serie A titles', 'name_ptbr' => 'Mais títulos da Serie A'], // Juventus
            ['id_team' => 231, 'name' => 'Most UEFA Champions League titles by an Italian club', 'name_ptbr' => 'Mais títulos da UEFA Champions League por um clube italiano'], // AC Milan
            ['id_team' => 232, 'name' => 'Most Coppa Italia titles', 'name_ptbr' => 'Mais títulos da Coppa Italia'], // Inter Milan
            ['id_team' => 233, 'name' => 'Fastest Serie A title win', 'name_ptbr' => 'Vitória mais rápida do título da Serie A'], // Napoli
            ['id_team' => 234, 'name' => 'Most Coppa Italia finals without winning', 'name_ptbr' => 'Mais finais da Coppa Italia sem vencer'], // Roma
            ['id_team' => 235, 'name' => 'Most Supercoppa Italiana titles', 'name_ptbr' => 'Mais títulos da Supercoppa Italiana'], // Lazio
            ['id_team' => 236, 'name' => 'Highest Serie A finish without ever winning the Scudetto', 'name_ptbr' => 'Maior classificação na Serie A sem nunca ter vencido o Scudetto'], // Atalanta
            ['id_team' => 237, 'name' => 'Most Coppa Italia titles (shared record)', 'name_ptbr' => 'Mais títulos da Coppa Italia (recorde compartilhado)'], // Fiorentina
            ['id_team' => 238, 'name' => 'Highest Serie A finish for a newly promoted team', 'name_ptbr' => 'Maior classificação na Serie A para um time recém-promovido'], // Sassuolo
            ['id_team' => 239, 'name' => 'Most Serie A seasons without winning the title (shared record)', 'name_ptbr' => 'Mais temporadas na Serie A sem ganhar o título (recorde compartilhado)'], // Torino
            ['id_team' => 240, 'name' => 'Most consecutive seasons in Serie A without winning a trophy', 'name_ptbr' => 'Mais temporadas consecutivas na Serie A sem ganhar um troféu'], // Udinese
            ['id_team' => 241, 'name' => 'Fastest promotion from Serie C to Serie A', 'name_ptbr' => 'Promoção mais rápida da Serie C para a Serie A'], // Monza
            ['id_team' => 242, 'name' => 'Most Serie A seasons without winning the title (shared record)', 'name_ptbr' => 'Mais temporadas na Serie A sem ganhar o título (recorde compartilhado)'], // Empoli
            ['id_team' => 243, 'name' => 'Fewest points in a Serie A season before relegation', 'name_ptbr' => 'Menos pontos em uma temporada da Serie A antes do rebaixamento'], // Salernitana
            ['id_team' => 244, 'name' => 'Most promotions to Serie A from Serie B (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A da Serie B (recorde compartilhado)'], // Lecce
            ['id_team' => 245, 'name' => 'Most consecutive Serie A seasons without relegation', 'name_ptbr' => 'Mais temporadas consecutivas na Serie A sem rebaixamento'], // Bologna
            ['id_team' => 246, 'name' => 'Most points in a Serie A season before relegation (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da Serie A antes do rebaixamento (recorde compartilhado)'], // Spezia
            ['id_team' => 247, 'name' => 'Most Serie A relegations (shared record)', 'name_ptbr' => 'Mais rebaixamentos da Serie A (recorde compartilhado)'], // Verona
            ['id_team' => 248, 'name' => 'Most promotions to Serie A from Serie B (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A da Serie B (recorde compartilhado)'], // Brescia
            ['id_team' => 249, 'name' => 'Most seasons in Serie B without promotion (shared record)', 'name_ptbr' => 'Mais temporadas na Serie B sem promoção (recorde compartilhado)'], // Bari
            ['id_team' => 250, 'name' => 'Most promotions to Serie A from Serie B (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A da Serie B (recorde compartilhado)'], // Palermo
            ['id_team' => 251, 'name' => 'Most promotions to Serie A from Serie B (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A da Serie B (recorde compartilhado)'], // Parma
            ['id_team' => 252, 'name' => 'Most points in a Serie B season by a promoted team', 'name_ptbr' => 'Mais pontos em uma temporada da Serie B por um time promovido'], // Frosinone
            ['id_team' => 253, 'name' => 'Most Serie B titles', 'name_ptbr' => 'Mais títulos da Serie B'], // Cremonese
            ['id_team' => 254, 'name' => 'Most promotions to Serie A from Serie B (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A da Serie B (recorde compartilhado)'], // Lecce (Duplicate)
            ['id_team' => 255, 'name' => 'Most seasons in Serie B before promotion', 'name_ptbr' => 'Mais temporadas na Serie B antes da promoção'], // Como
            ['id_team' => 256, 'name' => 'Most seasons in Serie B without ever reaching Serie A', 'name_ptbr' => 'Mais temporadas na Serie B sem nunca ter chegado à Serie A'], // Modena
            ['id_team' => 257, 'name' => 'Most consecutive seasons in Serie B', 'name_ptbr' => 'Mais temporadas consecutivas na Serie B'], // Cosenza
            ['id_team' => 258, 'name' => 'Most points in a Serie B season before relegation', 'name_ptbr' => 'Mais pontos em uma temporada da Serie B antes do rebaixamento'], // Reggina
            ['id_team' => 259, 'name' => 'Most promotions to Serie A via playoffs (shared record)', 'name_ptbr' => 'Mais promoções para a Serie A via playoffs (recorde compartilhado)'], // Pisa
            ['id_team' => 260, 'name' => 'Most Serie B seasons without relegation', 'name_ptbr' => 'Mais temporadas na Serie B sem rebaixamento'], // Cittadella
            ['id_team' => 261, 'name' => 'Highest Serie B finish for a newly promoted team', 'name_ptbr' => 'Maior classificação na Serie B para um time recém-promovido'], // Sudtirol
            ['id_team' => 262, 'name' => 'Most points in a Serie B season by a promoted team (shared record)', 'name_ptbr' => 'Mais pontos em uma temporada da Serie B por um time promovido (recorde compartilhado)'], // Benevento
            ['id_team' => 263, 'name' => 'Most Serie B titles (shared record)', 'name_ptbr' => 'Mais títulos da Serie B (recorde compartilhado)'], // Cremonese (Duplicate)
            ['id_team' => 264, 'name' => 'Most Serie B seasons without promotion (shared record)', 'name_ptbr' => 'Mais temporadas na Serie B sem promoção (recorde compartilhado)'], // Perugia
            ['id_team' => 265, 'name' => 'Most MLS Cup titles (5)', 'name_ptbr' => 'Mais títulos da MLS Cup (5)'],
            ['id_team' => 265, 'name' => 'Most Supporters\' Shield titles (4)', 'name_ptbr' => 'Mais títulos da Supporters\' Shield (4)'],

            // Seattle Sounders
            ['id_team' => 266, 'name' => 'Most U.S. Open Cup titles (4)', 'name_ptbr' => 'Mais títulos da U.S. Open Cup (4)'],
            ['id_team' => 266, 'name' => 'First MLS team to win the Concacaf Champions League', 'name_ptbr' => 'Primeiro time da MLS a vencer a Concacaf Champions League'],

            // Atlanta United
            ['id_team' => 267, 'name' => 'Most consecutive MLS Cup Playoff appearances from expansion (3)', 'name_ptbr' => 'Mais aparições consecutivas nos Playoffs da MLS Cup desde a expansão (3)'],
            ['id_team' => 267, 'name' => 'Largest single-game attendance in MLS history (73,019)', 'name_ptbr' => 'Maior público em um único jogo na história da MLS (73.019)'],

            // Toronto FC
            ['id_team' => 268, 'name' => 'First Canadian team to win the MLS Cup', 'name_ptbr' => 'Primeiro time canadense a vencer a MLS Cup'],
            ['id_team' => 268, 'name' => 'First MLS team to win a domestic treble (MLS Cup, Supporters\' Shield, Canadian Championship)', 'name_ptbr' => 'Primeiro time da MLS a conquistar a tríplice coroa doméstica (MLS Cup, Supporters\' Shield, Canadian Championship)'],

            // New York Red Bulls
            ['id_team' => 269, 'name' => 'Most Supporters\' Shield titles without an MLS Cup (3)', 'name_ptbr' => 'Mais títulos da Supporters\' Shield sem uma MLS Cup (3)'],
            ['id_team' => 269, 'name' => 'Longest active playoff streak in MLS (13 seasons)', 'name_ptbr' => 'Maior sequência ativa de playoffs na MLS (13 temporadas)'],

            // Portland Timbers
            ['id_team' => 270, 'name' => 'Most Western Conference Championship titles (3)', 'name_ptbr' => 'Mais títulos da Western Conference Championship (3)'],

            // Philadelphia Union
            ['id_team' => 271, 'name' => 'Most points in an MLS regular season (Eastern Conference record - 73 in 2022)', 'name_ptbr' => 'Mais pontos em uma temporada regular da MLS (recorde da Conferência Leste - 73 em 2022)'],

            // FC Cincinnati
            ['id_team' => 272, 'name' => 'Fastest team to win the Supporters\' Shield after joining MLS (5th season)', 'name_ptbr' => 'Time mais rápido a vencer a Supporters\' Shield após ingressar na MLS (5ª temporada)'],

            // Sporting Kansas City
            ['id_team' => 273, 'name' => 'Most U.S. Open Cup titles (4, tied)', 'name_ptbr' => 'Mais títulos da U.S. Open Cup (4, empatado)'],

            // Real Salt Lake
            ['id_team' => 274, 'name' => 'Youngest club to win the MLS Cup (2009)', 'name_ptbr' => 'Clube mais jovem a vencer a MLS Cup (2009)'],

            // Minnesota United
            ['id_team' => 275, 'name' => 'First Minnesota team to reach an MLS Cup Playoff Conference Final', 'name_ptbr' => 'Primeiro time de Minnesota a alcançar uma Final de Conferência dos Playoffs da MLS Cup'],

            // Chicago Fire
            ['id_team' => 276, 'name' => 'Most U.S. Open Cup titles (4, tied)', 'name_ptbr' => 'Mais títulos da U.S. Open Cup (4, empatado)'],
            ['id_team' => 276, 'name' => 'Only MLS expansion team to win MLS Cup and U.S. Open Cup in their inaugural season (1998)', 'name_ptbr' => 'Única equipe de expansão da MLS a vencer a MLS Cup e a U.S. Open Cup em sua temporada inaugural (1998)'],

            // CF Montréal
            ['id_team' => 277, 'name' => 'Most Canadian Championship titles (5)', 'name_ptbr' => 'Mais títulos do Campeonato Canadense (5)'],

            // Columbus Crew
            ['id_team' => 278, 'name' => 'First MLS Cup champion to win at home (2008)', 'name_ptbr' => 'Primeiro campeão da MLS Cup a vencer em casa (2008)'],

            // New England Revolution
            ['id_team' => 279, 'name' => 'Most Supporters\' Shield points in a single season (73 in 2021)', 'name_ptbr' => 'Mais pontos na Supporters\' Shield em uma única temporada (73 em 2021)'],

            // Houston Dynamo
            ['id_team' => 280, 'name' => 'Only MLS team to win MLS Cup in their first two seasons (2006, 2007)', 'name_ptbr' => 'Único time da MLS a vencer a MLS Cup em suas duas primeiras temporadas (2006, 2007)'],

            // D.C. United
            ['id_team' => 281, 'name' => 'Most MLS Cup titles (4, tied)', 'name_ptbr' => 'Mais títulos da MLS Cup (4, empatado)'],
            ['id_team' => 281, 'name' => 'First team to win the MLS Cup', 'name_ptbr' => 'Primeiro time a vencer a MLS Cup'],

            // Inter Miami
            ['id_team' => 282, 'name' => 'Fastest expansion team to win a major trophy (Leagues Cup 2023)', 'name_ptbr' => 'Time de expansão mais rápido a vencer um grande troféu (Leagues Cup 2023)'],

            // Nashville SC
            ['id_team' => 283, 'name' => 'First team to reach the MLS Cup Playoffs in their inaugural season', 'name_ptbr' => 'Primeiro time a alcançar os Playoffs da MLS Cup em sua temporada inaugural'],

            // Austin FC
            ['id_team' => 284, 'name' => 'Fastest expansion team to make the MLS Cup Playoffs (2nd season)', 'name_ptbr' => 'Time de expansão mais rápido a chegar aos Playoffs da MLS Cup (2ª temporada)'],

            // Atlanta United 2
            ['id_team' => 285, 'name' => 'Most goals scored in a single USL Championship game (11 vs. Hartford Athletic)', 'name_ptbr' => 'Mais gols marcados em um único jogo da USL Championship (11 contra Hartford Athletic)'],

            // Austin FC II
            ['id_team' => 286, 'name' => 'Inaugural MLS NEXT Pro Western Conference regular season champions (2023)', 'name_ptbr' => 'Campeão da temporada regular da Conferência Oeste da MLS NEXT Pro inaugural (2023)'],

            // Charlotte FC Next Pro
            ['id_team' => 287, 'name' => 'Most wins in a single MLS NEXT Pro regular season (16 in 2023)', 'name_ptbr' => 'Mais vitórias em uma única temporada regular da MLS NEXT Pro (16 em 2023)'],

            // Chicago Fire FC II (first instance)
            ['id_team' => 288, 'name' => 'First MLS NEXT Pro team to defeat a professional European opponent (vs. Club Necaxa U23)', 'name_ptbr' => 'Primeiro time da MLS NEXT Pro a derrotar um adversário profissional europeu (vs. Club Necaxa U23)'],

            // Colorado Rapids 2
            ['id_team' => 289, 'name' => 'Most points in a single MLS NEXT Pro regular season (60 in 2023)', 'name_ptbr' => 'Mais pontos em uma única temporada regular da MLS NEXT Pro (60 em 2023)'],

            // Columbus Crew 2
            ['id_team' => 290, 'name' => 'Inaugural MLS NEXT Pro Cup Champions (2022)', 'name_ptbr' => 'Campeão da MLS NEXT Pro Cup inaugural (2022)'],

            // FC Cincinnati 2
            ['id_team' => 291, 'name' => 'Most improved team from one MLS NEXT Pro season to the next (+22 points in 2023)', 'name_ptbr' => 'Time que mais melhorou de uma temporada da MLS NEXT Pro para a próxima (+22 pontos em 2023)'],

            // Chicago Fire FC II (second instance)
            ['id_team' => 292, 'name' => 'Most goals scored in an MLS NEXT Pro match by a single player (4 by Billy Schuler)', 'name_ptbr' => 'Mais gols marcados em uma partida da MLS NEXT Pro por um único jogador (4 por Billy Schuler)'],

            // Houston Dynamo 2
            ['id_team' => 293, 'name' => 'First MLS NEXT Pro team to host a playoff match', 'name_ptbr' => 'Primeiro time da MLS NEXT Pro a sediar uma partida de playoff'],

            // Inter Miami CF II
            ['id_team' => 294, 'name' => 'Youngest goalscorer in MLS NEXT Pro history (Edison Azcona, 17 years old)', 'name_ptbr' => 'Artilheiro mais jovem na história da MLS NEXT Pro (Edison Azcona, 17 anos)'],

            // LA Galaxy II
            ['id_team' => 295, 'name' => 'Most regular season wins in USL Championship history (19 in 2014)', 'name_ptbr' => 'Mais vitórias na temporada regular na história da USL Championship (19 em 2014)'],

            // MKE Anomaly FC (assuming a fictional or future team for example)
            ['id_team' => 296, 'name' => 'First professional soccer club to be fully fan-owned in its inaugural season', 'name_ptbr' => 'Primeiro clube de futebol profissional totalmente pertencente a torcedores em sua temporada inaugural'],

            // New England Revolution II
            ['id_team' => 297, 'name' => 'Most points by an expansion team in their inaugural USL League One season (37 in 2020)', 'name_ptbr' => 'Mais pontos por um time de expansão em sua temporada inaugural da USL League One (37 em 2020)'],

            // New York City FC II
            ['id_team' => 298, 'name' => 'Most goals scored by an individual in a single MLS NEXT Pro season (Jack Harrison, 16 goals)', 'name_ptbr' => 'Mais gols marcados por um indivíduo em uma única temporada da MLS NEXT Pro (Jack Harrison, 16 gols)'],

            // Orlando City B
            ['id_team' => 299, 'name' => 'First USL Championship team to make the playoffs in their inaugural season (2016)', 'name_ptbr' => 'Primeiro time da USL Championship a chegar aos playoffs em sua temporada inaugural (2016)'],

            // Philadelphia Union II
            ['id_team' => 300, 'name' => 'Most consecutive games with a goal scored in MLS NEXT Pro (6 games)', 'name_ptbr' => 'Mais jogos consecutivos com um gol marcado na MLS NEXT Pro (6 jogos)'],

            // Portland Timbers 2
            ['id_team' => 301, 'name' => 'First USL Championship team to win a playoff game', 'name_ptbr' => 'Primeiro time da USL Championship a vencer um jogo de playoff'],

            // Real Monarchs
            ['id_team' => 302, 'name' => 'Most points in a single USL Championship regular season (77 in 2019)', 'name_ptbr' => 'Mais pontos em uma única temporada regular da USL Championship (77 em 2019)'],
            ['id_team' => 302, 'name' => 'USL Championship regular season champions (2019)', 'name_ptbr' => 'Campeão da temporada regular da USL Championship (2019)'],

            // Rochester New York FC
            ['id_team' => 303, 'name' => 'First independent team to win the USL Championship (2015)', 'name_ptbr' => 'Primeiro time independente a vencer a USL Championship (2015)'],

            // Tacoma Defiance
            ['id_team' => 304, 'name' => 'Most home wins in a single USL Championship season (14 in 2018)', 'name_ptbr' => 'Mais vitórias em casa em uma única temporada da USL Championship (14 em 2018)'],

            // Benfica
            ['id_team' => 305, 'name' => 'Most Primeira Liga titles (38)', 'name_ptbr' => 'Mais títulos da Primeira Liga (38)'],
            ['id_team' => 305, 'name' => 'Most Taça de Portugal titles (26)', 'name_ptbr' => 'Mais títulos da Taça de Portugal (26)'],
            ['id_team' => 305, 'name' => 'Only Portuguese club to win consecutive European Cups (1961, 1962)', 'name_ptbr' => 'Único clube português a vencer a Taça dos Campeões Europeus consecutivamente (1961, 1962)'],

            // Porto
            ['id_team' => 306, 'name' => 'Most consecutive Primeira Liga titles (5 from 1994-1999)', 'name_ptbr' => 'Mais títulos consecutivos da Primeira Liga (5 de 1994-1999)'],
            ['id_team' => 306, 'name' => 'Only Portuguese club to win the UEFA Champions League (2004) and UEFA Cup/Europa League (2003, 2011)', 'name_ptbr' => 'Único clube português a vencer a UEFA Champions League (2004) e a UEFA Cup/Europa League (2003, 2011)'],

            // Sporting CP
            ['id_team' => 307, 'name' => 'Most Taça de Portugal titles (17, second only to Benfica)', 'name_ptbr' => 'Mais títulos da Taça de Portugal (17, atrás apenas do Benfica)'],
            ['id_team' => 307, 'name' => 'Most Cândido de Oliveira Supercup titles (9)', 'name_ptbr' => 'Mais títulos da Supertaça Cândido de Oliveira (9)'],

            // Braga
            ['id_team' => 308, 'name' => 'Most Taça da Liga titles (3)', 'name_ptbr' => 'Mais títulos da Taça da Liga (3)'],
            ['id_team' => 308, 'name' => 'Reached the UEFA Europa League final (2011)', 'name_ptbr' => 'Alcançou a final da UEFA Europa League (2011)'],

            // Vitória SC
            ['id_team' => 309, 'name' => 'Most Taça de Portugal finals reached without winning (6 times before winning in 2013)', 'name_ptbr' => 'Mais finais da Taça de Portugal alcançadas sem vencer (6 vezes antes de vencer em 2013)'],
            ['id_team' => 309, 'name' => 'First club outside the "Big Three" to win the Taça de Portugal in the 21st century (2013)', 'name_ptbr' => 'Primeiro clube fora dos "Três Grandes" a vencer a Taça de Portugal no século XXI (2013)'],

            // Marítimo
            ['id_team' => 310, 'name' => 'Most Primeira Liga seasons without ever being relegated (among non-Big Three clubs)', 'name_ptbr' => 'Mais temporadas na Primeira Liga sem nunca ter sido rebaixado (entre clubes não-Grandes)'],

            // Gil Vicente
            ['id_team' => 311, 'name' => 'Highest ever finish in the Primeira Liga (5th in 2021-22)', 'name_ptbr' => 'Melhor classificação na Primeira Liga (5º em 2021-22)'],

            // Casa Pia
            ['id_team' => 312, 'name' => 'Longest gap between Primeira Liga appearances (83 years from 1938-39 to 2022-23)', 'name_ptbr' => 'Maior intervalo entre aparições na Primeira Liga (83 anos de 1938-39 a 2022-23)'],

            // Portimonense
            ['id_team' => 313, 'name' => 'Highest ever finish in the Primeira Liga (5th in 1984-85)', 'name_ptbr' => 'Melhor classificação na Primeira Liga (5º em 1984-85)'],

            // Paços de Ferreira
            ['id_team' => 314, 'name' => 'Reached the group stage of the UEFA Champions League (2013-14)', 'name_ptbr' => 'Alcançou a fase de grupos da UEFA Champions League (2013-14)'],

            // Famalicão
            ['id_team' => 315, 'name' => 'Highest ever finish in the Primeira Liga (6th in 2019-20)', 'name_ptbr' => 'Melhor classificação na Primeira Liga (6º em 2019-20)'],

            // Moreirense
            ['id_team' => 316, 'name' => 'Winner of the Taça da Liga (2017)', 'name_ptbr' => 'Vencedor da Taça da Liga (2017)'],

            // Tondela
            ['id_team' => 317, 'name' => 'Reached the Taça de Portugal final as a second division team (2022)', 'name_ptbr' => 'Alcançou a final da Taça de Portugal como time da segunda divisão (2022)'],

            // Chaves
            ['id_team' => 318, 'name' => 'Highest ever finish in the Primeira Liga (5th in 1986-87)', 'name_ptbr' => 'Melhor classificação na Primeira Liga (5º em 1986-87)'],

            // Club Brugge
            ['id_team' => 319, 'name' => 'Most Belgian First Division A titles (19)', 'name_ptbr' => 'Mais títulos da Primeira Divisão A Belga (19)'],
            ['id_team' => 319, 'name' => 'Most Belgian Super Cup titles (17)', 'name_ptbr' => 'Mais títulos da Supertaça Belga (17)'],

            // RSC Anderlecht
            ['id_team' => 320, 'name' => 'Most Belgian Cup titles (9)', 'name_ptbr' => 'Mais títulos da Taça da Bélgica (9)'],
            ['id_team' => 320, 'name' => 'Only Belgian club to win European trophies (2 European Cup Winners\' Cups, 2 European Super Cups)', 'name_ptbr' => 'Único clube belga a vencer troféus europeus (2 Taças dos Vencedores de Taças, 2 Supertaças Europeias)'],

            // Standard Liège
            ['id_team' => 321, 'name' => 'Most consecutive Belgian First Division A titles (3 from 1969-71)', 'name_ptbr' => 'Mais títulos consecutivos da Primeira Divisão A Belga (3 de 1969-71)'],

            // KAA Gent
            ['id_team' => 322, 'name' => 'Winner of the Belgian First Division A (2015)', 'name_ptbr' => 'Vencedor da Primeira Divisão A Belga (2015)'],
            ['id_team' => 322, 'name' => 'Winner of the Belgian Cup (4 times)', 'name_ptbr' => 'Vencedor da Taça da Bélgica (4 vezes)'],

            // KRC Genk
            ['id_team' => 323, 'name' => 'Winner of the Belgian First Division A (4 times)', 'name_ptbr' => 'Vencedor da Primeira Divisão A Belga (4 vezes)'],
            ['id_team' => 323, 'name' => 'Winner of the Belgian Cup (5 times)', 'name_ptbr' => 'Vencedor da Taça da Bélgica (5 vezes)'],

            // Royal Antwerp
            ['id_team' => 324, 'name' => 'Oldest football club in Belgium (founded 1880)', 'name_ptbr' => 'Clube de futebol mais antigo da Bélgica (fundado em 1880)'],
            ['id_team' => 324, 'name' => 'Winner of the Belgian First Division A (5 times)', 'name_ptbr' => 'Vencedor da Primeira Divisão A Belga (5 vezes)'],

            // Sint-Truiden
            ['id_team' => 325, 'name' => 'Highest ever finish in the Belgian First Division A (2nd in 1965-66)', 'name_ptbr' => 'Melhor classificação na Primeira Divisão A Belga (2º em 1965-66)'],

            // Cercle Brugge
            ['id_team' => 326, 'name' => 'Winner of the Belgian First Division A (3 times)', 'name_ptbr' => 'Vencedor da Primeira Divisão A Belga (3 vezes)'],
            ['id_team' => 326, 'name' => 'Winner of the Belgian Cup (2 times)', 'name_ptbr' => 'Vencedor da Taça da Bélgica (2 vezes)'],

            // KV Mechelen
            ['id_team' => 327, 'name' => 'Only Belgian club to win the UEFA Cup Winners\' Cup (1988) and UEFA Super Cup (1988)', 'name_ptbr' => 'Único clube belga a vencer a Taça dos Vencedores de Taças (1988) e a Supertaça Europeia (1988)'],
            ['id_team' => 327, 'name' => 'Winner of the Belgian First Division A (4 times)', 'name_ptbr' => 'Vencedor da Primeira Divisão A Belga (4 vezes)'],

            // Charleroi
            ['id_team' => 328, 'name' => 'Highest ever finish in the Belgian First Division A (2nd in 1968-69)', 'name_ptbr' => 'Melhor classificação na Primeira Divisão A Belga (2º em 1968-69)'],

            // OH Leuven
            ['id_team' => 329, 'name' => 'Highest ever finish in the Belgian First Division A (7th in 2020-21)', 'name_ptbr' => 'Melhor classificação na Primeira Divisão A Belga (7º em 2020-21)'],

            // Seraing
            ['id_team' => 330, 'name' => 'Reached the Belgian Cup final (1989)', 'name_ptbr' => 'Alcançou a final da Taça da Bélgica (1989)'],

            // Ajax
            ['id_team' => 331, 'name' => 'Most Eredivisie titles (36)', 'name_ptbr' => 'Mais títulos da Eredivisie (36)'],
            ['id_team' => 331, 'name' => 'Most KNVB Cup titles (20)', 'name_ptbr' => 'Mais títulos da KNVB Cup (20)'],
            ['id_team' => 331, 'name' => 'Only Dutch club to win the Intercontinental Cup/Club World Cup (1972, 1995)', 'name_ptbr' => 'Único clube holandês a vencer a Taça Intercontinental/Mundial de Clubes (1972, 1995)'],

            // PSV Eindhoven
            ['id_team' => 332, 'name' => 'Most consecutive Eredivisie titles (4 from 1985-86 to 1988-89)', 'name_ptbr' => 'Mais títulos consecutivos da Eredivisie (4 de 1985-86 a 1988-89)'],
            ['id_team' => 332, 'name' => 'Winner of the European Cup (1988)', 'name_ptbr' => 'Vencedor da Taça dos Campeões Europeus (1988)'],

            // Feyenoord
            ['id_team' => 333, 'name' => 'First Dutch club to win the European Cup (1970)', 'name_ptbr' => 'Primeiro clube holandês a vencer a Taça dos Campeões Europeus (1970)'],
            ['id_team' => 333, 'name' => 'Most KNVB Cup titles (13, second only to Ajax)', 'name_ptbr' => 'Mais títulos da KNVB Cup (13, atrás apenas do Ajax)'],

            // AZ Alkmaar
            ['id_team' => 334, 'name' => 'Winner of the Eredivisie (2 times)', 'name_ptbr' => 'Vencedor da Eredivisie (2 vezes)'],
            ['id_team' => 334, 'name' => 'Reached the UEFA Cup final (1981)', 'name_ptbr' => 'Alcançou a final da UEFA Cup (1981)'],

            // Vitesse
            ['id_team' => 335, 'name' => 'Reached the KNVB Cup final (5 times)', 'name_ptbr' => 'Alcançou a final da KNVB Cup (5 vezes)'],
            ['id_team' => 335, 'name' => 'Highest ever finish in the Eredivisie (3rd in 1997-98)', 'name_ptbr' => 'Melhor classificação na Eredivisie (3º em 1997-98)'],

            // FC Utrecht
            ['id_team' => 336, 'name' => 'Winner of the KNVB Cup (3 times)', 'name_ptbr' => 'Vencedor da KNVB Cup (3 vezes)'],
            ['id_team' => 336, 'name' => 'Most consecutive years in the Eredivisie without relegation (since 1970)', 'name_ptbr' => 'Mais anos consecutivos na Eredivisie sem rebaixamento (desde 1970)'],

            // SC Heerenveen
            ['id_team' => 337, 'name' => 'Reached the KNVB Cup final (2 times)', 'name_ptbr' => 'Alcançou a final da KNVB Cup (2 vezes)'],
            ['id_team' => 337, 'name' => 'Highest ever finish in the Eredivisie (2nd in 1999-2000)', 'name_ptbr' => 'Melhor classificação na Eredivisie (2º em 1999-2000)'],

            // Sparta Rotterdam
            ['id_team' => 338, 'name' => 'Oldest professional football club in the Netherlands (founded 1888)', 'name_ptbr' => 'Clube de futebol profissional mais antigo da Holanda (fundado em 1888)'],
            ['id_team' => 338, 'name' => 'Winner of the Eredivisie (6 times)', 'name_ptbr' => 'Vencedor da Eredivisie (6 vezes)'],

            // Go Ahead Eagles
            ['id_team' => 339, 'name' => 'Winner of the Eredivisie (4 times)', 'name_ptbr' => 'Vencedor da Eredivisie (4 vezes)'],

            // FC Twente
            ['id_team' => 340, 'name' => 'Winner of the Eredivisie (2010)', 'name_ptbr' => 'Vencedor da Eredivisie (2010)'],
            ['id_team' => 340, 'name' => 'Winner of the KNVB Cup (3 times)', 'name_ptbr' => 'Vencedor da KNVB Cup (3 vezes)'],

            // Heracles Almelo
            ['id_team' => 341, 'name' => 'Winner of the Eredivisie (2 times)', 'name_ptbr' => 'Vencedor da Eredivisie (2 vezes)'],

            // RKC Waalwijk
            ['id_team' => 342, 'name' => 'Highest ever finish in the Eredivisie (7th in 1991-92)', 'name_ptbr' => 'Melhor classificação na Eredivisie (7º em 1991-92)'],

            // PEC Zwolle
            ['id_team' => 343, 'name' => 'Winner of the KNVB Cup (2014)', 'name_ptbr' => 'Vencedor da KNVB Cup (2014)'],

            // Fortuna Sittard
            ['id_team' => 344, 'name' => 'Winner of the KNVB Cup (1964)', 'name_ptbr' => 'Vencedor da KNVB Cup (1964)'],

            // Malmö FF
            ['id_team' => 345, 'name' => 'Most Allsvenskan titles (23)', 'name_ptbr' => 'Mais títulos da Allsvenskan (23)'],
            ['id_team' => 345, 'name' => 'Most Svenska Cupen titles (15)', 'name_ptbr' => 'Mais títulos da Svenska Cupen (15)'],
            ['id_team' => 345, 'name' => 'Only Swedish club to reach the European Cup final (1979)', 'name_ptbr' => 'Único clube sueco a alcançar a final da Taça dos Campeões Europeus (1979)'],

            // AIK
            ['id_team' => 346, 'name' => 'Most consecutive seasons in the Allsvenskan (97 seasons)', 'name_ptbr' => 'Mais temporadas consecutivas na Allsvenskan (97 temporadas)'],
            ['id_team' => 346, 'name' => 'Winner of the Allsvenskan (12 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (12 vezes)'],

            // IFK Göteborg
            ['id_team' => 347, 'name' => 'Only Swedish club to win the UEFA Cup (1982, 1987)', 'name_ptbr' => 'Único clube sueco a vencer a UEFA Cup (1982, 1987)'],
            ['id_team' => 347, 'name' => 'Winner of the Allsvenskan (18 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (18 vezes)'],

            // Djurgårdens IF
            ['id_team' => 348, 'name' => 'Winner of the Allsvenskan (12 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (12 vezes)'],
            ['id_team' => 348, 'name' => 'Winner of the Svenska Cupen (5 times)', 'name_ptbr' => 'Vencedor da Svenska Cupen (5 vezes)'],

            // Hammarby IF
            ['id_team' => 349, 'name' => 'Winner of the Allsvenskan (2001)', 'name_ptbr' => 'Vencedor da Allsvenskan (2001)'],
            ['id_team' => 349, 'name' => 'Highest average attendance in Allsvenskan history', 'name_ptbr' => 'Maior média de público na história da Allsvenskan'],

            // IF Elfsborg
            ['id_team' => 350, 'name' => 'Winner of the Allsvenskan (6 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (6 vezes)'],

            // Helsingborgs IF
            ['id_team' => 351, 'name' => 'Winner of the Allsvenskan (5 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (5 vezes)'],
            ['id_team' => 351, 'name' => 'Winner of the Svenska Cupen (5 times)', 'name_ptbr' => 'Vencedor da Svenska Cupen (5 vezes)'],

            // Örebro SK
            ['id_team' => 352, 'name' => 'Highest ever finish in the Allsvenskan (2nd in 1994)', 'name_ptbr' => 'Melhor classificação na Allsvenskan (2º em 1994)'],

            // Varbergs BoIS
            ['id_team' => 353, 'name' => 'First time in Allsvenskan history to reach the top half in their debut season (2020)', 'name_ptbr' => 'Primeira vez na história da Allsvenskan a alcançar a metade superior na temporada de estreia (2020)'],

            // IFK Norrköping
            ['id_team' => 354, 'name' => 'Winner of the Allsvenskan (13 times)', 'name_ptbr' => 'Vencedor da Allsvenskan (13 vezes)'],
            ['id_team' => 354, 'name' => 'Winner of the Svenska Cupen (6 times)', 'name_ptbr' => 'Vencedor da Svenska Cupen (6 vezes)'],

            // Kalmar FF
            ['id_team' => 355, 'name' => 'Winner of the Allsvenskan (2008)', 'name_ptbr' => 'Vencedor da Allsvenskan (2008)'],
            ['id_team' => 355, 'name' => 'Winner of the Svenska Cupen (3 times)', 'name_ptbr' => 'Vencedor da Svenska Cupen (3 vezes)'],

            // BK Häcken
            ['id_team' => 356, 'name' => 'Winner of the Allsvenskan (2022)', 'name_ptbr' => 'Vencedor da Allsvenskan (2022)'],
            ['id_team' => 356, 'name' => 'Winner of the Svenska Cupen (2 times)', 'name_ptbr' => 'Vencedor da Svenska Cupen (2 vezes)'],

            // Degerfors IF
            ['id_team' => 357, 'name' => 'Reached the Svenska Cupen final (1993)', 'name_ptbr' => 'Alcançou a final da Svenska Cupen (1993)'],

            // GIF Sundsvall
            ['id_team' => 358, 'name' => 'Highest ever finish in the Allsvenskan (5th in 1988)', 'name_ptbr' => 'Melhor classificação na Allsvenskan (5º em 1988)'],

            // Galatasaray
            ['id_team' => 359, 'name' => 'Most Süper Lig titles (24)', 'name_ptbr' => 'Mais títulos da Süper Lig (24)'],
            ['id_team' => 359, 'name' => 'Only Turkish club to win a UEFA club competition (UEFA Cup 2000, UEFA Super Cup 2000)', 'name_ptbr' => 'Único clube turco a vencer uma competição de clubes da UEFA (UEFA Cup 2000, UEFA Super Cup 2000)'],

            // Fenerbahçe
            ['id_team' => 360, 'name' => 'Most Turkish Cup titles (7, tied)', 'name_ptbr' => 'Mais títulos da Copa da Turquia (7, empatado)'],
            ['id_team' => 360, 'name' => 'Longest undefeated streak in Süper Lig (47 matches)', 'name_ptbr' => 'Maior sequência invicta na Süper Lig (47 jogos)'],

            // Beşiktaş
            ['id_team' => 361, 'name' => 'Most Turkish Cup titles (11)', 'name_ptbr' => 'Mais títulos da Copa da Turquia (11)'],
            ['id_team' => 361, 'name' => 'Undefeated in a Süper Lig season (1991-92)', 'name_ptbr' => 'Invicto em uma temporada da Süper Lig (1991-92)'],

            // Trabzonspor
            ['id_team' => 362, 'name' => 'First club outside Istanbul to win the Süper Lig (1975-76)', 'name_ptbr' => 'Primeiro clube fora de Istambul a vencer a Süper Lig (1975-76)'],
            ['id_team' => 362, 'name' => 'Most Turkish Cup titles (9)', 'name_ptbr' => 'Mais títulos da Copa da Turquia (9)'],

            // İstanbul Başakşehir
            ['id_team' => 363, 'name' => 'Winner of the Süper Lig (2019-20)', 'name_ptbr' => 'Vencedor da Süper Lig (2019-20)'],
            ['id_team' => 363, 'name' => 'Fastest club to win Süper Lig after promotion (6th season)', 'name_ptbr' => 'Clube mais rápido a vencer a Süper Lig após a promoção (6ª temporada)'],

            // Konyaspor
            ['id_team' => 364, 'name' => 'Winner of the Turkish Cup (2017)', 'name_ptbr' => 'Vencedor da Copa da Turquia (2017)'],

            // Sivasspor
            ['id_team' => 365, 'name' => 'Highest ever finish in the Süper Lig (2nd in 2008-09)', 'name_ptbr' => 'Melhor classificação na Süper Lig (2º em 2008-09)'],
            ['id_team' => 365, 'name' => 'Winner of the Turkish Cup (2022)', 'name_ptbr' => 'Vencedor da Copa da Turquia (2022)'],

            // Gaziantep FK
            ['id_team' => 366, 'name' => 'Highest ever finish in the Süper Lig (8th in 2020-21)', 'name_ptbr' => 'Melhor classificação na Süper Lig (8º em 2020-21)'],

            // Çaykur Rizespor
            ['id_team' => 367, 'name' => 'Highest ever finish in the Süper Lig (5th in 1979-80)', 'name_ptbr' => 'Melhor classificação na Süper Lig (5º em 1979-80)'],

            // Alanyaspor
            ['id_team' => 368, 'name' => 'Reached the Turkish Cup final (2020)', 'name_ptbr' => 'Alcançou a final da Copa da Turquia (2020)'],
            ['id_team' => 368, 'name' => 'Highest ever finish in the Süper Lig (5th in 2019-20)', 'name_ptbr' => 'Melhor classificação na Süper Lig (5º em 2019-20)'],

            // Giresunspor
            ['id_team' => 369, 'name' => 'Highest ever finish in the Süper Lig (6th in 1971-72)', 'name_ptbr' => 'Melhor classificação na Süper Lig (6º em 1971-72)'],

            // Kayserispor
            ['id_team' => 370, 'name' => 'Winner of the Turkish Cup (2008)', 'name_ptbr' => 'Vencedor da Copa da Turquia (2008)'],

            // Antalyaspor
            ['id_team' => 371, 'name' => 'Reached the Turkish Cup final (2 times)', 'name_ptbr' => 'Alcançou a final da Copa da Turquia (2 vezes)'],

            // Fatih Karagümrük
            ['id_team' => 372, 'name' => 'Highest ever finish in the Süper Lig (7th in 1983-84)', 'name_ptbr' => 'Melhor classificação na Süper Lig (7º em 1983-84)'],

            // Kasımpaşa
            ['id_team' => 373, 'name' => 'Highest ever finish in the Süper Lig (6th in 2012-13)', 'name_ptbr' => 'Melhor classificação na Süper Lig (6º em 2012-13)'],

            // Flamengo (id_team: 374)
            ['id_team' => 374, 'name' => 'Most Campeonato Brasileiro Série A titles', 'name_ptbr' => 'Mais títulos do Campeonato Brasileiro Série A'],
            ['id_team' => 374, 'name' => 'Most Copa Libertadores titles by a Brazilian team (shared)', 'name_ptbr' => 'Mais títulos da Copa Libertadores por um time brasileiro (compartilhado)'],
            ['id_team' => 374, 'name' => 'Undefeated in a Campeonato Brasileiro Série A season (1980)', 'name_ptbr' => 'Invicto em uma temporada do Campeonato Brasileiro Série A (1980)'],

            // Palmeiras (id_team: 375)
            ['id_team' => 375, 'name' => 'Most Campeonato Brasileiro Série A titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Brasileiro Série A (compartilhado)'],
            ['id_team' => 375, 'name' => 'Most Copa do Brasil titles (shared)', 'name_ptbr' => 'Mais títulos da Copa do Brasil (compartilhado)'],
            ['id_team' => 375, 'name' => 'Most consecutive wins in Campeonato Brasileiro Série A', 'name_ptbr' => 'Mais vitórias consecutivas no Campeonato Brasileiro Série A'],

            // São Paulo (id_team: 376)
            ['id_team' => 376, 'name' => 'Most consecutive Copa Libertadores titles by a Brazilian team', 'name_ptbr' => 'Mais títulos consecutivos da Copa Libertadores por um time brasileiro'],
            ['id_team' => 376, 'name' => 'Most FIFA Club World Cup titles by a Brazilian team', 'name_ptbr' => 'Mais títulos da Copa do Mundo de Clubes da FIFA por um time brasileiro'],
            ['id_team' => 376, 'name' => 'Only Brazilian team to win three consecutive Campeonato Brasileiro Série A titles', 'name_ptbr' => 'Único time brasileiro a ganhar três títulos consecutivos do Campeonato Brasileiro Série A'],

            // Corinthians (id_team: 377)
            ['id_team' => 377, 'name' => 'Most Paulista Championship titles', 'name_ptbr' => 'Mais títulos do Campeonato Paulista'],
            ['id_team' => 377, 'name' => 'Undefeated in a Copa Libertadores season (2012)', 'name_ptbr' => 'Invicto em uma temporada da Copa Libertadores (2012)'],
            ['id_team' => 377, 'name' => 'First FIFA Club World Cup champion', 'name_ptbr' => 'Primeiro campeão da Copa do Mundo de Clubes da FIFA'],

            // Fluminense (id_team: 378)
            ['id_team' => 378, 'name' => 'First Campeonato Brasileiro Série A champion from Rio de Janeiro', 'name_ptbr' => 'Primeiro campeão do Campeonato Brasileiro Série A do Rio de Janeiro'],
            ['id_team' => 378, 'name' => 'Most Campeonato Carioca titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Carioca (compartilhado)'],

            // Botafogo (id_team: 379)
            ['id_team' => 379, 'name' => 'Record for most goals in a single Campeonato Brasileiro Série A season (Jairzinho, 1971)', 'name_ptbr' => 'Recorde de mais gols em uma única temporada do Campeonato Brasileiro Série A (Jairzinho, 1971)'],
            ['id_team' => 379, 'name' => 'Undefeated in a Campeonato Carioca season (1989)', 'name_ptbr' => 'Invicto em uma temporada do Campeonato Carioca (1989)'],

            // Cruzeiro (id_team: 380)
            ['id_team' => 380, 'name' => 'Most Copa do Brasil titles', 'name_ptbr' => 'Mais títulos da Copa do Brasil'],
            ['id_team' => 380, 'name' => 'First Brazilian team to win the Copa Libertadores twice (after Santos)', 'name_ptbr' => 'Primeiro time brasileiro a ganhar a Copa Libertadores duas vezes (depois do Santos)'],

            // Atlético Mineiro (id_team: 381)
            ['id_team' => 381, 'name' => 'First Campeonato Brasileiro Série A champion', 'name_ptbr' => 'Primeiro campeão do Campeonato Brasileiro Série A'],
            ['id_team' => 381, 'name' => 'Most Campeonato Mineiro titles', 'name_ptbr' => 'Mais títulos do Campeonato Mineiro'],
            ['id_team' => 381, 'name' => 'Longest undefeated streak in Campeonato Mineiro', 'name_ptbr' => 'Maior sequência invicta no Campeonato Mineiro'],

            // Internacional (id_team: 382)
            ['id_team' => 382, 'name' => 'Only Brazilian team to win the FIFA Club World Cup undefeated', 'name_ptbr' => 'Único time brasileiro a ganhar a Copa do Mundo de Clubes da FIFA invicto'],
            ['id_team' => 382, 'name' => 'Most Campeonato Gaúcho titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Gaúcho (compartilhado)'],

            // Grêmio (id_team: 383)
            ['id_team' => 383, 'name' => 'Most Copa do Brasil titles (shared)', 'name_ptbr' => 'Mais títulos da Copa do Brasil (compartilhado)'],
            ['id_team' => 383, 'name' => 'Most Campeonato Gaúcho titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Gaúcho (compartilhado)'],
            ['id_team' => 383, 'name' => 'First Brazilian team to win the Copa Libertadores (1983)', 'name_ptbr' => 'Primeiro time brasileiro a ganhar a Copa Libertadores (1983)'],

            // Vasco da Gama (id_team: 384)
            ['id_team' => 384, 'name' => 'First club in Brazil to accept black players (1923)', 'name_ptbr' => 'Primeiro clube no Brasil a aceitar jogadores negros (1923)'],
            ['id_team' => 384, 'name' => 'Undefeated in a Campeonato Carioca season (1945)', 'name_ptbr' => 'Invicto em uma temporada do Campeonato Carioca (1945)'],

            // Bahia (id_team: 385)
            ['id_team' => 385, 'name' => 'First Campeonato Brasileiro Série A champion from outside the Southeast region', 'name_ptbr' => 'Primeiro campeão do Campeonato Brasileiro Série A de fora da região Sudeste'],
            ['id_team' => 385, 'name' => 'Most Campeonato Baiano titles', 'name_ptbr' => 'Mais títulos do Campeonato Baiano'],

            // Fortaleza (id_team: 386)
            ['id_team' => 386, 'name' => 'Most Campeonato Cearense titles', 'name_ptbr' => 'Mais títulos do Campeonato Cearense'],
            ['id_team' => 386, 'name' => 'First Ceará team to reach a CONMEBOL final (Copa Sudamericana 2023)', 'name_ptbr' => 'Primeiro time cearense a chegar a uma final da CONMEBOL (Copa Sul-Americana 2023)'],

            // Ceará (id_team: 387)
            ['id_team' => 387, 'name' => 'Most consecutive Campeonato Cearense titles', 'name_ptbr' => 'Mais títulos consecutivos do Campeonato Cearense'],
            ['id_team' => 387, 'name' => 'First Ceará team to win a Copa do Nordeste title', 'name_ptbr' => 'Primeiro time cearense a ganhar um título da Copa do Nordeste'],

            // Sport Recife (id_team: 388)
            ['id_team' => 388, 'name' => 'Most Campeonato Pernambucano titles', 'name_ptbr' => 'Mais títulos do Campeonato Pernambucano'],
            ['id_team' => 388, 'name' => 'Only Northeastern team to win the Campeonato Brasileiro Série A (1987)', 'name_ptbr' => 'Único time nordestino a ganhar o Campeonato Brasileiro Série A (1987)'],

            // Juventude (id_team: 389)
            ['id_team' => 389, 'name' => 'Only team from outside Porto Alegre to win the Copa do Brasil (1999)', 'name_ptbr' => 'Único time de fora de Porto Alegre a ganhar a Copa do Brasil (1999)'],

            // Mirassol (id_team: 390)
            ['id_team' => 390, 'name' => 'First time from Mirassol to reach Campeonato Brasileiro Série B', 'name_ptbr' => 'Primeiro time de Mirassol a alcançar o Campeonato Brasileiro Série B'],

            // Santos (id_team: 391)
            ['id_team' => 391, 'name' => 'Most Campeonato Paulista titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Paulista (compartilhado)'],
            ['id_team' => 391, 'name' => 'Most consecutive Campeonato Brasileiro Série A titles (1961-1965)', 'name_ptbr' => 'Mais títulos consecutivos do Campeonato Brasileiro Série A (1961-1965)'],
            ['id_team' => 391, 'name' => 'Most goals scored in a single Campeonato Paulista season (150 goals, 1958)', 'name_ptbr' => 'Mais gols marcados em uma única temporada do Campeonato Paulista (150 gols, 1958)'],

            // Red Bull Bragantino (id_team: 392)
            ['id_team' => 392, 'name' => 'Youngest club to reach a CONMEBOL final (Copa Sudamericana 2021)', 'name_ptbr' => 'Clube mais jovem a chegar a uma final da CONMEBOL (Copa Sul-Americana 2021)'],

            // Vitória (id_team: 393)
            ['id_team' => 393, 'name' => 'Most Campeonato Baiano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Baiano (compartilhado)'],

            // Amazonas (id_team: 394)
            ['id_team' => 394, 'name' => 'First team from Amazonas to win Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro time do Amazonas a ganhar o Campeonato Brasileiro Série C'],

            // América Mineiro (id_team: 395)
            ['id_team' => 395, 'name' => 'Most Campeonato Mineiro titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Mineiro (compartilhado)'],
            ['id_team' => 395, 'name' => 'Longest undefeated streak in Campeonato Mineiro (shared)', 'name_ptbr' => 'Maior sequência invicta no Campeonato Mineiro (compartilhado)'],

            // Athletic Club (MG) (id_team: 396)
            ['id_team' => 396, 'name' => 'First club from São João del-Rei to reach Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de São João del-Rei a alcançar o Campeonato Brasileiro Série C'],

            // Atlético Goianiense (id_team: 397)
            ['id_team' => 397, 'name' => 'Most Campeonato Goiano titles', 'name_ptbr' => 'Mais títulos do Campeonato Goiano'],

            // Athletico Paranaense (id_team: 398)
            ['id_team' => 398, 'name' => 'Most Campeonato Paranaense titles', 'name_ptbr' => 'Mais títulos do Campeonato Paranaense'],
            ['id_team' => 398, 'name' => 'First Brazilian team to win the Copa Sudamericana (2018)', 'name_ptbr' => 'Primeiro time brasileiro a ganhar a Copa Sul-Americana (2018)'],

            // Avaí (id_team: 399)
            ['id_team' => 399, 'name' => 'Most Campeonato Catarinense titles', 'name_ptbr' => 'Mais títulos do Campeonato Catarinense'],

            // Botafogo-SP (id_team: 400)
            ['id_team' => 400, 'name' => 'First club from Ribeirão Preto to reach Campeonato Brasileiro Série A', 'name_ptbr' => 'Primeiro clube de Ribeirão Preto a alcançar o Campeonato Brasileiro Série A'],

            // Chapecoense (id_team: 401)
            ['id_team' => 401, 'name' => 'Winner of the Copa Sudamericana (awarded posthumously, 2016)', 'name_ptbr' => 'Vencedor da Copa Sul-Americana (concedido postumamente, 2016)'],

            // Coritiba (id_team: 402)
            ['id_team' => 402, 'name' => 'First club from Paraná to win the Campeonato Brasileiro Série A (1985)', 'name_ptbr' => 'Primeiro clube do Paraná a ganhar o Campeonato Brasileiro Série A (1985)'],

            // Criciúma (id_team: 403)
            ['id_team' => 403, 'name' => 'Only Santa Catarina team to win the Copa do Brasil (1991)', 'name_ptbr' => 'Único time de Santa Catarina a ganhar a Copa do Brasil (1991)'],

            // Cuiabá (id_team: 404)
            ['id_team' => 404, 'name' => 'First club from Mato Grosso to reach Campeonato Brasileiro Série A', 'name_ptbr' => 'Primeiro clube do Mato Grosso a alcançar o Campeonato Brasileiro Série A'],

            // CRB (id_team: 405)
            ['id_team' => 405, 'name' => 'Most Campeonato Alagoano titles', 'name_ptbr' => 'Mais títulos do Campeonato Alagoano'],

            // Ferroviária (id_team: 406)
            ['id_team' => 406, 'name' => 'Only club from Araraquara to win Campeonato Brasileiro Série D', 'name_ptbr' => 'Único clube de Araraquara a ganhar o Campeonato Brasileiro Série D'],

            // Goiás (id_team: 407)
            ['id_team' => 407, 'name' => 'Most Campeonato Goiano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Goiano (compartilhado)'],

            // Novorizontino (id_team: 408)
            ['id_team' => 408, 'name' => 'First club from Novo Horizonte to reach Campeonato Brasileiro Série B', 'name_ptbr' => 'Primeiro clube de Novo Horizonte a alcançar o Campeonato Brasileiro Série B'],

            // Operário-PR (id_team: 409)
            ['id_team' => 409, 'name' => 'First club from Ponta Grossa to reach Campeonato Brasileiro Série B', 'name_ptbr' => 'Primeiro clube de Ponta Grossa a alcançar o Campeonato Brasileiro Série B'],

            // Paysandu (id_team: 410)
            ['id_team' => 410, 'name' => 'Most Campeonato Paraense titles', 'name_ptbr' => 'Mais títulos do Campeonato Paraense'],
            ['id_team' => 410, 'name' => 'Only Northern team to win a CONMEBOL competition (Copa dos Campeões 2002)', 'name_ptbr' => 'Único time do Norte a ganhar uma competição da CONMEBOL (Copa dos Campeões 2002)'],

            // Remo (id_team: 411)
            ['id_team' => 411, 'name' => 'Most Campeonato Paraense titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Paraense (compartilhado)'],

            // Vila Nova (id_team: 412)
            ['id_team' => 412, 'name' => 'Most Campeonato Goiano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Goiano (compartilhado)'],

            // Volta Redonda (id_team: 413)
            ['id_team' => 413, 'name' => 'First club from Volta Redonda to win Campeonato Brasileiro Série D', 'name_ptbr' => 'Primeiro clube de Volta Redonda a ganhar o Campeonato Brasileiro Série D'],

            // ABC (id_team: 414)
            ['id_team' => 414, 'name' => 'Most Campeonato Potiguar titles', 'name_ptbr' => 'Mais títulos do Campeonato Potiguar'],

            // Anápolis (id_team: 415)
            ['id_team' => 415, 'name' => 'First club from Anápolis to reach Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de Anápolis a alcançar o Campeonato Brasileiro Série C'],

            // Botafogo‑PB (id_team: 416)
            ['id_team' => 416, 'name' => 'Most Campeonato Paraibano titles', 'name_ptbr' => 'Mais títulos do Campeonato Paraibano'],

            // Brusque (id_team: 417)
            ['id_team' => 417, 'name' => 'First club from Brusque to win Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de Brusque a ganhar o Campeonato Brasileiro Série C'],

            // Caxias (id_team: 418)
            ['id_team' => 418, 'name' => 'First club from Caxias do Sul to win the Campeonato Gaúcho (1990)', 'name_ptbr' => 'Primeiro clube de Caxias do Sul a ganhar o Campeonato Gaúcho (1990)'],

            // Confiança (id_team: 419)
            ['id_team' => 419, 'name' => 'Most Campeonato Sergipano titles', 'name_ptbr' => 'Mais títulos do Campeonato Sergipano'],

            // CSA (id_team: 420)
            ['id_team' => 420, 'name' => 'Most Campeonato Alagoano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Alagoano (compartilhado)'],

            // Figueirense (id_team: 421)
            ['id_team' => 421, 'name' => 'Most Campeonato Catarinense titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Catarinense (compartilhado)'],

            // Floresta (id_team: 422)
            ['id_team' => 422, 'name' => 'First club from Ceará to reach Copa do Nordeste final', 'name_ptbr' => 'Primeiro clube do Ceará a alcançar a final da Copa do Nordeste'],

            // Guarani (id_team: 423)
            ['id_team' => 423, 'name' => 'Only club from outside a state capital to win the Campeonato Brasileiro Série A (1978)', 'name_ptbr' => 'Único clube de fora de uma capital de estado a ganhar o Campeonato Brasileiro Série A (1978)'],

            // Itabaiana (id_team: 424)
            ['id_team' => 424, 'name' => 'Most Campeonato Sergipano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Sergipano (compartilhado)'],

            // Ituano (id_team: 425)
            ['id_team' => 425, 'name' => 'Only club from Itu to win the Campeonato Paulista (2014, 2022)', 'name_ptbr' => 'Único clube de Itu a ganhar o Campeonato Paulista (2014, 2022)'],

            // Londrina (id_team: 426)
            ['id_team' => 426, 'name' => 'First club from Londrina to win Campeonato Brasileiro Série B', 'name_ptbr' => 'Primeiro clube de Londrina a ganhar o Campeonato Brasileiro Série B'],

            // Maringá (id_team: 427)
            ['id_team' => 427, 'name' => 'First club from Maringá to reach Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de Maringá a alcançar o Campeonato Brasileiro Série C'],

            // Náutico (id_team: 428)
            ['id_team' => 428, 'name' => 'Most Campeonato Pernambucano titles (shared)', 'name_ptbr' => 'Mais títulos do Campeonato Pernambucano (compartilhado)'],
            ['id_team' => 428, 'name' => 'Only club from Pernambuco to be undefeated in a Campeonato Pernambucano season (1966)', 'name_ptbr' => 'Único clube de Pernambuco a ser invicto em uma temporada do Campeonato Pernambucano (1966)'],

            // Ponte Preta (id_team: 429)
            ['id_team' => 429, 'name' => 'Oldest football club in Brazil still active (1900)', 'name_ptbr' => 'Clube de futebol mais antigo do Brasil ainda em atividade (1900)'],

            // Retrô (id_team: 430)
            ['id_team' => 430, 'name' => 'Youngest club to reach Campeonato Brasileiro Série D playoffs', 'name_ptbr' => 'Clube mais jovem a alcançar os playoffs do Campeonato Brasileiro Série D'],

            // São Bernardo (id_team: 431)
            ['id_team' => 431, 'name' => 'First club from São Bernardo do Campo to reach Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de São Bernardo do Campo a alcançar o Campeonato Brasileiro Série C'],

            // Tombense (id_team: 432)
            ['id_team' => 432, 'name' => 'First club from Tombos to reach Campeonato Brasileiro Série C', 'name_ptbr' => 'Primeiro clube de Tombos a alcançar o Campeonato Brasileiro Série C'],

            // Ypiranga‑RS (id_team: 433)
            ['id_team' => 433, 'name' => 'First club from Erechim to reach Campeonato Brasileiro Série C playoffs', 'name_ptbr' => 'Primeiro clube de Erechim a alcançar os playoffs do Campeonato Brasileiro Série C'],
        ]);
    }
}
