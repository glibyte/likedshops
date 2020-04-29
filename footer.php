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

    

</script>
</body>
</html>