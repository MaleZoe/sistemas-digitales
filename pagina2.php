<html>
<head>
<title>Formulario del punto 1</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre =($_POST['nombre']);
        $nivel_estudio = ($_POST['nivel_estudio']);
    }
    echo " <h1>Resultados del Formulario</h1> ";
    echo "Nombre: " . $nombre . "<br>";
    echo "Nivel de Estudio: " . $nivel_estudio;
?>
</body>
