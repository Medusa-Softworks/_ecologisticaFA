<?php
    $id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

    require_once ("../_conexao.php");
    try{
        $comandoSQL = "SELECT * FROM ecologistica.veiculo WHERE id = :id";
        $comandoSQL = $conexao->prepare($comandoSQL);
        $comandoSQL->bindParam(":id",$id);
        $comandoSQL->execute();
        $resultado = $comandoSQL->fetch(PDO :: FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo("Entre em contato com o desenvolvedor");
    }
