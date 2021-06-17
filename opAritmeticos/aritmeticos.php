<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
    $num1 = $_GET["a"];
    $num2 = $_GET["b"];
    $media = ($num1+$num2)/2;
    echo "<h2>Valores recebidos: $num1 e $num2</h2>";
    echo "A soma vale ".($num1+$num2);
    echo "</br>A subtração vale ".($num1-$num2);
    echo "</br>A multiplicação vale ".($num1*$num2);
    echo "</br>A divisão vale ".($num1/$num2);
    echo "</br>O modulo vale ".($num1%$num2);
    echo "</br>A média vale $media";
    echo "</br><h2>Algumas funções Aritméticas</h2>";
    echo "O valor absoluto de $num1 é ".abs($num1);
    echo " e de $num2 é ".abs($num2);
    echo "</br>O valor de $num1<sup>$num2</sup> é ". pow($num1,$num2);
    echo "</br>A raiz de $num1 é ".sqrt($num1);
    echo " e de $num2 é ".sqrt($num2);
    echo "</br>O valor arredondado de $num1 é ".round($num1);
    echo " e de $num2 é ".round($num2);
    echo "</br>A parte inteira de $num1 é ".intval($num1);
    echo " e de $num2 é ".intval($num2);
    echo "</br>O valor $num1 em moeda é R$ ". number_format($num1, 2, ",", ".");
    echo " e de $num2 é R$ ". number_format($num2, 2, ",", ".");
    ?>
</div>
</body>
</html>