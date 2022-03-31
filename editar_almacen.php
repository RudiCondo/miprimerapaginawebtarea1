<?php
include "conexion.php";
$id_almacen=$_GET["id_almacen"];
$almacen_sql=mysqli_query($conectador, "select * from almacen where id_almacen='$id_almacen'");
$almacen=mysqli_fetch_array($almacen_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar el almacen</title>
</head>
<body>
<h3>Editar El Almacen</h3>
<form action="actualizar_almacen.php?id_almacen=<?php echo $almacen[0];?>" method="post">
    <label for="">Descripcion Almacen</label>
    <input type="text" name="des_almacen" id="des_almacen" value="<?php echo $almacen[1];?>">
    <label for="">Superficie</label>
    <input type="number" name="superficie" id="superficie" value="<?php echo $almacen[2];?>">
    <label for="">Encargado</label>
    <input type="text" name="encargado" id="encargado" value="<?php echo $almacen[3];?>">
    <label for="">Ubicacion</label>
    <input type="text" name="ubicacion" id="ubicacion" value="<?php echo $almacen[4];?>">
    <input type="submit" value="Actualizar">
    <input type="button" value="Cancelar" onclick="history.back()">
</form>
    
</body>
</html>