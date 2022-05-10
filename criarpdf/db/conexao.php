<?php
try{
    $_db = "banco";
    $_user = "root";
    $_host = ":host=";
    $_password = "";
    $_database="dbname=";
    $_host_name = "localhost";
    $_gerenciador = "mysql";
    
    $_string_connection = $_gerenciador.$_host.$_host_name.";".$_database.$_db;
    
    $_pdo = new PDO($_string_connection,$_user,$_password);//método construtor que retorna objeto(ele é a conexão)
}
catch(PDOExeption $_e){
    echo $_e->getMessage();
    echo $_e->getCode();//ligação entre metódo e objeto
    //acessa o metódo(->)
}
?>