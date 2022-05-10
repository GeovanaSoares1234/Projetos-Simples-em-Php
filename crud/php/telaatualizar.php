<?php

@$_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>ATUALIZAR</title>
    </head>
    <body>
        <font face="Arial">
                
                <?php
                
                if( isset( $_POST['id'] ) )
                {
                    include_once("../db/conexao.php" );
                    
                    $_id = $_POST['id'];
                    
                    $_sql = "SELECT * FROM usuario WHERE id = '$_id'";
                    
                    $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error() );
                    
                    $_line = mysqli_fetch_array( $_query );
                    
                ?>
                
                <form method="post" action="atualizar.php" name="formatualizar" id="idformatualizar">
                   
                   <p>ID
                       <input type="hidden" name="id" id="idid" value="<?php echo $_line['id'] ?>">
                   </p>
                   
                    <p>LOGIN
                       <input type="text" name="login" id="idlogin" value="<?php echo $_line['id'] ?>">
                    </p>
                    
                    <p>TYPE
                       <input type="text" name="type" id="idtype" value="<?php echo $_line['type'] ?>">
                    </p>
                    
                    <p>
                       <input type="submit" name="btnatualizar" id="idbtnatualizar" value="Atualizar">
                    </p>
                    
                    <p>
                       <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
                    </p>
                    
                </form>
                
                <?php
                    
                }
            
                else
                {
                    
                ?>
                
                <form method="post" "telaatualizar" name="formatualizar" id="idformatualizar">
                
                <p>ID
                   <input type="text" name="id" id="idid" value="<?php echo $_id ?>"> 
                </p>
                
                <p>
                    <input type="submit" name="btnconsultar" id="idbtnconsultar" value="Consultar">
                </p>
                
                <p>
                    <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
                </p>
                
                </form>
                
                <?php
                    
                }
            
                ?>
                
                <br><br><br><br>
                
                <a href="../index.php">VOLTAR PARA O MENU</a>
        </font>
    </body>
</html>