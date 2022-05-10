<?php

require_once("php/variaveis.php");

@$_page = $_GET["page"];

if(empty($_page))
{
    $_pagina = "home";
}
else
{
    $_pagina = $_page;
}

if(!file_exists("php/".$_pagina.".php"))
{
    $_página = "Página não encontrada.";
}

include_once("php/header.php");
include_once("php/menu.php");

?>


<article>
    <?php
    
    if(file_exists("php/".$_pagina.".php"))
    {
        include_once("php/".$_pagina.".php");
    }
    else
    {
        echo "A página não existe...";
        //testar usando ?page=cadastro p.ex...
    }
    
    ?>
</article>
<?php

include_once("php/aside.php");
include_once("php/footer.php");

?>