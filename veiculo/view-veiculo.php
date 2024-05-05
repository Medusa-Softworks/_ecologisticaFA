<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./sistema/css/bulmaveiculo.css">
</head>
<body>
     
<main class="section">
    <h2 class="title is-2 has-text-centered">CONSULTA E MANIPULAÇÃO DE DADOS: VEÍCULOS</h2>

    <div class = "container-fluid">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th</th>
                    <th >MARCA</th>
                    <th>MODELO</th>
                    <th>TIPO</th>
                    <th>ANO</th>
                    <th>RENAVAM</th>
                    <th>COMBUSTIVEL</th>
                    <th>EDITAR</th>
                    <th>EXCLUIR</th>              
                </tr>
            </thead>
        
            <tbody>
                
                <?php 
                require_once('./view-veiculobd.php');

                if (isset($totalRegistros) && $totalRegistros> 0) {
                    foreach ($dados as $linha){
                
                ?>
                <tr>
                    <td ><?=$linha["id"];?></td>
                    <td><?=$linha["marca"];?></td>
                    <td><?=$linha["modelo"];?></td>   
                    <td><?=$linha["tipo"];?></td>
                    <td><?=$linha["ano"];?></td> 
                    <td><?=$linha["renavam"];?></td>
                    <td><?=$linha["combustivel"];?></td>

                    <td><a href="./atu-veiculo.php?id=<?$linha['id'];?>">
                        <img src='../assets/img/icons/atualizar.png' width= "45px" alt="Editar" title="Editar registro">
                        </a>
                    </td>

                    <td><a href="./exc-veiculo.php?id=<?=$linha['id'];?>"> 
                        <img src='../assets/img/icons/lixo.png' alt="Deletar" title=" Apagar usuário">
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
