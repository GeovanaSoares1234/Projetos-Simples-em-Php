<?php
ini_set( "display_errors" , 0 ); //cancela a exibição de erros gerados pelo interpretador PHP...
error_reporting( 0 );           // cancela a emissão de relatórios erros do interpretador PHP...

if ( $_GET['acao'] == logar )
{
    $_user_ok = "admin";
    $_password_ok = "12345";
    
    $_user     = $_POST["usuario"];
    $_password = $_POST["senha"];
    
    if ( ( $_user == $_user_ok ) && ( $_password == $_password_ok ) )
    {
        setcookie( "logado" , "1" );
        
        echo '<script type="text/javascript">
        alert("Usuário autenticado ! \nRedirecionando para a Home Page...");
        location="home.php";</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Usuário e ou senha incorretos(s) ! \nDigite novamente...");
             location="index.php";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>TELA DE LOGIN</title>
    </head>
    <body>
       <br>
        <h1>INSIRA SEUS DADOS PARA LOGAR NO SISTEMA</h1>
        <br><hr><br>
        <form method="post" action="?acao=logar" name="formlogin" id="idformlogin">
        <p>USER</p>
        <p><input type="text" name="usuario" id="idusuario" required autocomplete="on" autofocus></p>
        <p>PASSWORD</p>
        <p><input type="password" name="senha" id="idsenha" required autocomplete="off"></p>
        <p><input type="submit" name="btnenviar" id="btnenviar" value="Enviar"></p>
        <p><input type="reset" name="btnLimpar" id="btnlimpar" value="Limpar"></p>    
        </form>
    </body>
</html>      