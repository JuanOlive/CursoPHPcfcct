<?php


//criando as variaveis de ambiente para se conectar no bd;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "padariata";

//Criando a conexao com o banco de dados usando a classe mysqli:

$conn = new mysqli($servername, $username, $password, $dbname);
//Verificando se a conexão deu certo:
    if($conn->connect_error) {
        die("Conexão falhou: ".$conn->connect_error);

    } 





?>