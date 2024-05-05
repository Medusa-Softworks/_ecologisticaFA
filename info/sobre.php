<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Equipe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <strong>Equipe</strong>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="#">Sobre</a>
                <a class="navbar-item" href="#">Projetos</a>
                <a class="navbar-item" href="#">Contato</a>
                <a class="navbar-item" href="../menu.php">Voltar para o Menu Principal</a> <!-- Botão de voltar -->
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <section class="section">
        <div class="container">
            <h1 class="title is-1">Sobre a Equipe de Desenvolvimento</h1>
            <p class="subtitle is-4">Conheça nossa equipe e saiba mais sobre nosso trabalho!</p>

            <div class="team-member">
                <h2 class="title is-3">João Silva</h2>
                <p>Desenvolvedor Full-Stack, especializado em JavaScript e frameworks modernos como React e Node.js.</p>
            </div>

            <div class="team-member">
                <h2 class="title is-3">Maria Oliveira</h2>
                <p>Designer de Interfaces (UI/UX), responsável pela criação e experiência do usuário em nossos projetos.</p>
            </div>

            <div class="team-member">
                <h2 class="title is-3">José Santos</h2>
                <p>Gestor de Projetos, garantindo a entrega de soluções de alta qualidade dentro dos prazos estabelecidos.</p>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Nome da Empresa</strong> &copy; 2024. Todos os direitos reservados.
            </p>
        </div>
    </footer>
</body>
</html>