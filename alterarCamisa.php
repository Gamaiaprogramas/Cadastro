
<?php include('head.php');?>
<body>
    <?php

    include('connect.php');
    $codigo = $_GET['codigo'];
    $produtos = mysqli_query($con, "SELECT * FROM `produtos` WHERE `codProduto` = '$codigo'");
    $produto = mysqli_fetch_assoc($produtos);
    
    ?>

    <div class="containerForm">

        <fieldset>
              <p><?php echo $produto['codProduto']?></p>
            <legend>Alterar produto</legend>
            <form action="alterarCamisa.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaFormAlt()">
                <input type="hidden" name="codigo" value="<?php echo $produto['codProduto']?>">
                <p>Nome do produto: <input type="text" name="nomeCamisa" value="<?php echo $produto['nomeCamisa'] ?>"></p>
                <p>Informação do produto: <input type="text" name="infoProduto" value="<?php echo $produto['infoProduto'] ?>"></p>
                <p>Preço do produto: <input type="text" name="precoProduto"  value="<?php echo $produto['precoProduto'] ?>"></p>
                <p>Time do produto: <input type="text" name="timeProduto"  value="<?php echo $produto['timeProduto'] ?>"></p>
                <p id="imgContainer">
                    <img src=<?php echo $produto['fotoProduto'] ?> alt="" id="previewImg">
                </p>
                <p>
                    <label for="fileFoto">

                        Escolher Arquivo
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </fieldset>
    </div>

    <?php include('bottom.php'); ?>