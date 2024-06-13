<?php 
    require('connect.php');
    $codigo = $_GET['codigo'];
    mysqli_query($con, "DELETE FROM `tb_clientes` WHERE `tb_clientes`.`codProduto` = '$codigo'");
?>

