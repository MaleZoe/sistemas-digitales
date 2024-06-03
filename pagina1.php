<!DOCTYPE html>
<html>
<head>
    <title>Captura de datos del form</title>
</head>
<body>
    <?php
    echo "El nombre ingresado es: " . $_REQUEST['nombre'] . "<br>";
    echo "La edad ingresada es: " . $_REQUEST['edad'] . "<br>";

    if ($_REQUEST['edad'] < 18) {
        echo $_REQUEST['nombre'] . " es menor de edad.";
    } else {
        echo $_REQUEST['nombre'] . " es mayor de edad.";
    }
    ?>
</body>
</html>
