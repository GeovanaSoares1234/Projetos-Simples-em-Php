<?php
                
if( isset( $_POST['id'] ) )
{
    
    include_once("../db/conexao.php" );

    $_sql = $_pdo->prepare( "DELETE FROM usuario WHERE id = :id" );
    
    $_sql->bindValue( ":id" , $_POST['id'] );
    
    $_sql->execute();
    
    header( "location:../index.php" );
    
}

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>EXCLUSÃO</title>
    </head>
    <body>
        <font face="Arial">
            
            <form method="post" action="excluir.php" name="formexcluir" id="idformexcluir">
                
                <p>DIGITE O ID
                    <input type="text" name="id" id="idid" required>
                </p>
                
                <p>
                    <input type="submit" name="btnexcluir" id="idbtnexcluir" value="Excluir">&nbsp;
                </p>
                
                <p>
                    <input type="reset" name="btnlimpar" id="idbtlimpar" value="Limpar">&nbsp;
                </p>
                
            </form>
            
            <a href="../index.php">VOLTAR PARA O MENU</a>
            
        </font>
    </body>
</html>