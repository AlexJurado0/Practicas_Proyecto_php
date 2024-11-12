<?php include_once '../Modelo/seguridad.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Modelo/insertar_datos.php" method="post" align="center">
        <label for="nombre">Producto</label>
        <input type="text" name="nombre" id="nombre"><br><br>
    
        <label for="precio_lista">precio_lista:</label>
        <input type="number" name="precio_lista" id="precio_lista"> <br><br>

        <input type="submit" value="insertar">

    </form>
</body>
</html>