<?php include('head.php'); ?>

<body>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<div class="containerForm2">
    <h2>Cadastre-se</h2>
    <fieldset>
        <form action="addCliente.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaForm()">

        <label><p>Nome:</p><input type="text" name="nome"></label>
        <label><p>Emali:</p><input type="text" name="email"></label>
        <label><p>Cpf:</p><input type="text" name="cpf"></label>    
        <label><p>Informe seu gênero</p></label>
        <select id="opcao" name="sexo">
            <option value="opcao1">Masculino</option>
            <option value="opcao2">Feminino</option>
            <option value="opcao3">Não binario</option>
            <option value="opcao3">Prefiro não informar</option>
        </select>
        <label><p>telefone:</p><input type="text" name="telefone" id="txtTelefone"></label>
        <label><p>Nascimento:</p><input type="date" name="nascto"></label>
        <label>
            <p>Informe seu time:</p>
        <select id="opcaoTime" name="time">
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
        <label><p>Senha:</p><input type="passworld" name="senha1" onkeyup="verificaSenha(senha1.value,senha2.value)" require></label>
        <label><p>Confirmar senha:</p><input type="passworld" name="senha2" onkeyup="verificaSenha(senha1.value,senha2.value)" require></label>
       <div>
        <p id="imgContainer">
                    <img src="fotos\camisaFundo.png" id="previewImg">
                </p>
                <p>
                    <label for="fileFoto">
                        <p class="txtCansado2">Foto de perfil</p>
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01"onchange="previewFile(this);">
                </p></div>
                 <input type="submit" class="buttCadastro" value="Enviar"> 
        </form>
    </fieldset>

    <h1>Ja possui uma conta? <br> <a href="logar.php">Entre!</a></h1>

</div>

<?php include('bottom.php'); ?>