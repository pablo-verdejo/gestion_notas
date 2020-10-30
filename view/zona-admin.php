<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<?php
require_once '../controller/sessionController.php';
?>

<div class="row">
  <div class="column middle">
    <div class="topnav">
      <a class="active">Alumnos</a>
    </div>
    <!--Filtrado de alumnos-->
  </div>
    <div class="column side">
      <h2>FILTRAR ALUMNOS</h2>
      <div class="form">
        <form action="./zona-admin.php" method="POST">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Introduce el nombre...">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" placeholder="Introduce el apellido paterno...">
          <input type="submit" value="Filtrar">
        </form>
      </div>
      <div>
        <h2>CREAR ALUMNOS</h2>
        <a href="../model/crearalumnos.php" class="button">CREAR</a>
      </div>
    </div>
    <div class="textpage">
      <!--Ver todos los alumnos-->
      <?php
      include '../db/conexion.php';
      if (isset($_POST['nombre'])) {
        $name = $_POST['nombre'];
        $apelledio = $_POST['apellido'];
        $query = "SELECT * FROM tbl_alumnos WHERE nombre_alum LIKE '%$name%' AND apellido_alum_p LIKE '%$apelledio%'";
        $result = mysqli_query($conexion,$query);
        echo "<table>";
        echo "<thead>";
        echo  "<tr>";
        echo  "<th>Nombre</th>";
        echo  "<th>Apellido paterno</th>";
        echo  "<th>Apellido materno</th>";
        echo  "<th>Eliminar Alumno</th>";
        echo  "</tr>";
        echo  "</thead>";
        echo  "<tbody>";
        foreach ($result as $result) {
        echo  "<tr>";
        echo  "<td>{$result['nombre_alum']}</td>";
        echo  "<td>{$result['apellido_alum_p']}</td>";
        echo  "<td>{$result['apellido_alum_m']}</td>";
        echo  "<td><a href='../model/eliminaralumno.php?id={$result['id_alum']}' class='button2'>Eliminar</a></td>";
        echo  "</tr>";
        }
        echo  "</tbody>";
        echo  "</table>";
      }else{
      $query = "SELECT * FROM tbl_alumnos";
      $result = mysqli_query($conexion,$query);
      echo "<table>";
      echo "<thead>";
      echo  "<tr>";
      echo  "<th>Nombre</th>";
      echo  "<th>Apellido paterno</th>";
      echo  "<th>Apellido materno</th>";
      echo  "<th>Eliminar Alumno</th>";
      echo  "</tr>";
      echo  "</thead>";
      echo  "<tbody>";
      foreach ($result as $result) {
      echo  "<tr>";
      echo  "<td>{$result['nombre_alum']}</td>";
      echo  "<td>{$result['apellido_alum_p']}</td>";
      echo  "<td>{$result['apellido_alum_m']}</td>";
      echo  "<td><a href='../model/eliminaralumno.php?id={$result['id_alum']}'class='button2'>Eliminar</a></td>";
      echo  "</tr>";
      }
      echo  "</tbody>";
      echo  "</table>";
    }
      ?>   
    </div>
  </div>
</div>
  
</body>
</html>
