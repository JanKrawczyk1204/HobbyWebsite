<?php
session_start();
require_once 'functions.php';
$blad="";
if (($_SERVER['REQUEST_METHOD'] === 'POST') &&   isset($_POST['login'])  && isset($_POST['pass']) ){
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $done = ReadUser($login, $password);
    if ($done !== true) {
        $blad = "niepoprawny login lub haslo";
    }
    else {
	    header("Location: galeria_zdjec.php");
        exit;
    }
}
?>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Rejestracja</title>
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
                    <a class="menu" href="form.html">Formularz</a>
                </li>
                <li>
                    <a class="menu" href="prywatna_galeria.html">Prywatna Galeria</a>
                </li>
                <li>
                    <a class="menu" href="galeria_zdjec.html">Przesylanie zdjec</a>
                </li>
                <li>
                    <a class="menu" href="zdjecia_uzytkownikow.php">Galeria Zdjec Uzytkownikow</a>
                </li>
                <li>
                    <a class="menu" href="register.php">Rejestracja</a>
                </li>
                <li>
                    <a class="menu" id="active" href="login.php">Logowanie</a>
                </li>
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
                <a href="register.php">Rejestracja</a>
                <a href="login.php">Logowanie</a>
            </div>
        </div>
        <div id="wrapper">
            <h1>Logowanie</h1>
            <form  method="POST">
            <label for="login">Login:</label><br/>
            <input type="text" name="login" required /><br /><br />
            <label for="pass">Password:</label><br/><br />
            <input type="password" name="pass" required /><br /><br />
            <input type="submit" value="Submit">
            </form>
            <?= "<p style='color:red'>". $blad . "</p >" ?>
        </div>
    </div>
</body>
</html>