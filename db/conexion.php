<?php
include 'config.php'
 try{
    $servidor="mysql:dbname=".DB.";host=";SERVIDOR;
    $pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    //echo "<script> alert('conexion establecida')</script>";
    /* Iniciar una transacción, desactivando 'autocommit' */
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
    echo $e->getMessage();
 }  
?>