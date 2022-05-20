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
                <div class="menu" ><a href="index.php">Inicio</a></div>
                <div class="menu" ><a href="reviews.php">Reseñas</a></div>
                <div class="menu" id="active"><a href="profile.php">Perfil</a></div>
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
    <
    
</body>
</html>