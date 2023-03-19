<?php
require_once 'functions.php';
$users = AllUsers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uzytkownicy</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

    <?php if ($users): ?>
    <ol>
        <?php foreach ($users as $user): ?>
        <li>
            <?= $user['login'] ?>
            <a href="userdelete.php?uid=<?= $user['_id'] ?>">Usun</a>
        </li>
        <?php endforeach ?>
    </ol>
    <?php else: ?>
    <p>Brak uzytkownikow</p>
    <?php endif ?><br/>
    <a href="cleaning.php">Kasowanie galerii uzytkownikow</a>
</body>
</html>
