<?php
if(isset($_GET['acao'])){
    include_once("../db/conexao.php");
    
    $_login = $_POST['login'];
    $_password = $_POST['password'];
    $_type = $_POST['type'];
    
    $_password = sha1($_password);

/*
objeto->método();
Este simbolo (->) significa que o objeto esta invocando a execução de um método da classe da qual ele (o objeto) pertence

*/
$_sql = $_pdo->prepare("INSERT INTO usuario (login,password,type) VALUES (:login,:password,:type)");

$_sql->bindValue(":login",$_login);
$_sql->bindValue(":password",$_password);
$_sql->bindValue(":type",$_type);
$_sql->execute();

header("location:../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserir usuário</title>
</head>
<body>
    <font face="Arial";>
        <form method="post" action="inserir.php?acao=ok" name="forminserir" id="idforminserir">
            <p>Login
            <input type="text" name="login" id="idlogin" required>
            </p>
            
            <p>Password
            <input type="password" name="password" id="idpassword" required>
            </p>
            <br>
            
            <p>
            <input type="radio" name="type" id="idtypeadm" value="a">Administrador
            </p>
            
             <p>
            <input type="radio" name="type" id="idtypevis" value="v">Visitante
            </p>
            
             <p>
            <input type="submit" name="btninserir" id="idbtninserir" value="Inserir">
            </p>
            
            <p>
            <input type="reset" name="btnlimpar" id="idbtnlimpar" value="limpar">
            </p>
        </form>
        <br><br><br>
         <a href="../index.php">Voltar para o menu</a>
    </font>
</body>
</html>