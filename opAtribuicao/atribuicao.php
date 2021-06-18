<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php 
    $vinho = $_GET["vinho"];
    echo "<h4>Alcoólicos:</h4>";
    echo "Vinho: R$ ".number_format($vinho, 2, ",", ".");
    echo "<p id='taxa'></br>Taxa de produtos alcoólicos: 12%</p>";
    $vinho += ($vinho*0.12);
    $cadastro = $_GET["cadastro"];
    $total = 0;
    $total += $vinho;
    
    echo "<h3>Total dos produtos:</h3>";
    echo "<p id='total'>R$ ".number_format($total, 2, ",", ".");
    $total -= $total*$cadastro;
    echo "</br>Desconto Cliente Mais 7%";
    echo "</br>Novo total : R$ ".number_format($total, 2, ",", ".");
    echo "</p>";
    
    ?>

</div>    
</body>
</html>