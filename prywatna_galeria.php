<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Prywatna Galeria Zdjec</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1><img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60">Harcerstwo - moje hobby<img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60"></h1>
    </header>
    <div id="content">
        <nav>
            <strong>Menu</strong>
            <ol>
                <li><a class="menu" href="index.php">Strona Glowna</a></li>
                <li><a class="menu" href="form.php">Formularz</a></li>
                <li><a class="menu" id="active" href="prywatna_galeria.php">Prywatna Galeria</a>
                    <ul>
                        <li><a class="menu" href="#wstep">Wstep</a></li>
                        <li><a class="menu" href="#historia">Obozy</a></li>
                        <li><a class="menu" href="#moje">Wazne chwile</a></li>
                        <li><a class="menu" href="#bibl">Zakonczenie</a></li>
                    </ul>
                </li>
                <li><a class="menu" href="galeria_zdjec.php">Przesylanie zdjec</a></li>
                <li><a class="menu" href="zdjecia_uzytkownikow.php">Galeria Zdjec Uzytkownikow</a></li>
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
                <a href="#wstep">Wstep</a>
                <a href="#historia">Obozy</a>
                <a href="#moje">Wazne chwile</a>
                <a href="#bibl">Zakonczenie</a>
                <a href="index.html">Strona Glowna</a>
                <a href="form.html">Kontakt</a>
                <a href="galeria_zdjec.html">Przesylanie plikow</a>
                <a href="zdjecia_uzytkownikow.php">Galeria Zdjec Uzytkownikow</a>
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
            <h2 id="wstep">Wstep</h2>
            <p>
                Witam serdecznie w galerii zdjec, znajduje sie tutaj zdjecia moje, lub robione przeze mnie, ktore dokumentuja moja prace harcerska. W pierwszej
                sekcji znajduja sie zdjecia pochodzace z wielu obozow, w ktorych dotychczas uczestniczylem. Nie jest ich za wiele, poniewaz na obozy nie wolno
                uczestnikom zabierac telefonow, a dopiero od trzech lat jade jako kadra na oboz, wiec co nieco zdjec zrobilem. Bylem dotychczas na 11 obozach
                harcerskich, z tego cztery razy w HBO Olpuch pod Koscierzyny. W tym roku planujemy urzadzic oboz w bieszczadach. W drugiej sekcji znajduja sie
                wazne dla mnie zdjecia z ronych pozaobozowych chwil, na przyklad otrzymanie funkcji lub spotkanie z przyjaciomi.
            </p>
            <h2 id="historia">Obozy</h2>
            <div class="galeria">
                <img src="img/oboz/oboz_niesulice.jfif" alt="Oboz w niesulicach 2018" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/oboz/oboz_niesulice.jfif" alt="Oboz w niesulicach 2018" width="500" height="350">
                    <div class="opis">Oboz w niesulicach 2018r.</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/oboz/oboz_olpuch.jfif" alt="Oboz w olpuchu 2019" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/oboz/oboz_olpuch.jfif" alt="Oboz w olpuchu 2019" width="500" height="350">
                    <div class="opis">Oboz w olpuchu 2019r.</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/oboz/wedrowka.jpg" alt="Wedrowka" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/oboz/wedrowka.jpg" alt="Wedrowka" width="500" height="350">
                    <div class="opis">Wedrowka</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/oboz/kajaki.jpg" alt="Kajaki" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/oboz/kajaki.jpg" alt="Kajaki" width="500" height="350">
                    <div class="opis">Kajaki</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/oboz/sluby.jpg" alt="Z przyjacielem" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/oboz/sluby.jpg" alt="Z przyjacielem" width="500" height="350">
                    <div class="opis">Z przyjacielem</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/oboz/koniec.jpg" alt="Apel koncowy" width="70" height="100">
                <div class="galeria-content">
                    <img src="img/oboz/koniec.jpg" alt="Apel koncowy" width="350" height="500">
                    <div class="opis">Apel koncowy</div>
                </div>
            </div>

            <h2 id="moje">Wazne chwile</h2>
            <div class="galeria">
                <img src="img/wazne_chwile/kurs_pwd.jfif" alt="Kurs Przewodnikowski" width="70" height="100">
                <div class="galeria-content">
                    <img src="img/wazne_chwile/kurs_pwd.jfif" alt="Kurs Przewodnikowski" width="350" height="500">
                    <div class="opis">Kurs Przewodnikowski</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/wazne_chwile/nocka_dziady.jfif" alt="Nocka HS Dziady" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/wazne_chwile/nocka_dziady.jfif" alt="Nocka HS Dziady" width="500" height="350">
                    <div class="opis">Nocka HS "Dziady"</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/wazne_chwile/przejecie74.jpg" alt="Przekazanie 74 GDH" width="70" height="100">
                <div class="galeria-content">
                    <img src="img/wazne_chwile/przejecie74.jpg" alt="Przekazanie 74 GDH" width="350" height="500">
                    <div class="opis">Przekazanie 74 GDH</div>
                </div>
            </div>
            <div class="galeria">
                <img src="img/wazne_chwile/naramiennik.jpg" alt="Naramiennik" width="100" height="70">
                <div class="galeria-content">
                    <img src="img/wazne_chwile/naramiennik.jpg" alt="Naramiennik" width="500" height="350">
                    <div class="opis">Odnowienie przyrzeczenia harcerskiego</div>
                </div>
            </div>
            <h2 id="bibl">Zakonczenie</h2>
            <p>
                Znajdujace sie powyzej zdjecia stanowia jedynie namiastke wszystkich, na ktorych bylem podczas mojego harcerskiego zycia. Poznalem podczas swojej
                przygody wiele swietnych ludzi. Widzialem wiele smutkow, radosci, nadzieji. Ogladalem jak rodza sie i rozpadaja relacje miedzy uczestnikami. Dalej
                pamietam wiele osob, ktore odeszly z harcerstwa na stale, z niektorymi z nich dalej mam kontakt okazcjonalny, badz stary. Nie jestem w stanie sobie
                wyobrazic kim bylbym gdyby tego jednego wieczoru mama nie zapytalaby mnie czy chcialbym sprobowac. Harcerstwo, to juz nie hobby, a styl zycia.
                Wiele razy mialem chwile slabosci i postanawialem odejsc, zakonczyc ta meke (bo droga nie zawsze byla latwa) i dac sobie spokoj. W takich chwilach,
                wspierany przez osoby, ktorym na mnie zalezalo i postanawialem zostac. Stwierdzalem, ze moja przygoda sie jeszcze nie zakolczyla i ze jeszcze nie
                przyszede na mnie czas. Czy bede wiedzial, ze to juz ten moment, zeby osunac sie w cien? Nie wiem, ale jedno wiem na pewno: Ten czas jeszcze nie
                nadszede i chce w pelni korzystas z kazdej chwili, ktora dane jest mi spedzic robiac to co kocham.
            </p>
            <p>
                Dodatkowo 74 GDH jest dla mnie prawie drugim domem. Pamidtam 4 druzynowych, ktorzy pelnili ta zaszczytna funkcje przede mna oraz w poniejszym etapie
                mojej drogi harcerskiej poznalem nastepne dwie druhny. Patrzac na nasze chusty (czarne z bialym obszyciem i biala kotwica) mozna wrecz poczuc lata
                historii, tradycji i ogromnych staran, ktore byly wlozone w zbudowanie oraz utrzymanie tej naszej malej spolecznosci. Doczekamy niedlugo wielkiej
                chwili. W przyszlym roku we wrzesniu bedzie mialo miejsce 40 lecie zalozenia druzyny. Oznacza to, ze bede mial zaszczyt pelnic swoja funckje podczas
                tego wydarzenia, ale rowniez, ze to na mnie spoczywa odpowiedzialnosc za przeprowadznie wszystkiego. Przygotowania rozpoczna jeszcze w tym roku, a
                wydarzenie bedzie mialo taki rozmach, ze jeszcze latami beda je wspominac. Zaproszeni zostana wszyscy poprzedni druzynowi oraz kadra (a przynajmniej
                ta, do ktorej uda mi sie dotrzec), przydaloby sie tez obczaic jakies dofinansowanie na ten cel, ale to jeszcze czas. Mimo watpliwosci ciesze sie, ze
                zdecydowalem sie przejac druzyne i podjac ta odpowiedzialnosc. Na tym etapie juz bym nie dal rady, gdyby nie wsparcie ze strony moich przybocznych
                oraz funkcyjnych. Ich wklad i praca sa niebywale, a bez nich na wiele nie moglbym sobie pozwolic przy organizacji.
            </p>
        </div>
    </div>
    <footer>
        Jan Krawczyk s188793
    </footer>
</body>
</html>