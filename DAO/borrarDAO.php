<?php

//$con = mysqli_connect("localhost:3307" ,"root" ,"","bajacoast") or die ('ERROR AL CONECTAR');

$con = mysqli_connect("localhost" ,"userbajacoast" ,"1Bajacoast23456","bajacoast") or die ('ERROR AL CONECTAR');

$id = $_POST["id"];

$borrar_administrador = mysqli_query( $con,"delete from tb_registro where id='".$id."' ");
//$resultado = mysqli_num_rows($borrar_administrador);		

if($borrar_administrador ){
    header("Location: ../lista.php");

}else{
    echo "<script>alert('Error al eliminar el objeto.')</script>";
    echo "<script>window.location = '../lista.php'</script>";
}
	
mysqli_close($con);

?>