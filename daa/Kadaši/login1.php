<?php require_once('connection.php'); ?>

<?php include('./parts/header.php') ?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" http-equip="Content-Type">

</head>

<body>



  <form method="POST" class="formular" action="login_scr.php" method="POST">
    <h1>Login</h1>
    <!--<label for="uname"><b>Username</b></label>-->
    <div class="input-group mb-4">
      <span class="input-group-text">Používateľ</span>
      <input type="text" class="form-control" placeholder="Enter Username" id="username" name="username" required>
    </div>

    <!--<label for="psw"><b>Password</b></label>-->
    <div class="input-group mb-4">
      <span class="input-group-text">Heslo</span>
    <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
    </div>

    <div class=login>
      <button type="submit" id="login" value="login" name="login">Login</button>
      <p>

    </div>


  </form>
  <p>




    </form>

</body>

</html>