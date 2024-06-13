<?php 
    @session_start();
    session_unset();
    session_destroy();
    $destino = "location:listar.php";
    header($destino);
?>