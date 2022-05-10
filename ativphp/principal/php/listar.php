<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos os produtos</title>
</head>
<body>
    <br>
    <font face="Arial">
        <center>
            <h1>Tabela de produtos</h1>
            <br><hr><br><br>
            <a href="../index.php">Voltar para a página principal</a>
            <br><tr><br>
            
            <table cellspacing="2px" cellpadding="5px" border="3px">
                
                
            <tr>
                <td align="center"><b>Numero do pedido</b></td>
                <td align="center"><b>Nome do produto</b></td>
                <td align="center"><b>Data de entrega do produto</b></td>
                <td align="center"><b>Data de previsão do produto</b></td>
            </tr>
            <?php
                include_once("../db/conexao.php");
                $_sql = $_pdo->prepare("SELECT * FROM tb_compras");
                $_sql->execute();
                $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($_resultset as $_line)
                {   
                
            ?>
            <tr>
                <td align="center"><?php echo $_line['numeropedido'];?></td>
                <td align="left"><?php echo $_line['nomeproduto'];?></td>
                <td align="left"><?php echo $_line['datapedido'];?></td>
                <td align="center"><?php echo $_line['previsaoentrega'];?></td>
            </tr>
            <?php
                }
            ?>
            </table>
        </center>
    </font>
</body>
</html>