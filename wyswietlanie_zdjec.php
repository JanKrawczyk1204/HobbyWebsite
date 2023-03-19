<?php
include_once "functions.php";
$db = get_db();

if(isset($_GET['page']))
{
    if($_GET['page'] < 1)
    {
        $page = 1;
    }
    else
    {
        $page = $_GET['page'];
    }
}
else
{
    $page = 1;
}

$back = $page - 1;
$next = $page + 1;

$page_size = 2;
$opts = ['skip' => ($page-1) * $page_size, 'limit' =>$page_size];

$images = $db->images->find([], $opts);

if(isset($_POST['selected']) && isset($_SESSION['user_id']))
{
    foreach($_POST['selected'] as $key=>$value)
    {
        setSession($value);
    }
}
echo "<form method='post'>";
foreach ($images as $image)
{
    $id = $image['_id'];
    $miniature_image = $image['miniature_image'];
    $watermark_image = $image['watermark_image'];
    echo "<input type='checkbox' name='selected[]' value='$id' ";
    if(isset($_SESSION[strval($id)]))
    {
        echo "checked = true";
    }
    echo " />";
    echo "<a href='./$watermark_image' target='blank'> <img src='./$miniature_image' alt='niestety podany obraz nie jest juz dostepny' /></a><br/>";
    echo "Tytul: ";
    echo $image['title'] . '<br/>';
    echo "Autor: ";
    echo $image['author']. '<br/>';

}

echo "<input type='submit' value='Zatwierdz'/>";
echo "</form>";

echo'<a href="zdjecia_uzytkownikow.php?page='.$back.'">poprzednia strona</a>'.'<br/>'.'<br/>';
echo'<a href="zdjecia_uzytkownikow.php?page='.$next.'">nastepna strona</a>'.'<br/>'.'<br/>';

?>