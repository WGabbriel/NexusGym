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
    <title>Página de treinos</title>
    <link rel="stylesheet" href="../assets/css/others.css">
    <link rel="shortcut icon" href="../assets/img/teste.svg" type="image/x-icon">
</head>


<body>
    <main class="main-inf-sup">
        <table>
            <th colspan="6">
                <h4>TREINO - SUPERIOR </h3>
            </th>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>SEGUNDA-FEIRA</h4>
                </td>
                <td>
                    SUPINO RETO
                </td>
                <td>
                    SUPINO INCLINADO
                </td>
                <td>
                    ROSCA DIRETA
                </td>
                <td>
                    TRÍCEPS TESTA
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>TERÇA-FEIRA</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    SUPINO DECLINADO
                </td>
                <td style="background-color: #DF1C26;">
                    LEVANTAMENTO LATERAL
                </td>
                <td style="background-color: #DF1C26;">
                    TRÍCEPS COICE
                </td>
                <td style="background-color: #DF1C26;">
                    ROSCA INVERSA
                </td>
            </tr>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>QUARTA-FEIRA</h4>
                </td>
                <td>
                    PULL-UP
                </td>
                <td>
                    PRESSÃO DE OMBRO
                </td>
                <td>
                    TRÍCEPS POLIA
                </td>
                <td>
                    ELEVADOR FRONTAL
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>QUINTA-FEIRA</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    REMO COM BARREIRA
                </td>
                <td style="background-color: #DF1C26;">
                    PRESSÃO DE OMBRO
                </td>
                <td style="background-color: #DF1C26;">
                    TRÍCEPS TESTA
                </td>
                <td style="background-color: #DF1C26;">
                    ELEVADOR FRONTAL
                </td>
            </tr>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>SEXTA-FEIRA</h4>
                </td>
                <td>
                    SUPINO DECLINADO
                </td>
                <td>
                    ROSCA DIRETA
                </td>
                <td>
                    TRÍCEPS COICE
                </td>
                <td>
                    ROSCA INVERSA
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>SÁBADO</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    BARRA FIXA
                </td>
                <td style="background-color: #DF1C26;">
                    LEVANTAMENTO LATERAL
                </td>
                <td style="background-color: #DF1C26;">
                    TRÍCEPS POLIA
                </td>
                <td style="background-color: #DF1C26;">
                    CROSSOVER
                </td>
            </tr>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>DOMINGO</h4>
                </td>
                <td>
                    DESCANSO ATIVO
                </td>
                <td>
                    YOGA
                </td>
                <td>
                    CAMINHADA LEVE
                </td>
                <td>
                    MOBILIDADE
                </td>
            </tr>
        </table>
    </main>
</body>
<?php

else:
    header('Location: login.php');
endif;

?>
</html>