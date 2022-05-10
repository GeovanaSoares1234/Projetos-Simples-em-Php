<?php
if(isset($_GET['acao'])){
    include_once("../db/conexao.php");
    
    $_nome_produto = $_POST['nomeproduto'];
    $_data_pedido = $_POST['datapedido'];
    $_previsao_entrega = $_POST['previsaoentrega'];
    


/*
objeto->método();
Este simbolo (->) significa que o objeto esta invocando a execução de um método da classe da qual ele (o objeto) pertence

*/
$_sql = $_pdo->prepare("INSERT INTO tb_compras(nomeproduto,datapedido,previsaoentrega) VALUES (:nomeproduto,:datapedido,:previsaoentrega)");

$_sql->bindValue(":nomeproduto",$_login);
$_sql->bindValue(":datapedido",$_password);
$_sql->bindValue(":previsaoentrega",$_type);
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
        <form method="post" action="cadastrar.php?acao=ok" name="formcadastrar" id="idformcadastrar">
            <p>Nome do produto
            <input type="text" name="nomeproduto" id="idnomeproduto" required>
            </p>
            
            <p>Data do pedido
            <input type="date" name="datapedido" id="idtadapedido" required>
            </p>
            <p>Data do pedido
            <input type="date" name="previsaoentrega" id="idprevisaoentrega" required>
            </p>
            <br>
             <p>
            <input type="submit" name="btnCadastrar" id="idbtncadastrar" value="Cadastrar">
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