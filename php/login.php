<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Configuração da página HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link rel="stylesheet" href="../assets/css/login-cadastro.css">
    <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
</head>

<body>
    <!-- Layout da página dividido em dois contêineres: esquerdo e direito -->
    <div class="conteiner-esquerdo">
        <a href="../index.html">
            <img src="../assets/img/home.svg" alt="" class="imagem-voltar">
        </a>
        <div class="bola-vermelha4"></div>
        <img src="../assets/img/mulher_corda.png" alt="" class="imagem-mulher">
    </div>

    <div class="conteiner-direito">
        <!-- Formulário de login -->
        <form action="" method="post">
            <h1>Logue-se</h1>
            <p class="p-bem-vindo">
                Seja bem-vindo(a) ao site da <span>NEXUS GYM</span>, onde a transformação pessoal é o nosso
                compromisso. <br>
                Faça o login para acessar treinos, agendamentos e fazer parte de uma comunidade dedicada.
            </p>

            <div class="ampliando-container-inputs">
                <div class="inputs">
                    <!-- Campos de entrada para matrícula e senha -->
                    <input type="text" name="matricula" placeholder="Matrícula" class="estilo-input" pattern="[0-9]{11}"
                        required
                        value="<?php if(isset($_COOKIE['matricula'])) {
                            echo $_COOKIE['matricula'];
                        } ?>">

                    <input type="password" name="senha" placeholder="Senha" class="estilo-input" required minlength="8"
                        value="<?php if(isset($_COOKIE['senha'])) {
                            echo $_COOKIE['senha'];
                        } ?>">
                </div>

                <!-- Opção de lembrar dados -->
                <div class="lembrar">
                    <label class="conteudo-checkbox">
                        <input type="checkbox" <?php if(isset($_COOKIE['matricula']) && isset($_COOKIE['senha'])) {
                            echo 'checked';
                        } ?>>
                        <div class="checkmark"></div>
                        <p>Lembrar meus dados </p>
                    </label>
                </div>

                <!-- Botão de login e link para criar conta -->
                <input type="submit" name="login" value="LOGAR" id="login">
                <p class="p-criar-conta">Ainda não possui conta? <a href="./cadastro_usuario.php">Criar conta</a></p>
            </div>
        </form>
    </div>
</body>

</html>

<?php
// Início da lógica de login ao receber o formulário enviado
if(isset($_POST['login'])) {
    // Inclui arquivos necessários
    require 'conexao.php';

    // Inicia a sessão
    session_start();

    // Define a flag de login como false
    $_SESSION['logado'] = false;

    // Obtém matrícula e senha do formulário
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    if($matricula == '00000000000' && $senha == 12345678) {
        $_SESSION['id'] = 0;

        header("location: admin.php");

    }
    // Busca no banco de dados as informações correspondentes à matrícula
    $dados = $conexao->prepare("SELECT id, senha FROM usuario WHERE matricula = :matricula;");
    $dados->bindValue(':matricula', $matricula);
    $dados->execute();

    // Verifica se a matrícula existe no banco de dados
    if($dados->rowCount() > 0) {
        // Obtém a senha do banco de dados
        $db_senha = $dados->fetchAll(PDO::FETCH_OBJ);

        foreach($db_senha as $usuario) {
            // Verifica se a senha fornecida corresponde à senha do banco de dados
            if(password_verify($senha, $usuario->senha)) {
                // Define a flag de login como true e armazena o ID do usuário na sessão
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $usuario->id;

                // Verifica se a opção "lembrar dados" está marcada e configura cookies
                if(isset($_POST['lembrar'])) {
                    setcookie('matricula', $matricula);
                    setcookie('senha', $senha);
                } else {
                    setcookie('matricula', '');
                    setcookie('senha', '');
                }

                // Redireciona para a página inicial
                header('Location: pagina_inicial.php');
            } else {
                // Chama função em scripts.php se a senha não corresponder
                echo "<script>
                        alert('Senha Incorreta')
                    </script>";
            }
        }
    } else {
        // Chama função em scripts.php se a matrícula não corresponder
        echo "<script>
                alert('Usuário não Encontrado')
            </script>";
    }
}
?>