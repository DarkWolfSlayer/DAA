<?php
require_once('../php_scripts/connection.php');
session_start();
$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = false;
$passwordInDb = false;
$uname = $_SESSION["username"];

$password = mysqli_real_escape_string($conn, $_POST['psw']);
$new_password = mysqli_real_escape_string($conn, $_POST['new-psw']);
$hash = md5($_POST["psw"]);
$new_hash = md5($_POST["new-psw"]);

if(empty($_POST["psw"])){
    $isEmpty = true;
}
if(empty($_POST["new-psw"])){
    $isEmpty = true;
}
if($isEmpty == true){
    header('Location: ../pages/password_change.php?message=Nieco si nezadal');
}

if (!preg_match("/[0-9]/", $password) || !preg_match("/[0-9]/", $new_password)) {
    $hasPasswordAtLeastOneNumber = false;
    header('Location: ../pages/password_change.php?message=Heslo musi obsahovat aspon jeden ciselny znak');
}

if($_POST["psw"] == $_POST["new-psw"]){
    $passwordAreSame = true;
    header('Location: ../pages/password_change.php?message=Hesla su rovnake');
}
else{
    $passwordAreSame = false;
    
}

if(strlen($password) < 6){
    $hasPasswordCertainLength = false;
    header('Location: ../pages/password_change.php?message=Heslo musi obsahovat minimalne 6 znakov');
}
else{
    $hasPasswordCertainLength = true;
}


if($isEmpty == false && $hasPasswordCertainLength && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == false){
 
    $sql = "UPDATE users SET password='$new_hash' WHERE username='$uname'";
    if ($conn->query($sql) == true){       
        header('Location: ../pages/password_change.php?message=Zmena hesla bola uspesna!');
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>