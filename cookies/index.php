<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Base</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <img src="img/senaizera.png">
        <div id="vader"></div>
        <p id="titulo">CT Desenvolvimento de Sistemas - Back-End</p>
        <div id="conteudo">
            <?php
               //cookies saõ pequenos arquivos que podemos gravar direto na máquina cliente (caso o navegador esteja configurado a permitir a gravação de cookies) com informações que podem ser recuperadas e utilizadas por outras páginas
            
                //A criação de cookies deve vir antes de qualquer outro comando que tenha relacionamento com o navegador
            
                //Os cookies só ficarão "visiveis" quando a próxima página entrar em execução, ou seja, só podemos usar os cookies nas páginas seguintes a página de criação dos cookies
                
                //Os cookies são pequenos arquivos mas podemos utiliza-los como um vetor($_COOKIE['nome_da_informação'])
            
                //Os cookies são descartados quando o navegaor é encerrado, caso contrário, os cookies ficam disponiveis a disposição para serem consultados quando necessário. Podemos também definir, o tempo de vida de um cookie
            
                //Para criar um cookie utilizamos o a função booleana setcookie (nome, valor, tempo de vida)
            
                //existem outros parâmetros explicados no libro PHP5, capitulo 11, página 245
            
                //Caso o cookie seja criado a função setcookie retorna TRUE, caso contrário retona false
            
                echo "COOKIES NO PHP<br>";
            ?>
            <form method="post" action="criar_cookies.php" name="formulario">
                <p>USUÁRIO: <input type="text" name="user"></p>
                <p>SENHA: <input type="password" name="password"></p>
                
                <fieldset>
                    <legend>Escolha uma cor de fundo da página de sua preferência</legend>
                    
                    <input type="radio" name="color" id="azul" value="#0000FF" checked>
                    <label for="azul">AZUL</label><br>
                    
                    <input type="radio" name="color" id="vermelho" value="#FF0000">
                    <label for="vermelho">VERMELHO</label><br> 
                    
                    <input type="radio" name="color" id="verde" value="#00FF00">
                    <label for="verde">VERDE</label><br>
                </fieldset>
                
                <p>
                    <input type="submit" value="Enviar" class="botao">
                    <input type="reset" value="Limpar" class="botao">
                </p>
                
            </form>
        </div>
    </body>
</html>
