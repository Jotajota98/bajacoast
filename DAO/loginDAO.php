<?php

//$con = mysqli_connect("localhost:3307" ,"root" ,"","bajacoast") or die ('ERROR AL CONECTAR');

$con = mysqli_connect("localhost" ,"root" ,"root","bajacoast") or die ('ERROR AL CONECTAR');



$usuario = $_POST["user"];
$clave = $_POST["clave"];

session_start();
$_SESSION['usuario'] = $usuario;

$login_administrador = mysqli_query( $con,"select * from tb_admin where username='".$usuario."' and pass='".$clave."' ");
$resultado = mysqli_num_rows($login_administrador);		

if($resultado == 1 ){
    header("Location: ../lista.php");

}else{
    echo "<script>alert('Credenciales incorrectas')</script>";
    echo "<script>window.location = '../login.php'</script>";
}
	
mysqli_close($con);

?>