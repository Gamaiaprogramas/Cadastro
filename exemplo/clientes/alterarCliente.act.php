<?php

    require('connect.php');
    extract($_POST);

    mysqli_query($con, "UPDATE`tb_clientes` SET
    `nome` = '$nome',
    `email` = '$email',
    `telefone` = '$telefone',
    `nascto` = '$nascto'
    WHERE `tb_clientes`.`codigo` = '$codigo';");

    
    header("location:alterarCliente.php?codigo=$codigo");

