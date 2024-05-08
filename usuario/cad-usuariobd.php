<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome       = filter_input(INPUT_POST, "nome", 
    FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone   = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_SPECIAL_CHARS);
    $email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha      = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_NUMBER_INT);
    $confirma_senha      = filter_input(INPUT_POST, "confirma_senha", FILTER_SANITIZE_NUMBER_INT);
    $rua        = filter_input(INPUT_POST, "rua", FILTER_SANITIZE_SPECIAL_CHARS);
    $num     = filter_input(INPUT_POST, "num", FILTER_SANITIZE_SPECIAL_CHARS);
    $complemento     = filter_input(INPUT_POST, "complemento", FILTER_SANITIZE_SPECIAL_CHARS);
    $referencia     = filter_input(INPUT_POST, "referencia", FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro     = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade     = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $cep        = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_SPECIAL_CHARS);
    $estado     = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_SPECIAL_CHARS);
    
    

    
    try {
        require_once('../_conexao.php');

        $comandoSQL = $conexao->prepare("
            INSERT INTO ecologistica.usuario (
                `nome`,
                `telefone`,
                `email`,
                `senha`,
                `confirma_senha`,
                `rua`
                `numero`,
                `complemento`,
                `referencia`,
                `bairro`,
                `cidade`,
                `estado`,
                `cep`
            ) VALUES (
                :nome,
                :telefone,
                :email,
                :senha,
                :confirma_senha,
                :rua,
                :numero,
                :complemento,
                :referencia,
                :bairro,
                :cidade,
                :estado,
                :cep
            )
        ");

        $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
        $comandoSQL->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $comandoSQL->bindParam(":email", $email, PDO::PARAM_STR);
        $comandoSQL->bindParam(":senha", $senha, PDO::PARAM_STR);
        $comandoSQL->bindParam(":confirma_senha", $confirma_senha, PDO::PARAM_STR);
        $comandoSQL->bindParam(":rua", $rua, PDO::PARAM_STR);
        $comandoSQL->bindParam(":numero", $numero, PDO::PARAM_STR);
        $comandoSQL->bindParam(":complemento", $complemento, PDO::PARAM_STR);
        $comandoSQL->bindParam(":referencia", $referencia, PDO::PARAM_STR);
        $comandoSQL->bindParam(":bairro", $bairro, PDO::PARAM_STR);
        $comandoSQL->bindParam(":cidade", $cidade, PDO::PARAM_STR);
        $comandoSQL->bindParam(":estado", $estado, PDO::PARAM_STR);
        $comandoSQL->bindParam(":cep", $cep, PDO::PARAM_STR);
       

        $comandoSQL->execute();

        if ($comandoSQL->rowCount() > 0) {
            header('Location: ./view-usuario.php');
            exit();
        } else {
            echo "Erro no cadastro de usuários";
        }
    } catch (PDOException $erro) {
        echo "Erro no cadastro de usuários: " . $erro->getMessage();
    }
}