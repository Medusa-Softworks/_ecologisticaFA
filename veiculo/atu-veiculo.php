<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atualização de Veículos</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="../css/bulmaatuveiculo.css">
<link rel="icon" href="../img-icon/icons/hatchback.png">
</head>
<body>
<?php
require_once("./atu-veiculo-view.php");
?>
<main class="section">
    <section class="container">
        <h2 class="title is-2 has-text-centered">Atualização: Veículos Cadastrados no Sistema</h2>
        <form action="atu-veiculobd.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?=$resultado["id"];?>">
            <!-- entrada da marca do veículo -->
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label" for="marca">Marca</label>
                        <div class="control">
                            <input class="input" type="text" name="marca" id="marca" placeholder="Marca do Veículo:"
                                value="<?$resultado["marca"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label" for="modelo">Modelo</label>
                        <div class="control">
                            <input class="input" type="text" name="modelo" id="modelo" placeholder="Modelo:"
                                value="<?$resultado["modelo"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label" for="tipo">Tipo</label>
                        <div class="control">
                            <input class="input" type="text" name="tipo" id="tipo" placeholder="Tipo:"
                                value="<?$resultado["tipo"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label" for="renavam">Renavam</label>
                        <div class="control">
                            <input class="input" type="text" name="renavam" id="renavam" placeholder="Nº Renavam:"
                                value="<?$resultado["renavam"];?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">Placas do Veículo</label>
                        <div class="control">
                            <input class="input" type="text" name="placas" id="placa" placeholder="Placas do veículo:"
                                value="<?$resultado["placa"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">Ano de Fabricação</label>
                        <div class="control">
                            <input class="input" type="text" name="ano" id="ano" placeholder="Ano de fabricação:"
                                value="<?$resultado["ano"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">Estado de Conservação do Veículo</label>
                        <div class="control">
                            <input class="input" type= "text" name:="conservacao" id="conservacao" placeholder="Estado de conservação:"
                                value="<?$resultado["conservacao"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">Combustível</label>
                        <div class="control">
                            <input class="input" type= "text" name:="combustivel" id="combustivel" placeholder="Combustivel:"
                                value="<?$resultado["combustivel"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">Data do Licenciamento</label>
                        <div class="control">
                            <input class="input" type= "text" name:="dt_licenciamento" id="dt_licenciamento" placeholder="Data do licenciamento:"
                                value="<?$resultado["dt_licenciamento"];?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="space 5v"></div>

            <!-- Botões de ação -->
            <div class="field is-grouped is-grouped-centered">
                <div class="control">
                    <input type="reset" class="button is-light" value="VOLTAR" onclick="javascript:history.go(-1);">
                </div>
                <div class="control">
                    <input type="submit" class="button is-success" value="SALVAR" id="submit" onclick="validarFormulario()">
                </div>
                <div class="control">
                    <input type="reset" class="button is-info" value="MENU PRINCIPAL" onclick="voltarAoMenuInicial()">
                </div>
            </div>
        </form>
    </section>
</main>
<script>
function validarFormulario() {
    var marca = document.getElementById("marca").value;
    var modelo = document.getElementById("modelo").value;
    var tipo = document.getElementById("tipo").value;
    var renavam = document.getElementById("renavam").value;
    var placa = document.getElementById("placa").value;
    var ano = document.getElementById("ano").value;
    var conservacao = document.getElementById("conservacao").value;
    var combustivel = document.getElementById("combustivel").value;
    var dt_licenciamento = document.getElementById("dt_licenciamenot").value;

    if (marca === "" || modelo === "" || tipo === "" || renavam === "" || placa === "" ||
        ano === "" || conservacao === "" || combustivel === "" || dt_licenciamento === "") {
        alert("Por favor, preencha todos os campos antes de salvar.");
        return false; // Impede o envio do formulário
    }

    return confirmarConferencia();
}

function voltarAoMenuInicial() {
    window.location.href = '../menu.php';
}
</script>

</body>
</html>
