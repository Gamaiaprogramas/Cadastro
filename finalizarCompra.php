<?php
session_start();
require('connect.php');

if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    $cliente_cod = $_SESSION['codigo'];
    $dataPedido = date('Y-m-d');
    $itensPedido = implode(", ", $_SESSION['carrinho']);
    $precoPedido = 0;

    // Calcula o preço total
    foreach ($_SESSION['carrinho'] as $produto_cod) {
        $query = "SELECT precoProduto FROM `produtos` WHERE codProduto = '$produto_cod'";
        $resultado = mysqli_query($con, $query);
        if (mysqli_num_rows($resultado) == 1) {
            $produto = mysqli_fetch_assoc($resultado);
            $precoPedido += $produto['precoProduto'];
        }
    }

    // Insere o pedido no banco de dados
    $query = "INSERT INTO `pedidos` (clientePedido, dataPedido, itensPedido, precoPedido) VALUES ('$cliente_cod', '$dataPedido', '$itensPedido', '$precoPedido')";
    if (mysqli_query($con, $query)) {
        unset($_SESSION['carrinho']); // Limpa o carrinho após finalizar a compra
        header('Location: menu.php?compra=sucesso');
    } else {
        echo "Erro ao finalizar a compra: " . mysqli_error($con);
    }
} else {
    echo "Seu carrinho está vazio.";
}
?>
