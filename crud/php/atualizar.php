<?php
include_once("../db/conexao.php");

$_id = $_POST['id'];
$_login = $_POST['login'];
$_password = $_POST['password'];

$_password = md5($_password);

$_sql = "UPDATE usuario SET login = '$_login', password = '$_password', type = '$_type' WHERE id = '$_id'";

$_query = mysqli_query ( $_conexao,$_sql ) or die ( mysqli_error( ));

if( $_query ){
    header( "location:../html/sucesso.html" );
}
else{
    header( "location:../html/sucesso.html" );
}

?>