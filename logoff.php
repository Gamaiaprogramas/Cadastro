<?php 
    @session_start();
    session_unset();
    session_destroy();
    $destino = "location:Logar.php";
    header($destino);
?>