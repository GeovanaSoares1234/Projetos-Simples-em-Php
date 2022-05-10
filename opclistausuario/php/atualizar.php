<?php
if(isset($_get['acao']))
{
    include_once("../db/conexao.php");
    
    $_id=$_POST['id'];
    
    $_login = addslashes(trim($_POST['login']));
    $_password = addslashes(trim($_POST['password']));
    $_password = addslashes(trim($_POST['type']));
    
    $_password = md5('$_password');
    
    $_sql = $_pdo->prepare("UPDATE usuario SET login= ?, password= ?, type= ? WHERE id='$_id';");
    
    $_sql->bindValue(1,$_login);
    $_sql->bindValue(2,$_password);
    $_sql->bindValue(3,$_type);
    
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
if(isset($_POST['id']))
{
    include_once("../db/conexao.php");
    
    $_id = addslashes(trim($_POST['id']));
    
    /*
        Retirar espaços em branco e adicionar\antes dos caracteres especiais
    */
    
    $_sql = $_pdo->prepare("SELECT * FROM usuario WHERE id=?;");

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
                ID
                <input type="hidden" name="id" id="idid" value="<?php echo $_line['id']?>">
            </p>
            
            <p>
                LOGIN
                <input type="text" name="login" id="idlogin" value="<?php echo $_line['login']?>">
            </p>
            
            <p>
                PASSWORD
                <input type="password" name="password" id="idpassword" value="<?php echo $_line['password']?>">
            </p>
            
            <p>
                TYPE
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