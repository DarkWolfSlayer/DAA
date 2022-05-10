<?php
require_once('../php_scripts/connection.php');
$user = isset($_GET["user"]) ? $_GET["user"] : "";
echo $user . "gfgcgn";

$sql = "SELECT * FROM users WHERE id=".$user;
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>