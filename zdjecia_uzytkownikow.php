<?php
session_start();
?>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Galeria zdjec uzytkownikow</title>
    <link rel="stylesheet" href="index.css" />
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
                    <a class="menu" href="index.php">Strona Glowna</a>
                </li>
                <li>
                    <a class="menu" href="form.php">Formularz</a>
                </li>
                <li>
                    <a class="menu" href="prywatna_galeria.php">Prywatna Galeria</a>
                </li>
                <li>
                    <a class="menu" href="galeria_zdjec.php">Przesylanie zdjec</a>
                </li>
                <li>
                    <a class="menu" id="active" href="zdjecia_uzytkownikow.php">Galeria Zdjec Uzytkownikow</a>
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
                <a href="index.html">Strona Glowna</a>
                <a href="form.html">Kontakt</a>
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
            <h1>Galeria Zdjec przeslanych przez uzytkownikow</h1>
        <?php require 'wyswietlanie_zdjec.php'?>
        </div>
    </div>
</body>
</html>