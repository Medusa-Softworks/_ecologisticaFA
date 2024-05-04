<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./css/design.css">
</head>

<body>
    <?php
    include_once("./cabecalho-rodape/cabecalho.php");
    ?>
    <main>
        <!-- O menu criado deve ser do tipo dropdown para facilitar a navegação pelo cliente -->
        <div class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    ECOLOGÍSTICA <img src="./sistema/img-icon/icons/caminhao.png" width="32px" style="margin-left: 10px;">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="dropdown-menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="dropdown-menu" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            CADASTRO
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="./usuario/cad-usuario.php">USUÁRIOS</a>
                            <a class="navbar-item" href="./cliente/cad-cliente.php">CLIENTES</a>
                            <a class="navbar-item" href="./fornecedor/cad-fornecedor.php">FORNECEDORES</a>
                            <a class="navbar-item" href="./cachorro/cad-cachorro.php">CACHORROS</a>
                            <a class="navbar-item" href="./servico/cad-servico.php">SERVIÇOS</a>
                            <a class="navbar-item" href="./compras/cad-compras.php">COMPRAS</a>
                        </div>
                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            CONSULTA
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="./usuario/view-usuario.php">USUÁRIOS</a>
                            <a class="navbar-item" href="./cliente/view-cliente.php">CLIENTES</a>
                            <a class="navbar-item" href="./fornecedor/view-fornecedor.php">FORNECEDORES</a>
                            <a class="navbar-item" href="./cachorro/view-cachorro.php">CACHORROS</a>
                            <a class="navbar-item" href="#">SERVIÇOS</a>
                            <a class="navbar-item" href="#">ESTOQUE</a>
                            <a class="navbar-item" href="#">FATURAMENTO</a>
                        </div>
                    </div>

                    <a class="navbar-item" href="#">
                        FATURAMENTO
                    </a>

                    <a class="navbar-item" href="#">
                        RELATÓRIOS
                    </a>

                    <a class="navbar-item" href="#">
                        SOBRE
                    </a>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item" href="#" onclick="confirmarFecharSistema()">
                        SAIR
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php 
    include_once("./CabRod/rodape.php");
    ?>

    <script>
        function confirmarFecharSistema() {
            var confirmacao = confirm("Deseja fechar o sistema?");

            if (confirmacao) {
                alert("Antes de sair, verifique se foi realizado o backup.");
                window.location.href = "about:blank";
            } else {
                return false; // Impede a execução do link
            }
        }
    </script>
</body>

</html>
