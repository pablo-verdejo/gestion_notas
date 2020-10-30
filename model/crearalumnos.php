<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<H1>CREAR ALUMNOS</H1>
<div class="form">
<?php
include '../db/conexion.php';
echo  '<form action="./crearalumnos2.php" method="POST">';
echo    '<label for="crearnombre">Nombre</label>';
echo    '<input type="text" id="crearnombre" name="crearnombre" placeholder="Introduce el nombre...">';
echo    '<label for="crearapellidop">Apellido paterno</label>';
echo    '<input type="text" id="crearapellidop" name="crearapellidop" placeholder="Introduce el apellido paterno...">';
echo    '<label for="crearapellidom">Apellido materno</label>';
echo    '<input type="text" id="crearapellidom" name="crearapellidom" placeholder="Introduce el materno...">';
echo    '<label for="creargrupo">Grupo</label>';
echo    '<input type="text" id="creargrupo" name="creargrupo" placeholder="Introduce el grupo...">';
echo    '<label for="crearemail">Email</label>';
echo    '<input type="email" id="crearemail" name="crearemail" placeholder="Introduce el email...">';
echo    '<label for="crearcontra">Contraseña</label>';
echo    '<input type="password" id="crearcontra" name="crearcontra" placeholder="Introduce la contraseña...">';
echo    '<input type="submit" value="Crear">';
echo    '</form>';
?>
</div>
</body>
</html>