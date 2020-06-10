<?php
session_start();
include "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];

$rezultat = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'");

$cekiraj  = mysqli_num_rows($rezultat);

if($cekiraj > 0) {
    $data = mysqli_fetch_assoc($rezultat);

$_SESSION['username'] = $username;
$_SESSION['name']     = $data['name'];
$_SESSION['status']   = "prijavljeni_ste";
$_SESSION['id_login'] = $data['id'];

header("location: admin.php");
}else{
    header("location: login.php?poruka=pristupni podaci nisu tacni");
}


?>