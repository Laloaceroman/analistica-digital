<?php  

// Llamando a los campos
$correo = $_POST['email'];



// Datos para el correo
$destinatario  = 'eduacevedoroman@gmail.com';
$title = "Contacto desde nuestra web";
$carta = "Correo para newsletter enviado desde la web Analística Digital\n";
$carta .= "Correo: $correo \n";



// Enviando Mensaje
mail($destinatario, $title, $carta);
header('Location:newsletter.html');

?>