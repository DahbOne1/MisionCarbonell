<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $apellidos = $_POST['apellidos']; // requerido
    $email_de = $_POST['email']; // requerido
    $telefono = $_POST['telefono']; // requerido
    $mensaje = $_POST['detalles']; // requerido

    $destinatario = "eduardobasiliopruebas@gmail.com";  // Cambia esto a la dirección de correo a la que quieres enviar el mensaje.
    $asunto = "Mensaje de formulario de contacto de $nombre";

    $mensaje_email = "Nombre: $nombre\n";
    $mensaje_email .= "Email: $email\n";
    $mensaje_email .= "Mensaje:\n$mensaje";

    // Envía el correo
    mail($destinatario, $asunto, $mensaje_email);

    // Redirige al usuario a una página de confirmación
    header("contact.html");
}
?>
