<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>
    <body>
        <h1>Testando o html</h1>
        <?php
        $nome = 'André';
        $sobreNome = 'Guimarães';
         echo "Testando o PHP" . "<br>";
         echo 'Hello world !';
         echo "<BR>";
         echo 'Nome: ' . $nome . ' ' . $sobreNome;
         echo "<BR>";
         echo "Nome: {$nome} {$sobreNome} <BR>";
        ?>
    </body>
</html>
