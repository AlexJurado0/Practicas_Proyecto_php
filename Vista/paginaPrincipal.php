<?php include_once '../Modelo/seguridad.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Bienvenido</h1>
<a href="insertar.html" >Ingresar </a>
    <?php
//conexion con la base y seleccion de la basede datos
$conexion = mysqli_connect("localhost","root","","proyectophp");

//ejecutamos la sentencia sql
$result=mysqli_query($conexion, "select * from productos");
?>

<table align="center">
<tr>
<th>Id producto</th>
<th>producto</th>
<th>precio lista:   </th>
</tr>


<?php


//mostramos los registros
while ($row=mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row["id_producto"].'</td>'; 
    echo '<td>'.$row["nombre"].'</td>'; 
    echo '<td>' . $row["precio_lista"] . '$</td>';
    echo '</tr>';
}
mysqli_free_result($result)


?>

<form action="../Modelo/destruirSession.php" method="post">

<button type="submit">Ingresar</button>

</form>

</table>


    
</body>
</html>