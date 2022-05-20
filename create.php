<?php 
    session_start();
    if(!isset($_SESSION['logged'])){
        header("Location:login.php");
        die();
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
<body>
<div class="container-register">
    <div class="form-container">
        <form class="form-register"  action="create_handling.php" method="post" >
            <!--The form that the user will fill to register. */ -->
            <div class="input-register">
                <label for="wallet"><p>Wallet</p></label>
                <input type="text" id="wallet" name="wallet" placeholder="Wallet" required><br>
                <label for="password"><p>Reseña</p></label>
                <textarea id="review" name="review" rows="4" cols="50" placeholder="Reseña" required></textarea> <br>
                <input type="submit" id="btn_submit">
            </div>
            <div class="container-signin">
                <p><a id="a_reg" href="reviews.php">Volver</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>