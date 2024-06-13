<?php
    
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    echo "<div class='cards'>";
    $texto = $_POST['texto'];
    require('connect.php');
    $produtos = mysqli_query($con, "SELECT * FROM `produtos` where `nomeCamisa` like '%$texto%'");

    if($produtos == FALSE){
        die(mysqli_error());
    }
    //fetch assoc transforma as linhas da pesquisa e transforma numa array
    while($produto = mysqli_fetch_assoc($produtos)) {
        echo "<div>";
        echo "<div class=imageCard>";
        if($produto['fotoUrl']== ""){
            echo "<img src=icons/6073873.png>";
        }else{
            echo "<img src=$produto[fotoUrl]>";
        }
        
        echo "</div> ";
        echo"<div>";
        echo "<p>$produto[codigoProduto]</p>";
        echo "<p>$produto[nomeCamisa]</p>";
        echo "<p>$produto[infoProduto]</p>";
        echo "<p>$produto[precoProduto]</p>";
        echo "<p>$produto[timeProduto]</p>";
        echo "<div class=botoesCard>";
        echo "<a href=alterarCamisa.php?codigo=$produto[codigoProduto]><img src=icons/edit.png> </a>";
        echo "<img src=icons/erase.png onclick='excluir($produto[codigoProduto])'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        
    }

     echo " </div>";
    ?>  
   