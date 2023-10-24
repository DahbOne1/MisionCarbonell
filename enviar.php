<?php
if(isset($_POST['email'])) {

    // Email al que se enviará el formulario
    $email_to = "markesiano@live.com.mx";
    $email_subject = "Mensaje del formulario de contacto";

    // validación de datos esperados
    if(!isset($_POST['nombre']) ||
    !isset($_POST['apellidos']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['detalles'])) {
        died('Lo sentimos, pero parece haber un problema con los datos enviados.');
    }


    $nombre = $_POST['nombre']; // requerido
    $apellidos = $_POST['apellidos']; // requerido
    $email_de = $_POST['email']; // requerido
    $telefono = $_POST['telefono']; // requerido
    $mensaje = $_POST['detalles']; // requerido

    //$email_message = "Detalles del formulario de contacto:\n\n";
    $email_message = "Nombre: ".$nombre."\n";
    $email_message .= "Apellidos: ".$apellidos."\n";
    $email_message .= "Telefono: ".$telefono."\n";
    $email_message .= "Email: ".$email_de."\n";
    $email_message .= "Mensaje: ".$mensaje."\n";


// Ahora se envía el correo
    $headers = 'De: '.$email_de."\r\n".
    'Respuesta a: '.$email_de."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
     
}
?>



    
