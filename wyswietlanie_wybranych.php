<?php
include_once "functions.php";
$db = get_db();
$images = $db->images->find();

if(isset($_POST['selected']) && isset($_SESSION['user_id']))
{
    foreach($_POST['selected'] as $key=>$value)
    {
        unSetSession($value);
    }
}
echo "<form method='post'>";
foreach ($images as $image)
{
    $id = $image['_id'];

    if(isset($_SESSION[strval($id)]))
    {
        $miniature_image = $image['miniature_image'];
        $watermark_image = $image['watermark_image'];
        echo "<input type='checkbox' name='selected[]' value='$id' />";
        echo "<a href='./$watermark_image' target='blank'> <img src='./$miniature_image' alt='niestety podany obraz nie jest juz dostepny' /></a><br/>";
        echo "Tytul: ";
        echo $image['title'] . '<br/>';
        echo "Autor: ";
        echo $image['author']. '<br/>';
    }
}

echo "<input type='submit' value='Usun'/>";
echo "</form>";
?>