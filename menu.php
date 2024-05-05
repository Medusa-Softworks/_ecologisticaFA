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
           
                <a class="navbar-item" href="https://youtu.be/dQw4w9WgXcQ">
                
                    PÁGINA INCIAL 
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

        <!-- Informação centralizada -->
        <div class="columns is-centered">
            <div class="column is-half has-text-centered">
                <p class="title is-4">Sua informação centralizada aqui</p>
            </div>
        </div>
    </main>
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carouselContainer = document.querySelector('.carousel-container');
            const carouselItems = document.querySelectorAll('.carousel-item');
            const prevBtn = document.querySelector('.carousel-prev');
            const nextBtn = document.querySelector('.carousel-next');
            const itemCount = carouselItems.length;
            let currentIndex = 0;

            prevBtn.addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + itemCount) % itemCount;
                updateCarousel();
            });

            nextBtn.addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % itemCount;
                updateCarousel();
            });

            function updateCarousel() {
                carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
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
