
,<?php
if(isset($_get['acao']))
{
    include_once("../db/conexao.php");
    
    $_numero_pedido=$_POST['numeropedido'];
    
    $_nome_produto = addslashes(trim($_POST['nomeproduto']));
     $_data_pedido = addslashes(trim($_POST['numeropedido']));
    $_previsao_entrega = addslashes(trim($_POST['previsaoentrega']));
    
    
    
    $_sql = $_pdo->prepare("UPDATE tb_compras SET nomeproduto= ?,data_pedido = ?, previsaoentrega= ? WHERE =numeropedido'$_numero_pedido';");
    
    $_sql->bindValue(1,$_nome_produto);
    $_sql->bindValue(2,$_data_pedido);
    $_sql->bindValue(3,$_previsao_entrega);
    
    $_sql->execute();
    
    if($_sql->rowCount()>0):
    //atualziação bem sucedida.
    unset($_post['id']);
    //Evitar que o sistema entre no proximo if().
    echo "<h1 align='center'>ALTERAÇÕES REALIZADAS COM SUCESSO</h1>";
    
    endif;
}
?>


<?php
if(isset($_POST['numeropedido']))
{
    include_once("../db/conexao.php");
    
    $_id = addslashes(trim($_POST['numeropedido']));
    
    /*
        Retirar espaços em branco e adicionar\antes dos caracteres especiais
    */
    
    $_sql = $_pdo->prepare("SELECT * FROM tb_compras WHERE id=?;");

    $_sql->bindValue(1,$_id);
    $_sql->execute();
    $_line = $_sql->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CONSULTAS</title>
        <style>
            *{font-family: Arial, sans-serif;}
        </style>
    </head>
    <body>
        <form method="post" action="atualizar.php?acao=ok" name="formatualizar" id="idformatualizar">
            
            <p>
                Numero do pedido
                <input type="hidden" name="numeropedido" id="idnumeropedido" value="<?php echo $_line['numeropedido']?>">
            </p>
            
            <p>
                Nome do produto
                <input type="text" name="nomeproduto" id="idnomeproduto" value="<?php echo $_line['nomeproduto']?>">
            </p>
            
            <p>
                Data de entrega
                <input type="password" name="password" id="idpassword" value="<?php echo $_line['password']?>">
            </p>
            
            <p>
                Data de previsão
                <input type="text" name="type" id="idtype" value="<?php echo $_line['type']?>">
            </p>
            
            <p>
                <input type="submit" name="btnatualizar" id="idbtnatualizar" value="Atualizar">&nbsp;
                
                <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
            </p>
        </form>
        <a href="../index.php">VOTLAR PARA O MENU</a>
    </body>
</html>


<?php
}

else
{
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CONSULTAS</title>
    </head>
    <style>
        *{font-family: Arial, sans-serif;}
    </style>
    <body>
        <form method="post" action="atualizar.php">
            <p>
                ID
                <input type="text" name="id" id="idid">
            </p>
            
            <p>
                <input type="submit" name="btnconsultar" id="idbtnconsultar" value="Consultar">&nbsp;
                
                <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
            </p>
        </form>
        
        <a href="../index.php">VOLTAR PARA O MENU</a>
    </body>
</html>


<?php
}
?>