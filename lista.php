<?php
date_default_timezone_set("America/El_Salvador");
$fecha_ac = date("Y-m-d");


include 'Globals/conexion.php';

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
 echo "<script>alert('Debe iniciar sesion')</script>";
 echo "<script>window.location = 'login.php'</script>";
 die();
}

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
                    <?php
                    $año = date("Y");
                    $mes = date("m");
                    $dia = date("d");
                    $fechaActual = $año."-".$mes."-".$dia;
                    ?>
                    <span style="font-size:18px;">Selecionar Fecha: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input style="width:200px; height:30px; font-size:16px;" class="form-control" type="date" name="fecha" id="fecha" value="<?php echo $fechaActual ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>

        </form>  
    
        <div class="form-group">
              <a href="DAO/excelPago.php"><button type="submit" class="btn btn-success">Descargar Excel</button></a>
        </div>

    </div>
    </div>
    </section>

<section class="bg-servicesstyle2-section">
            <div class="container">
            <div class="row">
            <div class="col-12">    

            <table id="customers">
  <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Numero Cliente</th>
            <th scope="col">Comprobante</th> 
            <th scope="col">Correo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Borrar</th>
        </tr>
        </thead>

    <?php
        $año = date("Y");
        $mes = date("m");
        $dia = date("d");
        $fechaActual = $año."-".$mes."-".$dia;
        $sentenciaUsuarios=$pdo->prepare("SELECT * FROM tb_registro where fecha = '".$_POST['fecha']."' ");
        $sentenciaUsuarios->execute();
        $listaUsuario=$sentenciaUsuarios->fetchAll(PDO::FETCH_ASSOC);
   
        foreach($listaUsuario as $usuario){ ?>
   
     <tr>
         
         <td><?php echo $usuario['id']; ?></td>
         <td><?php echo $usuario['ncliente']; ?></td>
         <td><center><button type="submit" class="btn btn-secondary"><a href="<?php echo $usuario['foto']; ?>" target="_blanck"><img src="assets/img/lupa.png" width="20px"></a></center></button></td>
         
         <form method="post" acttion="DAO/correoDAO.php">
         <td><?php echo $usuario['correo']; ?> 
            <input type="hidden" value="<?php echo $usuario['correo']; ?>" name="correo">
            <button type="submit" class="btn btn-secondary"><a><img src="assets/img/mail.png" width="20px"></a></button>
        </form></td>

         <td><?php echo $usuario['fecha']; ?></td>

         <td><center><form method="post" action="DAO/borrarDAO.php">
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

      