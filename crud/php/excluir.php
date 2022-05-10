<?php
include_once("../db/conexao.php");
$_iduser = $_POST['iduser'];

$_sql = "DELETE FROM usuario WHERE id = '$_iduser'";

$_query = mysqli_query ( $_conexao,$_sql ) or die ( mysqli_error( ) );

if ( $_query ){
    header( "location:../html/sucesso.html" );
}
else{
    header( "location:../html/sucesso.html" );
}
?>