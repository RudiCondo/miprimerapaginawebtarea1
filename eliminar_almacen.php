<?php
//archivo de conexion
include "conexion.php";
//capturamos el id de almacen
$id=$_GET["id_almacen"];
mysqli_query($conectador,"delete from almacen where id_almacen='$id'");
header("Location:listar_almacen.php");
?>