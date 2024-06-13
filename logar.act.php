<?php 
    @session_start();
    require('connect.php');
    extract($_POST);
    $destino = "";
    $msg = ""; // $nome é igual ao input de logar.php // trocar para email
    echo $email;
    
    $cliente = mysqli_query($con, "SELECT * FROM `registro` WHERE `email` = '$email'");
    if($cliente->num_rows == 1){
        $clientes = mysqli_fetch_assoc($cliente);
        $senha_login = md5($senha1);
        if($senha_login == $clientes['senha']){
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $clientes['nome'];
            $_SESSION['email'] = $clientes['email'];
            $_SESSION['codigo'] = $clientes['codigo'];
            $_SESSION['foto'] = $clientes['fotoUrl'];
            $msg = "<p class=green>Sessão Iniciada</p>";

            if($clientes['codigo'] == 1){
                $destinoADM = "location:principalAdm.php";
                header($destinoADM);
            } else {

                $destino = "location:Usuario.php";
                header($destino);
    
            }
            
        }else{
            echo "Senha Errada";
            $destino = "location:Logar.php";
            header($destino);
        }
    }else{
        echo "Usuario não encontrado";
    }
var_dump($_POST);
?>