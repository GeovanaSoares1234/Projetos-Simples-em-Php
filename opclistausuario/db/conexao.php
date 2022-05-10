<?php 
/*
Pdo é uma classe de administração de banco de dados amplamente utilizada na linguagem de programação php.

Atualmente as aplicações php requerem maior segurança no trato das informações que são manipuladas no banco de dados e a classe pdo fornece métodos seguros para essas aplicações atuais
*/

//metodologia orientada a objetos

try{
    $_pdo = new PDO("mysql:host=localhost;dbname=banco","root","");

//Instanciar um objeto chamado $_pdo da classe Pdo

/*No método construtor da classe pdo devemos passar os parâmetros : host, o nome do anco , o usuario e a senha que no nosso caso não é solicitado

podemos utilizar variaveis com as informçaões de conexão com o banco de dadps

*/
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