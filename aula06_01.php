<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
    <h1>Aula06_01 - 16/09/2025</h1>
    <h2>Operador Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição: ".($a+$b);
    echo "<br>Subtração: ".($a-$b);
    echo "<br>Multiplicação: ".($a*$b);
    echo "<br>Divisão: ".($a/$b);
    echo "<br>Módulo: ".($a**$b);
    echo "<br>Exponenciação: ".($a%$b);
    ?>
    <h2>Operador de atribuição</h2>
    <?php
    $a=10;
    $b=2;
    $a+=$b;
    $b-=5;
    echo "a = ".$a;
    echo "<br>b = ".$b;
    $c=11;
    $d=6;
    $c%=$d;
    $d+=$a;
    echo "<br>c = ".$c;
    echo "<br>d = ".$d;
    ?>
    <h2>Operador de String</h2>
    <?php
    $a = "Maria ";
    echo "$a<br>";
    $b = "Leopoldina ";
    echo "$b<br>";
    echo $a . $b;
    $b .= $a;
    echo "<br>$b";
    ?>
    <?php
    $a = "Bete ";
    echo "<br>$a <br>";
    $b = "Beto ";
    echo "$b <br>";
    echo $a . $b;
    $b .= $a;
    echo "<br>$b";
    ?>
    <h2>Incremento e Decremento</h2>
    <?php
    $x = 100;
    echo "x = ".$x++;
    echo "<br>x final = ".$x;
    $i = 10;
    echo "<br>i = $i";
    // $i++; 
    // $i++;
    // ++$i;
    // ++$i;
    $i+=4;
    echo "<br>i = $i"; //14
    $i--;
    $i--;
    --$i;
    echo "<br>i = $i"; //11
    ?>
    <h2>Comparação/Relacional</h2>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>";
    echo "Idêntico = ".($a===$b)."<br>";
    echo "Não igual = ".($a!=$b)."<br>";
    echo "Não Idêntico = ".($a!==$b)."<br>";
    echo "<hr>";
    $a=10;
    $b=10;
    $c=11;
    echo "Menor = ".($a<$b)."<br>";
    echo "Menor ou igual = ".($a<=$b)."<br>";
    echo "Maior = ".($c>$b)."<br>";
    echo "Maior ou igual = ".($c>=$b)."<br>";
    ?>
</body>
</html>