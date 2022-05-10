<?php 

try{
    $_pdo = new PDO("mysql:host=localhost;dbname=banco_pedidos","root","");

//Instanciar um objeto chamado $_pdo da classe Pdo

/*No método construtor da classe pdo devemos passar os parâmetros : host, o nome do anco , o usuario e a senha que no nosso caso não é solicitado*/

}

catch(PDOException $_e){
    var_dump($_e);
    //mostra o conteudo do objeto $_e como se fosse um vetor
    
    echo $_e->getMessage();
    /*
    O objeto $_e invoca a execução do método getMassage() que retorna a mensagem do erro ocorrido
    */
    
    echo "<br>";
    
    echo $_e->getCode();
    
    /*
    O objeto $_e invoca a execução do método getcode() que retorna o código numerico do erro ocorrido
    */
    
    
    
    
    
    
    
}