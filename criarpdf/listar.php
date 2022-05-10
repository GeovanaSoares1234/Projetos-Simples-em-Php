<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem usuários</title>
    <style>
        *{
            font-family: Arial, sans-serif;
        }
        a{
            text-decoration: none;
            color: bisque;
            font-weight: bold;
            border: 1px solid #FFF;
            padding: 5px 15px;
            background-color: dimgray;
        }
    </style>
</head>
<body bgcolor="#AEAEAE">
    <center>
        <h1>Tabela de usuários</h1>
        <hr><br>
        <a href="pdf.php">GERAR ARQUIVO PDF</a>
        <span>&nbsp;&nbsp;&nbsp;</span>
        <a href="index.php">VOLTAR PARA O MENU</a>
        <br>
        <br>
        <br>
        <table cellspacing="2px" cellpadding="5px" border="3px">
            <tr>
                <td align="center"><b>ID</b></td>
                <td align="center"><b>LOGIN</b></td>
                <td align="center"><b>PASSWORD</b></td>
                <td align="center"><b>TYPE</b></td>
            </tr>
            
            <?php 
            include_once("db/conexao.php");
            
            $_sql = $_pdo->prepare("SELECT * FROM usuario");
            $_sql->execute();
            $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($_resultset as $_line){//apontar para a linha preferecial usar line
                //matriz
            ?>
            <tr>
                <td align="center"><?php echo $_line['id']?></td>
                <td align="left"><?php echo $_line['login']?></td>
                <td align="left"><?php echo $_line['password']?></td>
                <td align="center"><?php echo $_line['type']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>
</html>