<?php   include 'complements/cabecera.php'; ?>

   <!-- Start Page Header Section -->
   <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>INICIAR SESION</h2>
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

<div class="container">
<div class="row">  
  <div class="d-flex justify-content-center h-100 "style="margin:auto;">
    <div> 
    <br><br>
		<div class="d-flex justify-content-center">
			<div class="brand_logo_container">
                <img src="assets/img/logo-.png" class="brand_logo"/>
            </div>
        </div> <br><br>
	    <div>
            <form method="post" action="DAO/loginDAO.php">
                <div class="input-group">  
					<span style="font-size:20px;">Email: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" class="form-control" placeholder="email" name="user" id="user" style="width:200px; height:30px; font-size:16px;">
				</div>
                <br>
				<div class="input-group">  
					<span style="font-size:20px;">Contraseña:  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input placeholder="contraseña" type="password" class="form-control"name="clave" id="clave" style="width:170px; height:30px; font-size:16px;">
                </div>
                <br><br> 
				<div>  
                <button type="submit" class="btn btn-secondary">INGRESAR</button>
			    </div>
            </form>
        </div>
    </div>
  </div> 
</div>
</div><br><br><br>


<?php
include 'complements/finalpage.php';
?>      
