<?php
    $_host = "localhost";
    $_user = "root";
    $_password = "";
    $_database = "banco2";

    $_conexao = mysqli_connect($_host,$_user,$_password) or die (mysqlu_error());

    mysqli_select_db( $_conexao, $_database) or die (mysqli_error());
    /*
        $_conexao = mysqli_connect ("localhost","root","") or die (mysqli_error());
    */

    /* nos primordios do PHP a "familia" de funções de conexão com o banco de dados MySQL era a mysql_???*/

    /*PODE SER GENERICO*/
?>