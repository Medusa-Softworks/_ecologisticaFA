<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaviewuser.css">
</head>
<body>
<main class="section">
    <h2 class="title is-2 has-text-centered">CONSULTA E MANIPULAÇÃO DE DADOS: CONTRATANTES</h2>

    <div class="container is-fluid">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th></th>
                    <th>DIA</th>
                    <th>VEÍCULO</th>
                    <th>KM_ATUAL</th>
                    <th>COMBUSTIVEL</th>
                    <th>QUANTIDADE</th>
                    <th>VL_LITRO</th>
                    <th>TOTAL</th>
                    <th>EDITAR</th>
                    <th>EXCLUIR</th>              
                </tr>
            </thead>
        
            <tbody>
                
                <?php 
                require_once("./view-abastecimentobd.php");

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
                            <img src='../img-icon/icons/atualizar.png' width="30px" alt="Editar" title="Editar registro">
                        </a>
                    </td>

                    <td>
                        <a href="./exc-abastecimento.php?id=<?=$linha['id'];?>"> 
                            <img src='../img-icon/icons/lixo.png' alt="Deletar" title="Apagar contratante">
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
    </div>
</main>
</body>
</html>
