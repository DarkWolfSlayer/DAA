<?php
require_once('../php_scripts/connection.php');
$isEmpty = false;
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);
$hash = md5($_POST["psw"]);

if (empty($username)) {
    $isEmpty = true;
}
if (empty($password)) {
    $isEmpty = true;
}

if ($isEmpty == true) {
    header('Location: ../pages/login1.php?message=Nieco si nezadal');
}

if ($isEmpty == false) {
    $query = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
    
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
        session_start();
        $_SESSION["username"] = $username;   
        header('Location: ../pages/index.php');
    } 
    else {
        header('Location: ../pages/login1.php?message=Zadal si zle meno alebo heslo');
    }
}

