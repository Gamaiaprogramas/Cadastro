<?php include('head.php'); ?>

<body>
    <div class="Usuario">
        <?php
            @session_start();
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                echo "<img src='$_SESSION[foto]' class='miniatura'></li>";
                echo "<li class='nomeMenu'>Olá $_SESSION[nome]</li>";
                echo "<li class='emailMenu'>Email $_SESSION[email]</li>";

                // Alternar exibição de pedidos baseado na query string
                if (isset($_GET['pedidos']) && $_GET['pedidos'] == 'true') {
                    echo "<a href='?pedidos=false'><li id='pedidos'>Esconder Pedidos</li></a>";
                } else {
                    echo "<a href='?pedidos=true'><li id='pedidos'>Meus Pedidos</li></a>";
                }
                
                echo "<a href='editarPerfil.php?codigo=$_SESSION[codigo]'><li>Editar Perfil</li></a>";
                echo "<a href = 'menu.php'><li>Confirmar</li></a>";
                echo "<a href='logoff.php'><li>Sair</li></a>";
            } else {
                echo "<a href='login.php'><li>Entrar</li></a>";
            }
        ?>
    </div>

    <div id="classePedidos">
        <?php
        if (isset($_GET['pedidos']) && $_GET['pedidos'] == 'true' && isset($_SESSION['codigo'])) {
            require('connect.php');
            $usuario_cod = $_SESSION['codigo'];

            // Consulta para obter os pedidos do usuário
            $query = "SELECT * FROM `pedidos` WHERE clientePedido = '$usuario_cod'";
            $resultado = mysqli_query($con, $query);

            if (mysqli_num_rows($resultado) > 0) {
                while ($pedido = mysqli_fetch_assoc($resultado)) {
                    echo "<div class='pedido'>";
                    echo "<p>Pedido Número: {$pedido['numeroPedido']}</p>";
                    echo "<p>Data: {$pedido['dataPedido']}</p>";

                    // Converter códigos dos itens para nomes
                    $itens = explode(", ", $pedido['itensPedido']);
                    $nomesItens = [];
                    foreach ($itens as $codItem) {
                        $queryProduto = "SELECT nomeCamisa FROM `produtos` WHERE codProduto = '$codItem'";
                        $resultadoProduto = mysqli_query($con, $queryProduto);
                        if (mysqli_num_rows($resultadoProduto) == 1) {
                            $produto = mysqli_fetch_assoc($resultadoProduto);
                            $nomesItens[] = $produto['nomeCamisa'];
                        }
                    }
                    $nomesItensStr = implode(", ", $nomesItens);
                    echo "<p>Itens: $nomesItensStr</p>";
                    echo "<p>Total: R$ {$pedido['precoPedido']}</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Você não tem pedidos.</p>";
            }
        }
        ?>
    </div>

<?php include('bottom.php'); ?>
