<?php

include '../Globals/conexion.php';

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= ListaPago.xls")

?>


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
        $sentenciaUsuarios=$pdo->prepare("SELECT * FROM tb_registro");
        $sentenciaUsuarios->execute();
        $listaUsuario=$sentenciaUsuarios->fetchAll(PDO::FETCH_ASSOC);
   
        foreach($listaUsuario as $usuario){ ?>
   
     <tr>
         
         <td><?php echo $usuario['id']; ?></td>
         <td><?php echo $usuario['ncliente']; ?></td>
         <td><?php echo $usuario['foto']; ?></td>
         <td><?php echo $usuario['correo']; ?> </td>
         <td><?php echo $usuario['fecha']; ?></td>

     </tr>  
  

    <?php
        }
    ?>
    </table>