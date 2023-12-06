<?php
//Incluindo a conexão com o banco de dados
require_once 'conexao.php';

//Iniciando a sessão
session_start();

//Verificando se o usuário está logado
if($_SESSION['logado'] === true):

    //Obtendo o ID do usuário
    $id = $_SESSION['id'];

    //Preparando a consulta SQL para obter os dados do perfil do usuário
    $dados_perfil = $conexao->prepare("SELECT nome, cpf, matricula FROM usuario WHERE id = :id;");
    $dados_perfil->bindValue(':id', $id);
    $dados_perfil->execute();

    //Armazenando os dados do perfil do usuário em um objeto
    $perfil = $dados_perfil->fetch(PDO::FETCH_OBJ);

    //Atualizando a sessão com os dados do perfil do usuário
    foreach($perfil as $indice => $valor) {
        $_SESSION["$indice"] = $valor;
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/perfil.css">
    </head>

    <body>
        <header>
            <nav>
                <a href="pagina_inicial.php" class="nav-item">
                    <h1>NEXUS </h1>
                </a>
                <a href="logout.php" class="nav-item"><img src="../assets/img/logout.png" alt=""></a>
            </nav>
        </header>
        <main>
            <div class="left-grid">
                <div>
                    <div id="grid-image-item-1">
                        <div id="grid-image-item-2">
                            <img src="../assets/img/logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <h2>
                        <?php echo $_SESSION['nome'] ?>
                    </h2>
                    <p>Gym Wolf</p>
                </div>
            </div>
            <div class="right-grid">
                <div>
                    <h3>Dados atuais</h3>

                    <div class="label-box"><img src="../assets/img/user-vermelho.png" alt="">Nome completo</div>
                    <div class="input-box">
                        <?php echo $_SESSION['nome'] ?>
                    </div>

                    <div class="label-box"><img src="../assets/img/user-vermelho.png" alt="">Matrícula</div>
                    <div class="input-box">
                        <?php echo $_SESSION['matricula'] ?>
                    </div>
                </div>
                <div>
                    <h3>Alterar dados</h3>
                    <form action="" method="post">
                        <input type="text" name="senha" placeholder="Nova senha">
                        <button type="submit" name="alterar"><span class="botao-texto">Alterar</span></button>
                    </form>
                    <form action="" method="post">
                        <button type="submit" name="apagar"><span class="botao-texto">APAGAR CONTA</span></button>
                    </form>
                </div>
            </div>
        </main>
    </body>
    <?php
    //Se o usuário não estiver logado, redireciona para a página de login
else:
    header("Location: login.php");
endif;

//Verificando se o botão "Apagar Conta" foi clicado
if(isset($_POST['apagar'])) {

    //Obtendo o ID do usuário
    $id = $_SESSION['id'];

    //Preparando a consulta SQL para apagar o usuário
    $deletar = $conexao->prepare("DELETE FROM usuario WHERE id = :id");
    $deletar->bindValue(':id', $id);

    try {
        $deletar->execute();
        //Redirecionando o usuário para a página inicial
        header("Location: logout.php");
    } catch (PDOException $error) {
        log_txt("Erro ao deletar: ".$error->getMessage());
        echo "<script>
        alert('Erro ao deletar!');
    </script>";
    }
}

$alterado = false;
if(isset($_POST['alterar'])) {
    $senha = password_hash(
        $_POST['senha'],
        PASSWORD_DEFAULT
    );

    $alterar = $conexao->prepare("UPDATE usuario SET senha = :senha WHERE id = :id");
    $alterar->bindValue(":senha", $senha);
    $alterar->bindValue(":id", $_SESSION['id']);

    try {
        $alterar->execute();
        $alterado = true;
    } catch (PDOException $error) {
        log_txt("Erro ao alterar dados: ".$error->getMessage());
        echo "<script>
        alert('Erro ao alterar dados!');
    </script>";
    }
}
if($alterado) {
    echo "<script>
                alert('SENHA ALTERADA COM SUCESSO')
            </script>";
}
?>

</html>