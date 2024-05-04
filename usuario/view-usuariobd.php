<?php

require_once("../_conexao.php");

try{
    
    // $conexao = new PDO("mysql:host=localhost;dbname=seu_banco_de_dados", "seu_usuario", "sua_senha");
    // $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $SQL = "SELECT * FROM ecologistica.usuario";

    $dadosSelecionados = $conexao->query ($SQL);

    $dados = $dadosSelecionados ->fetchAll();

    $totalRegistros = $dadosSelecionados ->rowCount();
}catch (PDOException $erro){
    echo("Entre em contato com o desenvolvedor"); 
}