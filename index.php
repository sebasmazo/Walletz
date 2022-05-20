<?php 
    session_start();
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
                <div class="menu"><a href="reviews.php">Reseñas</a></div>
                <?php 
                    if(isset($_SESSION['logged'])){
                        echo('<div class="menu"><a href="profile.php">Perfil</a></div>');
                    }
                ?> 
                <?php 
                    if(isset($_SESSION['logged'])){
                        echo('');
                    }
                ?>    
                <div class="menu" id="right-item">
                    <?php 
                        if(isset($_SESSION['logged'])){
                            echo(" <a href='close.php'>Bienvenido, ". $_SESSION["username"] . "</a>");
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
                        <div class="flex-item" id="item2"><p>Bienvenido a tu foro de confianza! Disfruta de una comunidad unida para asegurar la confianza que necesitas en tus inversiones</p></div>
        </div>
        <div class="external-source">
            <iframe src="https://es.widgets.investing.com/top-cryptocurrencies?theme=darkTheme&cols=symbol,priceUsd,vol24,chg24" width="100%" height="480px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Cortesía de <a href="https://es.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
        </div>            
        
    </body>
    <footer>
        <div class="copyright">@2022 Sebastian Mazo Vélez</div>
    </footer>
</html>