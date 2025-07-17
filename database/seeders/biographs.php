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
                'goalscorer_total' => 228,
                'history_ptbr' => 'O Arsenal Football Club, fundado em 1886 como Dial Square, é um dos clubes de futebol mais bem-sucedidos e históricos da Inglaterra. Eles se mudaram para o Norte de Londres em 1913, estabelecendo-se em Highbury por 93 anos antes de se mudarem para o Emirates Stadium em 2006. O clube detém o recorde de maior sequência invicta na história da primeira divisão inglesa, alcançando a temporada dos "Invencíveis" em 2003-04 ao vencer a Premier League sem uma única derrota. O Arsenal conquistou 13 títulos da Liga, um recorde de 14 FA Cups, 2 Copas da Liga, 16 FA Community Shields e uma Recopa Europeia. Conhecido por seu futebol atraente e fluente e por fortes rivalidades, particularmente com o Tottenham Hotspur no North London Derby, o Arsenal tem uma rica tradição de desenvolver jovens talentos e desempenhar um papel influente no futebol inglês. O clube continuamente busca a excelência, visando adicionar mais troféus à sua ilustre coleção, mantendo seus fortes laços comunitários e sua base de fãs global.'
            ],
            [
                'id_team' => 2,
                'history' => 'Aston Villa Football Club, founded in March 1874 in Birmingham, is one of the oldest and most successful clubs in English football history. They were one of the twelve founding members of the Football League in 1888. Villa has a rich history, having won the First Division title seven times and the FA Cup seven times. Their greatest triumph came in 1982 when they lifted the European Cup, defeating Bayern Munich in the final. After periods of varying fortunes, the club has re-established itself in the Premier League, with a dedicated fanbase and ambitious plans for future success, aiming to return to the pinnacle of English and European football from their iconic Villa Park stadium.',
                'foundation' => '1874',
                'stadium' => 'Villa Park',
                'goalscorer' => 'Billy Walker',
                'goalscorer_total' => 244,
                'history_ptbr' => 'O Aston Villa Football Club, fundado em março de 1874 em Birmingham, é um dos clubes mais antigos e bem-sucedidos da história do futebol inglês. Foi um dos doze membros fundadores da Football League em 1888. O Villa tem uma rica história, tendo vencido o título da Primeira Divisão sete vezes e a FA Cup sete vezes. Seu maior triunfo veio em 1982, quando levantou a Copa dos Campeões, derrotando o Bayern de Munique na final. Após períodos de fortunas variadas, o clube se restabeleceu na Premier League, com uma base de fãs dedicada e planos ambiciosos para o sucesso futuro, visando retornar ao auge do futebol inglês e europeu a partir de seu icônico estádio Villa Park.'
            ],
            [
                'id_team' => 3,
                'history' => 'AFC Bournemouth, founded in 1899 as Boscombe, became Bournemouth & Boscombe Athletic in 1923, adopting its current name in 1972. The club has experienced significant ups and downs, including periods in the lower divisions and financial struggles. Their meteoric rise under Eddie Howe saw them climb from League Two to the Premier League in just six seasons, achieving top-flight status for the first time in their history in 2015. Known for their attacking style of play, the Cherries have since established themselves in the Premier League, demonstrating resilience and ambition from their home at the Vitality Stadium (Dean Court), a testament to their remarkable journey in English football.',
                'foundation' => '1899',
                'stadium' => 'Vitality Stadium (Dean Court)',
                'goalscorer' => 'Brett Pitman',
                'goalscorer_total' => 102, // Official league goals, though total might be higher with cups
                'history_ptbr' => 'O AFC Bournemouth, fundado em 1899 como Boscombe, tornou-se Bournemouth & Boscombe Athletic em 1923, adotando seu nome atual em 1972. O clube passou por altos e baixos significativos, incluindo períodos nas divisões inferiores e dificuldades financeiras. Sua ascensão meteórica sob Eddie Howe os viu subir da League Two para a Premier League em apenas seis temporadas, alcançando o status de primeira divisão pela primeira vez em sua história em 2015. Conhecidos por seu estilo de jogo ofensivo, os Cherries se estabeleceram desde então na Premier League, demonstrando resiliência e ambição em sua casa no Vitality Stadium (Dean Court), um testemunho de sua notável jornada no futebol inglês.'
            ],
            [
                'id_team' => 4,
                'history' => 'Brentford Football Club, founded in 1889, has a long and varied history, largely spent in the lower divisions of English football. Known as "The Bees," the club has seen periods of success, including a strong run in the 1930s when they achieved their highest-ever league finish. After decades outside the top flight, Brentford achieved promotion to the Premier League in 2021, marking a significant milestone in their history. The club is renowned for its innovative data-driven approach to recruitment and management, which has underpinned its recent success. They play their home games at the Brentford Community Stadium, having moved from their historic Griffin Park in 2020.',
                'foundation' => '1889',
                'stadium' => 'Gtech Community Stadium',
                'goalscorer' => 'Jim Towers',
                'goalscorer_total' => 163,
                'history_ptbr' => 'O Brentford Football Club, fundado em 1889, tem uma história longa e variada, em grande parte passada nas divisões inferiores do futebol inglês. Conhecido como "The Bees", o clube teve períodos de sucesso, incluindo uma forte campanha na década de 1930, quando alcançou sua melhor colocação na liga. Após décadas fora da primeira divisão, o Brentford conquistou a promoção para a Premier League em 2021, marcando um marco significativo em sua história. O clube é conhecido por sua abordagem inovadora e baseada em dados para recrutamento e gestão, que sustentou seu sucesso recente. Eles jogam suas partidas em casa no Brentford Community Stadium, tendo se mudado de seu histórico Griffin Park em 2020.'
            ],
            [
                'id_team' => 5,
                'history' => 'Brighton & Hove Albion Football Club, founded in 1901, is known as "The Seagulls." The club spent much of its history in the lower divisions, with a notable period in the First Division in the early 1980s, reaching the FA Cup final in 1983. After severe financial difficulties and homelessness in the late 1990s, the club experienced a remarkable resurgence. Their promotion to the Premier League in 2017 marked a new era, establishing them as a resilient top-flight side known for their attractive, attacking football and astute player recruitment. They play their home matches at the Falmer Stadium, also known as the Amex Stadium, a modern venue symbolic of their recent growth.',
                'foundation' => '1901',
                'stadium' => 'Falmer Stadium (Amex Stadium)',
                'goalscorer' => 'Tommy Cook',
                'goalscorer_total' => 123,
                'history_ptbr' => 'O Brighton & Hove Albion Football Club, fundado em 1901, é conhecido como "The Seagulls". O clube passou grande parte de sua história nas divisões inferiores, com um período notável na Primeira Divisão no início dos anos 1980, chegando à final da FA Cup em 1983. Após graves dificuldades financeiras e problemas de sede no final dos anos 1990, o clube experimentou um ressurgimento notável. Sua promoção para a Premier League em 2017 marcou uma nova era, estabelecendo-os como um time resiliente da primeira divisão, conhecido por seu futebol atraente e ofensivo e por uma contratação astuta de jogadores. Eles jogam suas partidas em casa no Falmer Stadium, também conhecido como Amex Stadium, um local moderno e simbólico de seu crescimento recente.'
            ],
            [
                'id_team' => 6,
                'history' => 'Chelsea Football Club, founded in 1905, quickly became a prominent London club, though their major successes largely came from the mid-1990s onwards. Located at Stamford Bridge, Chelsea has won numerous domestic and international honours, including six Premier League titles, eight FA Cups, five League Cups, and notably, two UEFA Champions League titles (2012 and 2021) and two UEFA Europa League titles. The club underwent a significant transformation after the 2003 takeover by Roman Abramovich, ushering in an era of unprecedented success and global recognition. Known for their passionate fanbase and dramatic moments, Chelsea remains a powerhouse in English and European football, continually aiming for silverware.',
                'foundation' => '1905',
                'stadium' => 'Stamford Bridge',
                'goalscorer' => 'Frank Lampard',
                'goalscorer_total' => 211,
                'history_ptbr' => 'O Chelsea Football Club, fundado em 1905, rapidamente se tornou um clube proeminente de Londres, embora seus maiores sucessos tenham ocorrido principalmente a partir de meados da década de 1990. Localizado em Stamford Bridge, o Chelsea conquistou inúmeros títulos nacionais e internacionais, incluindo seis títulos da Premier League, oito FA Cups, cinco Copas da Liga e, notavelmente, dois títulos da UEFA Champions League (2012 e 2021) e dois títulos da UEFA Europa League. O clube passou por uma transformação significativa após a aquisição por Roman Abramovich em 2003, inaugurando uma era de sucesso sem precedentes e reconhecimento global. Conhecido por sua apaixonada torcida e momentos dramáticos, o Chelsea continua sendo uma potência no futebol inglês e europeu, buscando continuamente por troféus.'
            ],
            [
                'id_team' => 7,
                'history' => 'Crystal Palace Football Club, founded in 1905, has a rich and complex history, often fluctuating between the top two divisions of English football. Known as "The Eagles," they play at Selhurst Park. The club\'s most famous period was under Steve Coppell in the late 1980s and early 1990s, where they achieved promotion to the First Division and reached the FA Cup final in 1990. After various financial struggles and several relegations and promotions, Palace firmly re-established themselves in the Premier League in 2013, solidifying their place as a consistent top-flight team. Their recent FA Cup win in 2025 marked their first major trophy, adding a significant chapter to their history.',
                'foundation' => '1905',
                'stadium' => 'Selhurst Park',
                'goalscorer' => 'Peter Simpson',
                'goalscorer_total' => 165,
                'history_ptbr' => 'O Crystal Palace Football Club, fundado em 1905, possui uma história rica e complexa, frequentemente oscilando entre as duas principais divisões do futebol inglês. Conhecidos como "The Eagles", eles jogam em Selhurst Park. O período mais famoso do clube foi sob o comando de Steve Coppell no final dos anos 1980 e início dos anos 1990, quando conquistaram a promoção para a Primeira Divisão e chegaram à final da FA Cup em 1990. Após várias dificuldades financeiras e diversos rebaixamentos e promoções, o Palace se restabeleceu firmemente na Premier League em 2013, solidificando sua posição como um time consistente da primeira divisão. A recente vitória na FA Cup em 2025 marcou seu primeiro grande troféu, adicionando um capítulo significativo à sua história.'
            ],
            [
                'id_team' => 8,
                'history' => 'Everton Football Club, founded in 1878, is one of the oldest and most traditional clubs in English football, based in Liverpool. Known as "The Toffees," they were one of the founding members of the Football League and have spent more seasons in the top flight than any other club. Everton has won nine League titles, five FA Cups, and one European Cup Winners\' Cup. With a passionate fanbase and a long-standing rivalry with Liverpool in the Merseyside Derby, the club has a proud heritage. As of 2025, they are embarking on a new chapter at their new stadium, aiming to overcome recent financial challenges and climb back to the top echelons of English football.',
                'foundation' => '1878',
                'stadium' => 'Bramley-Moore Dock Stadium', // Assuming new stadium name is generally used now
                'goalscorer' => 'Dixie Dean',
                'goalscorer_total' => 383,
                'history_ptbr' => 'O Everton Football Club, fundado em 1878, é um dos clubes mais antigos e tradicionais do futebol inglês, sediado em Liverpool. Conhecidos como "The Toffees", foram um dos membros fundadores da Football League e passaram mais temporadas na primeira divisão do que qualquer outro clube. O Everton conquistou nove títulos da Liga, cinco FA Cups e uma Recopa Europeia. Com uma apaixonada base de fãs e uma rivalidade de longa data com o Liverpool no Merseyside Derby, o clube possui uma herança orgulhosa. A partir de 2025, eles estão iniciando um novo capítulo em seu novo estádio, com o objetivo de superar os recentes desafios financeiros e retornar aos escalões superiores do futebol inglês.'
            ],
            [
                'id_team' => 9,
                'history' => 'Fulham Football Club, founded in 1879, is London\'s oldest professional football club, based in West London on the banks of the River Thames. Known as "The Cottagers," they play at Craven Cottage, one of England\'s most historic and picturesque grounds. Fulham has experienced periods in both the top flight and lower divisions, with their most successful modern era coming in the early 2000s, including a run to the UEFA Europa League final in 2010. The club has consistently bounced between the Premier League and Championship in recent years, demonstrating resilience and a commitment to attacking football. With ongoing stadium developments, Fulham aims to consolidate its position in the top flight.',
                'foundation' => '1879',
                'stadium' => 'Craven Cottage',
                'goalscorer' => 'Gordon Davies',
                'goalscorer_total' => 178,
                'history_ptbr' => 'O Fulham Football Club, fundado em 1879, é o clube de futebol profissional mais antigo de Londres, sediado no oeste de Londres, às margens do Rio Tâmisa. Conhecidos como "The Cottagers", eles jogam em Craven Cottage, um dos campos mais históricos e pitorescos da Inglaterra. O Fulham passou por períodos tanto na primeira divisão quanto nas divisões inferiores, com sua era moderna de maior sucesso ocorrendo no início dos anos 2000, incluindo uma campanha até a final da UEFA Europa League em 2010. O clube tem oscilado consistentemente entre a Premier League e a Championship nos últimos anos, demonstrando resiliência e um compromisso com o futebol ofensivo. Com os desenvolvimentos contínuos do estádio, o Fulham visa consolidar sua posição na primeira divisão.'
            ],
            [
                'id_team' => 10,
                'history' => 'Ipswich Town Football Club, founded in 1878, has a rich history, particularly under legendary managers Sir Alf Ramsey and Sir Bobby Robson. The club famously won the First Division title in 1962 and the FA Cup in 1978. Their greatest European triumph came in 1981 when they lifted the UEFA Cup. After periods of decline, Ipswich has been rebuilding, securing back-to-back promotions to reach the Premier League recently, only to face relegation again in 2025. Based at Portman Road, the club remains a strong community presence with a dedicated fanbase, aiming to regain Premier League status and re-establish itself as a force in English football.',
                'foundation' => '1878',
                'stadium' => 'Portman Road',
                'goalscorer' => 'Ray Crawford',
                'goalscorer_total' => 171,
                'history_ptbr' => 'O Ipswich Town Football Club, fundado em 1878, possui uma rica história, particularmente sob os lendários treinadores Sir Alf Ramsey e Sir Bobby Robson. O clube conquistou o título da Primeira Divisão em 1962 e a FA Cup em 1978. Seu maior triunfo europeu veio em 1981, quando levantou a Copa da UEFA. Após períodos de declínio, o Ipswich tem se reconstruído, garantindo promoções consecutivas para alcançar a Premier League recentemente, apenas para enfrentar o rebaixamento novamente em 2025. Com sede em Portman Road, o clube mantém uma forte presença na comunidade com uma base de fãs dedicada, visando recuperar o status de Premier League e restabelecer-se como uma força no futebol inglês.'
            ],
            [
                'id_team' => 11,
                'history' => 'Leicester City Football Club, founded in 1884 as Leicester Fosse, became Leicester City in 1919. Based at the King Power Stadium, the club achieved one of football\'s greatest ever upsets by winning the Premier League title in 2016, defying 5000/1 odds. This historic triumph followed their first-ever FA Cup win in 2021. The Foxes have experienced promotion and relegation battles, but their Premier League title cemented their place in football folklore. As of 2025, the club faces challenges, including potential financial fair play sanctions, but remains committed to competing at the highest level and building on their recent successes.',
                'foundation' => '1884',
                'stadium' => 'King Power Stadium',
                'goalscorer' => 'Arthur Chandler',
                'goalscorer_total' => 273,
                'history_ptbr' => 'O Leicester City Football Club, fundado em 1884 como Leicester Fosse, tornou-se Leicester City em 1919. Com sede no King Power Stadium, o clube alcançou uma das maiores zebras da história do futebol ao vencer o título da Premier League em 2016, desafiando odds de 5000/1. Este triunfo histórico foi seguido por sua primeira vitória na FA Cup em 2021. Os Foxes experimentaram batalhas por promoção e rebaixamento, mas seu título da Premier League cimentou seu lugar no folclore do futebol. A partir de 2025, o clube enfrenta desafios, incluindo possíveis sanções de fair play financeiro, mas permanece comprometido em competir no mais alto nível e construir sobre seus sucessos recentes.'
            ],
            [
                'id_team' => 12,
                'history' => 'Liverpool Football Club, founded in 1892, is one of the most successful clubs in world football, based at Anfield. Renowned for their passionate "You\'ll Never Walk Alone" anthem and the "Boot Room" era, Liverpool has won 19 League titles, a record 8 FA Cups, a record 10 League Cups, and six UEFA Champions League titles, more than any other English club. Their history is marked by dominant periods, fierce rivalries like the Merseyside Derby, and unforgettable European nights. Under new management in 2025 after winning the Premier League in 2024/25, the club continues its pursuit of silverware, aiming to sustain its position as a global football giant.',
                'foundation' => '1892',
                'stadium' => 'Anfield',
                'goalscorer' => 'Ian Rush',
                'goalscorer_total' => 346,
                'history_ptbr' => 'O Liverpool Football Club, fundado em 1892, é um dos clubes mais bem-sucedidos do futebol mundial, com sede em Anfield. Conhecido por seu apaixonado hino "You\'ll Never Walk Alone" e pela era da "Boot Room", o Liverpool conquistou 19 títulos da Liga, um recorde de 8 FA Cups, um recorde de 10 Copas da Liga e seis títulos da UEFA Champions League, mais do que qualquer outro clube inglês. Sua história é marcada por períodos de domínio, rivalidades ferozes como o Merseyside Derby e noites europeias inesquecíveis. Sob nova gestão em 2025, após vencer a Premier League em 2024/25, o clube continua sua busca por troféus, visando sustentar sua posição como um gigante do futebol global.'
            ],
            [
                'id_team' => 13,
                'history' => 'Luton Town Football Club, founded in 1885, has a history marked by dramatic highs and lows, including a period in the top flight and winning the League Cup in 1988. Uniquely, they spent three decades outside the top four divisions of English football, even dropping into non-league, before an incredible resurgence saw them achieve three promotions in five seasons to reach the Premier League in 2023. After back-to-back relegations, they find themselves in League One in 2025. Playing at their traditional home, Kenilworth Road, Luton Town embodies resilience and fighting spirit, always striving to climb back up the football pyramid.',
                'foundation' => '1885',
                'stadium' => 'Kenilworth Road',
                'goalscorer' => 'Joe Payne',
                'goalscorer_total' => 143,
                'history_ptbr' => 'O Luton Town Football Club, fundado em 1885, tem uma história marcada por altos e baixos dramáticos, incluindo um período na primeira divisão e a conquista da Copa da Liga em 1988. De forma única, eles passaram três décadas fora das quatro principais divisões do futebol inglês, chegando a cair para a liga não-profissional, antes de um ressurgimento incrível que os viu conquistar três promoções em cinco temporadas para chegar à Premier League em 2023. Após rebaixamentos consecutivos, eles se encontram na League One em 2025. Jogando em sua casa tradicional, Kenilworth Road, o Luton Town incorpora resiliência e espírito de luta, sempre se esforçando para subir novamente na pirâmide do futebol.'
            ],
            [
                'id_team' => 14,
                'history' => 'Manchester City Football Club, founded in 1880 as St. Mark\'s (West Gorton), became Manchester City in 1894. After periods of moderate success and several relegations, including to the third tier, the club experienced a dramatic transformation following the 2008 takeover by the Abu Dhabi United Group. This ushered in an era of unprecedented success, with City winning numerous Premier League titles, FA Cups, League Cups, and their first UEFA Champions League in 2023. Based at the Etihad Stadium, they are known for their dominant, possession-based football under Pep Guardiola. Despite a transitional 2024/25 season, City remains a formidable force aiming to reclaim domestic and European supremacy.',
                'foundation' => '1880',
                'stadium' => 'Etihad Stadium',
                'goalscorer' => 'Sergio Agüero',
                'goalscorer_total' => 260,
                'history_ptbr' => 'O Manchester City Football Club, fundado em 1880 como St. Mark\'s (West Gorton), tornou-se Manchester City em 1894. Após períodos de sucesso moderado e vários rebaixamentos, incluindo para a terceira divisão, o clube experimentou uma transformação dramática após a aquisição em 2008 pelo Abu Dhabi United Group. Isso inaugurou uma era de sucesso sem precedentes, com o City conquistando inúmeros títulos da Premier League, FA Cups, Copas da Liga e sua primeira UEFA Champions League em 2023. Com sede no Etihad Stadium, eles são conhecidos por seu futebol dominante e de posse de bola sob o comando de Pep Guardiola. Apesar de uma temporada de "transição" em 2024/25, o City continua sendo uma força formidável com o objetivo de recuperar a supremacia doméstica e europeia.'
            ],
            [
                'id_team' => 15,
                'history' => 'Manchester United Football Club, founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902. Based at Old Trafford, they are one of the most famous and successful clubs in world football. Under Sir Matt Busby and particularly Sir Alex Ferguson, United achieved unparalleled domestic and European success, including 20 League titles, 12 FA Cups, 6 League Cups, and 3 UEFA Champions League titles. Known for their attacking football and iconic players, the club faced significant challenges in 2024/25, missing European qualification. Under new management, United is determined to rebuild, return to its winning ways, and compete for major honours once again.',
                'foundation' => '1878',
                'stadium' => 'Old Trafford',
                'goalscorer' => 'Wayne Rooney',
                'goalscorer_total' => 253,
                'history_ptbr' => 'O Manchester United Football Club, fundado como Newton Heath LYR Football Club em 1878, mudou seu nome para Manchester United em 1902. Com sede em Old Trafford, é um dos clubes mais famosos e bem-sucedidos do futebol mundial. Sob Sir Matt Busby e, particularmente, Sir Alex Ferguson, o United alcançou um sucesso doméstico e europeu incomparável, incluindo 20 títulos da Liga, 12 FA Cups, 6 Copas da Liga e 3 títulos da UEFA Champions League. Conhecido por seu futebol ofensivo e jogadores icônicos, o clube enfrentou desafios significativos em 2024/25, perdendo a classificação europeia. Sob nova gestão, o United está determinado a reconstruir, voltar às suas vitórias e competir por grandes títulos novamente.'
            ],
            [
                'id_team' => 16,
                'history' => 'Newcastle United Football Club, founded in 1892 by the merger of two local clubs, is a prominent club in English football, based at St James\' Park. Known as "The Magpies," they have a passionate and loyal fanbase. The club enjoyed significant success in the early 20th century, winning four League titles and six FA Cups. After a long period without major silverware, the club has seen renewed ambition following a change in ownership, aiming to challenge at the top of the Premier League and in European competitions. Newcastle United is recognized for its rich football heritage and the unique atmosphere of its home stadium.',
                'foundation' => '1892',
                'stadium' => 'St James\' Park',
                'goalscorer' => 'Alan Shearer',
                'goalscorer_total' => 206,
                'history_ptbr' => 'O Newcastle United Football Club, fundado em 1892 pela fusão de dois clubes locais, é um clube proeminente no futebol inglês, com sede em St James\' Park. Conhecidos como "The Magpies", eles têm uma base de fãs apaixonada e leal. O clube desfrutou de sucesso significativo no início do século XX, vencendo quatro títulos da Liga e seis FA Cups. Após um longo período sem grandes troféus, o clube viu uma ambição renovada após uma mudança de propriedade, visando desafiar no topo da Premier League e em competições europeias. O Newcastle United é reconhecido por sua rica herança futebolística e pela atmosfera única de seu estádio.'
            ],
            [
                'id_team' => 17,
                'history' => 'Nottingham Forest Football Club, founded in 1865, is one of the oldest and most historically significant clubs in England. Based at the City Ground, their most famous period was under Brian Clough in the late 1970s, when they remarkably won the First Division title in 1978 and back-to-back European Cups in 1979 and 1980. After decades outside the Premier League, Forest achieved promotion back to the top flight in 2022. The club has faced challenges since returning to the Premier League, often fighting for survival. With a proud legacy, Forest aims to consolidate its Premier League status and build for a more stable and successful future.',
                'foundation' => '1865',
                'stadium' => 'The City Ground',
                'goalscorer' => 'Arthur Capes', // Based on most sources, for official competitive goals
                'goalscorer_total' => 104, // Total competitive goals
                'history_ptbr' => 'O Nottingham Forest Football Club, fundado em 1865, é um dos clubes mais antigos e historicamente significativos da Inglaterra. Com sede no City Ground, seu período mais famoso foi sob o comando de Brian Clough no final dos anos 1970, quando eles notavelmente venceram o título da Primeira Divisão em 1978 e duas Copas Europeias consecutivas em 1979 e 1980. Após décadas fora da Premier League, o Forest conquistou a promoção de volta à primeira divisão em 2022. O clube enfrentou desafios desde o retorno à Premier League, muitas vezes lutando pela sobrevivência. Com um legado orgulhoso, o Forest visa consolidar seu status na Premier League e construir um futuro mais estável e bem-sucedido.'
            ],
            [
                'id_team' => 18,
                'history' => 'Southampton Football Club, founded in 1885 as St. Mary\'s Y.M.A., became Southampton F.C. in 1897. Known as "The Saints," they play at St Mary\'s Stadium. The club\'s most significant achievement is winning the FA Cup in 1976. Southampton has a reputation for developing young talent through its acclaimed academy, which has produced numerous England internationals. The club has often fluctuated between the Premier League and the Championship, demonstrating a resilient spirit. As of 2025, having recently achieved promotion back to the Premier League, Southampton aims to establish itself firmly in the top flight and continue its tradition of attractive football and player development.',
                'foundation' => '1885',
                'stadium' => 'St Mary\'s Stadium',
                'goalscorer' => 'Mick Channon',
                'goalscorer_total' => 185,
                'history_ptbr' => 'O Southampton Football Club, fundado em 1885 como St. Mary\'s Y.M.A., tornou-se Southampton F.C. em 1897. Conhecidos como "The Saints", eles jogam no St Mary\'s Stadium. A conquista mais significativa do clube é a vitória na FA Cup em 1976. O Southampton tem a reputação de desenvolver jovens talentos através de sua aclamada academia, que produziu inúmeros jogadores internacionais pela Inglaterra. O clube frequentemente oscilou entre a Premier League e a Championship, demonstrando um espírito resiliente. A partir de 2025, tendo recentemente conquistado a promoção de volta à Premier League, o Southampton visa se estabelecer firmemente na primeira divisão e continuar sua tradição de futebol atraente e desenvolvimento de jogadores.'
            ],
            [
                'id_team' => 19,
                'history' => 'Tottenham Hotspur Football Club, founded in 1882, is one of England\'s most historic clubs, based in North London. Known as "Spurs," they play at the state-of-the-art Tottenham Hotspur Stadium. The club was the first British team to win a European trophy (the European Cup Winners\' Cup in 1963) and achieved the first League and FA Cup "Double" in the 20th century (1961). Spurs have won two League titles, eight FA Cups, four League Cups, and two UEFA Cups. With a reputation for attractive, attacking football and a fierce rivalry with Arsenal, Tottenham consistently aims to challenge for major honours and solidify its position among Europe\'s elite clubs.',
                'foundation' => '1882',
                'stadium' => 'Tottenham Hotspur Stadium',
                'goalscorer' => 'Harry Kane',
                'goalscorer_total' => 280,
                'history_ptbr' => 'O Tottenham Hotspur Football Club, fundado em 1882, é um dos clubes mais históricos da Inglaterra, com sede no Norte de Londres. Conhecidos como "Spurs", eles jogam no moderno Tottenham Hotspur Stadium. O clube foi o primeiro time britânico a ganhar um troféu europeu (a Recopa Europeia em 1963) e conquistou a primeira "Dobradinha" da Liga e da FA Cup no século XX (1961). Os Spurs ganharam dois títulos da Liga, oito FA Cups, quatro Copas da Liga e duas Copas da UEFA. Com uma reputação de futebol atraente e ofensivo e uma rivalidade acirrada com o Arsenal, o Tottenham busca consistentemente disputar grandes títulos e solidificar sua posição entre os clubes de elite da Europa.'
            ],
            [
                'id_team' => 20,
                'history' => 'West Ham United Football Club, founded in 1900 as Thames Ironworks F.C., became West Ham United in 1900. Based in East London, known as "The Hammers," they played at Upton Park for over a century before moving to the London Stadium in 2016. The club has won three FA Cups and the European Cup Winners\' Cup in 1965. Renowned for their "Academy of Football" and distinctive claret and blue colours, West Ham has a strong working-class heritage and passionate fanbase. After winning the UEFA Europa Conference League in 2023, the club aims to consistently compete for European qualification and establish itself as a formidable Premier League force.',
                'foundation' => '1900',
                'stadium' => 'London Stadium',
                'goalscorer' => 'Vic Watson',
                'goalscorer_total' => 326,
                'history_ptbr' => 'O West Ham United Football Club, fundado em 1900 como Thames Ironworks F.C., tornou-se West Ham United em 1900. Com sede no leste de Londres, conhecidos como "The Hammers", eles jogaram em Upton Park por mais de um século antes de se mudarem para o London Stadium em 2016. O clube conquistou três FA Cups e a Recopa Europeia em 1965. Reconhecido por sua "Academy of Football" e suas cores distintivas grená e azul, o West Ham possui uma forte herança da classe trabalhadora e uma apaixonada base de fãs. Após vencer a UEFA Europa Conference League em 2023, o clube visa competir consistentemente pela qualificação europeia e estabelecer-se como uma força formidável na Premier League.'
            ],
            [
                'id_team' => 21,
                'history' => 'Wolverhampton Wanderers Football Club, founded in 1877, is a historic club based at Molineux Stadium. Known as "Wolves," they were one of the founding members of the Football League. Wolves enjoyed significant success in the 1950s, winning three First Division titles and two FA Cups, and were pioneers in European club competition. After periods in the lower divisions, the club returned to the Premier League and has established itself as a resilient and competitive top-flight side. With a strong identity and passionate support, Wolves aim to challenge for European qualification and build a sustainable future at the highest level of English football.',
                'foundation' => '1877',
                'stadium' => 'Molineux Stadium',
                'goalscorer' => 'Steve Bull',
                'goalscorer_total' => 306,
                'history_ptbr' => 'O Wolverhampton Wanderers Football Club, fundado em 1877, é um clube histórico com sede no Molineux Stadium. Conhecidos como "Wolves", eles foram um dos membros fundadores da Football League. Os Wolves desfrutaram de sucesso significativo na década de 1950, vencendo três títulos da Primeira Divisão e duas FA Cups, e foram pioneiros em competições de clubes europeus. Após períodos nas divisões inferiores, o clube retornou à Premier League e se estabeleceu como um time resiliente e competitivo na primeira divisão. Com uma forte identidade e apoio apaixonado, os Wolves visam disputar a qualificação europeia e construir um futuro sustentável no mais alto nível do futebol inglês.'
            ]
        ]);
    }
}
