<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Abastecimento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaveiculo.css">
    <link rel="icon" href="../img-icon/icons/hatchback.png">
</head>
<body>
    <main class="section">
        <section class="container">
            <h2 class="title is-2 has-text-centered">REGISTRO DE ABASTECIMENTO</h2>
            <div class="container">
                <form action="./cad-abastecimentobd.php" method="post" enctype="multipart/form-data">

                    <!-- DIA ABASTECIMENTO -->
                    <div class="field">
                        <label class="label" for="dia">Dia:</label>
                        <div class="control">
                            <input class="input" type="date" name="dia" id="dia" placeholder="Informe o dia do abastecimento...">
                        </div>
                    </div>

                    <!-- QUANTIDADE -->
                    <div class="field">
                        <label class="label" for="qtde">Litros:</label>
                        <div class="control">
                            <input class="input" type="text" name="qtde" id="qtde" placeholder="Informe o total em litros...">
                        </div>
                    </div>

                    <!-- COMBUSTÍVEL -->
                    <div class="field">
                        <label class="label" for="combustivel">Combustível:</label>
                        <div class="control">
                            <div class="select">
                                <select name="combustivel" id="combustivel">
                                    <option value="Gasolina">Gasolina</option>
                                    <option value="Etanol">Etanol</option>
                                    <option value="Diesel_S500">Diesel S500</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- IDENTIFICAÇÃO VEÍCULO -->
                    <div class="field">
                        <label class="label" for="idVeiculo">Veículo:</label>
                        <div class="control">
                            <input class="input" type="text" name="idVeiculo" id="idVeiculo" placeholder="Veículo...">
                        </div>
                    </div>

                    <!-- QUILOMETRAGEM ATUAL -->
                    <div class="field">
                        <label class="label" for="kmAtual">Km Atual:</label>
                        <div class="control">
                            <input class="input" type="text" name="kmAtual" id="kmAtual" placeholder="Km atual...">
                        </div>
                    </div>

                    <!-- VALOR LITRO -->
                    <div class="field">
                        <label class="label" for="valorLitro">Valor Litro:</label>
                        <div class="control">
                            <input class="input" type="text" name="valorLitro" id="valorLitro" placeholder="Valor do litro...">
                        </div>
                    </div>

                    <!-- VALOR TOTAL -->
                    <div class="field">
                        <label class="label" for="valorTotal">Valor Total:</label>
                        <div class="control">
                            <input class="input" type="text" name="valorTotal" id="valorTotal" placeholder="Valor total...">
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
                            <input class="button is-link" type="button" value="VOLTAR" onclick="javascript:history.go(-1);">
                        </div>
                        <div class="control">
                            <input class="button is-info" type="button" value="PÁGINA INICIAL" onclick="voltarAoMenuInicial()">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        function voltarAoMenuInicial() {
            window.location.href = '../menu.php';
        }

        function validarFormulario() {
            var dia = document.getElementById("dia").value;
            var qtde = document.getElementById("qtde").value;
            var combustivel = document.getElementById("combustivel").value;
            var idVeiculo = document.getElementById("idVeiculo").value;
            var kmAtual = document.getElementById("kmAtual").value;
            var valorLitro = document.getElementById("valorLitro").value;
            var valorTotal = document.getElementById("valorTotal").value;

            if (dia === "" || qtde === "" || combustivel === "" || idVeiculo === "" || kmAtual === "" || valorLitro === "" ||
                valorTotal === "") {
                alert("Por favor, preencha todos os campos antes de salvar.");
                return false; // Impede o envio do formulário
            }

            return confirmarConferencia();
        }

        function confirmarConferencia() {
            return confirm("Deseja confirmar a conferência dos dados antes de salvar?");
        }

        function clearForm() {
            document.getElementById("dia").value = "";
            document.getElementById("qtde").value = "";
            document.getElementById("combustivel").value = "";
            document.getElementById("idVeiculo").value = "";
            document.getElementById("kmAtual").value = "";
            document.getElementById("valorLitro").value = "";
            document.getElementById("valorTotal").value = "";
        }
    </script>
</body>
</html>