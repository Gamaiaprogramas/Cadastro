<?php

    require("connect.php");
    @session_start();
    extract ($_POST);
    extract($_FILES);

    

    $destino = "location:alterar.php?codigo=$codigo";

    $path = "fotosClientes/" . md5(time()) . ".jpg";
    move_uploaded_file($foto['tmp_name'], $path);

    

    if($foto['name'] == ""){
        if (mysqli_query($con,"UPDATE `tb_clientes` SET 
        `nome` = '$nome',
        `email` = '$email',
        `telefone` = '$telefone',
        `nascto` = '$nascto'
        WHERE `tb_clientes`.`codigo` = '$codigo';")) {
            $msg = "<p class=\"alerta green\">Registro alterado com sucesso!</p>";
        } else {
            $msg = "<p class=\"alerta red\">Erro ao alterar o registro: " . $con->error . "</p>";
            
        }
    }else{
        if (mysqli_query($con,"UPDATE `tb_clientes` SET 
        `nome` = '$nome',
        `email` = '$email',
        `telefone` = '$telefone',
        `nascto` = '$nascto',
        `fotoUrl` = '$path'
        WHERE `tb_clientes`.`codigo` = '$codigo';")) {
            $msg = "<p class=\"alerta green\">Registro alterado com sucesso!</p>";
        } else {
            $msg = "<p class=\"alerta red\">Erro ao alterar o registro: " . $con->error . "</p>";
            
        }
    }
    $_SESSION['msg'] = $msg;
    header($destino);
    

?>
