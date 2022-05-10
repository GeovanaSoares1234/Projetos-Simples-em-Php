<!DOCTYPE html>
<html lang="py-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $_description; ?>">
        <meta name="keywords" content="<?php echo $_keywords; ?>">
        <meta name="author" content="<?php $_author; ?>">
        <title><?php echo $_title.' | '.ucwords($_pagina); ?></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="conteudo"><!-- div conteudo -->
            <header>
                <p align="center">AQUI É O CABEÇALHO DA PÁGINA...</p>
                <div id="logo">
                    <a href="<?php echo $_home; ?>"><img src="<?php echo $_logo; ?>" alt=<?php echo $_company; ?> border 0></a>
                </div>
            </header>