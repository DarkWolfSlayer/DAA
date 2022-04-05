<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
    if($_POST["meno"] == "jan" && $_POST["heslo"] == "kadasi")
    {
        echo "Vitaj";
    } 
    else
    {
        echo "cele zle";
        //SESSIObn

        header("Location: sucet.php");
        exit;
    }
   
    ?>
    </body>
</html>