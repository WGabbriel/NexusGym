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
    <title>Natação na Nexus</title>
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
    <main id="natacao" class="main-pages">
        <h2>Natação na <span>Nexus!</span></h2>
        <p class="p-pages">
            Na<span> Nexus Swim Club</span>, a natação é uma experiência harmoniosa e desafiadora. Sob o teto reluzente
            da <span>piscina olímpica</span>, nadadores de todos os níveis aprimoram suas habilidades e cultivam uma
            comunidade dedicada ao estilo de vida aquático. <span>Instrutores especializados</span> guiam os
            participantes em uma jornada de bem-estar, transformando <span>cada braçada em uma celebração pessoal e
                coletiva. </span>
        </p>
    </main>
</body>
<?php

else:
    header('Location: login.php');
endif;

?>

</html>