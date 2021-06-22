<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Unário</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
        echo "<h3>Operador Unário</h3><h5>(expressão)?verdadeiro:falso</h5>";
        $x = 5;
        $y = 6;
        $r = $x>$y ? $x+$y : $x*$y;
        echo "</br>x = $x</br>y = $y";
        echo "</br>$x>$y ? $x+$y : $x*$y";       
        echo "</br>Resposta: $r ";
        echo "<h3>Exemplo Prático</h3>";
        echo "";

        ?>
</div>    
</body>
</html>