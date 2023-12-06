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
        <title>Aeróbicos na Nexus</title>
        <link rel="stylesheet" href="../assets/css/others.css">
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
    </head>

    <body>
        <header class="header-pages">
            <nav>
                <a href="pagina_inicial.php"><img src="../assets/img/logo.svg" alt="logo de um lobo vermelho"
                        style="height: 5rem; width: 5rem;"></a>
                <h1>NEXUS </h1>
                <div class="icones-direita">
                    <a href="perfil.php"><img src="../assets/img/icon-user-branco.png" alt="" class="icone-user"></a>
                    <a href="logout.php"><img src="../assets/img/logout.png" alt="" class="icone-sair"></a>
                </div>
        </header>
        <main id="profissionais" class="main-pages">
            <h2>Profissionais da <span>Nexus!</span></h2>
            <p class="p-pages">Aqui, os aeróbicos <span>transcendem</span> a mera atividade física, transformando-se em uma
                experiência revigorante e
                motivadora. Com uma variedade de aulas para todos os níveis, a <span>Nexus Gym</span> não apenas promove a
                saúde física,
                mas também constrói uma <span>comunidade dedicada ao bem-estar</span> e à celebração do movimento.</p>
        </main>
    </body>
    <?php

else:
    header('Location: login.php');
endif;

?>

</html>