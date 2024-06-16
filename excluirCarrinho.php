<?php
session_start();

if(isset($_GET['cod'])) {
    $produto_cod = $_GET['cod'];

    // Verifica se o carrinho existe e não está vazio
    if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        // Encontra o índice do produto no carrinho
        $key = array_search($produto_cod, $_SESSION['carrinho']);
        
        // Se o produto foi encontrado, remove do carrinho
        if($key !== false) {
            unset($_SESSION['carrinho'][$key]);
            
            // Reindexa o array para manter os índices consecutivos
            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
}

// Redireciona de volta para a página do carrinho
header('Location: carrinho.php');
exit;
?>
