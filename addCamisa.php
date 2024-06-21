<?php include('head.php'); ?>

<body>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<div class="adicionarCamisa">
    <nav>
        <a href="principalAdm.php">Voltar</a>
        <h1>adicionar Produto!</h1>
        <a href="logoff">Sair</a>
    </nav>
    
    <fieldset>
        <form action="addCamisa.act.php" method="post" enctype="multipart/form-data" id="formAddCamisa" onsubmit="return verificaForm2()">
        <label><p>Nome do produto:</p><input type="text" name="nomeCamisa" placeholder = "Ex. Camisa Bahia"></label>
        <label><p>Informação do produto:</p><textarea name="infoProduto"  cols="40" rows="3"></textarea></label>
        <label><p>Preço:</p><input type="number" name="precoProduto" placeholder="Ex. R$ 1000.00" ></label>
        <label><p>Time do produto:</p>
        <select id="opcaoTime" name="timeProduto">
        <option>Selecionar</option>
            <option> Botafogo</option>
            <option> Flamengo</option>
            <option> Bahia</option>
            <option> São Paulo</option>
            <option> Athletico-PR</option>
            <option >Atlético-MG</option>
            <option >Red Bull Bragantino</option>
            <option >Palmeiras</option>
            <option >Internacional</option>
            <option >Cruzeiro</option>
            <option >Fortaleza</option>
            <option >Juventude</option>
            <option >Grêmio</option>
            <option >Vasco da Gama</option>
            <option >Corinthians</option>
            <option >Fluminense</option>
            <option >Criciúma</option>
            <option >Atlético-GO</option>
            <option >Cuiabá</option>
            <option >Vitória</option>
            <option >América-MG</option>
            <option >Avaí</option>
            <option >Botafogo-SP</option>
            <option >Ceará</option>
            <option >Chapecoense</option>
            <option >CRB</option>
            <option >Guarani</option>
            <option >Ituano</option>
            <option >Mirassol</option>
            <option >Novorizontino</option>
            <option >Ponte Preta</option>
            <option >Sport</option>
            <option >Vila Nova</option>
            <option >Santos</option>
            <option >Amazonas</option>
        </select>
    </label>
        <p id="imgContainer">
                    <img src="fotos\defaultCadProd.png" alt="" id="previewImg" height = "142vh" width = "143vw">
                </p>
                <p>
                    <label for="fileFoto">
 
                        <p class="txtCansado2">Escolha a foto do produto</p>
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p>
                 <input type="submit" class = "enviarBut" value="Enviar"> 
        </form>
    </fieldset>
  

</div>

<?php include('bottom.php'); ?>