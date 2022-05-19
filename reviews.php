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
                <div class="menu" id="active><a href="reviews.php">Reseñas</a></div>
                <div class="menu"><a href="#">Perfil</a></div>
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
    <h1 id="body-title">Reseñas</h1>
    <div class="review-browser">
        <div class="review-container">
            <div class="review-wallet">
                <h3>0x129419248f124914919</h3>
                    
            </div>
            <div class="review-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat temporibus itaque commodi possimus natus at perspiciatis, dolore ut iure reprehenderit expedita recusandae laborum sapiente odit veritatis consequuntur minima quo repudiandae!</p>                
            </div>
            <div class="review-info"><!-- Username && timestamps !-->
                <p>Hecha por: <!-- Username con PHP!--></p>    
                <p><!-- timestamp con PHP!--></p>   
            </div>
                
        </div>
        <div class="review-container">
            <div class="review-title">
                <h3></h3>    
            </div>
            <div class="review-content">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="review-info"> <!-- Username && timestamps !-->
                <p>Hecha por: <!-- Username con PHP!--></p>    
                <p><!-- timestamp con PHP!--></p>   
            </div>
        </div>
        <div class="review-container">
            <div class="review-title">
                <h3></h3>
            </div>
            <div class="review-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse consequuntur praesentium iste sint, in exercitationem et blanditiis fuga obcaecati. Nobis rem cumque iusto distinctio sed ad eligendi dolorem culpa est!</p>

            </div>
            <div class="review-info"> <!-- Username && timestamps !-->
                <p>Hecha por: <!-- Username con PHP!--></p>    
                <p><!-- timestamp con PHP!--></p>   
            </div>
        </div>
    </div>
    
    
</body>
</html>