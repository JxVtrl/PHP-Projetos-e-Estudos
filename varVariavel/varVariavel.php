<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel de Variavel</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $eu = "Joao";
            $$eu = "meu nome";
            echo "$eu é $Joao<br/>";
            $curso = "cursoemvideo";
            $$curso = "CursoPHP";
            echo "$cursoemvideo $curso";
            $x = "abc";
            $$x = "def";
            echo "<br/>$x$abc";
        ?>
    </div>
</body>
</html>