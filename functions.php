<?php
use MongoDB\BSON\ObjectId;

require '../../vendor/autoload.php';


function get_db()
{
    $mongo = new MongoDB\Client(
        "mongodb://localhost:27017/wai",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
        ]);

    $db = $mongo->wai;

    return $db;
}

function LoginExist($log)
{
	$db=get_db();
	$query = ['login' => $log];
	$user = $db->users->findOne($query);
	if ($user) {return true; }
	 else { return false;}
}

function AddNewUser($log, $pass, $email){
	$db=get_db();
	$wynik = $db->users->insertOne([ 'login' => $log, 'password' => $pass , 'email' => $email]);
	return $wynik;
}

function AllUsers(){
	$db=get_db();
	if ($db->users->count()>0) {
	  return $db->users->find();
	}
	else return false;
}

function DeleteUser($idU){
 try
 {
   $db = get_db();
   $db->users->deleteOne(['_id' => new ObjectId($idU)]);
   return true;
 }
 catch( Exception $e)
 {
	 return $e;
 }
}

function ReadUser($login, $password){
    try {
        $db = get_db();
        $user = $db->users->findOne(['login' => $login]);
        //weryfikacja has³a
        if($user !== null &&  password_verify($password,  $user['password'])){
            //has³o poprawne
            session_regenerate_id();
            $_SESSION['user_id'] = $user['_id'];
            return true;
        }
        else { return false; }
    }
    catch( Exception $e) { return $e; }
}

function setSession($id)
{
    $_SESSION[strval($id)] = true;
}

function unSetSession($id)
{
    unset($_SESSION[strval($id)]);
}
?>