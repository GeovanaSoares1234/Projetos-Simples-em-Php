<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de usuários</title>
</head>
<body bgcolor=#AEAEAE>
    <br>
    <font face="Arial">
        <center>
            <h1>Tabela de usuários</h1>
            <br><hr><br><br>
            <a href="../index.php">Voltar para o menu</a>
            <br><tr><br>
            
            <table cellspacing="2px" cellpadding="5px" border="3px">
                
                
            <tr>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Login</b></td>
                <td align="center"><b>Password</b></td>
                <td align="center"><b>Type</b></td>
            </tr>
            <?php
                include_once("../db/conexao.php");
                $_sql = $_pdo->prepare("SELECT * FROM usuario");
                $_sql->execute();
                $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($_resultset as $_line)
                {   
                
            ?>
            <tr>
                <td align="center"><?php echo $_line['id'];?></td>
                <td align="left"><?php echo $_line['login'];?></td>
                <td align="left"><?php echo $_line['password'];?></td>
                <td align="center"><?php echo $_line['type'];?></td>
            </tr>
            <?php
                }
            ?>
            </table>
        </center>
    </font>
</body>
</html>