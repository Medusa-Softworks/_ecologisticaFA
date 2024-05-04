<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de usuários</title>
    <link rel="stylesheet" href="../assets/css/design.css">
</head>
<body>
     <?php
      include_once('../cabecalho-rodape/cabecalho.php');
      ?>

      
<main>

<h2 align="center"> CONSULTA E MANIPULAÇÃO DE DADOS: USUÁRIOS</h2>

    <div class = "container-fluid">
        <table>
            <thead>
                <tr>
                    <th align="center" width="25"></th>
                    <th width="150">NOME</th>
                    <th width="150">RUA</th>
                    <th width="25">Nº</th>
                    <th width="150">CIDADE</th>
                    <th align="center" width="40">TELEFONE</th>
                    <th align="center" width="100">E-MAIL</th>
                    <th align="center" width="25">EDITAR</th>
                    <th align="center" width="25">EXCLUIR</th>              
                </tr>
            </thead>
        
            <tbody>
                
                <?php 
                require_once("./view-usuariobd.php");

                if (isset($totalRegistros) && $totalRegistros> 0) {
                    foreach ($dados as $linha){
                
                ?>
                <tr>
                    <td align="center"><?=$linha["id"];?></td>
                    <td><?=$linha["nome"];?></td>
                    <td><?=$linha["rua"];?></td>   
                    <td><?=$linha["numero"];?></td>
                    <td><?=$linha["cidade"];?></td> 
                    <td align="center"><?=$linha["telefone"];?></td>
                    <td align="center"><?=$linha["email"];?></td>

                    <td align="center">
                        <a href="./atu-usuario.php?id=<?$linha['id'];?>">
                        <img src='../img-icon/icons/atualizar.png' width= "45px" alt="Editar" title="Editar registro">
                        </a>
                    </td>

                    <td align="center">
                        <a href="./exc-usuario.php?id=<?=$linha['id'];?>"> 
                        <img src='../img-icon/icons/lixo.png' alt="Deletar" title=" Apagar usuário">
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
        <div class="row-fluid jutify-center">
            <input type="reset" value="VOLTAR" onclick="javascript:history.go(-1);">
            <input type="reset" value="MENU PRINCIPAL" onclick="window.location.href='../menu.php';"> 
            
        </div>
    </div>
    </form>
</main>


</body>
</html> 
