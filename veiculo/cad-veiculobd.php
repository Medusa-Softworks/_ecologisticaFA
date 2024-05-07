<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $marca              = filter_input(INPUT_POST, "marca", FILTER_SANITIZE_SPECIAL_CHARS);
    $modelo             = filter_input(INPUT_POST, "modelo", FILTER_SANITIZE_SPECIAL_CHARS);
    $tipo               = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_SPECIAL_CHARS);
    $renavam            = filter_input(INPUT_POST, "renavam", FILTER_SANITIZE_SPECIAL_CHARS);
    $placa              = filter_input(INPUT_POST, "placa", FILTER_SANITIZE_SPECIAL_CHARS);
    $ano                = filter_input(INPUT_POST, "ano", FILTER_SANITIZE_SPECIAL_CHARS);
    $conservacao        = filter_input(INPUT_POST, "conservacao", FILTER_SANITIZE_SPECIAL_CHARS);
    $combustivel        = filter_input(INPUT_POST, "combustivel", FILTER_SANITIZE_SPECIAL_CHARS);
    $dt_licenciamento   = filter_input(INPUT_POST, "dt_licenciamento", FILTER_SANITIZE_SPECIAL_CHARS);
    

    
    try {
        require_once('../_conexao.php');

        $comandoSQL = $conexao->prepare("
            INSERT INTO ecologistica.veiculo (
                `marca`,
                `modelo`
                `tipo`,
                `renavam`,
                `placa`,
                `ano`,
                `conservacao`,
                `combustivel`,
                `dt_licenciamento`,
            ) VALUES (
                :marca,
                :modelo,
                :tipo,
                :renavam,
                :placa,
                :ano,
                :conservacao,
                :combustivel,
                :dt_licenciamento
            )
        ");

        $comandoSQL->bindParam(":marca", $marca, PDO::PARAM_STR);
        $comandoSQL->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $comandoSQL->bindParam(":tipo", $numero, PDO::PARAM_STR);
        $comandoSQL->bindParam(":renavam", $renavam, PDO::PARAM_STR);
        $comandoSQL->bindParam(":renavam", $renavam, PDO::PARAM_STR);
        $comandoSQL->bindParam(":placa", $placa, PDO::PARAM_STR);
        $comandoSQL->bindParam(":ano", $ano, PDO::PARAM_STR);
        $comandoSQL->bindParam(":conservacao", $conservacao, PDO::PARAM_STR);
        $comandoSQL->bindParam(":combustivel", $combustivel, PDO::PARAM_STR);
        $comandoSQL->bindParam(":combustivel", $combustivel, PDO::PARAM_STR);

        $comandoSQL->execute();

        if ($comandoSQL->rowCount() > 0) {
            header('Location: ./view-veiculo.php');
            exit();
        } else {
            echo "Erro no cadastro de veículos";
        }
    } catch (PDOException $erro) {
        echo "Erro no cadastro de veículos: " . $erro->getMessage();
    }
}