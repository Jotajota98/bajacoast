<?php

include '../Globals/conexion.php';

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= ListaUsuarios.xls")

?>

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
        </tr>
        </thead>

    <?php


        $sentenciaUsuarios=$pdo->prepare("SELECT * FROM tb_registroinfo");
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

     </tr>  
  

    <?php
        }
    ?>
    </table>