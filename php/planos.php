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
        <title>Página de planos</title>
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Lato:wght@900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap');

            /* IMPORTAÇÃO DE FONTE VIA URL */

            @font-face {
                font-family: 'king_and_queen';
                src: url(/assets/font/LTCushion-Bold.ttf) format('truetype');
                /* IMPORTAÇÃO DE FONTE VIA DOWNLOAD, ARMAZENADA NOS ARQUIVOS DO SITE */
            }

            html {
                --preto: #000000;
                --cinza: #aaaaaa;
                --cinza-escuro: #161616;
                --vermelho-claro: #df1c26;
                --vermelho-escuro: #92171e;
                --branco: #FFFFFF;
                --branco-escuro: #dadada;

                /* Rolagem Suave */
                scroll-behavior: smooth;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }


            body {
                font-family: 'Poppins';
                color: var(--branco-escuro);
            }

            nav {
                display: flex;
                align-items: center;
                width: 100%;
                background-color: var(--cinza-escuro);
                height: 6rem;
            }

            h1 {
                margin-left: 0.5rem;
                color: var(--vermelho-claro);
                font-family: Arvo;
                font-size: 45px;
                letter-spacing: 5px;
                font-weight: 600;
            }

            .icones-direita {
                display: flex;
                align-items: center;
                margin-right: 3rem;
                position: absolute;
                right: 0;
            }

            .icone-user {
                width: 2rem;
                height: 2rem;
                margin: 2rem;
                transition: all .3s ease-in-out;

            }

            .icone-sair {
                width: 2rem;
                height: 2rem;
                transition: all .3s ease-in-out;
            }

            .icone-user:hover,
            .icone-sair:hover {
                width: 2.5rem;
                height: 2.5rem;
                transform: scale(1.055);
            }

            .quinta-section {
                background: var(--preto) url('../assets/img/nexus-fotografia.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                text-align: center;

                width: 100%;
                height: 90vh;
                padding-top: 2rem;
                font-weight: 600;
            }

            .quinta-section>h2 {
                text-transform: uppercase;
                font-size: 3rem;
                color: var(--branco-escuro);
                font-weight: 800;
                margin-top: 5rem;
            }

            .quinta-section>h2>span {
                color: var(--vermelho-claro);
            }

            .plano-card {
                margin: 2.5rem 0rem 0rem 2rem;
                background-color: #141414;
                width: 18%;
                display: inline-block;
                height: 32rem;
                overflow: hidden;
                transition: transform 0.2s;
                position: relative;
                border-radius: 3px;
            }

            /* Aumenta a caixa de tamanho ao passar o mouse (o efeito suave vem do transition da classe .plano-card) */
            .plano-card:hover {
                transform: scale(1.1);
            }

            .bola-vermelha2 {
                background-color: #981c24;
                width: 27rem;
                height: 27rem;
                border-radius: 100%;
                position: absolute;
                top: -17.5rem;
                left: -2.8rem;
                z-index: 2;
            }

            .titulo-quinta-section {
                text-align: center;
                padding: 0.4rem;
            }

            .titulo-quinta-section>h2,
            .titulo-quinta-section>h3,
            .titulo-quinta-section>p {
                font-weight: 900;
            }

            .titulo-quinta-section>h2 {
                color: var(--vermelho-claro);
                margin-top: 1rem;
            }

            .titulo-quinta-section>h3 {
                font-size: 30px;
            }

            .titulo-quinta-section>h3>span {
                font-size: initial;
                color: var(--branco-escuro);
                margin-right: 0.1rem;
            }

            .titulo-quinta-section>p {
                font-size: 0.8rem;
            }


            #tituloprincipal-quinta-section {
                position: relative;
                padding: 0.4rem;
                margin-top: 1rem;
                z-index: 3;
            }

            #tituloprincipal-quinta-section>h3 {
                font-size: 30px;
            }

            #tituloprincipal-quinta-section>h3>span {
                font-size: initial;
                color: var(--branco-escuro);
                margin-right: 0.1rem;
            }

            #tituloprincipal-quinta-section>p {
                font-size: 0.8rem;
            }

            #tituloprincipal-quinta-section>p,
            #tituloprincipal-quinta-section>h3,
            #tituloprincipal-quinta-section>h2 {
                color: var(--branco);
                font-weight: 900;
            }

            /* Espaçamento da div do conteúdo */
            .conteudo-quinta-section {
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 24rem;
            }

            /* Espaçamento dos p */
            .conteudo-quinta-section p {
                margin: 0 auto;
                padding: 0.2rem 0.5rem;
                width: 75%;
                text-align: left;
                font-size: 0.9rem;
                color: var(--branco-escuro);
            }

            .conteudo-quinta-section span {
                color: var(--vermelho-claro);
                margin-right: 0.5rem;

            }

            /* Botões */
            #btn-1,
            #btn-2,
            #btn-3 {
                background-color: var(--vermelho-escuro);
                color: rgb(255, 255, 255);
                padding: 15px 30px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 2rem;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                position: relative;
                bottom: -0.5rem;
            }

            #btn-1:hover,
            #btn-2:hover,
            #btn-3:hover {
                background-color: rgb(180, 33, 43);
            }
        </style>
    </head>

    <body>
        <header>
            <nav>
                <a href="./pagina_inicial.php"><img src="../assets/img/logo.svg" alt="logo de um lobo vermelho"
                        style="height: 5rem; width: 5rem;"></a>
                <h1>NEXUS </h1>
                <div class="icones-direita">
                    <a href="perfil.php"><img src="../assets/img/icon-user-branco.png" alt="" class="icone-user"></a>
                    <a href="logout.php"><img src="../assets/img/logout.png" alt="" class="icone-sair"></a>
                </div>
            </nav>
        </header>
        <main>
            <section class="quinta-section">

                <h2>Planos da <span>Nexus!</span></h2>
                <div class="plano-card">
                    <div class="titulo-quinta-section">
                        <h2>PLANO BASICO</h2>
                        <h3><span>R$</span>65,99</h3>
                        <p>P/MÊS</p>
                    </div>
                    <div class="conteudo-quinta-section">
                        <div>
                            <p><span>&#10004;</span> Acesso ilimitado à área de musculação.</p>
                            <p><span>&#10004;</span> Participação em aulas de aeróbica 3 vezes por semana.
                            </p>
                            <p><span>&#10008;</span> Acesso à piscina.
                            </p>
                            <p><span>&#10008;</span> Acesso às aulas de boxe.</p>
                            <p><span>&#9679;</span> Acesso ao horário de pico pode estar sujeito a restrições.</p>
                        </div>
                        <a href="tela_pag65.php"><input type="submit" value="COMPRAR" id="btn-1" role="button"></a>
                    </div>

                </div>
                <div class="plano-card">
                    <div class="bola-vermelha2"></div>
                    <div id="tituloprincipal-quinta-section">
                        <h2>PLANO PLUS</h2>
                        <h3><span>R$</span>75,99</h3>
                        <p>P/MÊS</p>
                    </div>
                    <div class="conteudo-quinta-section">
                        <div>
                            <p><span>&#10004;</span> Acesso ilimitado à área de musculação.</p>
                            <p><span>&#10004;</span> Acesso ilimitado às aulas de aeróbica.</p>
                            <p><span>&#10004;</span> Acesso ilimitado às aulas de natação.</p>
                            <p><span>&#10004;</span> Acesso a 2 aulas de boxe por semana.</p>
                            <p><span>&#9679;</span> Acesso á qualquer horário</p>
                        </div>
                        <a href="tela_pag75.php"><input type="submit" value="COMPRAR" id="btn-2" role="button"></a>
                    </div>
                </div>
                <div class="plano-card">

                    <div class="titulo-quinta-section">
                        <h2>PLANO ESTUDANTE</h2>
                        <h3><span>R$</span>55,99</h3>
                        <p>P/MÊS</p>
                    </div>
                    <div class="conteudo-quinta-section">
                        <div>
                            <p><span>&#10004;</span>Uso da academia durante o horário regular.</p>
                            <p><span>&#10004;</span>Acesso a 2 aulas de boxe por semana.</p>
                            <p><span>&#10004;</span>Acesso ilimitado à área de musculação.</p>
                            <p><span>&#10004;</span>2 aulas de aeróbicos por semana.</p>
                            <p><span>&#9679;</span>Necessita da comprovação de matrícula.</p>
                        </div>
                        <a href="tela_pag55.php"><input type="submit" value="COMPRAR" id="btn-3" role="button"></a>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <?php

else:
    header('Location: login.php');
endif;

?>

</html>