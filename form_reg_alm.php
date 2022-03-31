<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/reg_almacen.js"></script>
</head>
<body>
<h3>Registro Nuevo Almacen</h3>
<!--soporta archivos el formulario gracias al nuevo atributo enctype-->
<form action="reg_almacen.php" method="post" enctype="multipart/form-data" onsubmit="return validar()">
    <!--funcion de html para validacion es: required se pone en el input sin parentesis ni comillas ni nada-->
    <br><label for="">Descripcion Almacen</label>
    <br><input type="text" name="des_almacen" id="des_almacen">
    <br><label for="">Superficie</label>
    <br><input type="number" name="superficie" id="superficie">
    <br><label for="">Encargado</label>
    <br><input type="text" name="encargado" id="encargado">
    <br><label for="">Ubicacion</label>
    <br><input type="text" name="ubicacion" id="ubicacion">
    <br><label for="">Imagen</label>
    <br><input type="file" name="imagen" id="imagen">
    <br><input type="submit" value="Registrar">
    <br><input type="button" value="Atras" onclick="history.back()">
</form>
    
</body>
</html>