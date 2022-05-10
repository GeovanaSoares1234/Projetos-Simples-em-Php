<?php
include_once("../db/conexao.php");
$_login = $_POST['login'];
$_password = $_POST['password'];
$_type = $_POST['type'];

$_password = md5($_password);

$_sql = "INSERT INTO usuario(login , password, type) VALUES('$_login','$_password','$_type')";

$_query = mysqli_query($_conexao,$_sql) or die(mysqli_error( ));
if($_query){
    header("location:../html/sucesso.html");
}
else{
    header("location:../html/sucesso.html");
}
?>