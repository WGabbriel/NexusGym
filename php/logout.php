<?php 
    
    // Inicia a sessão
    session_start();

    // Destroi a sessão
    session_destroy();

    // Redireciona o usuário para o index
    header("Location: ../index.html");
    
?>