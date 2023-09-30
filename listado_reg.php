<?php
date_default_timezone_set("America/El_Salvador");
$fecha_ac = date("Y-m-d");


include 'Globals/conexion.php';
//error_reporting(0);

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = ''){
 echo "<script>alert('Debe iniciar sesion')</script>";
  echo "<script>window.location = 'login.php'</script>";
 die();
}

$nombre="";

include 'complements/cabeadmin.php';
include 'DAO/correoDAO.php';

?>

  <!-- Start Page Header Section -->
  <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>LISTA DE COMPROBANTES</h2>
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




        <section class="bg-servicesstyle2-section">
            <div class="container">
            <br><br><br><div class="row">

        <form class="input-group" method="post" name="formFechas" id="formFechas">
            <div>
                <div class="input-group">
                    <span style="font-size:18px;">Nombre y Apellido: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="text" name="nombre" id="nombre" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div><br><br>

        </form>  
        

            <div class="form-group">
              <a href="DAO/excel.php"><button type="submit" class="btn btn-success">Descargar Excel</button></a>
            </div>
    
 

    </div>
    </div>
    </section>



    

<section class="bg-servicesstyle2-section">
            <div class="container">
            <div class="row">

            <table id="customers">
  <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Nombre de Cliente</th>
            <th scope="col">Fecha Nac.</th> 
            <th scope="col">Edad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Grupo Sang.</th>
            <th scope="col">Enfermedades</th>
            <th scope="col">Detalle</th>
            <th scope="col">Alergias</th>
            <th scope="col">Contacto</th>
            <th scope="col">Borrar</th>
        </tr>
        </thead>

    <?php


        $sentenciaUsuarios=$pdo->prepare("SELECT * FROM tb_registroinfo where nombre like ('%".$_POST['nombre']."%')");
        $sentenciaUsuarios->execute();
        $listaUsuario=$sentenciaUsuarios->fetchAll(PDO::FETCH_ASSOC);
   
        foreach($listaUsuario as $usuario){ 
    ?>
   
     <tr>
         
         <td><?php echo $usuario['id']; ?></td>
         <td><?php echo $usuario['nombre']; ?></td>
         <td><?php echo $usuario['fechaNa']; ?></td>
         <td><?php echo $usuario['edad']; ?></td>
         <td><?php echo $usuario['telefono']; ?></td>
         <td><?php echo $usuario['correo']; ?></td>
         <td><?php echo $usuario['tiposangre']; ?></td>
         <td><?php echo $usuario['enfermedades']; ?></td>
         <td><?php echo $usuario['detalle']; ?></td>
         <td><?php echo $usuario['alergias']; ?></td>
         <td><?php echo $usuario['telefonoEmergencia']; ?></td>

        <td><center><form method="post" action="DAO/borraruserRegDAO.php">
            <input type="hidden" value="<?php echo $usuario['id']; ?>" id="id" name="id">
            <button type="submit" class="btn btn-secondary"><a><img src="assets/img/x.png" width="20px"></a></button>
        </form></center></td>

     </tr>  
  

    <?php
        }
    ?>
    </table>
    </div>
    </div>
    </section>
    <br><br>


    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>



