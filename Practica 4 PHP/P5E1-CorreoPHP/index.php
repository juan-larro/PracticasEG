<?php

$destinatario = "destino@correo.com";
$asunto = "Prueba";

$cuerpo = "
<html>
<body>
<h1>Hola Mundo</h1>
<p>Correo enviado desde PHP</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);

echo "Intento de envío realizado";

?>