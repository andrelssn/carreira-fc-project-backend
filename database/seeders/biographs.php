<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class biographs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biographs')->insert([
            [
                'id_team' => 1,
                'history' => 'Arsenal Football Club, founded in 1886 as Dial Square, is one of England\'s most successful and storied football clubs. They moved to North London in 1913, establishing themselves at Highbury for 93 years before moving to the Emirates Stadium in 2006. The club holds the record for the longest unbeaten run in English top-flight history, achieving the "Invincibles" season in 2003-04 by winning the Premier League without a single defeat. Arsenal has won 13 League titles, a record 14 FA Cups, 2 League Cups, 16 FA Community Shields, and one European Cup Winners\' Cup. Known for their attractive, flowing football and strong rivalries, particularly with Tottenham Hotspur in the North London Derby, Arsenal has a rich tradition of developing young talent and playing an influential role in English football. The club continually strives for excellence, aiming to add more silverware to its illustrious collection while maintaining its strong community ties and global fanbase.',
                'foundation' => '1886',
                'stadium' => 'Emirates Stadium',
                'goalscorer' => 'Thierry Henry',
                'goalscorer_total' => 228
            ],
            [
                'id_team' => 2,
                'history' => 'Aston Villa Football Club, founded in March 1874 in Birmingham, is one of the oldest and most successful clubs in English football history. They were one of the twelve founding members of the Football League in 1888. Villa has a rich history, having won the First Division title seven times and the FA Cup seven times. Their greatest triumph came in 1982 when they lifted the European Cup, defeating Bayern Munich in the final. After periods of varying fortunes, the club has re-established itself in the Premier League, with a dedicated fanbase and ambitious plans for future success, aiming to return to the pinnacle of English and European football from their iconic Villa Park stadium.',
                'foundation' => '1874',
                'stadium' => 'Villa Park',
                'goalscorer' => 'Billy Walker',
                'goalscorer_total' => 244
            ],
            [
                'id_team' => 3,
                'history' => 'AFC Bournemouth, founded in 1899 as Boscombe, became Bournemouth & Boscombe Athletic in 1923, adopting its current name in 1972. The club has experienced significant ups and downs, including periods in the lower divisions and financial struggles. Their meteoric rise under Eddie Howe saw them climb from League Two to the Premier League in just six seasons, achieving top-flight status for the first time in their history in 2015. Known for their attacking style of play, the Cherries have since established themselves in the Premier League, demonstrating resilience and ambition from their home at the Vitality Stadium (Dean Court), a testament to their remarkable journey in English football.',
                'foundation' => '1899',
                'stadium' => 'Vitality Stadium (Dean Court)',
                'goalscorer' => 'Brett Pitman',
                'goalscorer_total' => 102 // Official league goals, though total might be higher with cups
            ],
            [
                'id_team' => 4,
                'history' => 'Brentford Football Club, founded in 1889, has a long and varied history, largely spent in the lower divisions of English football. Known as "The Bees," the club has seen periods of success, including a strong run in the 1930s when they achieved their highest-ever league finish. After decades outside the top flight, Brentford achieved promotion to the Premier League in 2021, marking a significant milestone in their history. The club is renowned for its innovative data-driven approach to recruitment and management, which has underpinned its recent success. They play their home games at the Brentford Community Stadium, having moved from their historic Griffin Park in 2020.',
                'foundation' => '1889',
                'stadium' => 'Gtech Community Stadium',
                'goalscorer' => 'Jim Towers',
                'goalscorer_total' => 163
            ],
            [
                'id_team' => 5,
                'history' => 'Brighton & Hove Albion Football Club, founded in 1901, is known as "The Seagulls." The club spent much of its history in the lower divisions, with a notable period in the First Division in the early 1980s, reaching the FA Cup final in 1983. After severe financial difficulties and homelessness in the late 1990s, the club experienced a remarkable resurgence. Their promotion to the Premier League in 2017 marked a new era, establishing them as a resilient top-flight side known for their attractive, attacking football and astute player recruitment. They play their home matches at the Falmer Stadium, also known as the Amex Stadium, a modern venue symbolic of their recent growth.',
                'foundation' => '1901',
                'stadium' => 'Falmer Stadium (Amex Stadium)',
                'goalscorer' => 'Tommy Cook',
                'goalscorer_total' => 123
            ],
            [
                'id_team' => 6,
                'history' => 'Chelsea Football Club, founded in 1905, quickly became a prominent London club, though their major successes largely came from the mid-1990s onwards. Located at Stamford Bridge, Chelsea has won numerous domestic and international honours, including six Premier League titles, eight FA Cups, five League Cups, and notably, two UEFA Champions League titles (2012 and 2021) and two UEFA Europa League titles. The club underwent a significant transformation after the 2003 takeover by Roman Abramovich, ushering in an era of unprecedented success and global recognition. Known for their passionate fanbase and dramatic moments, Chelsea remains a powerhouse in English and European football, continually aiming for silverware.',
                'foundation' => '1905',
                'stadium' => 'Stamford Bridge',
                'goalscorer' => 'Frank Lampard',
                'goalscorer_total' => 211
            ],
            [
                'id_team' => 7,
                'history' => 'Crystal Palace Football Club, founded in 1905, has a rich and complex history, often fluctuating between the top two divisions of English football. Known as "The Eagles," they play at Selhurst Park. The club\'s most famous period was under Steve Coppell in the late 1980s and early 1990s, where they achieved promotion to the First Division and reached the FA Cup final in 1990. After various financial struggles and several relegations and promotions, Palace firmly re-established themselves in the Premier League in 2013, solidifying their place as a consistent top-flight team. Their recent FA Cup win in 2025 marked their first major trophy, adding a significant chapter to their history.',
                'foundation' => '1905',
                'stadium' => 'Selhurst Park',
                'goalscorer' => 'Peter Simpson',
                'goalscorer_total' => 165
            ],
            [
                'id_team' => 8,
                'history' => 'Everton Football Club, founded in 1878, is one of the oldest and most traditional clubs in English football, based in Liverpool. Known as "The Toffees," they were one of the founding members of the Football League and have spent more seasons in the top flight than any other club. Everton has won nine League titles, five FA Cups, and one European Cup Winners\' Cup. With a passionate fanbase and a long-standing rivalry with Liverpool in the Merseyside Derby, the club has a proud heritage. As of 2025, they are embarking on a new chapter at their new stadium, aiming to overcome recent financial challenges and climb back to the top echelons of English football.',
                'foundation' => '1878',
                'stadium' => 'Bramley-Moore Dock Stadium', // Assuming new stadium name is generally used now
                'goalscorer' => 'Dixie Dean',
                'goalscorer_total' => 383
            ],
            [
                'id_team' => 9,
                'history' => 'Fulham Football Club, founded in 1879, is London\'s oldest professional football club, based in West London on the banks of the River Thames. Known as "The Cottagers," they play at Craven Cottage, one of England\'s most historic and picturesque grounds. Fulham has experienced periods in both the top flight and lower divisions, with their most successful modern era coming in the early 2000s, including a run to the UEFA Europa League final in 2010. The club has consistently bounced between the Premier League and Championship in recent years, demonstrating resilience and a commitment to attacking football. With ongoing stadium developments, Fulham aims to consolidate its position in the top flight.',
                'foundation' => '1879',
                'stadium' => 'Craven Cottage',
                'goalscorer' => 'Gordon Davies',
                'goalscorer_total' => 178
            ],
            [
                'id_team' => 10,
                'history' => 'Ipswich Town Football Club, founded in 1878, has a rich history, particularly under legendary managers Sir Alf Ramsey and Sir Bobby Robson. The club famously won the First Division title in 1962 and the FA Cup in 1978. Their greatest European triumph came in 1981 when they lifted the UEFA Cup. After periods of decline, Ipswich has been rebuilding, securing back-to-back promotions to reach the Premier League recently, only to face relegation again in 2025. Based at Portman Road, the club remains a strong community presence with a dedicated fanbase, aiming to regain Premier League status and re-establish itself as a force in English football.',
                'foundation' => '1878',
                'stadium' => 'Portman Road',
                'goalscorer' => 'Ray Crawford',
                'goalscorer_total' => 171
            ],
            [
                'id_team' => 11,
                'history' => 'Leicester City Football Club, founded in 1884 as Leicester Fosse, became Leicester City in 1919. Based at the King Power Stadium, the club achieved one of football\'s greatest ever upsets by winning the Premier League title in 2016, defying 5000/1 odds. This historic triumph followed their first-ever FA Cup win in 2021. The Foxes have experienced promotion and relegation battles, but their Premier League title cemented their place in football folklore. As of 2025, the club faces challenges, including potential financial fair play sanctions, but remains committed to competing at the highest level and building on their recent successes.',
                'foundation' => '1884',
                'stadium' => 'King Power Stadium',
                'goalscorer' => 'Arthur Chandler',
                'goalscorer_total' => 273
            ],
            [
                'id_team' => 12,
                'history' => 'Liverpool Football Club, founded in 1892, is one of the most successful clubs in world football, based at Anfield. Renowned for their passionate "You\'ll Never Walk Alone" anthem and the "Boot Room" era, Liverpool has won 19 League titles, a record 8 FA Cups, a record 10 League Cups, and six UEFA Champions League titles, more than any other English club. Their history is marked by dominant periods, fierce rivalries like the Merseyside Derby, and unforgettable European nights. Under new management in 2025 after winning the Premier League in 2024/25, the club continues its pursuit of silverware, aiming to sustain its position as a global football giant.',
                'foundation' => '1892',
                'stadium' => 'Anfield',
                'goalscorer' => 'Ian Rush',
                'goalscorer_total' => 346
            ],
            [
                'id_team' => 13,
                'history' => 'Luton Town Football Club, founded in 1885, has a history marked by dramatic highs and lows, including a period in the top flight and winning the League Cup in 1988. Uniquely, they spent three decades outside the top four divisions of English football, even dropping into non-league, before an incredible resurgence saw them achieve three promotions in five seasons to reach the Premier League in 2023. After back-to-back relegations, they find themselves in League One in 2025. Playing at their traditional home, Kenilworth Road, Luton Town embodies resilience and fighting spirit, always striving to climb back up the football pyramid.',
                'foundation' => '1885',
                'stadium' => 'Kenilworth Road',
                'goalscorer' => 'Joe Payne',
                'goalscorer_total' => 143
            ],
            [
                'id_team' => 14,
                'history' => 'Manchester City Football Club, founded in 1880 as St. Mark\'s (West Gorton), became Manchester City in 1894. After periods of moderate success and several relegations, including to the third tier, the club experienced a dramatic transformation following the 2008 takeover by the Abu Dhabi United Group. This ushered in an era of unprecedented success, with City winning numerous Premier League titles, FA Cups, League Cups, and their first UEFA Champions League in 2023. Based at the Etihad Stadium, they are known for their dominant, possession-based football under Pep Guardiola. Despite a transitional 2024/25 season, City remains a formidable force aiming to reclaim domestic and European supremacy.',
                'foundation' => '1880',
                'stadium' => 'Etihad Stadium',
                'goalscorer' => 'Sergio Agüero',
                'goalscorer_total' => 260
            ],
            [
                'id_team' => 15,
                'history' => 'Manchester United Football Club, founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902. Based at Old Trafford, they are one of the most famous and successful clubs in world football. Under Sir Matt Busby and particularly Sir Alex Ferguson, United achieved unparalleled domestic and European success, including 20 League titles, 12 FA Cups, 6 League Cups, and 3 UEFA Champions League titles. Known for their attacking football and iconic players, the club faced significant challenges in 2024/25, missing European qualification. Under new management, United is determined to rebuild, return to its winning ways, and compete for major honours once again.',
                'foundation' => '1878',
                'stadium' => 'Old Trafford',
                'goalscorer' => 'Wayne Rooney',
                'goalscorer_total' => 253
            ],
            [
                'id_team' => 16,
                'history' => 'Newcastle United Football Club, founded in 1892 by the merger of two local clubs, is a prominent club in English football, based at St James\' Park. Known as "The Magpies," they have a passionate and loyal fanbase. The club enjoyed significant success in the early 20th century, winning four League titles and six FA Cups. After a long period without major silverware, the club has seen renewed ambition following a change in ownership, aiming to challenge at the top of the Premier League and in European competitions. Newcastle United is recognized for its rich football heritage and the unique atmosphere of its home stadium.',
                'foundation' => '1892',
                'stadium' => 'St James\' Park',
                'goalscorer' => 'Alan Shearer',
                'goalscorer_total' => 206
            ],
            [
                'id_team' => 17,
                'history' => 'Nottingham Forest Football Club, founded in 1865, is one of the oldest and most historically significant clubs in England. Based at the City Ground, their most famous period was under Brian Clough in the late 1970s, when they remarkably won the First Division title in 1978 and back-to-back European Cups in 1979 and 1980. After decades outside the Premier League, Forest achieved promotion back to the top flight in 2022. The club has faced challenges since returning to the Premier League, often fighting for survival. With a proud legacy, Forest aims to consolidate its Premier League status and build for a more stable and successful future.',
                'foundation' => '1865',
                'stadium' => 'The City Ground',
                'goalscorer' => 'Arthur Capes', // Based on most sources, for official competitive goals
                'goalscorer_total' => 104 // Total competitive goals
            ],
            [
                'id_team' => 18,
                'history' => 'Southampton Football Club, founded in 1885 as St. Mary\'s Y.M.A., became Southampton F.C. in 1897. Known as "The Saints," they play at St Mary\'s Stadium. The club\'s most significant achievement is winning the FA Cup in 1976. Southampton has a reputation for developing young talent through its acclaimed academy, which has produced numerous England internationals. The club has often fluctuated between the Premier League and the Championship, demonstrating a resilient spirit. As of 2025, having recently achieved promotion back to the Premier League, Southampton aims to establish itself firmly in the top flight and continue its tradition of attractive football and player development.',
                'foundation' => '1885',
                'stadium' => 'St Mary\'s Stadium',
                'goalscorer' => 'Mick Channon',
                'goalscorer_total' => 185
            ],
            [
                'id_team' => 19,
                'history' => 'Tottenham Hotspur Football Club, founded in 1882, is one of England\'s most historic clubs, based in North London. Known as "Spurs," they play at the state-of-the-art Tottenham Hotspur Stadium. The club was the first British team to win a European trophy (the European Cup Winners\' Cup in 1963) and achieved the first League and FA Cup "Double" in the 20th century (1961). Spurs have won two League titles, eight FA Cups, four League Cups, and two UEFA Cups. With a reputation for attractive, attacking football and a fierce rivalry with Arsenal, Tottenham consistently aims to challenge for major honours and solidify its position among Europe\'s elite clubs.',
                'foundation' => '1882',
                'stadium' => 'Tottenham Hotspur Stadium',
                'goalscorer' => 'Harry Kane',
                'goalscorer_total' => 280
            ],
            [
                'id_team' => 20,
                'history' => 'West Ham United Football Club, founded in 1900 as Thames Ironworks F.C., became West Ham United in 1900. Based in East London, known as "The Hammers," they played at Upton Park for over a century before moving to the London Stadium in 2016. The club has won three FA Cups and the European Cup Winners\' Cup in 1965. Renowned for their "Academy of Football" and distinctive claret and blue colours, West Ham has a strong working-class heritage and passionate fanbase. After winning the UEFA Europa Conference League in 2023, the club aims to consistently compete for European qualification and establish itself as a formidable Premier League force.',
                'foundation' => '1900',
                'stadium' => 'London Stadium',
                'goalscorer' => 'Vic Watson',
                'goalscorer_total' => 326
            ],
            [
                'id_team' => 21,
                'history' => 'Wolverhampton Wanderers Football Club, founded in 1877, is a historic club based at Molineux Stadium. Known as "Wolves," they were one of the founding members of the Football League. Wolves enjoyed significant success in the 1950s, winning three First Division titles and two FA Cups, and were pioneers in European club competition. After periods in the lower divisions, the club returned to the Premier League and has established itself as a resilient and competitive top-flight side. With a strong identity and passionate support, Wolves aim to challenge for European qualification and build a sustainable future at the highest level of English football.',
                'foundation' => '1877',
                'stadium' => 'Molineux Stadium',
                'goalscorer' => 'Steve Bull',
                'goalscorer_total' => 306
            ]
        ]);
    }
}
