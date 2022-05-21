<?php 
    session_start();
    if(!isset($_SESSION['logged'])){
        header("Location:login.php");
        die();
    }
    require 'admin/dbConn.php';
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wallet']) && isset($_POST['review']) && isset($_SESSION['id'])){
        $user = $_SESSION['id'];
        $wallet = $_POST['wallet'];
        $review = $_POST['review'];
        $query = "INSERT INTO reseñas (ID_User, Wallet, Reseña) VALUES (?,?,?)";
        $sentencia = $conn->prepare($query);
        $sentencia->bind_param("iss",$user,$wallet,$review);
        if($sentencia->execute()){
            header("Location:reviews.php");
        }else{
            echo "Error";
        }
        
    }else{
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
<body>
<div class="container-register">
    <div class="form-container">
        <form class="form-register"  action="create.php" method="post" >
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