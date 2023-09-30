<?php 

include 'complements/cabecera.php';
include 'Globals/conexion.php';
error_reporting(0);

 
?>

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>SOLICITAR CÓDIGO DE USUARIO</h2>
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


        <!-- Start About Greenforest Section -->
        <section class="bg-about-greenforest">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8"><center>
                    <form  method="POST">        
                        <br><br><br><div class="about-greenforest-content">
                                <h2>Ingresa tu correo electrónico para solicitar tu código de usuario:</h2><br><br>
                                <input style="height:60px; font-size:20px;border-radius:10px" type="email" class="form-control" id="correo" name="correo" placeholder=" Ingresa tu correo Electronico">
                            </div><br><br>
                        <div>
                            <button type="submit" class="btn btn-secondary">SOLICITAR CODIGO</button>
                        </div><br><br><br>    
                    </div></center>

                    

                    </form>    
                    <div class="col-lg-2"></div>

                    

                    <div class="col-lg-2"></div>
                    <center><div class="col-lg-8">
                        <?php

                        $sentenciaUsuarios=$pdo->prepare("SELECT * FROM tb_registroinfo where correo = '".$_POST['correo']."' ");
                        $sentenciaUsuarios->execute();
                        $listaUsuario=$sentenciaUsuarios->fetchAll(PDO::FETCH_ASSOC);

                        foreach($listaUsuario as $usuario){ 
                            
                    ?>
                        <h2>SU CODIGO DE USUARIO ES:</h2>
                        <h3><?php echo $usuario['id'] ?></h3>
                    </div></center>
                    <div class="col-lg-2"></div><br><br><br>

                    <?php  } ?>


                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End About Greenforest Section -->


        

<?php 
  include 'complements/finalpage.php';
?>
