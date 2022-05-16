<?php 
require_once('../php_scripts/connection.php');
include('../parts/header.php'); 
?>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 50px;
  }
 
</style> 
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<main>
<form action="../php_scripts/password_change_script.php" method="post">
        <div class="container">
          <h1>Zmena hesla</h1>
          <hr>
            
          <p><label for="psw"><b>Stare Heslo</b></label>
          <br><input type="password" placeholder="Zadajte Stare Heslo" name="psw" id="psw" required>

          <p><label for="new-psw"><b>Nove Heslo</b></label>
          <br><input type="text" placeholder="Zadajte Nove Heslo" name="new-psw" id="new-psw" required>

          <p><button type="submit" class="btn btn-secondary">Zmenit</button>
          <p class="text-danger"><?php echo $message ?></p>
          <hr>
        </div>     
      </form>
</main>
<?php include('../parts/footer.php'); ?>