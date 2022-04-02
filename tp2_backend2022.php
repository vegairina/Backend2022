<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo practico N°2</h1>
    <hr>
    <h3>Ejercicio 1</h3>
    <hr>
    <?php 
    $n=24;
    if ($n>0){
        echo"El número $n es positivo";
    }
    elseif ($n<0){
        echo "El número $n es negativo";
    }
    else{
        echo"El número $n es cero";
    }
    ?>
    <hr>
    <h3>Ejercicio 2</h3>
    <?php 
    if ($n>1 && $n<10){
        echo "El número $n es mayor a 1 y menor a 10";
    }
    else{
        echo "El número $n es mayor a 10";
    }
    ?>
    <hr>
    <h3>Ejercicio 3</h3>
    <?php 
    if ($n<2 || $n>10){
        echo "El número $n es mayor a 10 o menor a 2";
    }
    elseif ($n<2){
        echo "El número $n es menor a 2";
    }
    elseif ($n>10){
        echo "El número $n es mayor a 10";
    }
    else{
        echo "El número $n no es mayor a 10 ni menor a 2";
    }
    ?>
    <hr>
    <h3>Ejercicio 4</h3>
    <?php 
    $numero1=16;
    $numero2=19;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $div=$numero1/$numero2;
    $mult=$numero1*$numero2;
    $resto=$numero1%$numero2;

    if ($numero1>$numero2){
        echo "La suma de ambos números es $suma y la resta es $resta";

    }
    elseif($numero1<$numero2){
        echo"La multiplicacion de ambos números es $mult la division entera es $div
        y el resto de la division es $resto";
    }

    elseif($numero1==$numero2){
        echo"Los números ingresados son iguales";
    }
    ?>

</body>
</html>

