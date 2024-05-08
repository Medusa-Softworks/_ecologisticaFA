<?php
require_once("./view-financeirobd.php");

// Função para calcular o total do dia
function calcularTotalDia($dados, $data) {
    $totalDia = 0;

    foreach ($dados as $linha) {
        if ($linha["data"] == $data) {
            $totalDia += floatval($linha["valor"]);
        }
    }

    return $totalDia;
}

// Função para calcular o total do mês
function calcularTotalMes($dados, $mes, $ano) {
    $totalMes = 0;

    foreach ($dados as $linha) {
        $data = $linha["data"];
        $dataMes = date("m", strtotime($data));
        $dataAno = date("Y", strtotime($data));

        if ($dataMes == $mes && $dataAno == $ano) {
            $totalMes += floatval($linha["valor"]);
        }
    }

    return $totalMes;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos Cadastrados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaviewveiculo.css">
    <link rel="icon" href="../img-icon/icons/hatchback.png">
</head>
<body>     
    <main class="section">
        <h2 class="title is-2 has-text-centered">CONSULTA E MANIPULAÇÃO DE DADOS: FINANCEIRO</h2>
        <div class="container">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DATA</th>
                        <th>TIPO</th>
                        <th>VALOR</th>
                        <th>TOTAL DIA</th>
                        <th>TOTAL MES</th>
                        <th>EDITAR</th>
                        <th>EXCLUIR</th>              
                    </tr>
                </thead>
            
                <tbody>
                    <?php 
                    if (isset($totalRegistros) && $totalRegistros > 0) {
                        foreach ($dados as $linha) {
                            $data = $linha["data"];
                            $totalDia = calcularTotalDia($dados, $data);
                            $dataMes = date("m", strtotime($data));
                            $dataAno = date("Y", strtotime($data));
                            $totalMes = calcularTotalMes($dados, $dataMes, $dataAno);
                    ?>
                    <tr>
                        <td><?=$linha["id"];?></td>
                        <td><?=$linha["data"];?></td>
                        <td><?=$linha["tipo"];?></td>   
                        <td><?=$linha["valor"];?></td>
                        <td><?=$totalDia;?></td> 
                        <td><?=$totalMes;?></td>
                        <td>
                            <a href="./atu-financeiro.php?id=<?=$linha['id'];?>">
                                <img src='../assets/img/icons/atualizar.png' width="45px" alt="Editar" title="Editar registro">
                            </a>
                        </td>
                        <td>
                            <a href="./exc-financeiro.php?id=<?=$linha['id'];?>"> 
                                <img src='../assets/img/icons/lixo.png' alt="Deletar" title="Apagar registro">
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Botões de ação -->
        <div class="buttons is-centered">
            <button class="button is-link" onclick="javascript:history.go(-1);">VOLTAR</button>
            <button class="button is-primary" onclick="window.location.href='../menu.php';">MENU PRINCIPAL</button>
        </div>
    </main>
</body>
</html>