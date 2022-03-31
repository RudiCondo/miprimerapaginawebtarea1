<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de almacenes</h2>
    <table>
        <tr>
            <th>Descripcion</th>
            <th>Superficie</th>
            <th>Encargado</th>
            <th>Ubicaion</th>
            <th>Vista</th>
            <td></td>
        </tr>
        <?php
        //incluir el archivo lo que me permite conectar a la bd
        include "conexion.php";
        //consulta guardada en una variable y muestra toda la bd de almacen
        $almacen_sql=mysqli_query($conectador,"SELECT * FROM almacen");
        //lo convierte en arreglo y cierra php pero continua el ciclo en el sgte que abre
        while($almacen=mysqli_fetch_array($almacen_sql)){
            ?>
            <tr>
                <td><?php echo $almacen[1];?></td>
                <td><?php echo $almacen[2];?></td>
                <td><?php echo $almacen[3];?></td>
                <td><?php echo $almacen[4];?></td>
                <td><img src="img/<?php echo $almacen[5];?>" style="width:150px; height:150px;"></td>
                <!--lo lleva a un archivo php y pone la variable con la que vas a llevar el id igual captura el valor solo con la etiqueta <a> y borrando el input del boton-->
                <td>
                    <a href="eliminar_almacen.php?id_almacen=<?php echo $almacen[0];?>"><input type="button" value="Eliminar"></a>
                    <a href="editar_almacen.php?id_almacen=<?php echo $almacen[0];?>"><input type="button" value="Editar"></a>
                </td>
            </tr>
            
            <?php
        }

        ?>
    </table>
    <br>
    <input type="button" value="Atras" onclick="history.back()";>
</body>
</html>