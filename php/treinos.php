<?php

require 'conexao.php';

session_start();

if($_SESSION['logado'] === true):

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de treinos</title>
        <link rel="stylesheet" href="../assets/css/others.css">

    </head>

    <body>
        <nav>
            <a href="pagina_inicial.php"><img src="../assets/img/logo.svg" alt="logo de um lobo vermelho"
                    style="height: 5rem; width: 5rem;"></a>
            <h1>NEXUS </h1>
            <div class="icones-direita">
                <a href="perfil.php"><img src="../assets/img/icon-user-branco.png" alt="" class="icone-user"></a>
                <a href="logout.php"><img src="../assets/img/logout.png" alt="" class="icone-sair"></a>
            </div>
        </nav>

        <main id="main-treinos">
            <iframe id="iframe" src="iframe.php" name="iframe"></iframe>
        </main>
    </body>
    <?php

else:
    header('Location: login.php');
endif;

?>

</html>