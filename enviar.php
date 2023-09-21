<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];

    // Destinatario del correo
    $destinatario = "santinogiatti05@gmail.com";

    // Asunto del correo
    $asunto = "Consulta de $nombre $apellido";

    // Contenido del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellido: $apellido\n";
    $mensaje .= "Correo Electrónico: $email\n";
    $mensaje .= "Consulta:\n$consulta";

    // Cabeceras del correo
    $cabeceras = "From: $email";

    // Envía el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "El correo se ha enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>