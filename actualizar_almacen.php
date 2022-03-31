<?php
//incluyo conexion para poder conectarme a mi bd
include "conexion.php";
//creas una variable para recibir los datos 
$id_almacen=$_GET["id_almacen"];
$des_almacen=$_POST["des_almacen"];
$superficie=$_POST["superficie"];
$encargado=$_POST["encargado"];
$ubicacion=$_POST["ubicacion"];
mysqli_query($conectador,"UPDATE almacen set des_almacen='$des_almacen', superficie='$superficie', encargado='$encargado', ubicacion='$ubicacion' where id_almacen='$id_almacen'");
header('Location:listar_almacen.php');
?>