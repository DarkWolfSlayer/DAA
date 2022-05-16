<?php
require_once('../php_scripts/connection.php');
$id = isset($_GET["id"]) ? $_GET["id"] : "";  

$sql = "DELETE FROM users WHERE id ='$id'";
if($conn->query($sql) === true){
    header('Location: ../pages/index.php');
} 
else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
  
$conn->close();
?>