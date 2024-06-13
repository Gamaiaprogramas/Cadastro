<?php include('head.php'); ?>

<body>
    <?php
    include('menu.php');
    include('connect.php');
    $codigo = $_GET['codigo'];
    $usuarios = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `codigo` = '$codigo'");
    $usuario = mysqli_fetch_assoc($usuarios);
    
    ?>

    <div class="containerForm">

        <fieldset>
            <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']?>">
            <legend>Alterar Cliente</legend>
            <form action="alterarCliente.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaFormAlt()">
                <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']?>">
                <p>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome'] ?>"></p>
                <p>Email: <input type="text" name="email" value="<?php echo $usuario['email'] ?>"></p>
                <p>Telefone: <input type="text" name="telefone" id="txtTelefone" value="<?php echo $usuario['telefone'] ?>"></p>
                <p>Nascimento: <input type="date" name="nascto" value="<?php echo $usuario['nascto'] ?>"></p>
                <p id="imgContainer">
                    <img src=<?php echo $usuario['fotoUrl'] ?> alt="" id="previewImg">
                </p>
                <p>
                    <label for="fileFoto">
                        <img src="icons/upload.png" alt="">
                        Escolher Arquivo
                    </label>
                    <input type="file" name="foto" id="fileFoto" id="inputGroupFile01" onchange="previewFile(this);">
                </p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </fieldset>
    </div>

    <?php include('bottom.php'); ?>