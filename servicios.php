<?php
require("config/connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Productos | LikedShops</title>
  <?php
    include("header.php");
  ?>
<!-- Responzive -->
<div class="row gb-color-gris-1">
  <!-- Columna Izquierda -->
  <div class="column side">
        
  </div>

  <!-- Columna Medio -->
  <div class="column middle">
<div class="gb-row">

  <?php 
  $query = "select * from servicios;";
  $result = $mysqli->query($query);
  while($row = $result->fetch_assoc()){
  ?>
  <div class="gb-column_4">
      <a href="#!" style="text-decoration: none; color:black;">
    <div class="gb-card_3">
        <div class="gb-content-img">
      <img src="<?php echo $row["img"]?>">
        </div>
      <p><?php echo $row["nombre"]?></p>
    </div>
      </a>
  </div>
    <?php }
    $result->free();
    $mysqli->close();
    ?>
 
</div>

<div class="gb-row">

  <div class="content-paginacion">
    <div class="paginacion">
      <a href="#" class="prev"><i class="fa fa-mail-reply"></i></a>
      <a class="pageNumber active-pagination" href="#">1</a>
      <a class="pageNumber" href="#">2</a>
      <a class="pageNumber" href="#">3</a>
      <a href="#" class="next"><i class="fa fa-mail-forward"></i></a>
    </div>
  </div>

</div>

</div>

  <!-- Columna Derecha -->
  <div class="column side">
  </div>

</div>
<!-- Fin Responzive -->

<?php
include("footer.php");
?>