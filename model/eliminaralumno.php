<?php
include '../db/conexion.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM `tbl_alumnos` WHERE id_alum = $id";
$result = mysqli_query($conexion,$query);
echo $query;
header('location: ../view/zona-admin.php');
?>