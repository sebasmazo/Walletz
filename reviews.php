<?php 
    session_start();
    require 'admin/dbConn.php'; //Variable de conexión: conn 
    require 'admin/methods.php';
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
                <div class="menu" id="active"><a href="reviews.php">Reseñas</a></div>
                <?php 
                    if(isset($_SESSION['logged'])){
                        echo('<div class="menu"><a href="profile.php">Perfil</a></div>');
                    }
                ?> 
                <div class="menu">
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
    <div class="btn-flotante" id="search">
        <form action="reviews.php" method="get">
            <label for="key">Buscar reseña: </label>
            <input type="text" name="key">
        </form>
    </div>
    <div class="review-browser">
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['key'])){
                $reviews = displayReviews($_GET['key'],$conn); //Llama a metodo que retorne las reviews con la key entregada como parametro
                if(mysqli_num_rows($reviews)>0){
                    while ($row = mysqli_fetch_array($reviews)) {
                        echo "<div class='review-container'><div class='review-wallet'><h3>".$row['Wallet']."</h3></div><div class='review-content'><p>" .$row['Reseña']."</p></div><div class='review-info'><p>Hecha por: ".toUser($row['ID_User'],$conn)."</p><p>".$row['fecha_creada']."</p></div></div>";
                    }
                }else{
                    echo '<div class="err_reviews">No hay reseñas. <a href="reviews.php">Volver</a></div>';
                    
                    
                }
            }
            else{
                /* A query to the database, it is selecting the ID_User, fecha_creada, Wallet, Reseña FROM
                reseñas. */
                $query = "SELECT ID_User, fecha_creada, Wallet, Reseña FROM reseñas";
                $reviews = mysqli_query($conn, $query);
                if(mysqli_num_rows($reviews)>0){
                    while ($row = mysqli_fetch_array($reviews)) {
                        echo "<div class='review-container'><div class='review-wallet'><h3>".$row['Wallet']."</h3></div><div class='review-content'><p>" .$row['Reseña']."</p></div><div class='review-info'><p>Hecha por: ".toUser($row['ID_User'],$conn)."</p><p>".$row['fecha_creada']."</p></div></div>";
                    }
                }else{
                    echo '<div class="err_reviews">No hay reseñas. !Agrega la primera!</div>';
                }
            }
            
        ?>
    </div>
    
    <div class="btn-facha">
        <a href="create.php">Crear reseña</a> 
    </div>
    
    
</body>
</html>