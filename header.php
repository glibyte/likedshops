  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/glibyte_all.css">
  <link rel="stylesheet" type="text/css" href="css/gb_header.css">
  <link rel="stylesheet" type="text/css" href="css/gb_footer.css">
  <link rel="stylesheet" type="text/css" href="css/gb_flex.css">
  <link rel="stylesheet" type="text/css" href="css/gb_cards.css">
  <link rel="stylesheet" type="text/css" href="css/gb_icon.css">
  <link rel="stylesheet" type="text/css" href="css/gb_color.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY1QsrZcu6wzzHHFXhcYWScw9xS0JmNKI&callback=initMap"
  type="text/javascript"></script>
  
</head>
<body>
  <!--Header-->
  <div class="gb-header">
    <a href="index.php">
    <div class="logo">
      <h1>
     LikedShops
    </h1>
    </div>
    </a>

    <!-- Search  (gb_header) -->
    <div class="search-container">
    <form action="">
      <input type="text" placeholder="Busca productos, servicios y más..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <!-- ubicacion -->
    <button onclick="geoFindMe()" id="btn-location"><i class="fa fa-map-marker"></i> Ubicacion</button>
    <div id="out"></div> 
  </div>
 

  </div>
  <!--Fin Header-->
  <div class="row">
  <!-- Menu -->
  <div class="gb-menu" id="Menu">
      <ul>
          <li><a class="active-menu">LikedShops</a></li>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="ofertas.php">Ofertas</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="tiendas.php">Tiendas</a></li>
          <li><a href="javascript:void(0);" class="icon" onclick="menuResponsive()"><i class="fa fa-bars"></i></a></li>
    
      </ul>
  </div>
  <!-- fin Menu-->
  
  <nav class="gb-login">
      <a href="login.php">Ingresa</a>
      <a href="registro.php">Registrate</a>
      <a href="#!"><i class="icon-cart" style="font-size: 14px;"></i></a>
  </nav>
</div>
<!-- Spinner -->
<div id="gb-spinner-loading">
    <div class="gb-spinner-bounce"></div>
    <div class="gb-spinner-bounce2"></div>
    <div class="gb-spinner-bounce3"></div>
</div>

<!--Contenido-->