<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    
</head>

<body>
    <?php
      include_once("./cabecalho.php");
      
    ?>

    <main>
        <h2 class="title is-2 has-text-centered">CADASTRO DE VEÍCULOS</h2>
        <div class="container">
            <form action="./veiculo/cad-veiculobd.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label class="label" for="nome">Marca</label>
                    <div class="control">
                        <input class="input" type="text" name="marca" id="marca" placeholder="marca do veículo">
                    </div>
                </div>

                <div class="columns">
                    <div class="col4">
                        <div class="field">
                            <label class="label" for="modelo">Modelo</label>
                            <div class="control">
                                <input class="input" type="text" name="modelo" id="modelo" placeholder="modelo">
                            </div>
                        </div>
                    </div>
                    <div class="col4">
                    <div class="field">
                        <label class="label" for="tipo">Tipo</label>
                        <div class="control">
                        <select class="select" name="numero" id="numero">
                            <option value="">Selecione um tipo de veículo</option>
                            <option value="1">Moto</option>
                            <option value="2">Passeio</option>
                            <option value="3">Utilitário</option>
                            <option value="4">Van</option>
                            <option value="5">Caminhão</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label" for="bairro">Bairro</label>
                            <div class="control">
                                <input class="input" type="text" name="bairro" id="bairro" placeholder="Bairro">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="cep">CEP</label>
                            <div class="control">
                                <input class="input" type="text" name="cep" id="cep" placeholder="Cep">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="cidade">Cidade</label>
                            <div class="control">
                                <input class="input" type="text" name="cidade" id="cidade" placeholder="Cidade">
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="estado">Estado</label>
                            <div class="control">
                                <input class="input" type="text" name="estado" id="estado" placeholder="Estado">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tipo">Tipo de imóvel</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipo" id="tipo">
                                <option value="0">Residêncial</option>
                                <option value="1">Empresarial</option>
                                <option value="2">Rural</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="telefone">Telefone de contato</label>
                    <div class="control">
                        <input class="input" type="tel" name="telefone" id="telefone" placeholder="Celular com Whatsapp">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email">E-mail de contato</label>
                    <div class="control">
                        <input class="input" type="text" name="email" id="email" placeholder="E-mail de contato">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input class="button is-primary" type="submit" value="SALVAR" id="submit" onclick="return validarFormulario()">
                    </div>
                    <div class="control">
                        <input class="button is-light" type="reset" value="LIMPAR" onclick="clearForm()">
                    </div>
                    <div class="control">
                        <input class="button is-link" type="reset" value="VOLTAR" onclick="javascript:history.go(-1);">
                    </div>
                    <div class="control">
                        <input class="button is-info" type="reset" value="MENU INICIAL" onclick="voltarAoMenuInicial()">
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
            var nome = document.getElementById("nome").value;
            var endereco = document.getElementById("endereco").value;
            var numero = document.getElementById("numero").value;
            var bairro = document.getElementById("bairro").value;
            var cep = document.getElementById("cep").value;
            var cidade = document.getElementById("cidade").value;
            var estado = document.getElementById("estado").value;
            var tipo = document.getElementById("tipo").value;
            var telefone = document.getElementById("telefone").value;
            var email = document.getElementById("email").value;

            if (nome === "" || endereco === "" || numero === "" || bairro === "" || cep === "" ||
                cidade === "" || estado === "" || tipo === "" || telefone === "" || email === "") {
                alert("Por favor, preencha todos os campos antes de salvar.");
                return false; // Impede o envio do formulário
            }

            return confirmarConferencia();
        }

        function confirmarConferencia() {
            return confirm("Deseja confirmar a conferência dos dados antes de salvar?");
        }

        function clearForm() {
            document.getElementById("nome").value = "";
            document.getElementById("endereco").value = "";
            document.getElementById("numero").value = "";
            document.getElementById("bairro").value = "";
            document.getElementById("cep").value = "";
            document.getElementById("cidade").value = "";
            document.getElementById("estado").value = "";
            document.getElementById("tipo").value = 0;
            document.getElementById("telefone").value = "";
            document.getElementById("email").value = "";
        }
    </script>
    <?php 
        include_once("../CabRod/rodape.php");
    ?>

</body>

</html>
