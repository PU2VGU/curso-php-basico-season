<?php
   if (verificaAcesso($_POST['usuario'], $_POST['senha']))
   {
    echo "<script>window.location = 'menu-principal.php'</script>";
   }
   else
   {
    echo "<script>window.location = 'acesso-negado.php'</script>";
   }


    function verificaAcesso($usuario, $senha)
    {
       return ($_POST['usuario'] == 'master') && ($_POST['senha']); 
    }        
