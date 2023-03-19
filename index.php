<?php
session_start();
?>

<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Strona główna</title>
    <link rel="stylesheet" href="index.css" />
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>
            <img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60" />Harcerstwo - moje hobby<img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60" />
        </h1>
    </header>
    <div id="content">
        <nav>
            <strong>Menu</strong>
            <ol>
                <li>
                    <a class="menu" id="active" href="index.php">Strona Główna</a>
                    <ul>
                        <li>
                            <a class="menu" href="#wstep">Wstęp</a>
                        </li>
                        <li>
                            <a class="menu" href="#historia">Historia harcerstwa</a>
                        </li>
                        <li>
                            <a class="menu" href="#moje">Moje przeżycia</a>
                        </li>
                        <li>
                            <a class="menu" href="#bibl">Bibliografia</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="menu" href="form.php">Formularz</a>
                </li>
                <li>
                    <a class="menu" href="prywatna_galeria.php">Prywatna Galeria</a>
                </li>
                <li>
                    <a class="menu" href="galeria_zdjec.php">Przesyłanie zdjęć</a>
                </li>
                <li>
                    <a class="menu" href="zdjecia_uzytkownikow.php">Galeria Zdjęć Użytkowników</a>
                </li>
                <?php
                if (!empty($_SESSION['user_id']))
                {
                    echo '<li><a class="menu" href="logout.php">Wylogowanie</a></li>';
                    echo '<li><a class="menu" href="wybrane.php">Wybrane</a></li>';
                }
                else echo '<li><a class="menu" href="login.php">Logowanie</a></li>
                           <li><a class="menu" href="register.php">Rejestracja</a></li>';
                ?>
            </ol>
        </nav>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="#wstep">Wstęp</a>
                <a href="#historia">Historia harcerstwa</a>
                <a href="#moje">Moje przeżycia</a>
                <a href="#bibl">Bibliografia</a>
                <a href="form.html">Kontakt</a>
                <a href="prywatna_galeria.html">Prywatna Galeria</a>
                <a href="galeria_zdjec.html">Przesyłanie plików</a>
                <a href="zdjecia_uzytkownikow.php">Galeria Zdjęć Użytkowników</a>
                <?php
                if (!empty($_SESSION['user_id']))
                {
                    echo '<a href="logout.php">Wylogowanie</a>';
                    echo '<a href="wybrane.php">Wybrane</a>';
                }
                else echo '<a href="login.php">Logowanie</a>
                           <a href="register.php">Rejestracja</a>';
                ?>
            </div>
        </div>
        <div id="wrapper">
            <h2 id="wstep">Wstęp</h2>
            <p>
                Moim hobby od ponad 11 lat jest harcerstwo. Uczęszczałem do drużyny harcerskiej od piewszej klasy szkoły podstawowej. Od 4 lat pełnię funkcję wychowawcy
                oraz prowadzącego zajęć. Co roku również w wakację uczestniczę w Harcerskiej Akcji Letniej (w skrócie HAL), więc dysponuje wieloletnim doświadczeniem
                w tej dziedzinie. Na poniższej stronie podzielę się moją wiedzą oraz zaprezentuje swoją działalność.
            </p>
            <p>
                Misją Związku Harcerstwa Polskiego jest wychowywanie młodego człowieka, czyli wspieranie go we wszechstronnym rozwoju i kształtowaniu charakteru
                przez stawianie wyzwań. ZHP wychowuje młodych ludzi na prawych, aktywnych, zaradnych i odpowiedzial-nych obywateli w duchu wartości zawartych w
                Prawie Harcerskim. Podstawą wychowania w ZHP są normy moralne, wywodzące się z uniwersalnych, kulturowych i etycznych wartości chrześcijaństwa.
                ZHP uznaje prawo każdego członka Związku do osobistego wyboru systemu wartości duchowych.

            </p>
            <h2 id="historia">Historia harcerstwa</h2>
            <h3>Początki scoutingu</h3>
            <p>
                Przełom XIX i XX w. to czas, kiedy w światowej pedagogice przestawał pomału obowiązywać pogląd, że najważniejszym zadaniem w toku wychowania
                jest tylko rozwój umysłowy człowieka. Opierając się na tym poglądzie zakładano, że im wyższe wykształcenie będzie posiadać jednostka, tym wyższy
                będzie jej społeczny, moralny i etyczny poziom. Powstanie i rozwój nowych prądów filozoficznych, na bazie których zaczęto stosować nowatorskie
                koncepcje pedagogiczne sprawił, iż obok rozwoju umysłowego trzeba również troszczyć się o emocjonalny rozwój dzieci i młodzieży poprzez rozwój
                ich wyobraźni, wrażliwości oraz życzliwości w stosunku do otaczającego ich świata. W wyniku tego, pod koniec XIX i na początku XX wieku zaczęły się
                tworzyć w krajach Europy Zachodniej ruchy młodzieżowe wcielające w większym lub mniejszym stopniu te nowatorskie koncepcje pedagogiczne.
                Jednym z takich ruchów powstałym w Wielkiej Brytanii był skauting, którego twórca, generał Robert Baden-Powell, zastosował zasady pedagogiczne,
                jak na owe czasy, wręcz rewolucyjne.
            </p>
            <h3>Początki harcerstwa</h3>
            <p>
                Wiadomości o skautingu dotarły na ziemie polskie (znajdujące się pod zaborami) w 1909 r. Od roku 1910 samorzutnie powstawały zastępy i drużyny.
                W zaborze austriackim skauting działał legalnie, w pozostałych w konspiracji. Zaproponowany przez gen. Roberta Baden-Powella nowy system wychowawczy
                postrzegany był jako dobry sposób wychowania młodzieży na żołnierzy i przyszłych obywateli odrodzonej Polski. Dlatego skautingiem zainteresowały
                się przede wszystkim organizacje niepodległościowe, m. in. „Zarzewie” (organizacja akademicka, która w ramach Polskich Drużyn Strzeleckich
                przygotowywała młodzież do walki o niepodległość), „Sokół” (towarzystwo sportowe o charakterze patriotycznym) i „Eleusis”
                (katolickie stowarzyszenie abstynenckie). Przy lwowskim „Sokole” powstało Związkowe Naczelnictwo Skautowe, a Andrzej Małkowski zorganizował
                pierwszy kurs skautowy na początku 1911 r. W dniu 22 maja 1911 r. Andrzej Małkowski wydał rozkaz tworzący oficjalnie pierwsze cztery drużyny
                skautowe we Lwowie (jest to często uznawane jako symboliczny dzień powstania harcerstwa). W zaborze rosyjskim w końcu 1911 r. powstała nielegalna
                Naczelna Komenda Skautowa skupiająca samorzutnie powstające drużyny. W zaborze pruskim pierwsze drużyny skautowe powstały w Poznaniu w 1912 r.
                Ważnym wydarzeniem pierwszego okresu tworzenia polskiego skautingu był wyjazd polskich skautów ze wszystkich zaborów we wspólnej reprezentacji
                (pod wodzą Andrzeja Małkowskiego) na zlot skautów w Birmingham w lipcu 1913 r.
            </p>
            <h2 id="moje">Moje przeżycia</h2>
            <h3>Początki w gromadzie zuchowej</h3>
            <p>
                Członkiem Związku Harcerstwa Polskiego zostałem w 2009r. Miesiąc wcześniej zacząłem uczęszczać do pierwszej klasy szkoły podstawowej w Gdańsku
                na Suchaninie. Pewnego wieczoru wracając do domu od mieszkającej niedaleko szkoły babci zauważyliśmy z mamą, że mimo bardzo późnej pory światła
                w szkole dalej były zapalone. Zafascynowany tym faktem zapytałem mamy o to przedziwe wydarzenie. Odpowiedź bardzo mnie zaciekawiła: "Aktualnie w
                twojej szkole odbywa się biwak harcerski. Harcerze przyjechali na weekend i śpią na korytarzach. Chciałbyś też spróbować?". Moja odpowiedź była
                natychmiastowa i bardzo entuzjastyczna. Kilka tygodni później dołączyłem do 7 Gdańskiej Gromady Zuchowej. Drużynową w tamtym czasie byla druhna
                Ada, a przyboczną druhna Asia, która jakiś rok później zajęła jej miesjce. Tamten okres wspominam bardzo dobrze. Poznałem w tamtym czasie kilka
                osób, z którymi kontakt utrzymuje po dziś dzień - jedną z tych osób jest Daria, która aktualnie pełni funkcję drużynowej w tej gromadzie.
            </p>
            <h3>Drużyna harcerska</h3>
            <p>
                Z przejściem do czwartej klasy szkoły podstawowej wiązało się również opuszczenie gromady zuchowej. Następne lata, aż do dnia dzisiejszego miałem
                spędzić w 74 Gdańskiej Drużynie Harcerskiej. Na początku bardzo nie chciałem opuszczać gromady, w której czułem się bardzo dobrze, początki w drużynie
                harcerskiej również dały mi mocno w kość. Pomimo wspaniałej kadry drużyny, na którą w owym czasie składała się dwójka wspaniałych osób (druhna
                Natalia i druh Franc), nie mogłem poradzić sobie z brakiem kolegów w moim wieku. W tamtym czasie do drużyny uczęszczało zaledwie trzech chłopaków:
                Paweł, Kuba (aktualny drużynowy 69 GGZ) oraz ja. Pozostali dwaj chłopcy byli ode mnie odpowiednio rok i dwa lata strasi, więc nie dogadywaliśmy się
                jakoś super. Jednak z biegiem czasu taki stan rzeczy przestał mi przeszkadzać i mogłem w pełni zadowolić się wybitnym programem przygotowywanym przez
                kadrę jednostki. Czasy te jednak szybko odeszły w zapomnienie, gdyż zaledwie rok po moim dołączeniu do 74 druhna Natalia przekazała sznur druhowi
                Malewiczowi. Mimo najszczerszych starań, nie szło mu to zadanie za dobrze. Tak samo sprawa przedstawiała się z jego następczynią druhną Nicolą
                oraz kolejną drużynową Oliwią. Moim największym celem w harcerstwie jest zakończenie tej przykrej passy i stanie się wzorcowym przykładem drużynowego
                znanym z lat dzieciństwa. Teraz wreszcie zacząłem ten cel spełniać, miesiąc temu przejąłem funkcję drużynowego, a w momencie gdy to piszę (29.10.2021r.)
                ,dostałem sznur. Jeszcze ciężka i długa droga przede mną, ale jestem dobrej myśli i liczę, że ciągły wysiłek i determinacją przyniosą owoce prędzej
                czy później. Mam nadzieje, że 74 stanie na nogi i wróci do dni chwały. Jak mawiał sir Robert Baden-Powel <em>
                    "Życie nie jest usłane różami,
                    nie byłoby zresztą zabawnie, gdyby tak było"
                </em>.
            </p>
            <h3>Przyrzeczenie harcerskie</h3>
            <p>
                W życiu każdego harcerza nadchodzi taki specjalny dzień, gdzie jego dotychczasowy wysiłek i starania zostaną nagrodzone, a on dostąpi zaszczytnej
                możliwości złożenia przyrzeczenie harcerskiego i zostania oficjalnym członkiem Związku Harcerstwa Polskiego (zabrzmiało trochę sekciarsko xd).
                W tej części chciałbym wam opowiedzieć, jak to wyglądało w moim przypadku. Całe wydarzenie miało miejsce w 2010 roku podczas Harcerskiej Akcji Letniej
                w HBO Olpuch. Pewnej nocy pod koniec obozu zostałem nagle obudzony przez druha Franca. Poinformował on mnie, że mam ubrać się w mundur i pójść za nim.
                Następnie swoje kroki skierował na tzw. "Krawawe Doły" - pewien ususzony kawałek lasu, o którym krążyły różne niepokojące historie wśród uczestników.
                Mimo strachu posłusznie podążyłem za nim. Po jakiś 15 minutach dotarliśmy do małego betonowego budyneczu na skraju torów kolejowych. W tym momencie
                Franc kazał mi wejść do środka, to był najcięższy moment. Przed mną ziała nieprzenikniona ciemność opuszczonego budynku, jedyne co udało mi się
                dostrzec w nikłym świetle świeczki trzymanej przeze mnie w ręce to pierwszy stopień biegnących w górę schodów. Zacząłem się po nich wdrapywać.
                Gdy stanąłem na szczycie rozejrzałem się do okoła i ze zdumieniem dostrzegłem całą moją drużynę ustawioną w kręgu dookoła głębokiego otworu na środku
                podłogi. Przez otwór ten przełożona była deska, na której leżała odpalona świeczka. W takich okolicznościach złożyłem swoje przyżeczenie harcerskie.
            </p>
            <h3>Mój staż na poszczególnych funckjach</h3>
            <table>
                <tr>
                    <th>Funkcja</th>
                    <th>Liczba lat</th>
                </tr>
                <tr>
                    <td>Członek gromady zuchowej</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Członek drużyny harcerskiej</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Funkcyjny</td>
                    <td>0,5</td>
                </tr>
                <tr>
                    <td>Przyboczny</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Drużynowy</td>
                    <td>1</td>
                </tr>
            </table>
            <h3>Chusty drużyn harcerskich</h3>
            Zainteresowany jak wyglądały chusty drużyn w których byłem/jestem? Naciśnij poniższe guziki, żeby się przekonać: <br />
            <input type="button" id="74button" class="hide" value="74 GDH" />
            <input type="button" id="7button" class="hide" value="7 GGZ" />
            <input type="button" id="178button" class="hide" value="178 GDW" /><br />

            <div id="74gdh" class="chusty">
                <img src="img/jquery/74_pixel.png" alt="74 GDH" />
            </div>
            <div id="7ggz" class="chusty">
                <img id="7ggzimg" src="img/jquery/alt_pixel.png" alt="7 GGZ" />
            </div>
            <div id="178gdw" class="chusty">
                <img id="178gdwimg" src="img/jquery/alt_pixel.png" alt="178 GDW" />
            </div>
            <noscript>
                <style> .hide{display:none;} .chusty{display:none;}</style>
            </noscript>
            <h3>Kolory funkcji instruktorskich</h3>
            <svg width="250" height="180">
                <rect x="50" id="pwd" y="20" rx="20" ry="20" width="150" height="140"></rect>
                <text fill="#ffffff" font-size="45" x="77" y="105">PWD</text>
            </svg>
            <svg width="250" height="180">
                <rect x="50" id="phm" y="20" rx="20" ry="20" width="150" height="140"></rect>
                <text fill="#ffffff" font-size="45" x="77" y="105">PHM</text>
            </svg>
            <svg width="250" height="180">
                <rect x="50" id="hm" y="20" rx="20" ry="20" width="150" height="140"></rect>
                <text fill="#ffffff" font-size="45" x="90" y="105">HM</text>
            </svg>
            <h3>Dziękuje za uwagę</h3>
            <div id="bedzie_animowane">
                <img src="img/wosm_fioletowy.svg" alt="Logo_WOSM" />
            </div>
            <h2 id="bibl">Bibliografia</h2>
            <a href="https://gdansk.zhp.pl/" class="bibliografia" target="_blank">Strona Hufca</a>
            <br />
            <a href="https://www.facebook.com/74GDHkotwice" class="bibliografia" target="_blank">Fanpage Drużyny</a>
            <br />
            <a href="https://www.facebook.com/SzczepKnieja" class="bibliografia" target="_blank">Fanpage szczepu</a>
            <br />
            <a href="https://zhp.pl/" class="bibliografia" target="_blank">Strona zhp</a>
        </div>
    </div>
    <footer>
        Jan Krawczyk s188793
    </footer>
    <script>
        $(document).ready(function () {
            $("#74button").click(function () {
                $("#74gdh").show();
            });
            $("#74gdh").hide();
            $("#7button").click(function () {
                $("#7ggzimg").attr("src", "img/jquery/7_pixel.png");
            });
            $("#178button").click(function () {
                $("#178gdwimg").attr("src", "img/jquery/178_pixel.png");
            });
        });
    </script>
</body>
</html>