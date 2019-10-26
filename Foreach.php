<?php
    /*$cars = ["Honda","Toyota","KIA"];
    foreach($cars as $car){
        echo $car."\n";
    }*/

    $persona = ["Nombre"=>"Vidal","Apellido"=>"De Los Santos","Edad"=>23];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($persona as $dato => $valor){
                echo "<li>$dato : $valor</li>";
            }
        ?>
    </ul>
</body>
</html>