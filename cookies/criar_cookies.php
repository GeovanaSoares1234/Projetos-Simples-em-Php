<?php

$_user = $_POST['user'];
$_password = $_POST['password'];
$_color = $_POST['color'];

if (( setcookie( 'user'     , $_user     , time() + 864000     ) ) &&
    ( setcookie( 'password' , $_password , time() + 86400 * 10 ) ) &&
    ( setcookie( 'color'    , $_color    , time() + 86400 * 0.5) ) 
   )
{
    header ( "location: excluir_cookies.php" );
    
/*

Deve-se informar o caminho do arquivo de destino, quando o 
mesmo nao se encontra na mesma pasta de trabalho.


Por exemplo:
"location: c:/.../.../pasta de trabalho/nome do arquivo.extensão"

*/

}

else
{
    echo "Falha ao criarr os cookies !!!";
}

?>