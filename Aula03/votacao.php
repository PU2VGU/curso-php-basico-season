<?php

$nome = $_GET['nome'];
$idade = (int) $_GET['idade'];
//$resultado = (($idade >= 18) && ($idade <= 65)) ? 
//        "É obrigado a votar" : "Não é obrigado a votar";
if (($idade >= 18) && ($idade <= 65))
{
   $resultado="É obrigado a votar";  
}
else
{
   $resultado="Não é obrigado a votar";  
}   
echo $resultado;
