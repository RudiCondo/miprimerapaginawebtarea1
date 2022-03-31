<?php
//incluyo conexion para poder conectarme a mi bd
include "conexion.php";
//obtenecion de fecha
$fecha=date("Y")."-".date("m")."-".date("d");
//creas una variable para recibir los datos de form_reg_alm
$des_almacen=$_POST["des_almacen"];
$superficie=$_POST["superficie"];
$encargado=$_POST["encargado"];
$ubicacion=$_POST["ubicacion"];
$archivo=$_FILES["imagen"];
$extencion=pathinfo($archivo["name"],PATHINFO_EXTENSION);
//cambio el nombre de la imagen
$imagen=$des_almacen."-".$fecha.".".$extencion;
//traspasar los archivos con esa funcion php y llevarlo a una carpeta
move_uploaded_file($archivo["tmp_name"],"./img/$imagen");
//aqui usa los recursos anteriormente creados y los lleva a la base de datos
mysqli_query($conectador, "INSERT into almacen(des_almacen,superficie,encargado,ubicacion,imagen)VALUES('$des_almacen',$superficie,'$encargado','$ubicacion','$imagen')");
header("Location:listar_almacen.php");
?>