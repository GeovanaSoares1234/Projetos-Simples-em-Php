<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<?php
    include_once "conexao.php";
    $_login = $_POST['login'];
    $_senha = $_POST['pwd'];
    
    $_sql = "INSERT INTO usuario ( login, password ) VALUES ('$_login', '$_senha' );";
    
    $_query = mysqli_query($_con,$_sql);
    
    echo "<h2 align='center'>Conexão com o banco de dados bem sucedida</h2>";
    
    echo "<br><br><hr><br><br>";
    
    $_sql = "SELECT * FROM banco.usuario;";
    
    $_query = mysqli_query($_con, $_sql);
    
    $_row = mysqli_num_rows($_query);
    
    if($_row>0){
        while($_reg = mysqli_fetch_assoc($_query)){
            echo "ID...: ".$_reg["id"];
            echo "<br>";
            
            echo "LOGIN...: ".$_reg["login"];
            echo "<br>";
            
            echo "SENHA...: ".$_reg["password"];
            echo "<br><hr><br>";
        }
    }
    
    mysqli_close($_con);
    ?>
    </head>
    <body>
        <a href="index.php">VOLTAR</a>
    </body>
</html>