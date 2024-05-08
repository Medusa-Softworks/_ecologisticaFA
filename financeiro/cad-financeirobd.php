<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $dia              = filter_input(INPUT_POST, "data", FILTER_SANITIZE_SPECIAL_CHARS);
    $tipo             = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_SPECIAL_CHARS);
    
    if ($tipo == "1" && $valor < 0) {
        $valor = -$valor;
    } else {
        $valor = -$valor;
    }
    
    try {
        require_once('../_conexao.php');

        $comandoSQL = $conexao->prepare("
            INSERT INTO ecologistica.financeiro (
                `dia`,
                `tipo`,
                `vl_total`
               
            ) VALUES (
                :marca,
                :tipo,
                :vl_total
            )
        ");

        $comandoSQL->bindParam(":data", $dia, PDO::PARAM_STR);
        $comandoSQL->bindParam(":tipo", $tipo, PDO::PARAM_STR);
        $comandoSQL->bindParam(":vl_total", $tipo, PDO::PARAM_STR);

        $comandoSQL->execute();

        if ($comandoSQL->rowCount() > 0) {
            header('Location: ./view-financeiro.php');
            exit();
        } else {
            echo "Erro no cadastro financeiro";
        }
    } catch (PDOException $erro) {
        echo "Erro no cadastro financeiro" . $erro->getMessage();
    }
}