<?php
require_once 'functions.php';
$blad="";
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['login'])  && isset($_POST['pass']) && isset($_POST['repeat_pass']) && isset($_POST['emial']) ){

   $login = $_POST['login'];
   $password = $_POST['pass'];
   $repeat_password = $_POST['repeat_pass'];
   $email = $_POST['email'];
   if ($password === $repeat_password){
       //echo "OK";
       if  (!LoginExist($login)){
           //echo "login nie wyst�puje w bazie";
           $hash = password_hash($password, PASSWORD_DEFAULT);
           //dopisz nowego
           if (AddNewUser($login,$hash, $email)){//dodano do bazy poprawnie
               header("Location: login.php");
               exit;
           }
           else {
               $blad ="problem z bazy na etapie dodawania uzytkownika";
           }

       }//wolny login
       else
       {
           $blad = "login zajety ";
       }

   } //has�a zgodne
   else {
       //has�a niezgodne - dalej widoczny formularz
       $blad = "hasla nie sa zgodne ";
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
                    <a class="menu" id="active" href="register.php">Rejestracja</a>
                </li>
                <li>
                    <a class="menu" href="login.php">Logowanie</a>
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
                <a href-="login.php">Logowanie</a>
            </div>
        </div>
        <div id="wrapper">
            <h1>Rejestracja</h1>
            <form  method="POST">
            <label for="login">Login:</label><br />
            <input type="text" name="login" required /><br /><br />
            <label for="pass">Haslo:</label><br /><br />
            <input type="password" name="pass" required /><br /><br />
            <label for="repeat_pass">Powtorz haslo:</label><br /><br />
            <input type="password" name="repeat_pass" required /><br /><br />
            <label for="email">Adres e-mail:</label><br /><br />
            <input type="text" name="email" required /><br /><br />
            <input type="submit" value="Submit">
            </form>
            <!-- miejsce na komunikat z php -->
            <?= "<p style='color:red'>". $blad . "</p >" ?>
        </div>
    </div>
</body>
</html>