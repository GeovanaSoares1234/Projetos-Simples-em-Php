<?php
                
if( isset( $_POST['numeropedido'] ) )
{
    
    include_once("../db/conexao.php" );

    $_sql = $_pdo->prepare( "DELETE FROM tb_usuario WHERE numeropedido = :numeropedido" );
    
    $_sql->bindValue( ":numeropedido" , $_POST['numeropedido'] );
    
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
            
            <form method="post" action="exclusao.php" name="formexclusao" id="idformexclusao">
                
                <p>DIGITE O NUMERO DO PEDIDO
                    <input type="text" name="numeropedido" id="idnumeropedido" required>
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