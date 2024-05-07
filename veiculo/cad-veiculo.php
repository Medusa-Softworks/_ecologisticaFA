<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaveiculo.css">
    <link rel="icon" href="../img-icon/icons/hatchback.png">
</head>

<body>
    <main class="section">
        <section class="container">
            <h2 class="title is-2 has-text-centered">CADASTRO DE VEÍCULOS</h2>
            <form action="./veiculo/cad-veiculobd.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label class="label" for="marca">Marca</label>
                    <div class="control">
                        <input class="input" type="text" name="marca" id="marca" placeholder="Marca do Veículo">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="modelo">Modelo</label>
                    <div class="control">
                        <input class="input" type="text" name="modelo" id="modelo" placeholder="Modelo do Veículo">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="tipo">Tipo do Veículo</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipo" id="tipo">
                                <option value="">Selecione uma Categoria</option>
                                <option value="1">Motocicleta</option>
                                <option value="2">Bicicleta / Motoneta / Ciclomotor</option>
                                <option value="3">Passeio</option>
                                <option value="4">Utilitário</option>
                                <option value="5">Van</option>
                                <option value="6">Caminhão / Carreta</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="renavam">Renavam do Veículo</label>
                    <div class="control">
                        <input class="input" type="text" name="renavam" id="renavam" placeholder="Renavam do Veículo">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="carga">Capacidade de carga</label>
                    <div class="control">
                        <input class="input" type="text" name="carga" id="carga" placeholder="Capacidade de carga em toneladas">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="placa">Placas do Veículo</label>
                    <div class="control">
                        <input class="input" type="text" name="placa" id="placa" placeholder="Placas do Veículo">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="ano">Ano de fabricação</label>
                    <div class="control">
                        <input class="input" type="date" name="ano" id="ano" placeholder="Ano de fabricação">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="condicao">Estado de Conservação do Veículo</label>
                    <div class="control">
                        <div class="select">
                            <select name="condicao" id="condicao">
                                <option value="">Selecione uma Opção</option>
                                <option value="1">Novo: 0KM</option>
                                <option value="2">Novo: + 5.000KM</option>
                                <option value="3">Usado: + 30.000KM</option>
                                <option value="4">Usado: + 75.000KM</option>
                                <option value="5">Usado: + 150.000KM</option>
                                <option value="6">Precisa de Retífica: + 200.000KM</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="combustivel">Combustível</label>
                    <div class="control">
                        <div class="select">
                            <select name="combustivel" id="combustivel">
                                <option value="">Selecione uma Opção</option>
                                <option value="1">Gasolina</option>
                                <option value="2">Etanol</option>
                                <option value="3">Diesel S500</option>
                                <option value="4">Diesel S10</option>
                                <option value="5">Híbrido</option>
                                <option value="6">Elétrico</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="licenciamento">Data do Licenciamento</label>
                    <div class="control">
                        <input class="input" type="date" name="licenciamento" id="licenciamento" placeholder="Data do Licenciamento">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <input class="button is-primary" type="submit" value="CADASTRAR" id="submit" onclick="return validarFormulario()">
                    </div>
                    <div class="control">
                        <input class="button is-danger" type="reset" value="LIMPAR" onclick="clearForm()">
                    </div>
                    <div class="control">
                        <input class="button is-primary-light" type="reset" value="VOLTAR" onclick="javascript:history.go(-1);">
                    </div>
                    <div class="control">
                        <input class="button is-primary-light" type="reset" value="PÁGINA INICIAL" onclick="voltarAoMenuInicial()">
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script>
        function voltarAoMenuInicial() {
            window.location.href = '../menu.php';
        }

        function validarFormulario() {
            var marca = document.getElementById("marca").value;
            var modelo = document.getElementById("modelo").value;
            var tipo = document.getElementById("tipo").value;
            var renavam = document.getElementById("renavam").value;
            var placa = document.getElementById("placa").value;
            var ano = document.getElementById("ano").value;
            var conservacao = document.getElementById("condicao").value;
            var combustivel = document.getElementById("combustivel").value;
            var dt_licenciamento = document.getElementById("licenciamento").value;

            if (marca === "" || modelo === "" || tipo === "" || renavam === "" || placa === "" ||
                ano === "" || conservacao === "" || combustivel === "" || dt_licenciamento === "") {
                alert("Por favor, preencha todos os campos antes de salvar.");
                return false; // Impede o envio do formulário
            }

            return confirmarConferencia();
        }

        function confirmarConferencia() {
            return confirm("Deseja confirmar a conferência dos dados antes de salvar?");
        }

        function clearForm() {
            document.getElementById("marca").value = "";
            document.getElementById("modelo").value = "";
            document.getElementById("tipo").value = "";
            document.getElementById("renavam").value = "";
            document.getElementById("placa").value = "";
            document.getElementById("ano").value = "";
            document.getElementById("condicao").value = "";
            document.getElementById("combustivel").value = "";
            document.getElementById("licenciamento").value = "";
        }
    </script>
</body>

</html>
