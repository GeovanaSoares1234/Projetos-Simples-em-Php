<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CRUD DE BD NO PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <font face="Arial">
            <form method="post" action="inserir.php" name="forminserir" id="idforminserir">
            <p>
                LOGIN
                <input type="text" name="login" id="idlogin" required>
            </p>
            
            <p>
                PASSWORD
                <input type="password" name="password" id="idpassword" required>
            </p>

            <br>

            <p>
                <input type="radio" name="type" id="idtypeadm" value="a">ADMINISTRADOR
            </p>

            <p>
                <input type="radio" name="type" id="idtypevis" value="v">VISITANTE
            </p>

            <p>
                <input type="submit" name="btninserir" id="idbtninserir" value="Inserir">
            </p>

            <p>
                <input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar">
            </p>

        </form>

        <br><br><br>

        <a href="../index.php">VOLTAR PARA O MENU</a>
        </font>
    </body>
</head>