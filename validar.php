<?php
$usuario=$_POST["usuario"];
$pass=$_POST["password"];
$conexion=mysqli_connect("localhost","root","","juan_almacen");
$consulta=mysqli_query($conexion,"SELECT * from usuario where nom_usuario='$usuario' and password='$pass'");
$fila=mysqli_fetch_row($consulta);
if($fila>0){
    header("Location:almacen.php");
}else{
    echo "ERROR VUELVA A INTENTAR!!!";
}
?> 