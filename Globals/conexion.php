<?php
include 'config.php';

$servidor="mysql:dbname=".$DATABASE.";host=".$SER;
try{
    $pdo= new PDO($servidor,$USER,$PASSWORD,
      array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    echo "<script>alert('Conectado...')</script>";
}catch(PDOException $e){
   echo "<script>alert('Error...')</script>";
}


//$con = mysqli_connect("localhost:3307" ,"root" ,"","medifast") or die ('ERROR AL CONECTAR');

?>