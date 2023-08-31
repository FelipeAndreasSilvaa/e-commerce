<?php
//cria uma conexao com o BD
$conn= mysqli_connect('localhost','root','','test');

//ajusta o charset de comu8nicaçao entre aplicaçao e o banco de dados
mysqli_set_charset($conn,'UTF-8');

//verificar a conexao
if($conn->connect_error){
    die("falha ao realizar o cadastro". $conn->connect_error);
}
?>