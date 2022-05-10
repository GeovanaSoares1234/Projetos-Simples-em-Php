<!DOCTYPE html>
<html>
    <head>
        <title> LISTAGEM DE USUÁRIOS</title>
        <meta charset="utf-8">
    </head>
    <body bgcolor="#AEAEAE">
        <br>

        <font face="Arial">
            <center>
                <h1>TABELA DE USUÁRIOS</h1>
                <br><hr><br><br>

                <a href="../index.php">VOLTAR PARA O MENU</a>
                <br><br><br>

                <table cellspacing="2px" cellpading= "5px" border="1px">
                    <tr>
                        <td align="center"><b>ID</b></td>
                        <td align="center"><b>LOGIN</b></td>
                        <td align="center"><b>PASSWORD</b></td>
                        <td align="center"><b>TYPE</b></td>
                        <td align="center"><b>ATUALIZAR</b></td>
                        <td align="center"><b>CONSULTAR</b></td>
                        <td align="center"><b>EXCLUIR</b></td>
                    </tr>
                    <?php
                        include_once("../db/conexao.php");
                        $_sql="SELECT*FROM usuario";

                        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());

                        while($_line = mysqli_fetch_array($_query))
                        {
                            ?>
                            <tr>
                                <td align="center">
                                    <?php echo $_line['id']?>
                                </td> 

                                <td align="left">
                                    <?php echo $_line['login']?>
                                </td> 

                                <td align="center">
                                    <?php echo $_line['password']?>
                                </td> 

                                <td align="left">
                                    <?php echo $_line['type']?>
                                </td> 

                                <td align="center">
                                    <a href="telaatualizar.php?id=<?php echo $_line['id']?>">Atualizar</a>
                                </td> 

                                <td align="center">
                                    <a href="telaconsultar.php?id=<?php echo $_line['id']?>">Consultar</a>
                                </td> 

                                <td align="center">
                                    <a href="telaexcluir.php?id=<?php echo $_line['id']?>">Excluir</a>
                                </td>
                            </tr> 
                    <?php
                        }
                    ?>
                </table>
            </center>
        </font>
    </body>
</html>