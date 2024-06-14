<?php

    require('connect.php');
    extract($_POST);

    var_dump($_POST);
    mysqli_query($con, "UPDATE `registro` SET
   
    `nome` = '$nome',
    `email` = '$cpf',
    `sexo`= '$sexo',
    `telefone` = '$telefone',
    `nascto` = '$nascto', 
    `time` = '$time', 
    `fotoUrl` = '$fotoUrl'
    WHERE `codigo` = '$codigo';");

    
    header("location:usuario.php?codigo=$codigo");

