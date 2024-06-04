<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $monto = isset($_POST['monto']) ? $_POST['monto'] : '';

    if ($monto === 'mas-de-10000') {
        echo "<p>Debe pagar un recargo debido al monto adeudado.</p>";
    } else {
        echo "<p>No se requiere recargo.</p>";
    }
}
?>
</body>
</html>
