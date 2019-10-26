<?php
    session_start();
    if($_SESSION){
        $nombre = $_SESSION["nombre"];
    }else{
        header("Location:http://localhost/json/php/curso%20php/sesiones/page1.php");
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
    <h4><?php echo $nombre;?></h4>
    <a href="http://localhost/json/php/curso%20php/sesiones/cerrarSesion.php">Cerrar sesion</a>
</body>
</html>