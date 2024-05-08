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
            <h2 class="title is-2 has-text-centered">Cadastro de fretes</h2>
            <div class="container">
                <form action="./cad-fretebd.php" method="POST" enctype="multipart/form-data">
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="id">Data</label>
                            <input class="input" type="text" name="data" id="data" placeholder="Data do carregamento:">
                        </div>
                        
                        <div class="column">
                            <label class="label" for="valor">Valor</label>
                            <input class="input" type="text" name="valor" id="valor" placeholder="Valor:">
                        </div>

                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="id">Código do contratante</label>
                            <input class="input" type="text" name="id_contratante" id="id" placeholder="Informe o Código:">
                            <a href="../contratante/view-contratante.php" target="_blank">Consultar</a>
                        </div>

                        <!-- NÃO SEI SE VAI FUNCIONAR PEGUEI DA INTERNET -->

                        <form action="processar.php" method="POST">
                            <input type="hidden" name="id_contratante" value="" id="hidden_id_contratante">
                            <input type="submit" value="Enviar">
                        </form>

                        <div class="column">
                            <label class="label" for="nome_contratante">Nome</label>
                            <input class="input" type="text" name="nome_contratante" id="nome_contratante" placeholder="Nome">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="tipo">Tipo de frete</label>
                            <input class="input" type="text" name="tipo" id="tipo" placeholder="Tipo de frete:">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="km_carga">Km da Carga</label>
                            <input class="input" type="decimal" name="km_carga" id="km_carga" placeholder="KM da carga:">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="km_descarga">Km da descarga</label>
                            <input class="input" type="decimal" name="km_descarga" id="km_descarga" placeholder="KM da descarga:">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label class="label" for="km_total">Distância Total</label>
                            <input class="input" type="decimal" name="km_total" id="km_total">
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

        
            // Função para obter o ID do contratante e definir o valor do campo hidden_id_contratante
            function setIdContratante() {
                var idContratanteInput = document.getElementById("id");
                var hiddenIdContratanteInput = document.getElementById("hidden_id_contratante");
                hiddenIdContratanteInput.value = idContratanteInput.value;
            }

            // Associar a função setIdContratante ao evento de clique do link "Consultar"
            var consultarLink = document.querySelector('a[href="../cliente/view-cliente.php"]');
            consultarLink.addEventListener("click", setIdContratante);

    </script>

    <?php include_once('../rodape.php'); ?>

</body>

</html>

