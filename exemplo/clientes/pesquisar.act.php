<?php
    
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    echo "<div class='cards'>";
    $texto = $_POST['texto'];
    require('connect.php');
    $clientes = mysqli_query($con, "SELECT * FROM `tb_clientes` where `nome` like '%$texto%'");

    if($clientes == FALSE){
        die(mysqli_error());
    }
    //fetch assoc transforma as linhas da pesquisa e transforma numa array
    while($cliente = mysqli_fetch_assoc($clientes)) {
        echo "<div>";
        echo "<div class=imageCard>";
        if($cliente['fotoUrl']== ""){
            echo "<img src=icons/6073873.png>";
        }else{
            echo "<img src=$cliente[fotoUrl]>";
        }
        
        echo "</div> ";
        echo"<div>";
        echo "<p>$cliente[codigo]</p>";
        echo "<p>$cliente[nome]</p>";
        echo "<p>$cliente[email]</p>";
        echo "<p>$cliente[telefone]</p>";
        echo "<div class=botoesCard>";
        echo "<a href=alterar.php?codigo=$cliente[codigo]><img src=icons/edit.png> </a>";
        echo "<img src=icons/erase.png onclick='excluir($cliente[codigo])'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        
    }

     echo " </div>";
    ?>  
   