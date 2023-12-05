<?php

require 'conexao.php';

session_start();
if (($_SESSION['logado'] === true)) :

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
    <main id="dieta" class="main-pages">
        <h2>Dieta da <span>Nexus!</span></h2>
        <p class="p-pages">A <span>dieta</span> desempenha um papel crucial na <span>saúde</span> e
            <span>desempenho</span> dos atletas. Uma alimentação
            adequada fornece os nutrientes essenciais necessários para otimizar a energia, promover a
            <span>recuperação</span>,
            prevenir lesões e apoiar o crescimento muscular.
            Em resumo, uma dieta equilibrada e personalizada é <span>essencial</span> para apoiar a saúde geral e o
            desempenho
            atlético. <span>Consultar</span> um nutricionista esportivo ou profissional de saúde é a <span>melhor
                abordagem</span> para
            desenvolver um plano alimentar adaptado às necessidades específicas de cada atleta. <span>Consulte</span> os
            nutricionistas da <span>NEXUS GYM</span> para uma melhor alimentação e dieta personalizada! Envie uma
            <span>mensagem</span> e nossa equipe entrará em contato por <span>email!</span></p>
        <a href="./contato.php">CONTATAR NUTRICIONISTA</a>
    </main>
</body>
<?php

else:
    header('Location: login.php');
endif;

?>
</html>