<?php include('head.php'); ?>

<div class="carrinhoDiv">
    <h2>Carrinho de Compras</h2>

    <?php 
    session_start();

    // Verifica se há itens no carrinho
    if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        echo "<ul>";
        foreach($_SESSION['carrinho'] as $produto_cod) {
            // Aqui você pode consultar o banco de dados para obter os detalhes do produto
            // Neste exemplo, apenas mostraremos o código do produto
            echo "<li>Produto Código: $produto_cod</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Seu carrinho está vazio.</p>";
    }
    ?>

    <a href="menu.php">Continuar comprando</a>
</div>

<?php include('bottom.php'); ?>
