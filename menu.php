<?php include('head.php'); 
?>

    <div class="topo">
            <input type="button" value="Filtrar">
            <input type="search" placeholder="🔍 Pesquisar" name="" id="">
            <?php
                @session_start();
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                echo "<img src=$_SESSION[foto] class=\"perfilMin\"></li>";
            }
    ?>
    </div>
    <main>
            <div class="fotoMain">
            </div>
            <div class="selecao1" >
                <a href="mostrarProds.php"><div><p> Time</p></div></a>
                <a href=""><div><p>Marca</p></div></a>
            </div>
            <div class="selecao2">
    <?php 
    require('connect.php');
    $produtos = mysqli_query($con, "SELECT * FROM `produtos`");

    while($produto = mysqli_fetch_assoc($produtos)) {
        // Use uma variável de sessão para armazenar o código do produto
        $_SESSION['produto_cod'] = $produto['codProduto'];

        // Crie um link para redirecionar para mostrarProds.php com o código do produto
        echo "<a href='mostrarProds.php?cod={$produto['codProduto']}'><div class='cardsPrinc'>";
        echo "<div>";
        echo "<div>";

        if($produto['fotoProduto'] == "") {
            echo "<img src='icons/6073873.png'>";
        } else {
            echo "<img src='{$produto['fotoProduto']}'>";
        }

        echo "</div>";

        echo "<div>";
        echo "<p>Nome: {$produto['nomeCamisa']} - {$produto['timeProduto']}</p>";
        echo "<p>Descrição: {$produto['infoProduto']}</p>";
        echo "<p>Preço: R$ {$produto['precoProduto']}</p>";
        echo "</div>";
        echo "</div>";
        echo "</div></a>";
    }
    ?>
</div>

</div>
            </div>
    </main>


<?php include('bottom.php'); ?>