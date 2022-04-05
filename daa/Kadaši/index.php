<?php include('./parts/header.php'); ?>
<?php include('../Kadaši/getUser.php'); ?>
<main class="container">
<!--https://getbootstrap.com/docs/4.0/components/carousel/-->

<ul class = "list-group">
    <li class= "list-group-item">
      <span class= "text-danger" <strong> ID. USERNAME</strong></span>
    </li>
    <?php foreach($users as $users) : ?>
      <li class= "list-grou-item">
          <img src = "./image/uchiha-clan.jpg" alt="<?php echo $user["username"] ?>" >
          <a href = "#" class="class-danger"> <?php echo $user["id"] . "." . $user["username"] ?></a>
      </li>
    <?php endforeach; ?>  
</ul>
</main>

<?php include('./parts/footer.php') ?>