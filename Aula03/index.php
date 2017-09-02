<!DOCTYPE html>

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        define("MEDIA", 7);
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $media = ($nota1 + @nota2) / 2;
        
        $resultado = ($media >= MEDIA ? "Aprovado" : "Reprovado");
        echo $resultado;

        // put your code here
        ?>
    </body>
</html>
