<?php
//Incluindo a conexão com o banco de dados
require_once 'conexao.php';

//Iniciando a sessão
session_start();

//Verificando se o usuário está logado
if($_SESSION['logado'] === true):

    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <!-- Configuração da página HTML -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página inicial</title>
        <link rel="stylesheet" href="../assets/css/others.css">
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
    </head>

    <body>
        <!-- Cabeçalho da página com o logo, título e ícones de perfil e logout -->
        <nav>
            <a href="pagina_inicial.php"><img src="../assets/img/logo.svg" alt="logo de um lobo vermelho"
                    style="height: 5rem; width: 5rem;"></a>
            <h1>NEXUS </h1>
            <div class="icones-direita">
                <a href="perfil.php"><img src="../assets/img/icon-user-branco.png" alt="" class="icone-user"></a>
                <a href="logout.php"><img src="../assets/img/logout.png" alt="" class="icone-sair"></a>
            </div>
        </nav>

        <main>
            <!-- Seção principal com links para diferentes páginas -->
            <section class="primeira-sec">
                <a href="treinos.php">
                    <!-- Bloco representando a seção de treinos -->
                    <div class="treinos">
                        <div class="titulo">
                            <h3>SEUS TREINOS</h3>
                        </div>
                        <div class="img1"><img src="../assets/img/icon-treinos.png" alt=""></div>
                    </div>
                </a>
            </section>

            <section class="segunda-sec">
                <a href="dietas.php">
                    <!-- Bloco representando a seção de dietas -->
                    <div class="dietas">
                        <div class="titulo">
                            <h3>DIETA</h3>
                        </div>
                        <div class="img1"><img src="../assets/img/icon-dieta.png" alt=""></div>
                    </div>
                </a>
            </section>

            <!-- Seção com duas subseções menores -->
            <div class="section-menores">
                <section class="terceira-sec">
                    <a href="natacao.php">
                        <!-- Bloco representando a seção de natação -->
                        <div class="natacao">
                            <div class="titulo-modelo-2">
                                <h3>NATAÇÃO</h3>
                            </div>
                            <div class="img2"><img src="../assets/img/icon-natacao.png" alt=""></div>
                        </div>
                    </a>
                </section>

                <section class="quarta-sec">
                    <a href="profissionais.php">
                        <!-- Bloco representando a seção de personal trainers -->
                        <div class="personais">
                            <div class="titulo-modelo-3">
                                <h3>PROFISSIONAIS</h3>
                            </div>
                            <div class="img2"><img src="../assets/img/icon-personais.png" alt=""></div>
                        </div>
                    </a>
                </section>
            </div>

            <!-- Outra seção com duas subseções menores -->
            <div class="section-menores">
                <section class="quinta-sec">
                    <a href="aerobicos.php">
                        <!-- Bloco representando a seção de exercícios aeróbicos -->
                        <div class="aerobicos">
                            <div class="titulo-modelo-2">
                                <h3>AERÓBICOS</h3>
                            </div>
                            <div class="img2"><img src="../assets/img/icon-aerobicos.png" alt=""></div>
                        </div>
                    </a>
                </section>

                <section class="quarta-sec">
                    <a href="planos.php">
                        <!-- Bloco representando a seção de planos -->
                        <div class="planos">
                            <div class="titulo-modelo-3">
                                <h3>PLANOS</h3>
                            </div>
                            <div class="img2"><img src="../assets/img/icon-planos.png" alt=""></div>
                        </div>
                    </a>
                </section>
            </div>
        </main>
    </body>

    </html>
    <?php
    //Se o usuário não estiver logado, redireciona para a página de login
else:
    header("Location: login.php");
endif;
?>