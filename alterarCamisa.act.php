<?php

    require('connect.php');
    extract($_POST);

    var_dump($_POST);
    mysqli_query($con, "UPDATE `produtos` SET
   
    `nomeCamisa` = '$nomeCamisa',
    `infoProduto` = '$infoProduto',
    `precoProduto`= '$precoProduto',
    `timeProduto` = '$timeProduto'
    WHERE `codProduto` = '$codigo';");

    
    header("location:principalAdm.php?codigo=$codigo");

