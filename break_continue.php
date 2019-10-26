<?php
     $cuidades = ["Santo Domingo","El Seibo", "Romana","San Pedro","Higuey"];

     foreach($cuidades as $cuidad){
         if($cuidad==="Romana"){
             continue;
         }
         echo $cuidad."\n";
     }
?>