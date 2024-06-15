<?php
session_start();

// Verifica se o produto_cod foi enviado via POST
if(isset($_POST['produto_cod'])) {
    // Adiciona o produto ao carrinho (sessão)
    $produto_cod = $_POST['produto_cod'];

    // Verifica se o carrinho já existe na sessão, se não, cria
    if(!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    // Adiciona o produto ao carrinho (array na sessão)
    $_SESSION['carrinho'][] = $produto_cod;

    // Redireciona para a página onde o produto foi adicionado
    header('Location: carrinho.php?cod=' . $produto_cod);
    exit;
} else {
    echo "Código do produto não especificado.";
}
?>
