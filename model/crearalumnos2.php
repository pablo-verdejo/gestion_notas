<?php
include '../db/conexion.php';
//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST["crearnombre"];
$apellidop = $_POST["crearapellidop"];
$apellidom = $_POST["crearapellidom"];
$grupo = $_POST["creargrupo"];
$email = $_POST["crearemail"];
$contra = $_POST["crearcontra"];

//Preparamos la orden SQL
$query = "INSERT INTO `tbl_alumnos`(`nombre_alum`, `apellido_alum_p`, `apellido_alum_m`, `grupo_alum`, `email`, `passwd`) VALUES ('$nombre','$apellidop','$apellidom','$grupo','$email',md5('$contra'))";
$result = mysqli_query($conexion,$query);
header('location: ../view/zona-admin.php');
?>