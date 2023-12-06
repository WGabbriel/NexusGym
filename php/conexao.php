<?php
require_once "scripts.php";

$host = 'localhost';
$dbname = 'nexusgym';
$user = 'root';
$password = 'Admrede2019@';

// Tenta estabelecer uma conexão com o banco de dados MySQL
try {
    // Cria uma instância(objeto) da classe PDO para conectar ao banco de dados 'projeto'
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, '');
} catch (Exception $error) {
    // Se a tentativa de conexão falhar, tenta novamente com uma senha diferente
    try {
        // Cria uma nova instância da classe PDO com uma senha diferente
        $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    } catch (Exception $error) {

        try {
            // Cria o banco de dados se não existir
            $conexao = new PDO('mysql:host=localhost', 'root', '');
            $conexao->exec("CREATE DATABASE IF NOT EXISTS projeto");

            // Conecta ao banco de dados criado ou existente

            $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // Leitura do arquivo SQL para criar tabela
            $arquivo = '../mysql/usuario.sql';
            // atribuindo o conteudo do arquivo dentro da variavel
            $conteudoSql = file_get_contents($arquivo);

            // Executa as instruções SQL
            $conexao->exec($conteudoSql);
        } catch (Exception $error) {
            // Se ambas as tentativas falharem, registra mensagem de erro num arquivo de texto "log_txt", através da função log_txt() criado em scripts.php
            log_txt("Erro ao tentar conectar: ".$error->getMessage());
            echo "<script>
            alert('Erro ao conectar ao banco de dados!');
        </script>";
        }
    }
}
?>