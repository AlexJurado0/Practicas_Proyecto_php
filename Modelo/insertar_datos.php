<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        include 'Conexion.php';

        $id = $_POST["id_producto"];
        $nombre = $_POST["nombre"];
        $precio_lista = $_POST["precio_lista"];

        mysqli_query($conexion, "INSERT INTO productos (id_producto, nombre, precio_lista) VALUES ('$id', '$nombre', '$precio_lista')");

        header("Location: ../vista/paginaPrincipal.php");
    }

    
?>