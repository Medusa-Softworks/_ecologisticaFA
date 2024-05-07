<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="icon" href="./img-icon/icons/casa.png">
    <link rel="stylesheet" href="./css/bulmamenu.css">

</head>
<body>
    <main>
        <div class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
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
                            <a class="navbar-item" href="./frete/cad-frete.php">FRETE</a>
                            <a class="navbar-item" href="./contratante/cad-contratante.php">CONTRATANTE</a>
                            <a class="navbar-item" href="./financeiro/cad-financeiro.php">FINANCEIRO</a>
                            <a class="navbar-item" href="./veiculo/cad-veiculo.php">VEÍCULOS</a>
                        </div>
                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            CONSULTA
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="./usuario/view-usuario.php">USUÁRIOS</a>
                            <a class="navbar-item" href="./frete/view-frete.php">FRETE</a>
                            <a class="navbar-item" href="./financeiro/view-financeiro.php">FINANCEIRO</a>
                            <a class="navbar-item" href="./contratante/view-contratante.php">CONTRATANTE</a>
                            <a class="navbar-item" href="./veiculo/view-veiculo.php">VEÍCULO</a>
                           
                        </div>
                    </div>

                    <a class="navbar-item" href="#">
                        FINANCEIRO
                    </a>

                    <a class="navbar-item" href="#">
                        RELATÓRIOS
                    </a>

                    <a class="navbar-item" href="./info/sobre.php">SOBRE A EQUIPE</a>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item" href="#" onclick="confirmarFecharSistema()">
                        SAIR
                    </a>
                </div>

                <!-- Barra azul para a transição de menu -->
                <div class="navbar-menu-bar"></div>
            </div>
        </div>

        <!-- Informação centralizada -->
        <div class="columns is-centered">
            <div class="column is-half has-text-centered">
                <p class="title is-4">Bem-vindo à página Inicial!</p>
            </div>
        </div>

        <!-- Mensagem informativa centralizada -->
        <div class="columns is-centered">
            <div class="column is-half">
                <article class="message is-info">
                    <div class="message-header">
                        <p>Mensagem dos Desenvolvedores</p>
                    </div>
                    <div class="message-body">
                        O sistema está em fase de desenvolvimento inicial, mas em breve tudo estará pronto!
                        <strong>O ECOLOGÍSTICA</strong>, vem para auxiliar trabalhadores fretistas, definindo melhores
                        rotas e maneiras eficientes de preservar o meio ambiente com seu veículo de entrega. A <strong>equipe de desenvolvimento</strong>
                        está trabalhando arduamente neste projeto, tanto na parte da engenharia quanto na parte do desenvolvimento em si.
                        Queremos que você acompanhe nosso trabalho de pertinho, e juntos, vamos melhorar a nossa qualidade de vida!
                    </div>
                </article>
            </div>
        </div>

        <div class="columns is-centered">
            <div class="column is-half">
                <article class="message">
                    <div class="message-body">
                        <strong><p>Redes Sociais - Equipe de Desenvolvimento</p></strong>
                    </div>
                    <div class="message-body">
                        Estamos presentes em várias redes sociais! Siga-nos para ficar por dentro das últimas novidades e atualizações do nosso projeto.
                        <br>
                        <strong>Siga-nos nas redes sociais:</strong>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">Facebook</a>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">Instagram</a>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">LinkedIn</a>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">Twitter</a>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">YouTube</a>
                        <br>
                        <a href="https://www.pudim.com.br" target="_blank">Pinterest</a>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownMenu = document.getElementById('dropdown-menu');
            const navbarMenu = document.querySelector('.navbar-menu');
            const navbarMenuBar = document.createElement('div');
            navbarMenuBar.classList.add('navbar-menu-bar');
            navbarMenu.appendChild(navbarMenuBar);

            dropdownMenu.addEventListener('mouseenter', function () {
                const menuWidth = navbarMenu.offsetWidth;
                navbarMenuBar.style.width = `${menuWidth}px`;
            });

            dropdownMenu.addEventListener('mouseleave', function () {
                navbarMenuBar.style.width = '0';
            });
        });

        function confirmarFecharSistema() {
            var confirmacao = confirm("Deseja fechar o sistema?");

            if (confirmacao) {
                alert("Antes de sair, verifique se foi realizado o backup das informações.");
                window.location.href = "index.php";
            } else {
                return false; // Impede a execução do link
            }
        }
    </script>
</body>
</html>