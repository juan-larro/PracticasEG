<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Contacto</title>
</head>
<body>
    <form action="contacto.php" method="post">
        <label for="nombre">Ingrese su nombre</label><br>
        <input type="text" name="nombre" requiered><br>
        <label for="email">Ingrese su correo electronico</label><br>
        <input type="email" name="email" required><br>
        <label for="consulta">Ingrese su consulta</label><br>
        <textarea name="consulta" id=""></textarea><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];

        echo "<h3>Datos recibidos</h3>";
        echo "Nombre: $nombre <br>";
        echo "Email: $email <br>";
        echo "Consulta: $consulta <br>";
    }
    ?>

</body>