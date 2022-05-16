
<?php
require_once("connection.php");
$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;
$usernameOrEmailAlreadyExists = false;


$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);
    

    if(empty($_POST["email"])){
        $isEmpty = true;
    }
    if(empty($_POST["username"])){
        $isEmpty = true;
    }
    if(empty($_POST["surname"])){
        $isEmpty = true;
    }
    if(empty($_POST["psw"])){
        $isEmpty = true;
    }
    if(empty($_POST["psw-repeat"])){
        $isEmpty = true;
    }
    if($isEmpty == true){

        echo "Nieco si nezadal" . "<br>";
    }
    
    if (!preg_match("/[0-9]/", $password)) {
        $hasPasswordAtLeastOneNumber = false;
        header('Location: ../pages/register.php?message=Heslo musi obsahovat aspon jeden ciselny znak');
    }
    
    if($_POST["psw"] == $_POST["psw-repeat"]){
        $passwordAreSame = true;
    }
    else{
        $passwordAreSame = false;
        header('Location: ../pages/register.php?message=Hesla sa nezhoduju');
    }
    
    if(strlen($password) < 6){
        $hasPasswordCertainLength = false;
        header('Location: ../pages/register.php?message=Heslo musi obsahovat minimalne 6 znakov');
    }
    else{
        $hasPasswordCertainLength = true;
    }
    $s = rand(1,3);
    switch($s) {
        case 1:
            $avatar = "madara.jpg";
            break;
        case 2:
            $avatar = "uchiha-clan.jpg";
            break;
        case 3:
            $avatar = "xXE2YMu.jpg";
            break;        
    }
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $usernameOrEmailAlreadyExists = true;
        header('Location: ../pages/register.php?message=Uzivatelske meno je uz obsadene');
    }	
    if(mysqli_num_rows($res_e) > 0){
        $usernameOrEmailAlreadyExists = true;
        header('Location: ../pages/register.php?message=Email uz bol pouzity');
    }

    if($isEmpty == false && $hasPasswordCertainLength && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == true && $usernameOrEmailAlreadyExists == false){
        $hash = md5($_POST["psw"]);
        $sql = "INSERT INTO users (username, surname, password, email, avatar) 
        VALUES('$username', '$surname', '$hash', '$email', '$avatar')";
        if ($conn->query($sql) == true){       
            header('Location: ../pages/login1.php?message=Registracia bola uspesna');
        }
        else{
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>


  

?>
