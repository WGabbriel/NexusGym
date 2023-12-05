<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Configuração da página HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
    <link rel="stylesheet" href="../assets/css/login-cadastro.css">
    <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
</head>

<body class="cadastro">
    <!-- Layout da página dividido em dois contêineres: esquerdo e direito -->
    <div class="conteiner-esquerdo">
        <a href="../index.html">
            <img src="../assets/img/home.svg" alt="" class="imagem-voltar">
        </a>
        <div class="bola-vermelha4"></div>
        <img src="../assets/img/mulher_corda.png" alt="" class="imagem-mulher">
    </div>

    <div class="conteiner-direito">
        <div>
            <!-- Formulário de cadastro -->
            <form action="" method="post">
                <h1>Cadastre-se</h1>
                <p class="p-bem-vindo">
                    Seja bem-vindo(a) ao site da <span>NEXUS GYM</span>, onde a transformação pessoal é o nosso
                    compromisso. <br>
                    Cadastre-se e faça parte da comunidade Nexus e alcance seus objetivos de forma eficiente e motivadora.
                </p>
                <div class="ampliando-container-inputs">
                    <!-- Campos de entrada para nome, CPF, senha e confirmação de senha -->
                    <input type="text" name="nome" placeholder="Nome" class="estilo-input" pattern="[A-Za-zÀ-ÿ\s]+" required>
                    <input type="text" name="cpf" placeholder="CPF" class="estilo-input" pattern="[0-9]{11}" required>
                    <input type="password" name="senha" placeholder="Digite sua senha" minlength="8" class="estilo-input" required>
                    <input type="password" name="confsenha" placeholder="Confirme sua senha" minlength="8" class="estilo-input" required>
                    <input type="submit" name="cadastro" value="CADASTRAR" id="cadastro">
                    <p class="p-criar-conta">Já possui conta? <a href="../php/login.php">Logue-se</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php
// Importação de arquivos necessários
require 'conexao.php'; 
// Definindo variável booleana como verdadeira
$cadastrado = false;

// Verifica se o formulário de cadastro foi enviado/submetido
if (isset($_POST['cadastro'])) {

    // Verifica se as senhas fornecidas coincidem
    if ($_POST['senha'] == $_POST['confsenha']) {

        // Verifica se o usuário já existe no banco de dados
        if (existe_usuario($_POST['cpf'])) {
            // Chama função em scripts.php para exibir aviso
               echo "
        <script>
            alert('Usuário já existe!')
        </script>
        ";
        } else {
            // Obtém e sanitiza os dados do formulário
            $nome = trim($_POST['nome']); // Removendo espaços em branco do começo e final dos nomes dos clientes e armazenando em uma variável
            $cpf = $_POST['cpf']; // Armazenando CPF do cliente em uma variável
            $matricula = $_POST['cpf']; // Armazenando matricula do cliente em uma variável
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Gerando uma codificação da senha

            // Prepara SQL e executa a inserção no banco de dados
            // Primeiros valores: sql / segundos valores: referencial das variáveis
            $cadastro = $conexao->prepare(
                "INSERT INTO usuario (nome, cpf, matricula, senha) VALUES (:nome, :cpf, :matricula, :senha);"
            ); 
             //Cadastro é o objeto de declaração, bind value associa as varíaveis aos parametros do sql
            $cadastro->bindValue(":nome", $nome);
            $cadastro->bindValue(":cpf", $cpf);
            $cadastro->bindValue(":matricula", $matricula);
            $cadastro->bindValue(":senha", $senha);

            try {
                 /* EXECUTA A INSERÇÃO */
                $cadastro->execute();
                 // Define a flag de cadastro como true
                $cadastrado = true;
            } catch (PDOException $error) {
                
                log_txt("Erro ao cadastrar: " . $error->getMessage());
                echo "<script>
                        alert('Erro ao cadastrar!');
                    </script>";
            }
        }
    } else {
        // Exibe um alerta se as senhas não coincidirem
        echo "<script>
                alert('Senhas não coincidem')
            </script>";
    }
}

// Exibe um alerta se o usuário foi cadastrado com sucesso
if ($cadastrado) {
    echo "<script>
        alert('Cadastrado')
    </script>";
}  
?>
