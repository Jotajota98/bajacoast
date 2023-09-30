<?php

//$con = mysqli_connect("localhost:3307" ,"root" ,"","bajacoast") or die ('ERROR AL CONECTAR');

$con = mysqli_connect("localhost" ,"userbajacoast" ,"1Bajacoast23456","bajacoast") or die ('ERROR AL CONECTAR');


$link = $_POST["link"];


$insertar_post ="INSERT INTO tb_insta(link) values ('$link')";
	
$resultado1 = mysqli_query($con , $insertar_post);	

if($resultado1 == 1){
    echo "<script>alert('Registro Exitoso')</script>";
    echo "<script>window.location = '../post.php'</script>";
}
else{
	//<h2>Error</h2>-->
	//echo mysqli_error($con);
    echo "<script>alert('Error de Conexion')</script>";
    echo "<script>window.location = '../post.php'</script>";
}
	
mysqli_close($con);

?>