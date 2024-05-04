<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Serviços</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../css/design.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-dist@1.13.1/ui/i18n/datepicker-pt-BR.js"></script>
</head>

<body>
    <?php include_once('../cabecalho.php'); ?>

    <main>
        <section class="section">
            <h2 class="title is-2 has-text-centered">Gerenciamento de Serviços</h2>
            <div class="container">
                <form action="./cad-servicobd.php" method="POST" enctype="multipart/form-data">
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="id">Número do Serviço</label>
                            <input class="input" type="text" name="id" id="id" placeholder="Informe o Número:">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="num_cliente">Código do Cliente</label>
                            <input class="input" type="text" name="num_cliente" id="num_cliente" placeholder="Informe o Código:">
                            <a href="../cliente/view-cliente.php" target="_blank">Consultar</a>
                        </div>
                        <div class="column">
                            <label class="label" for="nome_cliente">Nome do Cliente</label>
                            <input class="input" type="text" name="nome_cliente" id="nome_cliente" placeholder="Nome do Cliente:">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="num_cachorro">Código do Transporte</label>
                            <input class="input" type="text" name="num_cachorro" id="num_cachorro" placeholder="Informe o Código:">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="tipo">Status</label>
                            <div class="select">
                                <select name="tipo" id="tipo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="dataInicio">Data de Início</label>
                            <input class="input datepicker" type="text" name="dataInicio" id="dataInicio">
                        </div>
                        <div class="column">
                            <label class="label" for="dataFim">Data de Fim</label>
                            <input class="input datepicker" type="text" name="dataFim" id="dataFim">
                        </div>
                        <div class="column">
                            <label class="label" for="diasTrabalhados">Dias Trabalhados</label>
                            <input class="input" type="text" name="diasTrabalhados" id="diasTrabalhados" readonly>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field is-grouped">
                                <p class="control">
                                    <input class="button is-info" type="submit" value="SALVAR" id="submit" onclick="return confirmarConferencia()">
                                </p>
                                <p class="control">
                                    <input class="button is-danger" type="reset" value="LIMPAR" onclick="clearForm()">
                                </p>
                                <p class="control">
                                    <input class="button is-primary" type="reset" value="VOLTAR" onclick="javascript:history.go(-1);">
                                </p>
                                <p class="control">
                                    <input class="button is-link" type="reset" value="MENU INICIAL" onclick="voltarAoMenuInicial()">
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                onSelect: function() {
                    var dataInicio = $("#dataInicio").datepicker("getDate");
                    var dataFim = $("#dataFim").datepicker("getDate");

                    if (dataInicio && dataFim) {
                        var diffTime = Math.abs(dataFim.getTime() - dataInicio.getTime());
                        var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                        $("#diasTrabalhados").val(diffDays);
                    }
                }
            });

            function confirmarConferencia() {
                return confirm("Confira todos os dados antes de salvar");
            }

            function clearForm() {
                document.getElementById("id").value = "";
                document.getElementById("num_cliente").value = "";
                document.getElementById("nome_cliente").value = "";
                document.getElementById("num_cachorro").value = "";
                document.getElementById("nome_cachorro").value = "";
                document.getElementById("dataInicio").value = "";
                document.getElementById("dataFim").value = "";
                document.getElementById("diasTrabalhados").value = "";
            }

            function voltarAoMenuInicial() {
                window.location.href = "../menu.php";
            }
        });
    </script>

    <?php include_once('../rodape.php'); ?>

</body>

</html>

