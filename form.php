<?php
session_start();
?>

<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Formularz</title>
    <link rel="stylesheet" href="index.css">
    <script src="form.js"></script>
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
                <li>
                    <a class="menu" id="active" href="form.php">Formularz</a>
                    <ul>
                        <li><a class="menu" href="#wstep">Wstep</a></li>
                        <li><a class="menu" href="#historia">Formularz</a></li>
                    </ul>
                </li>
                <li><a class="menu" href="prywatna_galeria.php">Prywatna Galeria</a></li>
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
                <a href="#historia">Historia harcerstwa</a>
                <a href="index.html">Strona Glowna</a>
                <a href="prywatna_galeria.html">Prywatna Galeria</a>
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
                <div id="zmiana"> Witaj nieznajomy!</div>
            <p>
                Jesli moja prezentacja hobby Ci sie spodobala, to zapraszam do dolaczenia do jednej z druzyn dzialajacych w naszym szczepie. Wypelnij ponizszy
                formularz, zeby dal znac druzynowym, ze jestes zainteresowany/zainteresowana. Ponizej znajduje sie wylistowane wszystkie jednostki wraz z
                z druzynowymi oraz miejscami zbiorek. Jednostki sa podzielone ze wzgledu na grupy wiekowe gromada zuchowa (GZ) 6-10 lat, druzyna harcerska (DH)
                11-16 lat, druzyna wedrownicza (DW) 17-21 lat. Do zobaczenia na zbiorce lub biwaku!
            </p>
            <table>
                <tr>
                    <th>Nr</th>
                    <th>Typ</th>
                    <th>Nazwa</th>
                    <th>Imienia</th>
                    <th>Druzynowy</th>
                    <th>Miejsce</th>
                    <th>Dziee tygodnia</th>
                    <th>Godziny</th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>GZ</td>
                    <td>Lesne Skrzaty</td>
                    <td>-</td>
                    <td>Gosia</td>
                    <td>Kowale</td>
                    <td>wtorek</td>
                    <td>17:30-19:00</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>GZ</td>
                    <td>Misie Patysie</td>
                    <td>-</td>
                    <td>Daria</td>
                    <td>Suchanino</td>
                    <td>czwartek</td>
                    <td>16:00-17:30</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>GZ</td>
                    <td>Poszukiwacze Przygod</td>
                    <td>-</td>
                    <td>Monika</td>
                    <td>Orunia Gorna</td>
                    <td>czwartek</td>
                    <td>17:30-19:00</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td>GZ</td>
                    <td>Podroznicy</td>
                    <td>-</td>
                    <td>Kuba</td>
                    <td>Chelm</td>
                    <td>sobota</td>
                    <td>10:30-12:30</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td>DH</td>
                    <td>Lesny Szlak</td>
                    <td>-</td>
                    <td>Nicola</td>
                    <td>Orunia Gorna</td>
                    <td>wtorek</td>
                    <td>17:30-19:30</td>
                </tr>
                <tr>
                    <td>72</td>
                    <td>DH</td>
                    <td>-</td>
                    <td>Spadochroniarzy cichociemnych</td>
                    <td>Nadzieja</td>
                    <td>Kolbudy</td>
                    <td>czwartek</td>
                    <td>17:30-19:00</td>
                </tr>
                <tr>
                    <td>74</td>
                    <td>DH</td>
                    <td>Kotwice</td>
                    <td>Stefana Wawrzynca-Miraua</td>
                    <td>Janek</td>
                    <td>Suchanino</td>
                    <td>czwartek</td>
                    <td>17:45-19:45</td>
                </tr>
                <tr>
                    <td>78</td>
                    <td>DH</td>
                    <td>-</td>
                    <td>Jana Bytnara</td>
                    <td>Ula</td>
                    <td>Chelm</td>
                    <td>wtorek</td>
                    <td>18:00-20:00</td>
                </tr>
                <tr>
                    <td>79</td>
                    <td>DH</td>
                    <td>Tajga</td>
                    <td>-</td>
                    <td>Stasiek</td>
                    <td>Kowale</td>
                    <td>piatek</td>
                    <td>17:00-19:00</td>
                </tr>
                <tr>
                    <td>178</td>
                    <td>DW</td>
                    <td>Transcendentni</td>
                    <td>-</td>
                    <td>Kacha</td>
                    <td>roznie</td>
                    <td>nieregularny</td>
                    <td>zalezy</td>
                </tr>
            </table>
            <h2 id="historia">Formularz</h2>
            <form name="contact">
                <label for="fname">Imie:</label><br>
                <input type="text" id="fname" name="fname" value=""><br><br>
                <label for="lname">Nazwisko:</label><br>
                <input type="text" id="lname" name="lname" value=""><br><br>
                <label for="neighborhood">Dzielnica:</label><br>
                <input type="text" id="neighborhood" name="neighborhood" value=""><br><br>
                <label for="pesel">Pesel:</label><br>
                <input type="password" id="pesel" name="pesel" value=""><br><br>

                Plec:<br>
                <input type="radio" id="man" name="gender" value="man">
                <label for="man">Meczyzna</label><br>
                <input type="radio" id="woman" name="gender" value="woman">
                <label for="woman">Kobieta</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Inna</label><br><br>

                Jesli byles juz wczesniej w ZHP zaznacz odpowiednio:<br>
                <input type="checkbox" id="zuch" name="zuch" value="zuch">
                <label for="zuch"> Bylem zuchem</label><br>
                <input type="checkbox" id="harcerz" name="harcerz" value="harcerz">
                <label for="harcerz"> Bylem harcerzem</label><br>
                <input type="checkbox" id="hs" name="hs" value="hs">
                <label for="hs"> Bylem harcerzem starszym</label><br>
                <input type="checkbox" id="wedro" name="wedro" value="wedro">
                <label for="wedro"> Bylem wedrownikiem</label><br><br>

                <label for="data_ur">Data urodzenia:</label><br>
                <input type="date" id="data_ur" name="data_ur" value=""><br><br>

                <label for="email">Wprowadz adres email:</label><br>
                <input type="email" id="email" name="email" value=""><br><br>

                <input type="button" id="submit" onclick="onPressingButton()" value="Wyslij">
                <input type="reset" id="reset" value="Resetuj">
                <input type="button" id="save" onclick="savingForm()" value="Zapisz">
            </form>
        </div>
    </div>
    <footer>
        Jan Krawczyk s188793
    </footer>
    <script>
        startingWithName();
        fillingForm();
    </script>
</body>
</html>