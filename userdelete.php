<?php
require_once 'functions.php';

if (($_SERVER['REQUEST_METHOD'] === 'GET') && isset($_GET['uid'])){
	$userId =$_GET['uid'];
    //nast�pi usuwanie
    $potwierdzenie = DeleteUser($userId);
	if ($potwierdzenie){
        header("Location:all_users.php");
	}
	else {
        echo $potwierdzenie;
        echo "nie usuni�to u�ytkownika o id". $userId;
	}

}
?>
