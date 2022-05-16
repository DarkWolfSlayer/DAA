<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["avatar"]);
session_destroy();
header('Location: ../pages/login1.php');
?>