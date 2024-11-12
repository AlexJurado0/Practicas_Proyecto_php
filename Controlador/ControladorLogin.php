<?php 
    


if (mysqli_num_rows($result) == 1) {
    $_SESSION["autentificado"] = "1";

    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    header("Location: ../Vista/paginaPrincipal.php");

} else {
    header("Location: ../Vista/login.html?error=1");
    exit();
}

?>