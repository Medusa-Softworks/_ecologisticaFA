<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de receitas e despesas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/bulmaveiculo.css">
    <link rel="icon" href="../img-icon/icons/hatchback.png">
</head>
<!-- Financeiro. deve conter todas as depesas com data valor e atividade relacionada -->

<body>
    <main class="section">
        <section class="container">
            <h2 class="title is-2 has-text-centered">RECEITAS E DESPESAS</h2>
            <form action="./financeiro/cad-financeirobd.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label class="label" for="data">Data</label>
                    <div class="control">
                        <input class="input" type="date" name="data" id="dia" placeholder="Data da despesa">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="tipo">Tipo</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipo" id="tipo">
                                <option value="">Selecione uma Categoria</option>
                                <option value="1">Frete</option>
                                <option value="2">Abastecimento</option>
                                <option value="3">Alimentação</option>
                                <option value="4">Pernoite</option>
                                <option value="5">Ajudante</option>
                                <option value="5">Pedágio</option>
                                <option value="6">Diversos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="valor">Valor</label>
                    <div class="control">
                        <input class="input" type="text" name="valor" id="valor" placeholder="valor">
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
        var tipo = document.getElementById("tipo").value;
        var valor = document.getElementById("valor").value;

        if (tipo === "" || valor === "") {
            alert("Por favor, selecione uma categoria e preencha o valor antes de salvar.");
            return false; // Impede o envio do formulário
        }


        function confirmarConferencia() {
            return confirm("Deseja confirmar a conferência dos dados antes de salvar?");
        }

        function clearForm() {
        document.getElementById("tipo").value = "";
        document.getElementById("valor").value = "";
        }
    }
    </script>
</body>

</html>
