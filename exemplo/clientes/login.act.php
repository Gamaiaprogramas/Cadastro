<?php 
    @session_start();
    require('connect.php');
    extract($_POST);
    $destino = "";
    $msg = "";
    $cliente = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `email` = '$email'");
    if($cliente->num_rows == 1){
        $cliente = mysqli_fetch_assoc($cliente);
        $senha_login = md5($senha);
        if($senha_login == $cliente['senha']){
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $cliente['nome'];
            $_SESSION['codigo'] = $cliente['codigo'];
            $_SESSION['foto'] = $cliente['fotoUrl'];
            $msg = "<p class=green>Sessão Iniciada</p>";
            $destino = "location:listar.php";
            header($destino);
        }else{
            echo "Senha Errada";
            $destino = "location:login.php";
            header($destino);
        }
    }else{
        echo "Usuario não encontrado";
    }
var_dump($_POST);
?>