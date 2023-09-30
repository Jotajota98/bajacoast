<?php

//$con = mysqli_connect("localhost:3307" ,"root" ,"","bajacoast") or die ('ERROR AL CONECTAR');

$con = mysqli_connect("localhost" ,"userbajacoast" ,"1Bajacoast23456","bajacoast") or die ('ERROR AL CONECTAR');


$nombre=$_POST['nombre'];
$fechaNa=$_POST['fechana'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$tiposangre=$_POST['tiposangre'];
$enfermedades=$_POST['enfermedades'];
$detalle=$_POST['detalle'];
$alergias=$_POST['alergias'];
$telefonoEmergencia=$_POST['telefonoEmergencia'];

$insertar_registroInfo ="INSERT INTO tb_registroinfo(nombre, fechaNa, edad, telefono, correo, tiposangre,enfermedades,detalle,alergias,telefonoEmergencia)
                                        	 values ('$nombre', '$fechaNa','$edad','$telefono','$correo','$tiposangre','$enfermedades','$detalle','$alergias','$telefonoEmergencia')";
	
$resultado1 = mysqli_query($con , $insertar_registroInfo);	

if($resultado1 == 1){
	echo "<script>alert('Registrado correctamente.')</script>";
	echo "<script>window.location = '../userCodUnique.php'</script>";
    //header("Location:../userCodUnique.php");
}
else{
	echo "<script>alert('El correo que usas ya fue registrado.')</script>";
	echo "<script>window.location = '../registroInfo.php'</script>";
	//header("Location:../registroInfo.php");
	//header("Location:../errorCorreo.php");

}
	
mysqli_close($con);

?>

