<?php include('head.php'); ?>

<div class="carrinhoDiv">
    <h2>Carrinho de Compras</h2>

    <?php 
    session_start();
    require('connect.php');

    if(isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        foreach($_SESSION['carrinho'] as $produto_cod) {
            $query = "SELECT * FROM `produtos` WHERE codProduto = '$produto_cod'";
            $resultado = mysqli_query($con, $query);
            echo "<div class='divUnica'>";
            if(mysqli_num_rows($resultado) == 1) {
                $produto = mysqli_fetch_assoc($resultado);
                echo "<div>";
                echo "<img class='prodCarr' src='{$produto['fotoProduto']}' alt='{$produto['nomeCamisa']}'>";
                echo "</div>";
                echo "<div>";
                echo "<p>{$produto['nomeCamisa']}</p>";
                echo "<a href='excluirCarrinho.php?cod=$produto_cod'><button>Excluir do carrinho</button></a>";
                echo "<img class='simCarr' src='fotos/simbolos/{$produto['timeProduto']}.png'>";
                echo "</div>";
                echo "</div>";
            }
        }
        echo "<a href='finalizarCompra.php'><button>Finalizar Compra</button></a>";
    } else {
        echo "<p>Seu carrinho está vazio.</p>";
    }
    ?>

    <a href="menu.php">Continuar comprando</a>
</div>

<?php include('bottom.php'); ?>
