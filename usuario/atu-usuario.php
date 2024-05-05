<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização dos Usuários</title>
    <link rel="stylesheet" href="./css/bulmacadusuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<?php
        require_once("./atu-usuario-view.php");
        ?>
    <main>
        <section class="section">
            <div class="container">
                <h2 class="title is-2 has-text-centered">Consulta e manutenção de dados: Usuários</h2>
                <form action="./atu-usuariobd.php" method="POST" enctype="multipart/form-data">
                <input type="hidden"
                name="id" 
                id="id" 
                value="<?=$resultado["id"];?>">

                    <div class="field">
                        <label class="label" for="nome">Nome Completo:</label>
                        <div class="control">
                            <input class="input" type="text" name="nome" id="nome" placeholder="Digite seu Nome:"
                            value="<?$resultado["nome"];?>">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="rua">Rua</label>
                        <div class="control">
                            <input class="input" type="text" name="rua" id="rua" placeholder="Digite a Rua:"
                            value="<?$resultado["rua"];?>">>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <label class="label" for="numero">Número da Residência</label>
                            <input class="input" type="text" name="numero" id="numero" placeholder="Número da Residência:"
                            value="<?$resultado["numero"];?>">>
                        </div>
                        <div class="control">
                            <label class="label" for="bairro">Bairro</label>
                            <input class="input" type="text" name="bairro" id="bairro" placeholder="Informe o Bairro:"
                            value="<?$resultado["bairro"];?>">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <label class="label" for="cep">CEP</label>
                            <input class="input" type="text" name="cep" id="cep" placeholder="CEP da sua Região:"
                            value="<?$resultado["cep"];?>">
                        </div>
                        <div class="control">
                            <label class="label" for="cidade">Cidade</label>
                            <input class="input" type="text" name="cidade" id="cidade" placeholder="Informe a Cidade:"
                            value="<?$resultado["cidade"];?>">
                        </div>
                        <div class="control">
                            <label class="label" for="estado">Estado</label>
                            <input class="input" type="text" name="estado" id="estado" placeholder="Estado que Reside:"
                            value="<?$resultado["estado"];?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="telefone">Telefone para Contato</label>
                        <div class="control">
                            <input class="input" type="tel" name="telefone" id="telefone" placeholder="Informe seu Número:"
                            value="<?$resultado["telefone"];?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="email">E-mail para Contato</label>
                        <div class="control">
                            <input class="input" type="text" name="email" id="email" placeholder="exemplo@exemplo.com"
                            value="<?$resultado["email"];?>">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <label class="label" for="senha">Senha</label>
                            <input class="input" type="password" name="senha" id="senha" placeholder="Senha com 8 dígitos:"
                            value="<?$resultado["senha"];?>">
                        </div>
                        <div class="control">
                            <label class="label" for="senha1">Confirmação de Senha</label>
                            <input class="input" type="password" name="senha1" id="senha1" placeholder="Repita a senha:"
                            value="<?$resultado["senha1"];?>">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input class="button is-success" type="submit" value="Cadastrar">
                        </div>
                        <div class="control">
                            <input class="button is-danger" type="reset" value="Limpar">
                        </div>
                        <div class="control">
                            <input class="button is-primary-light" type="button" value="Voltar" onclick="javascript:history.go(-1);">
                        </div>
                        <div class="control">
                            <input class="button is-link" type="button" value="Página Inicial" onclick="voltarAoMenuInicial()">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

 <script>
 function voltarAoMenuInicial() {
 window.location.href = '../menu.php'; 
    }
    function validarFormulario() {
  var nome = document.getElementById("nome").value;
  var endereco = document.getElementById("rua").value;
  var endereco = document.getElementById("numero").value;
  var endereco = document.getElementById("bairro").value;
  var endereco = document.getElementById("cidade").value;
  var endereco = document.getElementById("cep").value;
  var endereco = document.getElementById("estado").value;
  var telefoneo = document.getElementById("telefone").value;
  var email = document.getElementById("email").value;
  var senha = document.getElementById("senha").value;
  var senha1 = document.getElementById("senha1").value;

  if (nome === "" || rua === "" || numero === "" ||bairro === "" 
  ||cep === "" ||cidade === "" ||estado === "" ||telefone === "" 
  || email === "" || senha === "" || senha1 === "") {
    alert("Por favor, preencha todos os campos antes de salvar!");
    return false; // Impede o envio do formulário
  }

  return confirmarConferencia();
}

function confirmarConferencia() {
  return confirm("Confira todos os dados antes de salvar!");
}

function clearForm() {
  document.getElementById("nome").value = "";
  document.getElementById("rua").value = "";
  document.getElementById("numero").value = "";
  document.getElementById("bairro").value = "";
  document.getElementById("cidade").value = "";
  document.getElementById("cep").value = "";
  document.getElementById("estado").value ="";
  document.getElementById("telefone").value = "";
  document.getElementById("email").value = "";
  document.getElementById("senha").value = "";
  document.getElementById("senha1").value = "";
}
        </script>

        </form>
       
    </div>

   
</main>



</body>
</html> 