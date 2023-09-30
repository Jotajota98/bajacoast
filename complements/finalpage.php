 

<!-- Footer -->
<footer style="background-color:black" >

  <!-- Footer Links -->
  <br><br><div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">BajaCoast</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>“Senderismo responsable.”</p>

      </div>
      <!-- Grid column -->

      

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Redes</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            
            <p><a href="https://www.facebook.com/bajacoasthiking/" target="_blanck"><i class="fa fa-facebook"></i> Facebook</p></a>
            <p><a href="https://www.instagram.com/bajacoasthiking1/" target="_blanck"><i class="fa fa-instagram"></i> Instagram</p></a>
            <p><a href="https://wa.link/nbmgd5" target="_blanck"><i class="fa fa-whatsapp"></i> WhatsApp</p></a>
            <p><a href="https://www.youtube.com/channel/UCzL9j8Z28aO2zg83w5E8ECA" target="_blanck"><i class="fa fa-youtube-play"></i> YouTube</p></a>
            <!--<p><i class="fa fa-phone"></i> + 01 234 567 89</p>-->

      <!-- Grid column -->

    </div>

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contacto</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fa fa-location-arrow"></i> C. Miguel Hidalgo 100, el Tecolote 22644 Tijuana</p>
            <p>
              <i class="fa fa-envelope-o"></i> contacto@bajacoasthiking.com</p>
            <p>
              <i class="fa fa-phone"></i> +52 663 121 7950</p><br>
            <!--<p>
              <i class="fa fa-phone"></i> + 01 234 567 89</p>-->

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="/"> Juan RH</a>
  </div>
  <!-- Copyright -->

</footer>


    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="assets/js/lightcase.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nstSlider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/js/custom.map.js"></script>
    <script type="text/javascript" src="assets/js/plugins.isotope.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.isotope.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        function buscar_ahora(buscar){
            var parametros = {"buscar":buscar};
            $.ajax({
                data: parametros,
                type: 'POST',
                url: '../DAO/filtroDAO.php',
                success: function(data){
                document.getElementById("datos_buscador").innerHTML = data; 
                }
            });
        }

    </script>

</body>

</html>



