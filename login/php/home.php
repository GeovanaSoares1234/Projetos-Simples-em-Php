<?php
    session_start();
    if(!isset( $_SESSION['login']) && !isset( $_SESSION["password"])){
        header("location: ../html/falhou.html");
        exit;//encerrar todas as funções da pagna
    }
?>
<!DOCTYPE HTML>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>HOMEPAGE</title>
            <link type="text/css" rel="stylesheet" href="../css/estilo.css">
        </head>
        <body>
            <p id="titulo">HOME PAGE</p>
            <div id="conteudo">
                <?php
                    echo "<center>BEM VINDO AO SISTEMA DE CONTROLE !!!<br></center>";
                ?>
                <br><br><br>
                <p align="center">
                    <a href="logout.php">CLIQUE AQUI PARA FAZER O LOGOUT DO USUARIO</a>
                </p>
            </div>
        </body>
    </html>