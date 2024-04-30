<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"><!-- ADICIONAR O PATH DO CSS -->
    <title>Ecologística - LOGIN</title>
</head>
<!-- Subi esse index.php após login o usuário é direcionado para o home, Carlão e Rafa depois vocês 
     aplicam css nesse arquivo ou no que vocês estão desenvolvendo, fiz esse mais pra ter ideias
    
    OBS. criei uma estrutura padrão para adicionar os arquivos de estilo, js e img, se preferirem outro
    formato só alterar .   
-->
<body>
    <div class="login">
        <form action="">
            <h1>Login</h1>
            <form action="" method="POST">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required><br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>

                <button type="submit">Entrar</button>
            </form>

            <p>Não tem uma conta? <a href="cadastro.html">Crie uma agora!</a></p>
        </form>
    </div>
</body>

</html>