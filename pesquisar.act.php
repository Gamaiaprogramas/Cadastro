       <nav class ="nav_pesquisa">
        <a href="menu.php">Voltar</a>
        <form action="pesquisar.act.php" method="GET">
            <input type="text" name="termo" placeholder="Digite o nome da camisa ou time">
            <input type="submit" value="Pesquisar" hidden>
        </form>
        <?php
    @session_start();
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        echo "<a href ='usuario.php'><img src=$_SESSION[foto] class=\"perfilMin\"></a></li>";
    }
    ?>
    </nav>
<?php
// Incluir arquivo de conexão com o banco de dados
require('connect.php');

// Verificar se foi submetido um termo de pesquisa via GET
if(isset($_GET['termo'])) {
    $termo = $_GET['termo'];

    // Consulta para buscar produtos pelo nome da camisa ou pelo time
    $query = "SELECT * FROM `produtos` WHERE nomeCamisa LIKE '%$termo%' OR timeProduto LIKE '%$termo%'";
    $resultado = mysqli_query($con, $query);

    if (mysqli_num_rows($resultado) > 0) {
        while ($produto = mysqli_fetch_assoc($resultado)) {
            echo "<a href='mostrarProds.php?cod={$produto['codProduto']}'><div class='cardsPrinc'>";
            echo "<div class='produto'>";
            echo "<img src='{$produto['fotoProduto']}' alt='{$produto['nomeCamisa']}'>";
            echo "<p>Nome: {$produto['nomeCamisa']}</p>";
            echo "<p>Time: {$produto['timeProduto']}</p>";
            echo "<p>Descrição: {$produto['infoProduto']}</p>";
            echo "<p>Preço: R$ {$produto['precoProduto']}</p>";
            echo "</div>";
            echo "</div></a>";
        }
    } else {
        echo "<p>Nenhum produto encontrado.</p>";
    }
}
?>
