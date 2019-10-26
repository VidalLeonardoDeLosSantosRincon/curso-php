 <?php
    $dias_semana = [
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado",
        "Domingo"];

    echo "\nDias de la semana orden por default:\n";
    foreach($dias_semana as $dia){
        echo "$dia\n";
    } 

    //ordenar ascendente
    sort($dias_semana);
    echo "\nDias de la semana orden ascendente:\n";
    foreach($dias_semana as $dia){
        echo "$dia\n";
    }
    //ordenar desendente
    rsort($dias_semana); 
    echo "\nDias de la semana orden descendente:\n";
    foreach($dias_semana as $dia){
        echo "$dia\n";
    }
 
 ?>