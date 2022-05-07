<?php 
    require "dbConn.php"; //conn es la instancia mysqli

    /* A try catch block. It is used to catch exceptions. */
    try {
        if($_SESSION['logged'] == "true"){
            $nombre = $correo = $contraseña = "";
            /* Checking if the request method sent by the server is POST. */
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nombre = $_POST['fname'];
                $correo = $_POST['email'];
                $usr_password = $_POST['contraseña'];
                if($sentencia = $conn->prepare("SELECT * FROM usuarios WHERE Correo = ?")){

                }
            }
        }else{
            echo '<script language="javascript">alert("Ya tiene una sesión activa");</script>'; 
            header("Location:index.php");
            die();
        }
        
    } catch (Exception $e) {
        echo '<script language="javascript">alert("'. $e->getMessage() .'");</script>'; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./imgs/LogoWalletz.ico">
</head>
<body>
<div class="container-register">
    <div class="title-register">
        <h3>Iniciar sesión</h3>
    </div>
    <div class="form-container">
        <form class="form-register"  action="register.php" method="post" >
            <!--The form that the user will fill to register. */ -->
            <div class="input-register">
                <label for="email"><p>Correo</p></label>
                <input type="email" id="email" name="email" placeholder="Correo" required><br>
                <label for="password"><p>Contraseña</p></label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required><br>
                <input type="submit" id="btn_submit">
            </div>
            <div class="container-signin">
                <p>Ya está registrado? <a id="a_reg" href="login.html">Iniciar sesión</a></p>
                <p><a id="a_reg" href="index.php">Volver</a></p>
            </div>
        </form>
    </div>
  </div>
</body>
</html>