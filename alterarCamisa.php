
<?php include('head.php');?>
<body>
    <?php

    include('connect.php');
    $codigo = $_GET['codigo'];
    $produtos = mysqli_query($con, "SELECT * FROM `produtos` WHERE `codProduto` = '$codigo'");
    $produto = mysqli_fetch_assoc($produtos);
    
    ?>

    <div class="adicionarCamisa">
    <nav>
        <a href="principalAdm.php">Voltar</a>
        <h1>Alterar Produto!</h1>
        <a href="logoff">Sair</a>
    </nav>
        <fieldset>
              <p><?php echo $produto['codProduto']?></p>
            
            <form action="alterarCamisa.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaFormAlt()">
                <input type="hidden" name="codigo" value="<?php echo $produto['codProduto']?>">
                <label >
                    <p>Nome do produto: </p>
                        <input type="text" name="nomeCamisa" value="<?php echo $produto['nomeCamisa'] ?>">
                    </label>
                <label for="">
                    <p>Informação do produto: </p>
                    <input type="text" name="infoProduto" value="<?php echo $produto['infoProduto'] ?>">
                </label>
                <label for=""><p>Preço do produto: </p><input type="text" name="precoProduto"  value="<?php echo $produto['precoProduto'] ?>"></label>
                <label for=""><p>Time do produto: </p><input type="text" name="timeProduto"  value="<?php echo $produto['timeProduto'] ?>"></label>
                
                <p id="imgContainer">
                    <img src=<?php echo $produto['fotoProduto'] ?> alt="" id="previewImg">
                </p>
                <p>
                    <label for="fileFoto">

                        Escolher Arquivo
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p>
                <p><input type="submit"  class = "enviarBut" value="Enviar"></p>
            </form>
        </fieldset>
    </div>

    <?php include('bottom.php'); ?>