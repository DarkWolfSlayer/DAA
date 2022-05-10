
<?php
require_once("connection.php");
$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;
$usernameOrEmailAlreadyExists = false;


    $meno =  $_POST['username'];
    $priezvisko =  $_POST['surname'];
    $email = $_POST['email'];
    $heslo =  $_POST['psw'];
    

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

        echo "Nieco si nezadal";
    }
    else{

    }
    if (!preg_match('@[0-9]@', $heslo)) {
        $hasPasswordAtLeastOneNumber = false;
        echo "Heslo musi obsahovat aspon jeden ciselny znak" . "<br>";
    }
    if (($_POST["psw"]) == ($_POST["psw-repeat"]))
    {
        $passwordAreSame = true;
    }
    else{
        $passwordAreSame = false;
        echo "Hesla sa nezhodujú" . "<br>";

    }

    if(strlen($heslo) < 6){
        $hasPasswordCertainLength = false;
        echo "Heslo musi mat minimalne 6 znakov" . "<br>";
    } 
    else{
        $hasPasswordCertainLength = true;
    }
    $sql_u = "SELECT * FROM users WHERE Meno='$meno'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($link, $sql_u);
    $res_e = mysqli_query($link, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $usernameOrEmailAlreadyExists = true;
        echo "Uzivatelske meno uz existuje" . "<br>";
    }	
    if(mysqli_num_rows($res_e) > 0){
        $usernameOrEmailAlreadyExists = true;
        echo "Email uz bol pouzity" . "<br>"; 
    }


    if($isEmpty == false && $hasPasswordCertainLength == true && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == true  && $usernameOrEmailAlreadyExists == false){

    

            $sql = "INSERT INTO users (email, username, surname, password, ) VALUES ('$email', '$meno','$priezvisko','$heslo')";

            if ($link->query($sql) === TRUE) {
                header('Location: login1.php');
            }
            else {
                echo "Niečo je zle" . "<br>";
            }
            
            $link->close();
            
        }
        else{
            echo "Niečo je zle" . "<br>"; 

        }


  

?>
