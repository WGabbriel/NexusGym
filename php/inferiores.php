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
                <h4>TREINO - INFERIOR</h4>
            </th>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>SEGUNDA-FEIRA</h4>
                </td>
                <td>
                    AGACHAMENTO
                </td>
                <td>
                    AVANÇO
                </td>
                <td>
                    PANTURRILHA
                </td>
                <td>
                    STIFF
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>TERÇA-FEIRA</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    LEG PRESS
                </td>
                <td style="background-color: #DF1C26;">
                    EXTENSÃO
                </td>
                <td style="background-color: #DF1C26;">
                    FLEXÃO SENTADO
                </td>
                <td style="background-color: #DF1C26;">
                    ABDOMINAIS
                </td>
            </tr>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>QUARTA-FEIRA</h4>
                </td>
                <td>
                    GLÚTEOS NA POLIA
                </td>
                <td>
                    ADUÇÃO DE QUADRIL
                </td>
                <td>
                    ELEVADOR FRONTAL
                </td>
                <td>
                    AGACHAMENTO BÚLGARO
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>QUINTA-FEIRA</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    STIFF
                </td>
                <td style="background-color: #DF1C26;">
                    CÁRDIO
                </td>
                <td style="background-color: #DF1C26;">
                    FLEXÃO EM PÉ
                </td>
                <td style="background-color: #DF1C26;">
                    ABDOMINAIS OBLÍQUOS
                </td>
            </tr>
            <tr>
                <td style="background-color: #C61E26;">
                    <h4>SEXTA-FEIRA</h4>
                </td>
                <td>
                    MESA FLEXORA
                </td>
                <td>
                    CADEIRA EXTENSORA
                </td>
                <td>
                    PANTURRILHA
                </td>
                <td>
                    HIP THRUST
                </td>
            </tr>
            <tr>
                <td style="background-color: #DF1C26;">
                    <h4>SÁBADO</h4>
                </td>
                <td style="background-color: #DF1C26;">
                    ABDOMINAI
                </td>
                <td style="background-color: #DF1C26;">
                    ADUÇÃO DE QUADRIL
                </td>
                <td style="background-color: #DF1C26;">
                    FLEXÃO SENTADO
                </td>
                <td style="background-color: #DF1C26;">
                    AGACHAMENTO BÚLGARO
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
                    ALONGAMENTO
                </td>
                <td>
                    CAMINHADA LEVE
                </td>
                <td>
                    YOGA
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