<?php 
  include 'complements/cabecera.php';
  include 'Globals/conexion.php';

$ncliente="";
$foto="";
$correoo="";

?>

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>REGISTRA TU RUTA</h2>
                            </div>
                            <!-- .page-title -->
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <!--<li><a href="index.html">Home</a></li>
                                    <li>ABOUT US</li>-->
                                </ol>
                            </div>
                            <!-- .page-header-content -->
                        </div>
                        <!-- .page-header -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .page-header-overlay -->
        </section>
        <!-- End Page Header Section -->

<div class="container">
<div class="row">  
  <div class="d-flex justify-content-center h-100 "style="margin:auto;">
    <div> 
      <br><br>
	      <div>
          <form action="DAO/registrarDAO.php" method="post">
            <div class="input-group">
              <input type="hidden" name="ncliente" id="ncliente">
              <span style="font-size:20px;">N° Cliente: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="number" name="ncliente" id="ncliente" value="" required>
            </div>
              <p>(Ingresa <a href="https://www.bajacoasthiking/userCodUnique.php" target="_blank"><strong>AQUÍ</strong></a> para solicitar tu código de Cliente</p><br>
            <div class="input-group">
              <input type="hidden" name="correo" id="correo">
              <span style="font-size:20px;">Correo: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="email" name="correo" id="correo" value="" required><br><br>
            </div>
            
            <div class="input-group">
              <span style="font-size:20px;">Enlace de Foto: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="text" name="foto" id="foto" value="" required><br>
              
            
            </div>
            <p>(Ingresa <a href="https://es.imgbb.com/" target="_blank"><strong>AQUÍ</strong></a> para cargar la foto y luego pega el enlace.)</p>
            <br>
            <div>
              <button type="submit" class="btn btn-secondary">Enviar Boleto</button>
            </div>
          </form>
      </div>
    </div>
  </div> 
</div>
</div>
<br><br>

        

<?php 
  include 'complements/finalpage.php';
?>
