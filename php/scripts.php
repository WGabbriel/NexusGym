<?php

function existe_usuario($user_post)
{
    // Conexão com o banco de dados
    require 'conexao.php';

    // Preparação e execução da consulta para obter a lista de usuários
    $dados = $conexao->prepare("SELECT matricula FROM usuario;");
    // Executa a consulta 
    $dados->execute();

    // Busca todos os usuários na lista e armazena em um array de objetos
    $usuarios = $dados->fetchAll(PDO::FETCH_OBJ);

    // Verifica se a matrícula informada existe na lista de usuários do SQL
    foreach ($usuarios as $user) {
        if ($user_post == $user->matricula) { // Se encontrar, retorna true
            return true;
        }
    }

    // Caso não seja encontrado, retorna false
    return false;
}

/* Função para criação de um arquivo de texto onde será contido informações de erros */
function log_txt($mensagem){ // Início da função, com parametro $mensagem
    $log = fopen("../assets/log/log.txt", "a"); // A variável log abre/cria o arquivo log.txt e escreve dentro dele
    $write = fwrite($log, date('Y-m-d H:i:s') . "\r\n"); // Dentro dele será escrito a data, tempo
    if (is_array($mensagem)) {
        $mensagem = implode(" - ", $mensagem);
    } 
    $write = fwrite($log, "$mensagem". "\r\n"); // Dentro também será exibida uma mensagem de erro
    fclose($log); // Fechando arquivo
}

function ordenarNomes() /* Função de ordenação de nomes */
{
    echo"<table align=center style=text-align:center;><th>NOMES ORDENADOS</th>";
    require 'conexao.php'; // Importando o arquivo de conexão com o banco de dados
    $nome = $conexao->prepare("SELECT nome FROM usuario"); // Fazendo uma consulta no banco de dados pegando todos os nomes e guardando em uma variável
    $nome->execute(); // Executando a consulta
    $resultados = $nome->fetchAll(PDO::FETCH_OBJ); // Criando um array com todos os valores do objeto nome  
    $compararDados = function ($a, $b) { // Função para definir o modelo que deve ser seguido
        // Comparação dos valores do campo nome
        return strcasecmp($a->nome, $b->nome); 
    };
    usort($resultados, $compararDados); // Função para ordenar alfabeticamente
    foreach ($resultados as $r) {  // Função para mostrar na tela 
        // Acessar a propriedade 'nome' e imprimir
        echo "<tr><td>$r->nome </td></tr>";
        
    }
}
?>