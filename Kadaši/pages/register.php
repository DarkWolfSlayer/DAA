<!DOCTYPE html>
<html>
  
<style>


  
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
          <div class="input-group mb-4">
          <span class="input-group-text"><b>Meno</b><label>
          <!--<input id="text" placeholder="Zadajte Meno" name="username" id="username" required>-->
          <input type="text" placeholder="Zadajte Meno" id="username" name="username" required>
          </div>
          
            <div class="input-group mb-4">
            <span class="input-group-text"><b>Priezvisko</b></label>
            <!--<input id="text" placeholder="Zadajte Priezvisko" name="surname" id="surname" required>-->
            <input type="text" placeholder="Zadajte Priezvisko" id="surname" name="surname" required>
            </div>

            <div class="input-group mb-4">
            <span class="input-group-text"><b>Email</b></label>
            <!--<input id="text" placeholder="Zadajte Email" name="email" id="email" required>-->
            <input type="text" placeholder="Zadajte Email" id="email" name="email" required>
            </div>

            <div class="input-group mb-4">
          <span class="input-group-text"><b>Heslo</b></label>
            <!--<input id="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>-->
            <input type="password" placeholder="Zadajte Heslo" id="psw" name="psw" required>
          </div>

          <div class="input-group mb-4">
          <span class="input-group-text"><b>Heslo znova</b></label>
            <!--<input id="password" placeholder="Znovu Zadajte heslo" name="psw-repeat" id="psw-repeat" required>-->
            <input type="password" placeholder="Znovu Zadajte heslo" id="psw-repeat" name="psw-repeat" required>
          </div>

          <p><button id="submit" class="btn btn-secondary">Registrovat sa</button>
            <hr>
          <p>
          <p style="font-weight: bolder;">Uz mate ucet?
          <p><a href="login1.php" class="btn btn-info">Prihlaste sa</a></p>
          <p class="text-danger"><?php echo $message ?></p>

    
        </div>

      </form>
    </main>
  </body>
  <?php include('../parts/footer.php')?>
</html>