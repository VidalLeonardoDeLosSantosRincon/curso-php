<?php

    /*if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST){
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $sex =$_POST["sex"];
            $birthday = $_POST["birthday"];
            $info ["users"][]= ["name"=>$name,"surname"=>$surname,"sex"=>$sex,"birthday"=>$birthday];
            echo json_encode($info);
        }
    }*/
    
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if($_GET){
            $name = $_GET["name"];
            $surname = $_GET["surname"];
            $sex =$_GET["sex"];
            $birthday = $_GET["birthday"];
            $info ["users"][]= ["name"=>$name,"surname"=>$surname,"sex"=>$sex,"birthday"=>$birthday];
            echo json_encode($info);
        }
    }else{
        header("Location: http://localhost/json/php/curso%20php/formularios/index.php");
    }
?>