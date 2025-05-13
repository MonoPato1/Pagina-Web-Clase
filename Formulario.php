<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $localidad = $_POST['localidad'];
    $problema = $_POST['problema'];

    $datos = "Nombre: $nombre, Email: $email, Teléfono: $telefono, Localidad: $localidad, Problema: $problema\n";
    file_put_contents('datos_usuarios.txt', $datos, FILE_APPEND);

    header('Location: Exito.html', true, 302);
    exit;
}

header('Location: hola.html');
exit;
?>