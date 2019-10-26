<?php 
    //Scope en php.
    //una funcion no puede acceder  a las variables fuera de ella, a menos de que sean pasadas atraves de parametros.

    //esto da error ya que no encuentra la variable.
    /*$numero= 7;
    function mostrar(){
        echo $numero;
    }
    mostrar();*/

    //la forma correcta seria 
    $numero= 7;
    function mostrar($numero){
        echo $numero."\n";
    }
    //mostrar($numero);

    //de igual manera las varible dentro de una funcion no pueden ser accedidas desde fuera de las misma,
    //a menos que la funcion haga un return de dicha varible.

    //esto ejemplo nos da error, debido a que no se puede acceder a la variable.
    /*function mostrar2(){
        $numero2 = 25;
    }
    echo $numero2;*/

    //la manera correcta de hacerlo seria
    function mostrar2(){
        $numero2 = 25;
        return $numero2;
    }
    //echo mostrar2();
?>