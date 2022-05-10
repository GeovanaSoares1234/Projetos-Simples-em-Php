<?php
    @$_id = $_GET['ID'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CONSULTAS</title>
        <meta charset="utf-8">
    </head>
    <body>
        <font face="Arial">
            <form method="POST" action="telaconsultar.php" name="formconsultar" id="idformconsultar">
                <?php
                    if(isset($_POST['id']))
                    {
                        include_once("../db/conexão.php");
                        $_id = $_POST['id'];
                        $_sql = "SELECT*FROM usuario WHERE id = '$_id'";
                        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
                        $_line = mysqli_fetch_array($_query);
                ?>
                <p>
                    ID
                    <input type="text" name="id" id="idid" value="<?php echo $_line['id']?>">
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

                <?php
                    }
                    else
                    {
                ?>

                <p>
                    ID
                    <input type="text" name="id" id="idid" value="<?php echo $_id ?>">
                </p>

                <p>
                    LOGIN
                    <input type="text" name="login" id="idlogin" >
                </p>

                <p>
                    PASSWORD
                    <input type="text" name="password" id="idpassword" >
                </p>

                <p>
                    TYPE
                    <input type="text" name="type" id="idtype" >
                </p>

                <?php
                    }
                ?>

                <br>

                <p>
                    <input type="submit" name="btnconsultar" id="idbtnconsultar" value="Consultar">
                </p>

                <p>
                    <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
                </p>
                </form>

                <br><br><br>

                <a href="../index.php">Voltar para  o menu</a>
        </font>
    </body>
</html>