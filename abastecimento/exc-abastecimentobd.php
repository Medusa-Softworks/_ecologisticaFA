<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //filtra as informações do formulário
    
    $id = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);

        try {
        require_once("../_conexao.php");
        
        //busca os dados e prapara para exclusão

        $comandoSQL = $conexao->prepare("
            DELETE FROM ecologistica.abastecimento WHERE `id` = :id");
        // vincula os dados do banco junto aos dados do formulário    
        $comandoSQL->bindParam(":id", $id, PDO::PARAM_STR);
       
    // executa os comando SQL no banco de dados
        $comandoSQL->execute();

        //verifica se há dados no banco para exclusão
        if ($comandoSQL->rowCount() > 0) {
            header("Location: ../view-abastecimento.php");
            exit();
        } else {
            echo "Erro na gravação dos dados";
        }
    } catch (PDOException $erro) {
        echo "Erro na exclusão dos dados: " . $erro->getMessage();
    
    }
}
else{
    echo("Erro na gravação das informações");
}