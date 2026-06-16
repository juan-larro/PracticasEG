<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carta recomendacion</title>
</head>
<body>
    <form action="recomendacion.php" method="post">
        <label for="nombre">Ingrese su nombre</label><br>
        <input type="text" name="nombre" requiered><br>
        <label for="email">Ingrese el correo electronico destinatario</label><br>
        <input type="email" name="email" required><br>
        <label for="asunto">Ingrese el asunto</label><br>
        <input type="asunto" name="asunto" required><br>
        <label for="cuerpo">Ingrese el cuerpo del correo</label><br>
        <textarea name="cuerpo" id=""></textarea><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];
        $cuerpo = $_POST["cuerpo"];

        echo "<h3>Datos recibidos</h3>";
        echo "Nombre: $nombre <br>";
        echo "Email: $email <br>";
        echo "Asunto: $asunto <br>";
        echo "Cuerpo: $cuerpo <br>";
    }
        function mail($email,$asunto, $cuerpo){
        }
    ?>

</body>