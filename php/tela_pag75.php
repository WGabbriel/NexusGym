<?php

require 'conexao.php';

session_start();
if (($_SESSION['logado'] === true)):

?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- Falta a parte de php -->

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
                    <img src="../assets/img/pix_75.png" alt="">
                </div>
                <!-- Criando formulario de pagamento, onde onsubmit indica o que será executado ao submeter o formulario(clicar em validar pagamento), nesse caso, executa a função de atualizar dados e retorna um valor falso para que a alterar se mantenha após a submissao -->
                <form class="form-pag" id="form-pagamento" action="" method="post"
                    onsubmit="atualizarDados(); return false;">
                    <input type="submit" value="VALIDAR PAGAMENTO">
                </form>
                <h4>Para pagamentos online, aceitamos apenas pix.</h4>
            </section>
        </div>
    </main>

    <script>
        /* Criação de uma função em js */
        function atualizarDados() {  // Início da definição da função 
            var corpo = document.getElementById('cont-comum'); // a tribuindo á variavel "corpo" o elemento do documento html com id = 'cont-comum'
            corpo.style.width = '55rem'; // Ajusta a largura do elemento 'cont-comum'
            corpo.style.height = '25rem'; // Ajusta a Altura do elemento 'cont-comum'
            var tituloPag = document.getElementById('titulo-pag'); // a tribuindo á variavel "corpo" o elemento do documento html com id = 'tituloPag'
            tituloPag.style.height = '10rem'; // Ajusta a Altura do elemento 'tituloPag'
            /* innerHTML serve para modificar algo que está dentro de um elemento */ 
            tituloPag.innerHTML = "<h1><span>PAGAMENTO</span> EFETUADO!</h1>"; // Mudando o texto do elemento 'titulo-pag' apos clicar no botao
            document.getElementById('js-sec').innerHTML = "<h4>PLANO <span class=vermelho> ATIVADO.</span></h4><h4>A VALIDAÇÃO SERÁ FEITA AO IR NA ACADEMIA.</h4><p>Atenciosamente, Equipe <span class=vermelho>Nexus </span></p>";
            // Modificando o texto inserido no elemtento de id 'js-sec'
        }
    </script>
</body>
<?php

else:
    header('Location: login.php');
endif;

?>
</html>