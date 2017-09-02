<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            GuimaTron - versão 1.00
        </title>
    </head>
    <body>
        <div> 
        <form method="POST" action="validarLogin.php"
            <hr>
            <h3> <center> GuimaTron - Acesso ao Sistema <center> </h3> 
            <hr>  
            <br>
            
            <br>
            <center> Primeiro nome: <input type="text" 
                                           name="usuario" 
                                           maxlength="20" 
                                           placeholder="Digite o login"
                                           required autofocus>
            <center> 
            <br>
            <center> Último nome..: <input type="password" 
                                           name="senha" 
                                           maxlength="20" 
                                           placeholder="Digita a senha"
                                           required> 
            <center> <br>
            <br>        
            <center> <input type="submit" value="Acessar o sistema"> 
            <br>
            <br>
            <center><a href="esqueciSenha.php">Esqueci a minha senha</a></center>
                
        </form>
        </div>    
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
