<?php
    include_once("../db/conexao.php");//mostra que o banco esta aberto e pode ser utilizado nesse arquivo
    $_login = $_POST['login'];
    $_password = $_POST['password'];

    $_sql = "SELECT * FROM usuario WHERE login = '$_login' and password ='$_password'";//statement, comando SQL

    $_query = mysqli_query($_conexao, $_sql ) or die (mysqli_error());//função que vai no banco , faz a pesquisa e utiliza o comando

    $_rows = mysqli_num_rows($_query);//é o que vai na query e confere quantas linhas o banco retornou

    mysqli_close ($_conexao);//fecha a conexão do banco

    if($_rows >0){
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>autenticar usuario</title>
        <link type="text/css" rel="stylesheet" href="../css/estilo.css">
        <script type="text/javascript" src="../js/funcoes.js"></script>
    </head>
    <body>
        <p id="titulo"> TELA DE AUTENTICAÇÃO DO USUARIO</p>
        <div id="conteudo">
            <?php
                echo "<p align='center'>Usuario logado com sucesso !! <br>Redirecionando o sistema....</p>";
                echo "<script>loginSucesso()</script>";
            ?>
        </div>
    </body>
</html>
<?php
    }else
    {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>autenticar usuario</title>
        <link type="text/css" rel="stylesheet" href="../css/estilo.css">
        <script type="text/javascript" src="../js/funcoes.js"></script>
    </head>
    <body>
        <p id="titulo"> TELA DE AUTENTICAÇÃO DO USUARIO</p>
        <div id="conteudo">
            <?php
                echo "<p align='center'>Usuario inválido !! ACESSO NÃO PERMITIDO!!! <br>Redirecionando o sistema....</p>";
                echo "<script>loginFalhou()</script>";
            ?>
        </div>
    </body>
</html>
<?php
    }
    ?>