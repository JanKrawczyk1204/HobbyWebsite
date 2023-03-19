<?php
include_once "functions.php";
$db = get_db();
$images = $db->images->find();
foreach ($images as $image)
{
    $db->images->deleteOne($image);
}
?>
<html>
<head>

</head>
<body>
    Galeria usunieta <br/>
    <a href="all_users.php">Powrot</a>
</body>
</html>