<?php
require("config/connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ofertas | LikedShops</title>
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
  $query = "select * from productos where oferta='si';";
  $result = $mysqli->query($query);
  while($row = $result->fetch_assoc()){
  ?>
  <div class="gb-column_3">
    <a href="Productos/<?php echo $row["id"]?>" style="text-decoration: none; color:black;">
    <div class="gb-card_1">
      <div class="gb-content-img">
      <img src="<?php echo $row["img"]?>">
      </div>
      <div class="gb-content-text">
      <h3><?php echo $row["nombre"]?></h3>
      <p>$ <?php echo $row["precio"]?></p>
      <p>Stock <?php echo $row["stock"]?></p>
    </div> 
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