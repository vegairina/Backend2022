<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $Saludo= "Hola Potrero";
    echo $Saludo;
    echo "<hr>";
    echo "<h1> Ejercicio 1 </h1>";
    $hola= "Hola Mundo";
    echo $hola;

    echo "<hr>";
    echo "<h1> Ejercicio 2 </h1>";
    echo $hola;


    echo "<hr>";
    echo "<h1> Ejercicio 3</h1>";
    
    echo "Las variables son: 15 y 5 \n";

    $num1=15;
    $num2=5;
    $sum=$num1+$num2;
    $rest=$num1-$num2;
    $div=$num1/$num2;
    $mul=$num1*$num2;
    $resto=$num1%$num2;
    echo "<h3>Suma</h3>";
    echo "La suma de ambas variables es: $sum";
    echo "<h3> Resta</h3>";
    echo "La Resta de ambas variables es: $rest";
    echo "<h3>Multiplicacion</h3>";
    echo "La Multiplicacion de ambas variables es: $mul";
    echo "<h3>Division</h3>";
    echo "La Division de ambas variables es: $div";
    echo "<h3> Resto</h3>";
    echo "El Resto de la division de ambas variables es: $resto";

    echo "<hr>";
    echo "<h1> Ejercicio 4 </h1>";
    $cel=20;
    $cel2= 1.8;
    $trans= ($cel*$cel2)+32;
    echo "La transformacion de 20°C a Fahrenheit es: $trans F";
    /*5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.*/

    echo "<hr>";
    echo "<h1> Ejercicio 5 </h1>";
    $base=18;
    $altura=12;
    $area= ($base*$altura);
    $perimetro=2*($altura+$base);
    echo "<h3> Rectangulo </h3>"; 
    echo"El area del rectangulo es: $area cm2";
    echo "<br>El perimetro del rectangulo es: $perimetro cm";

    $radio=30;
    $area2=3.14*$radio*$radio ;
    $perimetro2=3.14*$radio*2;

    echo "<h3> Circulo </h3>"; 
    echo"<br>El area del circulo es: $area2 cm2";
    echo "<br>El perimetro del circulo es: $perimetro2 cm";

    ?>
</body>
</html>