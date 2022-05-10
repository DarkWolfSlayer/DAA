<?php
include('../php_scripts/connection.php');

$sql = "DELETE FROM users WHERE id=".$_GET['id'];
$user = null;

if($conn->query($sql)===TRUE){
    echo "Record deleted successfully";
}
else
{
    echo "Error deleting record" . $conn->error;
}