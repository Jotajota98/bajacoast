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

include 'complements/cabeadmin.php';
include 'DAO/correoDAO.php';

$link="";

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
        </section><br><br>
    

<section class="bg-servicesstyle2-section">
            <div class="container">
            <div class="row">

            <table id="customers">
  <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Enlace</th>
            <th scope="col">Borrar</th> 
        </tr>
        </thead>

    <?php

        $sentenciaInsta=$pdo->prepare("SELECT * FROM tb_insta");
        $sentenciaInsta->execute();
        $listaPost=$sentenciaInsta->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($listaPost as $post){

    ?>
   
     <tr>
         
         <td><?php echo $post['id']; ?></td>
         <td><?php echo $post['link']; ?></td>

        <td><center><form method="post" action="DAO/borrarPostDAO.php">
            <input type="hidden" value="<?php echo $post['id']; ?>" id="id" name="id">
            <button type="submit" class="btn btn-secondary"><a><img src="assets/img/x.png" width="20px"></a></button>
        </form></center></td>

     </tr>  
  

    <?php
        }
    ?>
    </table>

        <form action="DAO/postDAO.php" method="post"><br><br><br>
            <div class="input-group">
              <span style="font-size:20px;">Ingresar Enlace: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <textarea style="width:200px; height:100px; font-size:16px;" class="form-control" type="text" name="link" id="link" value="" required></textarea>
            </div>
            <div><br>
              <button type="submit" class="btn btn-secondary">Enviar Publicación</button>
            </div>
        </form>

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



