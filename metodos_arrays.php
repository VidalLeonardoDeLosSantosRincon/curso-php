<?php 
   $tecnologias = ["frontend"=>"JS","backend"=>"PHP","otros"=>"C#"];
    //vuelve las claves de un array asociativo varibles
    //extract($tecnologias);
    
    //count($tecnologias)."\n";
    //join("|",$tecnologias);
    //sort($tecnologias);
    //rsort($tecnologias);
    //array_shift($tecnologias);
    //array_pop($tecnologias);
    //array_unshift($tecnologias,"Primero");
    //array_push($tecnologias,"Ultimo");
    //array_reverse($tecnologias);
    foreach($tecnologias as $tecnologia => $valor){
        echo $valor."\n";
    }

?>