<?php 
    session_start();
    if($_SESSION){
        $closed_session = session_destroy();
        if($closed_session){
            header("Location:http://localhost/json/php/curso%20php/sesiones/page1.php");
        } 
    }
?>