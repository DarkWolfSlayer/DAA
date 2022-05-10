<?php

require_once ('connection.php');

$uname = $_POST["username"];
$psw = $_POST["password"];

$sqlu = "SELECT * FROM `users` WHERE Meno = '$uname'";
$sqlp = "SELECT * FROM `users` WHERE Heslo = '$psw'";
$id1 = "SELECT User_ID FROM `users` WHERE Meno = '$uname'";
$id2 = "SELECT User_ID FROM `users` WHERE Heslo = '$psw'";
$r_u = mysqli_query($link, $sqlu);
$r_p = mysqli_query($link, $sqlp);
$r_idu = mysqli_query($link, $id1);
$r_idp = mysqli_query($link, $id2);

$idu = mysqli_fetch_assoc($r_idu);
$idp = mysqli_fetch_assoc($r_idp);

if (mysqli_num_rows($r_u) == 1 && mysqli_num_rows($r_p) > 0 && $idu == $idp) {
    echo "Login successful.";
    header('Location: index.php');
}
else{
    echo "ERROR";
}





