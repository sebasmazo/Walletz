<?php
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
        <link rel="stylesheet" href="css/main.css">
    </head>
    <header>
        <div class="navbar">
            <div class="container-nav">
                <div class="menu" id="active"><a href="index.php">Inicio</a></div>
                <div class="menu"><a href="search.php">Reseñas</a></div>
                <div class="menu"><a href="#">Perfil</a></div>
                <div class="menu" id="right-item">
                    <?php 
                        if(logged() == true){
                            echo("<p>Bienvenido, <a href='profile.php'>". $_SESSION["username"] . "</a></p>");
                        }else{
                            echo("<a href='login.php'>Iniciar sesión /</a><a href='register.php'> Registrarse</a>");
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="container-info">
                        <div class="flex-item" id="item1"><h1>Walletz</h1><img id="logo1" src="imgs/LogoWalletz-sinfondo.png"></div>
                        <div class="flex-item" id="item2"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla inventore vitae laborum reprehenderit, facilis deleniti dolorum magni voluptatum corporis corrupti, eos placeat? Modi perferendis magni adipisci itaque numquam. Labore, alias.</p></div>
        </div>
        <div class="external-source">
            <iframe src="https://es.widgets.investing.com/top-cryptocurrencies?theme=darkTheme&cols=symbol,priceUsd,vol24,chg24" width="100%" height="480px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Cortesía de <a href="https://es.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
        </div>            
        
    </body>
    <footer>
        <div class="copyright">@2022 Sebastian Mazo - Juan Sebastian Serna Correa</div>
    </footer>
</html>