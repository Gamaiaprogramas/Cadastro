<?php
extract($_POST);
extract($_FILES);
require('connect.php');

@session_start();
$msg = "";
$destino = "location:login.php";
$busca = mysqli_query($con,"Select `email` from `tb_clientes` where `email` = '$email'");
if($busca->num_rows == 0){
    $path = "fotosClientes/" . md5(time()) . ".jpg";
    move_uploaded_file($foto['tmp_name'], $path);
    if ($txtSenha1 == $txtSenha2) {
        $senha = md5($senha1);
    } else {
        $senha = "";
    }
    if ($senha != "") {

        if (mysqli_query($con, "INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `telefone`, `nascto`, `fotoUrl`, `senha`) VALUES 
        (NULL, '$nome', '$email', '$telefone', '$nascto', '$path', '$senha');")) {
            $msg = "<p class=\"alerta green\">Registro Criado com sucesso!</p>";
            $destino = "location:listar.php";
        } else {
            $msg = "<p class=\"alerta red\">Erro ao gravar registro: " . $con->error . "</p>";
            $destino = "location:addCliente.php";
        }
    } else {
        $msg = "<p class=\"alerta red\">Campo senha vazio!</p>";
        $destino = "location:addCliente.php";
    }
}else{
    $msg = "<p class=\"alerta red\">Email já ultilizado!</p>";
    $destino = "location:addCliente.php";
}

$_SESSION['msg'] = $msg;
header($destino);
