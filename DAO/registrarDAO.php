<?php

error_reporting(0);

//$con = mysqli_connect("localhost:3307" ,"root" ,"","bajacoast") or die ('ERROR AL CONECTAR');

$con = mysqli_connect("localhost" ,"root" ,"root","bajacoast") or die ('ERROR AL CONECTAR');


$ncliente = $_POST["ncliente"];
$foto = $_POST["foto"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];


$insertar_registro ="INSERT INTO tb_registro(ncliente, foto, correo, fecha) values ('$ncliente', '$foto','$correo',CURDATE())";
	
$resultado1 = mysqli_query($con , $insertar_registro);	

if($resultado1 == 1){
	echo "<script>alert('Se envió el comprobante exitosamente.')</script>";
	echo "<script>window.location = '../index.php'</script>";
    //header("Location:../index.php");
}
else{
	echo "<script>alert('Error al enviar el Formulario.')</script>";
	echo "<script>window.location = '../registro.php.php'</script>";
	//<h2>Error</h2>
	//<?php echo mysqli_error($con);
}
	
mysqli_close($con);

?>
	