<?php
    require "dbConn.php";
    require "functions.php";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Walletz</title>
        
        <link rel="icon" type="image/x-icon" href="./imgs/LogoWalletz.ico">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <header>
        <div class="navbar">
            <div class="container-nav">
                <div class="menu" id="active"><a href="index.php">Inicio</a></div>
                <div class="menu"><a href="#">Buscar reseña</a></div>
                <div class="menu"><a href="#">Crear reseña</a></div>
                <div class="menu"><a href="#">Perfil</a></div>
                <div class="menu">
                    <?php 
                        if(logged() == true){
                            echo("<p>Bienvenido, <a href='profile.php'>".SESSION["username"] . "</a></p>");
                        }else{
                            echo("<a href='auth.php'>Iniciar sesión</a>");
                        }
                    ?>
                    </div>
            </div>
        </div>
    </header>
    <body>
        
        <h1>Hola</h1>
    </body>
</html>