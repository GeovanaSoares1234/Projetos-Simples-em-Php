<?php

session_start();
// Inicia uma sessão

unset( $_SESSION['logado'] );
// remove a sessão com o valor 'logado'

session_destroy();
// garante a eliminação da sessão corrente. Mais utilizado em classes de sessões

sleep(2);
// para a execução do script no PHP por x segundos

header( "location:index.php" );
// redireciona a execução dos scripts PHP para a página index.php

?>