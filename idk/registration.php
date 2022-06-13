<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "clanky");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$obrazok = $_POST['avata'];
$nazov_clanku = mysqli_real_escape_string($link, $_REQUEST['nazov_clanku']);
$autor = mysqli_real_escape_string($link, $_REQUEST['autor']);
$text= mysqli_real_escape_string($link, $_REQUEST['text']);
 

$sql = "INSERT INTO clanok (nazov_clanku, autor, text, Cover_image) VALUES ('$nazov_clanku', '$autor', '$text' , '$obrazok')";
if(mysqli_query($link, $sql)){  
    echo "Pridana hodnota.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 header("Location: index.php");
// Close connection
mysqli_close($link);
?>