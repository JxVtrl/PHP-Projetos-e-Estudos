<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel de referência</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>

    <div>
        <?php
            $a = 10;
            $b = $a;
            $b += 5;
            echo "<h3>Variavel sem referencia</h3>";
            echo "A variavel A vale $a";
            echo "</br>A variavel B vale $b";
            $x = 5;
            $y = &$x; // com o & estamos criando uma variavel de referencia
            $y += 95;
            echo "<h3>Variavel com referencia</h3>";
            echo "A variavel X vale $x";
            echo "</br>A variavel Y vale $y";
        ?>
    </div>
</body>
</html>