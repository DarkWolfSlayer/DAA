
<HTML>
<head>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<form action="registration.php" method="post">
  <div class="imgcontainer">
    <img src="uchiha.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="nazov_clanku"><b>Nazov clanku</b></label>
    <input type="text" placeholder="Zadaj nazov" name="nazov_clanku" required>

    <label for="autor"><b>Meno Autora</b></label>
    <input type="text" placeholder="Zadaj Meno" name="autor" required>
    
    <label for="text">Napis tvoj clanok</label>
    <textarea id="text" name="text"
          rows="2" cols="33">
    </textarea>

    <button type="submit">Zverejni</button>
  </div>
  

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
</body>
</HTML>