<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>BASE</title>
    </head>
    
    <body bgcolor="<?php echo $_COOKIE['color']; ?>">
      
       <?php
        
        echo "COOKIES NO PHP.<br><br><br>";
        
        echo "Seja muito bem-vindo caro(s) Sr(a)." . $_COOKIE['user'] . "<br><br>";
        
        echo "A sua senha " . $_COOKIE['password'] . " encontra-se válida no sistema !!" . "<br><br>";
        
        /*
        
        Para excluir um cookie, basta declará-lo novamente com o mesmo nome, mas com um valor nulo ( string vazia )...
        
        */
        
            setcookie ( 'user'     , "" );
            setcookie ( 'password' , "" );
        
        /*
        
        Pressiona a tecla F5 para atualizar a página e verificar que os cookies foram excluidos...
        
        */
        
        ?>
        
    </body>
</html>