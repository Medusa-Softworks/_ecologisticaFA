<?php
$dns="mysql:host=localhost;dbname = ecologistica; charset=utf8";
$user = "root";
$pass = "";

try{
    //cria a conexao com o banco de dados
    $conexao = new PDO($dns, $user, $pass);

}catch (PDOException $erro){

echo("Entre em contato com o desenvolvedor");

}