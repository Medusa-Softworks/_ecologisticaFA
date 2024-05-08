<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Abastecimento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaviewcomb.css">
    <link rel="icon" href="../img-icon/icons/hatchback.png">
</head>
<body>
    <main class="section">
        <h2 class="title is-2 has-text-centered">CONSULTA E MANIPULAÇÃO DE DADOS: VEÍCULOS</h2>

        <div class="container-fluid">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DIA</th>
                        <th>QTDE ABASTECIDA</th>
                        <th>TIPO COMBUSTÍVEL</th>
                        <th>VEÍCULO</th>
                        <th>QUILOMETRAGEM ATUAL</th>
                        <th>VALOR LITRO</th>
                        <th>VALOR TOTAL</th>
                        <th>EDITAR</th>
                        <th>APAGAR</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php 
                    require_once('./view-abastecimentobd.php');

                    if (isset($totalRegistros) && $totalRegistros > 0) {
                        foreach ($dados as $linha){
                    ?>
                    <tr>
                        <td><?=$linha["id"];?></td>
                        <td><?=$linha["dia"];?></td>
                        <td><?=$linha["quantidade"];?></td>   
                        <td><?=$linha["combustivel"];?></td>
                        <td><?=$linha["id_veiculo"];?></td> 
                        <td><?=$linha["km_atual"];?></td>
                        <td><?=$linha["vl_litro"];?></td>
                        <td><?=$linha["valor_total"];?></td>

                        <td>
                            <a href="./atu-abastecimento.php?id=<?=$linha['id'];?>">
                                <img src='../assets/img/icons/atualizar.png' width="45px" alt="Editar" title="Editar registro">
                            </a>
                        </td>

                        <td>
                            <a href="./exc-abastecimentobd.php?id=<?=$linha['id'];?>"> 
                                <img src='../assets/img/icons/lixo.png' alt="Deletar" title="Apagar usuário">
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
