<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecologística - LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 
    <link rel="icon" href="./sistema/img-icon/icons/login-seguro.png">
    <link rel="stylesheet" href="./assets/css/design.css">
</head>
<body>
<div class="menu">
   <div class="header">
        <h1 class="title is-size-2 has-text-centered">ECOLOGÍSTICA <img src="./img-icon/icons/caminhao.png" width="64px"></h1>
    </div>
</div>
<section class="section">
    <div class="container">
        <h3 class="title is-3 has-text-centered">Seja bem-vindo à Ecologística! <br> Sistema inteligente para gerenciamento de fretes</h3>
        <form action="./sistema/menu.php" method="POST">
            <div class="field">
                <label for="usuario" class="label">Usuário Cadastrado</label>
                <div class="control">
                    <input type="text" name="usuario" id="usuario" class="input" placeholder="Digite seu Usuário:" required autofocus>
                </div>
            </div>
            <div class="field">
                <label for="senha" class="label">Senha</label>
                <div class="control">
                    <input type="password" name="senha" id="senha" class="input" placeholder="Digite sua senha de 8 dígitos:" required>
                </div>
            </div>
            <div class="field is-grouped is-justify-content-center">
                <div class="control">
                    <input type="submit" value="ENTRAR" class="button is-primary" onclick="confirmarEntrada()">
                </div>
                <div class="control">
                    <input type="reset" value="LIMPAR" class="button is-light">
                </div>
                <div class="control">
                    <button class="button is-danger" onclick="confirmarSaida()">SAIR</button>
                </div>
                <div class="control">
                    <button id="google" class="button is-info"><img src="./img-icon/icons/google.png"></button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include_once("./cabecalho-rodape/rodape.php"); ?>
  
    </main>

    <script> //COMENTÁRIO


        /*APENAS UM COMUNICADO
        
        1)O ÍCONE DO GOOGLE PRECISA DE AJUSTE

        2)INCLUI O CAMINHO PARA O CABEÇALHO E RORAPÉ E DEU RUIM NESSE SCRIPT ABAIXO
        PEDI PARA O GPT CORRIGIR E ELE ME PASSOU ESSE CÓDIGO:

        //  <script src="https://apis.google.com/js/platform.js" async defer>< - /script> reitrar "-"
            <script>
    function confirmarEntrada(usuario) {
        if (confirm("Desejamos a você, um ótimo trabalho, " + usuario + "!")) {
            window.open('', '_self', '');
            window.close();
        }
    }

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        var id_token = googleUser.getAuthResponse().id_token;

        // Send the id_token to your server and exchange it for an access token and refresh token
    }

    function confirmarSaida() {
        if (confirm("Deseja sair do aplicativo?")) {
            window.open('', '_self', '');
            window.close();
        }
    }

    function renderizarBotao() {
        gapi.signin2.render('signin-button', {
            'scope': 'profile email',
            'width': 240,
            'height': 50,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSignIn
        });
    }

    // Verifica se a biblioteca gapi está carregada
    if (typeof gapi !== 'undefined') {
        renderizarBotao();
    } else {
        // Se não estiver carregada, espera até que esteja disponível
        window.onload = renderizarBotao;
    }
< - /script> reitrar o "-"

            NÃO SUBSTITUI O CÓDIGO PARA NÃO CAUSAR PROBLEMAS MAIORES

        */
    </script>


    <script>
        function confirmarEntrada(usuario) {
        if (confirm("Desejamos a você, um ótimo trabalho, " + usuario + "!")) {
            window.open('', '_self', '');
            window.close();
        }
    }
    src="https://apis.google.com/js/platform.js" async defer
     function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;


    // Send the id_token to your server and exchange it for an access token and refresh token
}

gapi.signin2.render('signin-button', {
    'scope': 'profile email',
    'width': 240,
    'height': 50,
    'longtitle': true,
    'theme': 'dark',
    'onsuccess': onSignIn
});
        function confirmarSaida() {
            if (confirm("Deseja sair do aplicativo?")) {
                window.open('', '_self', '');
                window.close();
            }
        }
    </script>
    

</body>
</html>