<?php include('head.php'); ?>

<body>
    <div class ="Usuario">
    <?php
            @session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
            echo "<img src=$_SESSION[foto] class=\"miniatura\"></li>";
            echo "<li class=\"nomeMenu\">Olá $_SESSION[nome]</li>";
            echo "<li class=\"emailMenu\">Email $_SESSION[email]</li>";

            echo "<a href=editarPerfil.php?codigo=$_SESSION[codigo]>";
            echo "<a href=\"logoff.php\"><li>Sair</li></a>";
            echo "<a href=\"editarPerfil.php\"><li>Editar Perfil</li></a>";
            echo "</a>";
        }else{
            echo "<a href=\"login.php\"><li>Entrar</li></a>";
        }

?>
    </div>



<?php include('bottom.php'); ?>