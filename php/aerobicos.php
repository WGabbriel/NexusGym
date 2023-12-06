<?php

/*Requisitando a página conexão.php*/
require 'conexao.php';

/* iniciando uma sessão que armazena os dados dos usuários*/
session_start();
// Se a variavel de sessão 'logado' retornar o valor true, exibe a página html
if($_SESSION['logado'] === true):

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aeróbicos na Nexus</title>
        <!-- chamando o arquivo css e o arquivo de ícone -->
        <link rel="stylesheet" href="../assets/css/others.css">
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
    </head>

    <body>
        <!-- nomeando a classe -->
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
        <main id="aerobicos" class="main-pages">
            <h2>Aeróbicos na <span>Nexus!</span></h2>
            <p class="p-pages">Aqui, os aeróbicos <span>transcendem</span> a mera atividade física, transformando-se em uma
                experiência revigorante e
                motivadora. Com uma variedade de aulas para todos os níveis, a <span>Nexus Gym</span> não apenas promove a
                saúde física,
                mas também constrói uma <span>comunidade dedicada ao bem-estar</span> e à celebração do movimento.</p>
        </main>
    </body>
    <?php
    // Senão, redirecona para a pagina de login
else:
    // redireciona pra página login.php
    header('Location: login.php');
endif;

?>

</html>