<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome       = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $rua        = filter_input(INPUT_POST, "rua", FILTER_SANITIZE_SPECIAL_CHARS);
    $numero     = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro     = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_SPECIAL_CHARS);
    $cep        = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade     = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $estado     = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone   = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_SPECIAL_CHARS);
    $email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
   

    
    try {
        require_once('../_conexao.php');

        $comandoSQL = $conexao->prepare("
            INSERT INTO ecologistica.usuario (
                `nome`,
                `rua`
                `numero`,
                `bairro`,
                `cep`,
                `cidade`,
                `estado`,
                `telefone`,
                `email`
                
            ) VALUES (
                :nome,
                :rua,
                :numero,
                :bairro,
                :cep,
                :cidade,
                :estado,
                :telefone,
                :email,
                
            )
        ");

        $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
        $comandoSQL->bindParam(":rua", $rua, PDO::PARAM_STR);
        $comandoSQL->bindParam(":numero", $numero, PDO::PARAM_STR);
        $comandoSQL->bindParam(":bairro", $bairro, PDO::PARAM_STR);
        $comandoSQL->bindParam(":cep", $cep, PDO::PARAM_STR);
        $comandoSQL->bindParam(":cidade", $cidade, PDO::PARAM_STR);
        $comandoSQL->bindParam(":estado", $estado, PDO::PARAM_STR);
        $comandoSQL->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $comandoSQL->bindParam(":email", $email, PDO::PARAM_STR);
        

        $comandoSQL->execute();

        if ($comandoSQL->rowCount() > 0) {
            header('Location: ./view-contratante.php');
            exit();
        } else {
            echo "Erro no cadastro de contratantes";
        }
    } catch (PDOException $erro) {
        echo "Erro no cadastro de contratantes: " . $erro->getMessage();
    }
}