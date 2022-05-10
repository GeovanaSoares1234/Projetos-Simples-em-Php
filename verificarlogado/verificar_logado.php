<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>VERIFICANDO...</title>
    <?php
        ini_set ( "display_errors" , 0 );
        //cancela a exibição de erros gerados pelo interpretador PHP...
        error_reporting( 0 );
        //cancela a emissão de relatórios erros do interpretador PHP...
        
        if ( !$_COOKIE["logado"] )
        {
            echo '<script type="text/javascript">
                 alert("Por favor faça o login para acessar esta página");
                 location="index.php";</script>';
        }
    ?>
    </head>
    <body>
    </body>
</html>