<?php
require_once('../idk/config.php');
include('../idk/header.php');
?>
<main class="container">
  <h1 class="m-4 text-uppercase" style="text-align: center">Articles</h1>

  <?php
  
   $limit = 6;      
   if (isset($_GET["page"])) { 
     $pn  = $_GET["page"];
     if($pn < 1){
       $pn = 1;
     } 
   } 
   else { 
     $pn=1; 
   };
   function read_more($string)
    {
      // strip tags to avoid breaking any html
$string = strip_tags($string);
if (strlen($string) > 40) {

    // truncate string
    $stringCut = substr($string, 0, 40);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="/this/story">Read More</a>';
}
echo $string;
    }


   




   $start_from = ($pn-1) * $limit;  
   $query1 = $conn->query("SELECT * FROM clanok LIMIT $start_from, $limit");
  
  ?>

  <div class="container">
    <div class="d-flex flex-wrap align-items-center">
      <?php
      while ($row1 = $query1->fetch_assoc()) {
      ?>
        <div class="col-lg-4 col-md-5 col-sm-7" style="text-align: center">
        
          <img src="../idk/<?php echo $row1["Cover_image"] ?>" alt="<?php echo $row1["nazov_clanku"] ?>" style="width: 200px">

          <p><span style="font-size: 20px; font-weight: bold;">Title:</span> <?php echo $row1["nazov_clanku"] ?>
          <p><span style="font-size: 20px; font-weight: bold;">Autor:</span> <?php echo $row1["autor"] ?>
          <p><?php echo read_more ($row1["text"]) ?>
          
        </div>
      
      <?php
      }
      ?>
    </div>
  </div>


  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="../idk/index.php <?php echo "?page=" . $pn - 1; ?>" aria-label="Previous Page">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="../idk/index.php<?php echo "?page=" . $pn + 1; ?>" aria-label="Next Page">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</main>