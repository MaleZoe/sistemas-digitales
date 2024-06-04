<!DOCTYPE html>
<head>
    <title>Datos del Suscriptor</title>
</head>
<body>
    <h2>Datos del Suscriptor</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $dni = $_POST['dni'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $genero = $_POST['genero'];
        $lugar_nacimiento = $_POST['lugar_nacimiento'];
        $direccion = $_POST['direccion'];
        $intereses = $_POST['intereses'];
        $comentarios = $_POST['comentarios'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>DNI: $dni</p>";
        echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
        echo "<p>Género: $genero</p>";
        echo "<p>Lugar de Nacimiento: $lugar_nacimiento</p>";
        echo "<p>Dirección: $direccion</p>";
        echo "<p>Intereses y/o Hobbies: $intereses</p>";
        echo "<p>Comentarios: $comentarios</p>";
    } 
    ?>
</body>
</html>
