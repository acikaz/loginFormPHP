<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'knjizara';

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    die('Konekcija nije uspjela' . mysqli_connect_error());
}

?>