<?php

    require('connect.php');
    extract($_POST);
    extract($_FILES);

    if($newFoto['name'] =! ""){
        if($fotoUrl == ""){
            //criar url para o arquivo
            $fotoUrl = "fotosClientes/" . md5(time()) . ".jpg";
        }
        move_uploaded_file($newFoto['tmp_name'], $fotoUrl);
    }

    var_dump($newFoto);
    
    
    mysqli_query($con, "UPDATE `registro` SET
   
    `nome` = '$nome',
    `email` = '$email',
    `cpf` = '$cpf',
    `sexo`= '$sexo',
    `telefone` = '$telefone',
    `nascto` = '$nascto', 
    `time` = '$time',
    `fotoUrl` = '$fotoUrl'
    WHERE `codigo` = '$codigo';");

    @session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;


    
    header("location:usuario.php?codigo=$codigo");

    
