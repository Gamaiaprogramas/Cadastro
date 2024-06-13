<?php include('head.php');?>
<body>
    <!-- ?php

    
    echo "<div class= 'cards'>";
    require('connect.php');
 
    @session_start();
    while($usuario = mysqli_fetch_assoc($usuarios)){
        echo "<div>";
        echo "<div class=imageCard>";
        if($usuario['fotoUrl']==""){
            echo "<img src=icons/>";
        }else{
            echo "<img src=$usuario[fotoUrl]>";
        }
        echo "</div>";

        echo "<div>";
       
        echo "<p>Nome: $usuario[nome]</p>";
        echo "<p>Email: $usuario[email]</p>";
        echo "<p>Telefone: $usuario[telefone]</p>";
        echo "<div class=botoesCard>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
   
    ? -->
   <?php$usuarios = mysqli_query($con,"SELECT *FROM `registro`");>
        <div class = "cards">

            <p><?php echo "<p>Nome: $usuario[nome]</p>"</p>

        </div>
    <?php include('bottom.php');?>