<?php include('head.php'); ?>
<body>
    

<div class="topo">
    <a href="logar.php"> <input type="button" value="login"> </a>
    <a href="addCliente.php"> <input type="button" value="Cadastrar"> </a>
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
</div>
<main>
    <div class="fotoMain"></div>
    <div class="selecao1">
        <a href="pesquisar.php"><div><p> Não achou os produtos? <br> pesquise</p></div></a>
        
    </div>
    <div><h1>Todos os produtos:</h1></div>
    <div class="selecao2">
        <?php 
        require('connect.php');
        $produtos = mysqli_query($con, "SELECT * FROM `produtos`");

        while($produto = mysqli_fetch_assoc($produtos)) {
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
            echo "<p id = 'nome' style=''>Nome: {$produto['nomeCamisa']} - {$produto['timeProduto']}</p>";
            echo "<p style ='font-size: x-large;'>Preço: R$ {$produto['precoProduto']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div></a>";
        }
        ?>
    </div>
</main>
</body>
<?php include('bottom.php'); ?>
