<?php
    session_start(); // Inicia uma sessão...
?>
<?php
    if( isset($_SESSION['logado']) ): //Função isset() funcionando junto com Super Variáveis Globais...
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
                echo "SESSÕES NO PHP.<br><br>";
                echo "USUÁRIO LOGADO !!<br>";
                echo "ACESSO PERMITIDO";
            ?>
            <?php
                echo "<br><a href='javascript:window.history.go(-1);'>VOLTAR PARA A PÁGINA ANTERIOR...</a>";
            ?>
            <br>
            <br>
            <a href=logout.php>LOGOUT DO SISTEMA</a>
        </div>
    </body>
</html>
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
        <p id="titulo">P&Aacute;GINA DE ACESSO RESTRITO</p>
        <div id="conteudo">
        <p>O USU&Aacute;RIO N&Atilde;O EST&Aacute; LOGADO !!</p>
        <p> ACESSO N&Atilde;O PERMITIDO !!</p>
        <p> P&Aacute;GINAS DE ACESSO RESTRITO</p>
        <br>
        <a href="index.php">LOGIN NO SISTEMA</a>
        </div>
    </body>
</html>
<?php
    endif;
?>