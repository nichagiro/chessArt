<?php

$phone = $_POST['phone'];
$name = $_POST['name'];
$msg = $_POST['msg'];

$to = $_POST['email'];
$subject = "Correo desde pagina web";
$message = "Nombre: $name"."\nTelefono: $phone"."\nMensaje: $msg";

$headers = "From: nicolaschamorro@cisde.co";

mail($to, $subject, $message, $headers);

header('Location:enviado.html');


?>