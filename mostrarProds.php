<?php include('head.php'); ?>

<div class="mostrarProdDiv">
    <a href="menu.php">Voltar</a>
    <?php 
    session_start();
    require('connect.php');

    // Verifique se há um código de produto na URL
    if(isset($_GET['cod'])) {
        $produto_cod = $_GET['cod'];

        // Consulta para obter os detalhes do produto com base no código do produto
        $query = "SELECT * FROM `produtos` WHERE codProduto = '$produto_cod'";
        $resultado = mysqli_query($con, $query);

        if(mysqli_num_rows($resultado) == 1) {
            $produto = mysqli_fetch_assoc($resultado);
            echo "<img src='{$produto['fotoProduto']}'>";

            echo "<div>";
            echo "<p class='tituloProd'>{$produto['nomeCamisa']} - {$produto['timeProduto']}</p>";
            echo "<div class='descProd'>";
            echo "<p>Descrição: {$produto['infoProduto']}</p>";
            echo "</div>";
            echo "<p>R$ {$produto['precoProduto']}</p>";
            echo "<img class='simbolo' src='fotos/simbolos/{$produto['timeProduto']}.png'>";
            
            // Botão para adicionar ao carrinho
            echo "<form action='carrinho.act.php' method='post'>";
            echo "<input type='hidden' name='produto_cod' value='{$produto['codProduto']}'>";
            echo "<button type='submit'>Adicionar ao carrinho</button>";
            echo "</form>";

        } else {
            echo "Produto não encontrado.";
        }
    } else {
        echo "Código do produto não especificado.";
    }
    ?>
</div>

<?php include('bottom.php'); ?>
