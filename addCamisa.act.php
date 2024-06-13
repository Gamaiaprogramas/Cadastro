<?php
extract($_POST);
extract($_FILES);
require('connect.php');

@session_start();
$msg = "";
$destino = "location:login.php";
$busca = mysqli_query($con,"Select `codProduto` from `produtos` where `codProduto` = '$cod'");
// $buscaArray = mysqli_fetch_assoc($busca);

if($busca->num_rows == 0){ 
    $path = "fotosProdutos/" . md5(time()). ".jpg";
    move_uploaded_file($foto['tmp_name'], $path);
 

        if (mysqli_query($con, "INSERT INTO `produtos` (`nomeCamisa`, `infoProduto`, `precoProduto`,`timeProduto`, `codProduto`,`fotoProduto`) VALUES 
        ('$nomeCamisa' , '$infoProduto' , '$precoProduto', '$timeProduto',NULL,'$path');")) {
            $msg = "<p class=\"alerta green\">Registro Criado com sucesso!</p>";
            $destino = "location:addCamisa.php";
        } else {
            $msg = "<p class=\"alerta red\">Erro ao gravar registro: " . $con->error . "</p>";
            $destino = "location:addCamisa.php";
        }
    } 
else{
    $msg = "<p class=\"alerta red\">Codigo já ultilizado!</p>";
    $destino = "location:addCamisa.php";
}

$_SESSION['msg'] = $msg;
header($destino);