<?php
// Configurações do banco de dados
$servername = 'localhost'; //nome do pc ou ip que tá o banco de dados
$db_name = 'db_voltareli'; //nome do banco de dados
$username = 'root'; //usuario de acesso
$password = '1234'; //senha do usuario

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $db_nome);


if($conn->connect_error){

die("conexão falhou, segue o erro:" . $conn->connect_error)

}
?>