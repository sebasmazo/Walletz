<?php 
    require 'admin/dbConn.php';
    require 'admin/methods.php';
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
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
    <div class="container-profile">
        <h1><?php echo($_SESSION['username']); ?></h1>
        <p>Usuario desde: <?php echo($_SESSION['fecha'])?></p>
        <h3>Reseñas publicadas</h3>
    </div>
    
    <div class="review-browser">
        <?php 
                /* A query to the database, it is selecting the ID_User, fecha_creada, Wallet, Reseña FROM
                reseñas. */
                $query = "SELECT ID_User, fecha_creada, Wallet, Reseña FROM reseñas WHERE ID_User =".$_SESSION['id'];
                $reviews = mysqli_query($conn, $query);
                if(mysqli_num_rows($reviews)>0){
                    while ($row = mysqli_fetch_array($reviews)) {
                        echo "<div class='review-container'><div class='review-wallet'><h3>".$row['Wallet']."</h3></div><div class='review-content'><p>" .$row['Reseña']."</p></div><div class='review-info'><p>Hecha por: ".toUser($row['ID_User'],$conn)."</p><p>".$row['fecha_creada']."</p></div></div>";
                    }
                }else{
                    echo '<div class="err_reviews">No hay reseñas. !Agrega la primera!</div>';
                }
        ?>
                        
    </div>
</body>
</html>