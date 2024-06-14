
<?php include('head.php');?>
<body>
    <?php

    include('connect.php');
    $codigo = $_GET['codigo'];
    $usuarios = mysqli_query($con, "SELECT * FROM `registro` WHERE `codigo` = '$codigo'");
    $usuario = mysqli_fetch_assoc($usuarios);
    
    ?>

    <div class="containerForm">

        <fieldset>
              <p><?php echo $usuario['codigo']?></p>
            <legend>Alterar usuario</legend>
            <form action="editarPerfil.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaFormAlt()">
                <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']?>">
                <p>Nome do usuario: <input type="text" name="nomeCamisa" value="<?php echo $usuario['nome'] ?>"></p>
                <p>email do usuario: <input type="text" name="infousuario" value="<?php echo $usuario['email'] ?>"></p>
                <p>Cpf: <input type="text" name="precousuario"  value="<?php echo $usuario['cpf'] ?>"></p>
                <p>Sexo <input type="text" name="timeusuario"  value="<?php echo $usuario['sexo'] ?>"></p>
                <p id="imgContainer">
                    <img src=<?php echo $usuario['fotoUrl'] ?> alt="" id="previewImg">
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