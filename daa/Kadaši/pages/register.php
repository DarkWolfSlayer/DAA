<!DOCTYPE html>
<html>
<style>
  .container {
      text-align: center;
  }
  h1 {
    padding-top: 50px;
  } 
</style>
<title>Register</title>


  <body>
  <?php include('../parts/header.php');?>
  <?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
    <main>
      <form action="../php_scripts/register_script.php" method="post">

        <div class="container">
          <h1>Registracia</h1>
          <hr>
          <p><label for="username"><b>username</b></label>
            <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>

          <p><label for="surname"><b>surname</b></label>
            <br><input type="text" placeholder="Zadajte Priezvisko" name="surname" id="surname" required>

          <p><label for="email"><b>email</b></label>
            <br><input type="text" placeholder="Zadajte Email" name="email" id="email" required>

          <p><label for="psw"><b>password</b></label>
            <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>

          <p><label for="psw-repeat"><b>reapeat password</b></label>
            <br><input type="password" placeholder="Znovu Zadajte heslo" name="psw-repeat" id="psw-repeat" required>

          <p><button type="submit" class="btn btn-secondary">Registrovat sa</button>
            <hr>
          <p>
          <p style="font-weight: bolder;">Uz mate ucet?
          <p><a href="login.php" class="btn btn-info">Prihlaste sa</a></p>
          <p class="text-danger"><?php echo $message ?></p>
        </div>

      </form>
    </main>
  </body>
  <?php include('../parts/footer.php')?>
</html>