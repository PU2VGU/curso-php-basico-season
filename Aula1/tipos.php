<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // tipos elementares
        $tipoVariavel = 11;
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = 1.1;
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = "teste";
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = true;
        var_dump($tipoVariavel);
        echo "<br>";
        
        print_r($tipoVariavel);
        echo "<br>";
        
        // tipos compostos
        $tipoVariavel = array(1,2,3);
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = [4,5,6];
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = new DateTime();
        var_dump($tipoVariavel);
        echo "<br>";
        
        // tipos especiais
        $tipoVariavel = fopen('index.php', 'r');
        var_dump($tipoVariavel);
        echo "<br>";
        
        $tipoVariavel = null;
        var_dump($tipoVariavel);
        echo "<br>";
        echo "<br>";
        
        $inteiro = 12;
        echo "A variável $inteiro é do tipo " . gettype($inteiro); 
 
        
        
        
        
        
        
        
       
        ?>
    </body>
</html>
