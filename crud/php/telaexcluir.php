<?php
    @$_id = $_GET['id'];
?> 

<!doctype html>
<html>
    <head>
        <title>EXCLUSÃO</title>
        <meta charset="utf-8">
    </head>
    <body>
        <font face="Arial">
            <form method="post" action="excluir.php" name="formexcluir" id="idformexcluir">
                <p>
                    DIGITE O ID
                    <input type="text" name="iduser" id="ididuser" value="<?php echo $_id?>" required>
                </p>

                <br>
                
                <p>
                    <input type="submit" name="btnexcluir" id="idbtnexcluir" value="Excluir">
                </p>

                <p>
                    <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
                </p>
            </form>
            <br><br><br>

            <a href="../index.php">VOLTAR PARA O MENU</a>
        </font>
    </body>
</html>