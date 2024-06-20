<?php include('head.php'); ?>
<body>
    <?php 
    require('connect.php');
    $produtos = mysqli_query($con, "SELECT * FROM `produtos`");
    @session_start();
    
    while($produto = mysqli_fetch_assoc($produtos)) {
        echo "<div class='cards'>";
        echo "<div>";
        echo "<div class='imageCard'>";
        if($produto['fotoProduto'] == "") {
            echo "<img src='icons/6073873.png'>";
        } else {
            echo "<img src='{$produto['fotoProduto']}'>";
        }
        echo "</div>";

        echo "<div>";
        echo "<p>Codigo: {$produto['codProduto']}</p>";
        echo "<p>Nome: {$produto['nomeCamisa']}</p>";
        // Limita a descrição a 10 caracteres e adiciona "..." se a descrição for maior
        $descricao_previa = strlen($produto['infoProduto']) > 10 ? substr($produto['infoProduto'], 0, 10) . '...' : $produto['infoProduto'];
        echo "<p>Descrição: {$descricao_previa}</p>";
        echo "<p>Preço: R$ {$produto['precoProduto']}</p>";
        echo "<p>Time: {$produto['timeProduto']}</p>";
        echo "<div class='botoesCard'>";
        echo "<a onclick='excluir({$produto['codProduto']})'><img src='./icons/erase.png'></a>";
        echo "<a href='alterarCamisa.php?codigo={$produto['codProduto']}'><img src='./icons/edit.png'></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>

    <?php include('bottom.php'); ?>
</body>
