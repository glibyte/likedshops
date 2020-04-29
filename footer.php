<!--Fin contenido-->

<!--Footer-->
<footer class="gb-footer">
    <div class="columna">
                <div class="fila">
                    <div class="columna">
                        <h5>
                            Información
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!">
                                        Sobre nosotros
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                            Legal
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!">
                                        Términos y condiciones
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        Política de privacidad
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                            Dirección
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!">
                                        Direccion, CP, La Piedad.
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                            Contacto
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!">
                                        Tel: (352) 000000
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna social">
                        <h5>
                            Redes Sociales
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!" target="_blank" class="icon-facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" target="_blank" class="icon-twitter">
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                    <h6>
                        © 2019, Copyright, Web Site by Glibyte.
                    </h6>
            </div>
  </footer>

<!-- Nav Responsive -->
<script>
    //Loader
window.onload = function(){
    var contenedor = document.getElementById('gb-spinner-loading');
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
};

    //menu responsive
function menuResponsive() {
  var x = document.getElementById("Menu");
  if (x.className === "gb-menu") {
    x.className += " responsive";
  } else {
    x.className = "gb-menu";
  }
}


    //paginacion
    $(document).ready(function(){
        $('.next').click(function(){
            $('.paginacion').find('.pageNumber.active-pagination').next().addClass('active-pagination');
            $('.paginacion').find('.pageNumber.active-pagination').prev().removeClass('active-pagination');
        })
        $('.prev').click(function(){
            $('.paginacion').find('.pageNumber.active-pagination').prev().addClass('active-pagination');
            $('.paginacion').find('.pageNumber.active-pagination').next().removeClass('active-pagination');
        })
    });

    //location
  function geoFindMe() {
  var output = document.getElementById("out");
  let btn = document.getElementById("btn-location");
    if (!navigator.geolocation){
        output.innerHTML = "Geolocation is not supported by your browser";
        return;
    }

  function success(position) {
      //obtenemos coordenadas
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

        //obtener direccion con las coordenadas
    var latlng = new google.maps.LatLng(latitude, longitude);
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({"latLng": latlng}, function(results, status)
			{
                if (status == google.maps.GeocoderStatus.OK)
				{
                    if (results[0])
					{
						dir = "Dirección: " + results[0].formatted_address;
					}
					else
					{
						dir = "No se ha podido obtener ninguna dirección en esas coordenadas.";
                    }
                }else
				{
					dir = "El Servicio de Codificación Geográfica ha fallado con el siguiente error: " + status + ".";
                }
                output.innerHTML = 'Latitude is ' + latitude + ' <br> ' + dir;

            });

    //output.innerHTML = 'Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°';
  };

  function error() {
    output.innerHTML = "No se puede recuperar tu ubicación";
  };
  btn.style.display='none';
  output.innerHTML = "<i class='fa fa-circle-o-notch fa-spin' style='color:#b3b3b3;'></i> Locating…";
  navigator.geolocation.getCurrentPosition(success, error);
}

</script>
</body>
</html>