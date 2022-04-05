<?php require_once('connection.php'); ?>

<?php include('./parts/header.php') ?>

<main class="container">
</main> 




<form action="register_scr.php" method="POST" class="container">
  <h1>Register</h1>

  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text">Používateľ</span>
    </div>
    <!--<label for="username"><b>Username</b></label> -->
    <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username" required>
    <input type="text" class="form-control" placeholder="Enter Surname" name="surname" id="surname" required>
  </div>

  <!--<div class="input-group mb-4">
    <label for="surname"><b>Surname</b></label>
    <input type="text" class="input-group mb-2" placeholder="Enter Surname" name="surname" id="surname" required>
  </div>
-->
  <div class="input-group mb-4">
    <span class="input-group-text">Email</span>
    <!--<label for="email"><b>Email</b></label>-->
    <input type="mail" class="form-control" placeholder="Enter Email" name="email" id="email" required>
  </div>

  <div class="input-group mb-4">
    <span class="input-group-text">Heslo</span>
    <!--<label for="psw"><b>Password</b></label>-->
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" id="psw" required>
  </div>

  <div class="input-group mb-4">
    <span class="input-group-text">Zopakuj heslo</span>
    <!--<label for="psw-repeat"><b>Repeat Password</b></label>-->
    <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
  </div>

  <div>
  <input type="checkbox" id="Nie som robot" name="Nie som robot"
         required>
  <label for="Nie som robot">Nie som robot</label>
</div>

  <p class="klasap">
    <button type="submit" class="registerbtn">Register</button>
  </p>


  <div class="containersignin">
    <p>Already have a account? <a href="login1.php">Sign in</a>.</p>
  </div>
</form>
</main>
<?php include('./parts/footer.php') ?>