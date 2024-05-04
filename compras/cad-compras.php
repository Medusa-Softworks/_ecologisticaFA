<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    
</head>
<body>
    <?php
        include_once('./cabecalho.php');
    ?>

    <main class="section">
        <div class="container">
            <h2 class="title is-2 has-text-centered"> CADASTRO DE COMPRAS</h2>
            <form action="./cliente/cad-clientebd.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label for="nome" class="label">Nome completo</label>
                    <div class="control">
                        <input type="text" name="nome" id="nome" class="input" placeholder="Nome do cliente">
                    </div>
                </div>

                <div class="field">
                    <label for="endereco" class="label">Endereço completo</label>
                    <div class="control">
                        <input type="text" name="endereco" id="endereco" class="input" placeholder="Endereço completo">
                    </div>
                </div>

                <div class="field">
                    <label for="tipo" class="label">Tipo de imóvel</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipo" id="tipo">
                                <option value="0">Residência</option>
                                <option value="1">Empresa</option>
                                <option value="2">Rural</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label for="telefone" class="label">Telefone de contato</label>
                    <div class="control">
                        <input type="tel" name="telefone" id="telefone" class="input" placeholder="Celular com WhatsApp">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label">E-mail de contato</label>
                    <div class="control">
                        <input type="email" name="email" id="email" class="input" placeholder="E-mail de contato">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input type="reset" value="VOLTAR" onclick="javascript:history.go(-1);" class="button is-danger">
                    </div>
                    <div class="control">
                        <input type="reset" value="LIMPAR" onclick="clearForm()" class="button is-warning">
                    </div>
                    <div class="control">
                        <input type="submit" value="SALVAR" id="submit" onclick="return validarFormulario()" class="button is-primary">
                    </div>
                    <div class="control">
                        <input type="reset" value="MENU INICIAL" onclick="voltarAoMenuInicial()" class="button is-info">
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
            var tipo = document.getElementById("tipo").value;
            var telefone = document.getElementById("telefone").value;
            var email = document.getElementById("email").value;

            if (nome === "" || endereco === "" || tipo === "" || telefone === "" || email === "") {
                alert("Por favor, preencha todos os campos antes de salvar.");
                return false;
            }

            return confirmarConferencia();
        }

        function confirmarConferencia() {
            return confirm("Deseja confirmar a conferência dos dados antes de salvar?");
        }

        function clearForm() {
            document.getElementById("nome").value = "";
            document.getElementById("endereco").value = "";
            document.getElementById("tipo").selectedIndex = 0;
            document.getElementById("telefone").value = "";
            document.getElementById("email").value = "";
        }
    </script>

    <?php 
        include_once('../rodape.php');
    ?>
</body>
</html>
