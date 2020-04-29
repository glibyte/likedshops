<?php
require("config/connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tiendas | LikedShops</title>
  <?php
    include("header.php");
  ?>
<!--Contenido-->



<!-- Responzive -->
<div class="row gb-color-gris-1">
  <!-- Columna Izquierda -->
  <div class="column side">
        
  </div>

  <!-- Columna Medio -->
  <div class="column middle">
<div class="gb-row">

  <?php 
  $query = "select * from tiendas";
  $result = $mysqli->query($query);
  while($row = $result->fetch_assoc()){
  ?>
  <div class="gb-column_1">
      <a href="#!" style="text-decoration: none; color:black;">
    <div class="gb-card_2">
      <div class="gb-content-img overflow">
      <img src="<?php echo $row["img"]?>">
      </div>
      <h3><?php echo $row["nombre"]?></h3>
      <p><?php echo $row["categoria"]?></p>
      <?php if ($row["sd"]==1){?>
        <p>Servicio a domicilio</p>
      <?php } else {?>
        <p>No cuenta con servicio a domicilio</p>
        <?php }?>
      
      <p>Tel: <?php echo $row["telefono"]?></p>
      <p>Direccion: <?php echo $row["direccion"]?></p>
      <p>Horario: <?php echo $row["ha"]." - ".$row["hc"]?></p>
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

<!--Fin contenido-->


<?php
include("footer.php");
?>