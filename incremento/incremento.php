<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento de Anos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
    /* Neste exercício estou aprendendo o uso de operadores de incremento e decremento no PHP   */
        $ano = $_GET['anoAtual']; // Esta linha vai pegar o ano na URL
        $temp = $ano;
        echo "O ano atual é $ano, o ano anterior é " . --$ano;
        echo " e o próximo ano é ".++$temp
    ?>
</div>
</body>
</html>