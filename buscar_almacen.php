<?php
include "conexion.php";
//recupero la informacion de form_buscar_almacen
$palabra_bus=$_POST["busc_almacen"];
//ejecutar la consulta
$almacen_sql=mysqli_query($conectador,"SELECT * FROM almacen WHERE des_almacen LIKE '%$palabra_bus%'");
//lo convierte en arreglo
$almacen=mysqli_fetch_array($almacen_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
</head>
<body>
    <table>
        <tr>
            <td>ID ALMACEN</td>
            <td><?php echo $almacen[0];?></td>
        </tr>
        <tr>
            <td>DESCRIPCION</td>
            <td><?php echo $almacen[1];?></td>
        </tr>
        <tr>
            <td>SUPERFICIE</td>
            <td><?php echo $almacen[2];?></td>
        </tr>
        <tr>
            <td>ENCARGADO</td>
            <td><?php echo $almacen[3];?></td>
        </tr>
        <tr>
            <td>DIRECCION</td>
            <td><?php echo $almacen[4];?></td>
        </tr>
    </table>
</body>
</html>