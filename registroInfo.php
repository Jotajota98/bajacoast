<?php 
  include 'complements/cabecera.php';
  include 'Globals/conexion.php';

$nombre="";
$fechaNa="";
$edad="";
$telefono="";
$correo="";
$tiposangre="";
$enfermedades="";
$detalle="";
$alergias="";
$telefonoEmergencia="";

?>

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>REGISTRO DE SEGURO PARA TU CAMINATA</h2>
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
          <form action="DAO/registrarInfoDAO.php" method="post">
            <div class="input-group">
              <span style="font-size:15px;">Nombre y Apellidos: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="text" name="nombre" id="nombre" value="" required><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Fecha Nacimiento: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="date" name="fechana" id="fechana" value="" required><br><br>
            </div>
            
            <div class="input-group">
              <span style="font-size:15px;">Edad: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="number" name="edad" id="edad" value="" required><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Telefono: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="number" name="telefono" id="telefono" value="" required><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Correo: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="email" name="correo" id="correo" value="" required><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Tipo de Sangre: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select style="width:200px; height:30px; font-size:15px;" class="form-control" name="tiposangre" id="tiposangre" value="" required>
                <option value="">------Selecciona------</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Enfermedades: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" id="enfermedades" name="enfermedades" value="Si"  required>
                <label for="contactChoice1">Si</label>&nbsp;
              <input type="radio" id="enfermedades" name="enfermedades" value="No"  required>
                <label for="contactChoice1">NO</label>
            </div><br>

            <div class="input-group">
              <span style="font-size:15px;">Detalle: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br><br><textarea style="width:200px; height:30px; font-size:16px;" class="form-control" type="text" name="detalle" id="detalle" value=""></textarea><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Alergias: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br><br><textarea style="width:200px; height:30px; font-size:16px;" class="form-control" type="text" name="alergias" id="alergias" value=""></textarea><br><br>
            </div>

            <div class="input-group">
              <span style="font-size:15px;">Contacto de Emergencia: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="number" name="telefonoEmergencia" id="telefonoEmergencia" value="" required><br><br>
            </div>

            <p>Para registrar la Información debe de Aceptar los <a href="terminos.php" target="_blanck">Términos y condiciones</a><br>

            <label><input type="checkbox" name="cb-terminosservicio" required> Acepto los términos y condiciones</label><br>
            
            </p>
            
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
