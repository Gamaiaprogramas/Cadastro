
<?php include('head.php');?>
<body>
    <?php
    @session_start();   
    include('connect.php');
    $codigo = $_SESSION['codigo'];
    $usuarios = mysqli_query($con, "SELECT * FROM `registro` WHERE `codigo` = '$codigo'");
    $usuario = mysqli_fetch_assoc($usuarios);
    
    ?>

    <div class="altUsuariodiv">
        <h1>Editar dados</h1>
        <fieldset class="fieldUser">
              <p hidden><?php echo $usuario['codigo']?></p>
            
            <form action="editarPerfil.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaFormAlt()">
                <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']?>">
                <input type="hidden" name="fotoUrl" value="<?php echo $usuario['fotoUrl']?>">
                <p>Nome do usuario: <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>"></p>
                <p>email do usuario: <input type="text" name="email" value="<?php echo $usuario['email'] ?>"></p>
                <p>Cpf: <input type="text" name="cpf"  value="<?php echo $usuario['cpf'] ?>"></p>
                <p>sexo</p>
                <select id="opcao" name="sexo">
                    <option value="opcao1" <?php if($usuario['sexo'] == "opcao1"){echo "selected";} ?>>Masculino</option>
                    <option value="opcao2" <?php if($usuario['sexo'] == "opcao2"){echo "selected";} ?>>Feminino</option>
                    <option value="opcao3" <?php if($usuario['sexo'] == "opcao3"){echo "selected";} ?>>Não Binario</option>
                    <option value="opcao4" <?php if($usuario['sexo'] == "opcao4"){echo "selected";} ?>>Prefiro não dizer</option>
                </select>
                <p>Telefone: <input type="text" name="telefone" value="<?php echo $usuario['telefone'] ?>"></p>
                <p> Data <input type="date" name="nascto" value="<?php echo $usuario['nascto'] ?>"></p>
                <p>time</p>
                <select id="opcaoTime" name="time">
                    <option value="0" <?php if($usuario['time'] == "0"){echo "selected";} ?>>Selcionar</option>
                    <option value="1"  <?php if($usuario['time'] == "1"){echo "selected";} ?>>Corinthians</option>
                    <option value="2" <?php if($usuario['time'] == "2"){echo "selected";} ?>>Palmeiras</option>
                </select>
                <p id="imgContainer">
                    <img class="imgUser"src=<?php echo $usuario['fotoUrl'] ?> alt="" id="previewImg">
                </p>
                <p>
                    <label for="fileFoto">
                        Escolher Arquivo
                    </label>
                    <input type="file" name="newFoto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </fieldset>
    </div>

    <?php include('bottom.php'); ?>