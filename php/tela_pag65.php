<?php

require 'conexao.php';

session_start();
if (($_SESSION['logado'] === true)):

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de pagamento</title>
    <link rel="stylesheet" href="../assets/css/others.css">
    <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
</head>


<body>
    <nav>
        <a href="../index.html"><img src="../assets/img/logo.svg" alt="logo de um lobo vermelho"
                style="height: 5rem; width: 5rem;">
            <h1>NEXUS </h1>
        </a>
        <div class="icones-direita">
            <a href="perfil.php"><img src="../assets/img/icon-user-branco.png" alt="" class="icone-user"></a>
            <a href="logout.php"><img src="../assets/img/logout.png" alt="" class="icone-sair"></a>
        </div>
    </nav>
    <main>
        <div class="container-comum" id="cont-comum">
            <div class="titulo-pag" id="titulo-pag">
                <h1>EFETUE O <span>PAGAMENTO!</span></h1>
            </div>
            <section id="js-sec">
                <div class="imagem-pix">
                    <img src="../assets/img/pix_65.png" alt="">
                </div>
                <form class="form-pag" id="form-pagamento" action="" method="post"
                    onsubmit="atualizarDados(); return false;">
                    <input type="submit" value="VALIDAR PAGAMENTO">
                </form>
                <h4>Para pagamentos online, aceitamos apenas pix.</h4>
            </section>
        </div>
    </main>

    <script>
        function atualizarDados() {
            var corpo = document.getElementById('cont-comum');
            corpo.style.width = '55rem';
            corpo.style.height = '25rem';
            var tituloPag = document.getElementById('titulo-pag');
            tituloPag.style.height = '10rem';
            document.getElementById('titulo-pag').innerHTML = "<h1><span>PAGAMENTO</span> EFETUADO!</h1>";
            document.getElementById('js-sec').innerHTML = "<h4>PLANO <span class=vermelho> ATIVADO.</span></h4><h4>A VALIDAÇÃO SERÁ FEITA AO IR NA ACADEMIA.</h4><p>Atenciosamente, Equipe <span class=vermelho>Nexus </span></p>";
        }
    </script>
</body>
<?php

else:
    header('Location: login.php');
endif;

?>
</html>