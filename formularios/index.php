<?php
    //funcion agregar años
    function setYears(){
        $year=2019;
        $years=[];
        $limit = $year - 100; 
        for($i=$year; $i >= $limit; $i--){
            array_push($years, $i); 
        }
        return $years;    
    }
    $yearsL = setYears();

    if($_GET){
        echo $_GET["name"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="name"/><br/>
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname" placeholder="surname"/><br/>
        <label for="man">Man</label>
        <input type="radio" name="sex" id="man" value="male"/><br/>
        <label for="woman">Woman</label>
        <input type="radio" name="sex" id="woman"value="female"/><br/>

        <select name="birthday" id="birthday" value="">
        <?php
            foreach($yearsL as $year){
                echo "<option value=\"$year\">$year</option>";
            }
        ?>
        </select>
        <input type="submit" name="submit" value="Send"/>
    </form>
</body>
</html>