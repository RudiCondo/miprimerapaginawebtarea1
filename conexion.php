<?php
//                       dominio,name_user,contraseña,nom_basededatos
$conectador=mysqli_connect("localhost","root","","juan_almacen");
//zona-horaria es para que el registro sea exacto
date_default_timezone_set('America/La_Paz');
mysqli_query($conectador,"SET charset 'utf8'");
?>