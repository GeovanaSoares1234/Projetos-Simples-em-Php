<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultar usuário</title>
</head>
<body>
    <font face="Arial";>
        <form method="post" action="consultar.php" name="formconsultar" id="idformconsultar">
            
            <?php
            if(isset($_POST['id'])){
                include_once("../db/conexao.php");
                
                $_id = $_POST['id'];
                
                $_sql = $_pdo->prepare("SELECT * FROM usuario WHERE id=?");
                
                $_sql->bindValue(1, $_id);
                
                $_sql->execute();
                
                if($_sql->rowCount()==0){
                    echo "<h1>Usuario não encontrado...<h1><br>";
                }
                else{
                    echo "<h1>Usuario encontrado...</h1><br>";
                $_line = $_sql->fetch(PDO::FETCH_ASSOC);
            
            ?>
            <p>ID
            <input type="text" name="id" id="idid" value="<?php echo $_line['id']?>">
            </p>
             <p>LOGIN
            <input type="text" name="login" id="idlogin" value="<?php echo $_line['login']?>">
             </p>
             
             <p>PASSWORD
            <input type="password" name="password" id="idpassword" value="<?php echo $_line['password']?>">
            </p>
            
             <p>TYPE
            <input type="text" name="type" id="idtype" value="<?php echo $_line['type']?>">
            </p>
            
        <?php
                }
            }
            
            else{
                
            
        ?>
        <p>Id
        <input type="text" name="id" id="idid">
            </p>
            
            <p>
                <input type="submit" name="btnconsultar" id="idbtnconsultar" value="Consultar">
            </p>
            
               <p>
                <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
            </p>
            
            <?php 
            }
            ?>
        </form>
        <br>
        <a href="../index.php">Voltar para o menu</a>
    </font>
</body>
</html>