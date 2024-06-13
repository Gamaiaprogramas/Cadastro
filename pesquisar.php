<?php include('head.php');?>
<body>
    <?php

    
    echo "<div class=cards>";
    require('connect.php');
    $usuarios = mysqli_query($con, "SELECT * FROM `produtos`");
    @session_start();

    while($usuario = mysqli_fetch_assoc($usuarios)){
        echo "<div>";
        echo "<div class=imageCard>";
        if($usuario['fotoProduto']==""){
            echo "<img src=icons/>";
        }else{
            echo "<img src=$usuario[fotoProduto]>";
        }
          echo "</div> ";
        echo"<div>";
        echo "<p>$usuario[codProduto]</p>";
        echo "<p>$usuario[nomeCamisa]</p>";
        echo "<p>$usuario[infoProduto]</p>";
        echo "<p>$usuario[precoProduto]</p>";
        echo "<p>$usuario[timeProduto]</p>";
        echo "<div class=botoesCard>";
        echo "<a href=alterarCamisa.php?codigo=$usuario[codProduto]><img src=icons/edit.png> </a>";
        echo "<img src=icons/erase.png onclick='excluir($usuario[codProduto])'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }

    echo "</div>";
    ?>

    <?php include('bottom.php');?>
