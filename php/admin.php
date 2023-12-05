<?php

require 'conexao.php';

session_start();
if (($_SESSION['id'] === 0)) :

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página inicial de Administrador</title>
        <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
        <style>
            html {
                --vermelho-claro: #df1c26;
                --vermelho-escuro: #92171e;
                --cinza-escuro: #161616;
                --cinza: #dadada;
            }

            body {
                background-color: black;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 90vh;
            }


            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                padding: 1rem;
                background-color: var(--vermelho-claro);
            }
            th,td,tr{
                border: 1px solid var(--vermelho-claro);
            }
            td,tr{
                background-color: var(--vermelho-escuro);
            }
        </style>

    </head>

    <body>
        <div class="ordenacao">
            <?php

            ordenarNomes();
            ?>
        </div>
    </body>

    </html>


<?php
else :
    header("Location: login.php");
endif;
?>