<?php
session_start(); // Inicia uma sessão...

ini_set( "display_errors" , 0 );
// Cancela a exibição de erros gerados pelo interpretador PHP...

error_reporting( 0 );
// Cancela a emissão de relatórios erros do interpretador PHP...

if(!empty($_POST['user']) and !empty($_POST['password'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>BASE</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <img src="img/logo-senai.jpg">
        <div id="denao"></div>
        <p id="titulo">CT Desenvolvimento de Sistemas - Back-End</p>
        <div id="conteudo">
           
            <?php  
                echo "FUNÇÕES NO PHP.<br><br>";
            
/*

Sessão é uma maneira de mantermos dados (variáveis de sessão) durante a navegação por várias páginas de um site...

Cada sessão quandoa aberta, cria um identificador único, para aquele usuário, que pode ser  reconhecido pelo PHP em várias páginas durante a navegação...

As sessões são muito utilizadas para controle de acesso dos usuários ás páginas de um site...

As sessões devem ser iniciadas antes de qualquer outro código, seja HTML ou mesmo PHP...
    
*/            
            
    $_user = $_POST['user'];
    $_password = $_POST['password'];
            
    if(($_user == 'admin') and ($_password == '12345'))
    {
        $_SESSION['logado'] = TRUE;//variavel 
        
        echo "USUÁRIO LOGADO COM SUCESSO !!<br>ACESSO PERMITIDO!!!";
        
        echo "<br><br>";
        
        echo "<a href='pagina_restrita.php'>ENTRAR NA PÁGINA RESTRITA</a>";
        
        echo "<br<br>";
        
        echo "<a href='homepage.php'>IR PARA HOMEPAGE</a>";
    }
    
    else
    {
        echo "FALHA AO LOGAR O USUÁRIO !!<br>ACESSO NÃO PERMITIDO!!!<br><br>";
        
        echo "<a href='index.php'>LOGIN DO SISTEMA</a>";
    }

    ?>
           
<?php
            
else:
            
?>
            
  <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>BASE</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <img src="img/logo-senai.jpg">
        <div id="denao"></div>
        <p id="titulo">CT Desenvolvimento de Sistemas - Back-End</p>
        <div id="conteudo">
        <p>SESSÕES NO PHP.</p>
        <br>      
        
        <form method="post" action="index.php" name="formulario">
            
        <p>USUÁRIO : <input type="text" name="user">        </p>
        <p>SENHA   : <input type="password" name="password"></p>
        
        <p>
            <input type="submit" value="Enviar" class="botao">
            <input type="reset"  value="Limpar" class="botao">
        </p>
                
        </form> 
        
    <?php
            
    endif;
            
    ?>
    
        </div>
    </body>
</html>                    