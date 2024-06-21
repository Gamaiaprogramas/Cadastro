<?php include('head.php'); ?>
<body class="adm">
 <div class="topoAdm">
    <a href="menu.php">Ir para tela principal</a>
    <h1>Bem Vindo Adm!!</h1>
    <a href ="addCamisa.php">Adicionar Produto</a>
</div>
    <?php 
    require('connect.php');
    $produtos = mysqli_query($con, "SELECT * FROM `produtos`");
    @session_start();
    
    while($produto = mysqli_fetch_assoc($produtos)) {
     
        echo "<div class='CardsAdm'>";
        
        echo "<div class='CardsUnicos'>";
        echo "<div class='imageCard'>";
        if($produto['fotoProduto'] == "") {
            echo "<img src='icons/6073873.png'>";
        } else {
            echo "<img src='{$produto['fotoProduto']}'>";
        }
        echo "</div>";
        echo "<div class='nomeIndefinido'>";
        echo "<div class ='nomeDasCoisas'>";
        echo "<p>Codigo: {$produto['codProduto']}</p>";
        echo "<p>Nome: {$produto['nomeCamisa']}</p>";
        $descricao_previa = strlen($produto['infoProduto']) > 10 ? substr($produto['infoProduto'], 0, 10) . '...' : $produto['infoProduto'];
        echo "<p>Descrição: {$descricao_previa}</p>";
        echo "<p>Preço: R$ {$produto['precoProduto']}</p>";
        echo "<p>Time: {$produto['timeProduto']}</p>";
        echo "<div class='botoesCard'>";
        echo "<a onclick='excluir({$produto['codProduto']})'><img src='./icons/erase.png'></a>";
        echo "<a href='alterarCamisa.php?codigo={$produto['codProduto']}'><img src='./icons/edit.png'></a>";

        echo "<img class='simboloAdm' src='fotos/simbolos/{$produto['timeProduto']}.png'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    <a href="logoff.php" class ="saidinha">sair</a>
    <?php include('bottom.php'); ?>
</body>
