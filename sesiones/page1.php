<?php
    session_start();
    $_SESSION["nombre"]="Vidal";
    echo "page #1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>
<body>
    <a href="http://localhost/json/php/curso%20php/sesiones/page2.php">Ir a pagina 2</a>
</body>
</html>