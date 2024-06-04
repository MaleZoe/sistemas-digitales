<html>
<head>
    <title>Formulario del punto 3</title>
</head>
<body>
<h1>Resultado del formulario</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $deportesSeleccionados = $_POST["deportes"] ?? [];

    $cantidadDeportes = count($deportesSeleccionados);

    echo "$nombre practica $cantidadDeportes deporte(s).";
}
?>

</body>
</html>
