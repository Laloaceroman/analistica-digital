<?php  

// Llamando a los campos
$name = $_POST['name'];
$correo = $_POST['email'];
$company = $_POST['company'];
$telefono = $_POST['phone'];
$service = $_POST['service'];
$mensaje = $_POST['message'];


// Datos para el correo
$destinatario  = 'eduacevedoroman@gmail.com';
$title = "Contacto desde nuestra web";
$carta = "Mensaje enviado desde la web Analística Digital\n";
$carta .= "Nombre y Apellido: $name \n";
$carta .= "Empresa: $company \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Servicio interesado: $service \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje
mail($destinatario, $title, $carta);
header('Location:send.html');

?>