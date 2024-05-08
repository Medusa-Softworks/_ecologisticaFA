<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        // Filtrando as informações recebidas
        $dia = filter_input(INPUT_POST, "dia", FILTER_SANITIZE_SPECIAL_CHARS);
        $quantidade = filter_input(INPUT_POST, "quantidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $combustivel = filter_input(INPUT_POST, "combustivel", FILTER_SANITIZE_SPECIAL_CHARS);
        $id_veiculo = filter_input(INPUT_POST, "idVeiculo", FILTER_SANITIZE_SPECIAL_CHARS);
        $km_atual = filter_input(INPUT_POST, "km_atual", FILTER_SANITIZE_SPECIAL_CHARS);
        $vl_litro = filter_input(INPUT_POST, "vl_Litro", FILTER_SANITIZE_SPECIAL_CHARS);
        $valor_total = filter_input(INPUT_POST, "valor_total", FILTER_SANITIZE_SPECIAL_CHARS);

    
        try{
            require_once("../_conexao.php");

            $comandoSQL = $conexao->prepare("
                INSERT INTO abastecimento (
                   `dia`,
                   `quantidade`,
                   `combustivel`,
                   `id_veiculo`,      
                   `km_atual`,      
                   `vl_litro`,      
                   `valor_total`                             
                ) VALUES (
                    :dia,
                    :quantidade,
                    :combustivel,      
                    :id_veiculo,      
                    :km_atual,      
                    :vl_litro,      
                    :valor_total 
                )            
            ");

           
            $comandoSQL->bindParam(":dia", $dia, PDO::PARAM_STR);
            $comandoSQL->bindParam(":quantidade", $quantidade, PDO::PARAM_STR);
            $comandoSQL->bindParam(":combustivel", $combustivel, PDO::PARAM_STR);
            $comandoSQL->bindParam(":id_veiculo", $id_veiculo, PDO::PARAM_STR);
            $comandoSQL->bindParam(":km_atual", $km_atual, PDO::PARAM_STR);
            $comandoSQL->bindParam(":vl_litro", $vl_litro, PDO::PARAM_STR);
            $comandoSQL->bindParam(":valor_total", $valor_total, PDO::PARAM_STR);

            var_dump ($comandoSQL);
            $comandoSQL->execute();

            
            if($comandoSQL->rowCount() > 0){
                header("location:./view-abastecimento.php");
                exit();
            }
            else {
                echo("ERRO na gravação");
            }

        }
        catch(PDOException $erro){
            echo("Erro no cadastro de combustível.<br>". $erro->getMessage());
        }

    }
    else{
        echo("Erro no envio das informações!");
    }