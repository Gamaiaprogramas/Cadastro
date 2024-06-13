<?php include('head.php'); ?>

<body>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<div class="containerForm">
    <nav></nav>
    <fieldset>
        <form action="addCamisa.act.php" method="post" enctype="multipart/form-data" id="formAddCamisa" onsubmit="return verificaForm2()">
        <h1>Cadastrar camisa</h1>
        <label><p>Nome do produto:</p><input type="text" name="nomeCamisa"></label>
        <label><p>Informação do produto:</p><textarea name="infoProduto"  cols="40" rows="3"></textarea></label>
        <label><p>Preço:</p><input type="number" name="precoProduto" placeholder="Ex. R$ 1000.00" ></label>
        <label><p>Time do produto:</p><input type="text" name="timeProduto" placeholder="Ex. Corinthians"></label>
        <p id="imgContainer">
                    <img src="fotos\defaultCadProd.png" alt="" id="previewImg" height = "142vh" width = "143vw">
                </p>
                <p>
                    <label for="fileFoto">
 
                        <p class="txtCansado">Escolha a foto do produto</p>
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p></div>
                 <input type="submit" value="Enviar"> 
        </form>
    </fieldset>
  

</div>

<?php include('bottom.php'); ?>