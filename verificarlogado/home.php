<?php
    include_once( "verificar_logado.php" );
    if ( $_GET["acao"] == logout )
    {
        setcookie( "logado" ,  "" );
        echo '<script type="text/javascript">
             alert("Logout completo ! \nRedirecionando para a página inicial do sistema...");
             location="index.php";</script>';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>HOME PAGE</title>
    </head>
    <body>
        <br>
        <font face="Arial, sans-serif">
            <center>
                <h1>HOME PAGE - SISTEMA DE CONTROLE</h1>
            </center>
        </font>
        <br><hr><br>
        <a href="?acao=logout">LOGOUT</a>
    </body>
</html>