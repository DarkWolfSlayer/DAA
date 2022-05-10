<?php 
$user = $_SESSION["username"];
$query = "SELECT avatar,id FROM users WHERE username='$user'";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $avatar=$row["avatar"];
    $id=$row["id"];
}
?>