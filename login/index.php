<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>login com banco de dados</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <p id="titulo">TELA DE LOGIN DO SISTEMA</p>
        <div id="conteudo">
            <?php
                echo "INSIRA OS SEUS DADOS PARA LOGAR NO SISTEMA<br>";
            ?>
            <form method="POST" action="php/autenticar.php" name="formulario">
                <p>
                    LOGIN&nbsp;
                    <input type="text" name="login" id="idlogin" required autocomplete="on" autofocus>
                </p>
                <p>
                    SENHA&nbsp;
                    <input type="password" name="password" id="idpassword" required autocomplete="off">
                </p>
                <p>
                    <input type="submit" value="Logar" class="botao">
                    <input type="reset" value="Limpar" class="botao">
                </p>
            </form>
        </div>
    </body>
</html>