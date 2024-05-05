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
        <h2 class="title is-2 has-text-centered">CADASTRO DE VEÍCULOS</h2>
        <div class="container">
            <form action="./veiculo/cad-veiculobd.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label class="label" for="marca">Marca</label>
                    <div class="control">
                        <input class="input" type="text" name="marca" id="marca" placeholder="Marca do Veículo:">
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label" for="modelo">Modelo</label>
                            <div class="control">
                                <input class="input" type="text" name="modelo" id="modelo" placeholder="Modelo do Veículo:">
                            </div>
                        </div>
                    </div>
                    <div class="column">
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
                                        <!-- Adicione mais opções conforme necessário -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label" for="bairro">Renavam do Veículo</label>
                            <div class="control">
                                <input class="input" type="text" name="renavam" id="renavam" placeholder="Informe o Renavam:">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                    <div class="field">
    <label class="label" for="cep">Placas do Veículo</label>
    <div class="control">
        <input class="input" type="text" name="placa" id="placa" placeholder="Informe as Placas:" title="Caso seja caminhão com carreta, ou carreta em veículos de passeio, informe ambas as placas!">
    </div>
</div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="cidade">Ano do Veículo</label>
                            <div class="control">
                                <input class="input" type="date" name="ano" id="ano" placeholder="Informe o Ano do Veículo:" title="Mês e Dia podem ser aproximados, mas não crie divergências com o ANO!">
                            </div>
                        </div>
                    </div>
                    <div class="column">
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
                                        <option value="6">Precisa de Retífica: + 200.000KM </option>
                                        <!-- Adicione mais opções conforme necessário -->
                                    </select>
                                </div>
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
                                        <!-- Adicione mais opções conforme necessário -->
                                    </select>
                                </div>
                            </div>
                </div>

                <div class="field">
                            <label class="label" for="cidade">Data do Licenciamento</label>
                            <div class="control">
                                <input class="input" type="date" name="licenciamento" id="licenciamento" placeholder="Informe a Data:">
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
                        <input class="button is-link" type="reset" value="VOLTAR" onclick="javascript:history.go(-1);">
                    </div>
                    <div class="control">
                        <input class="button is-info" type="reset" value="PÁGINA INICIAL" onclick="voltarAoMenuInicial()">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>
        function voltarAoMenuInicial() {
            window.location.href = '../menu.php';
        }

        function validarFormulario() {
            var marca = document.getElementById("marca").value;
            var modelo = document.getElementById("modelo").value;
            var tipo = document.getElementById("tipo").value;
            var bairro = document.getElementById("bairro").value;
            var cep = document.getElementById("cep").value;
            var cidade = document.getElementById("cidade").value;
            var estado = document.getElementById("estado").value;
            var telefone = document.getElementById("telefone").value;
            var email = document.getElementById("email").value;

            if (marca === "" || modelo === "" || tipo === "" || bairro === "" || cep === "" ||
                cidade === "" || estado === "" || telefone === "" || email === "") {
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
            document.getElementById("bairro").value = "";
            document.getElementById("cep").value = "";
            document.getElementById("cidade").value = "";
            document.getElementById("estado").value = "";
            document.getElementById("telefone").value = "";
            document.getElementById("email").value = "";
        }
    </script>
</body>

</html>
