<?php include('hedlog.php'); ?>

<body>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<div class="containerForm">
    <nav>
    <label>
    <ul class= "cad">
        <li >Cadastro</li>
        <li>Entre em contato</li>
        <li>Sobre nós</li>
    </ul>
    </label>
</nav>
        <div class="log">
        <form action="logar.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" onsubmit="return verificaForm()">
        <h1>login</h1>
        <label><p>Email:</p><input type="text" name="email"></label>
        <label><p>Senha:</p><input type="passworld" name="senha1" onkeyup="verificaSenha(senha1.value,senha2.value)" require></label>
        <label><input type="submit" value="Logar" id = "lug"></label>
        </form>
         </div>

</div>

<?php include('bottom.php'); ?>