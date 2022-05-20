<?php 
    require "admin/dbConn.php"; //conn es la instancia mysqli

    /* A try catch block. It is used to catch exceptions. */
    try {
            if(isset($_SESSION['logged'])){
                header("Location:index.php");
                die();
            }else{
                $nombre = $correo = $contraseña = $nombre_consulta = $correo_consulta = $contraseña_consulta="";
                /* Checking if the request method sent by the server is POST. */
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['contraseña'])){
                    $correo = $_POST['email'];
                    $contraseña = $_POST['contraseña'];
                    if($sentencia = $conn->prepare("SELECT Nombre, Correo, Contraseña FROM usuarios WHERE Correo = ?")){
                        $sentencia->bind_param('s',$correo);
                        if($sentencia->execute()){
                            $sentencia->bind_result($nombre_consulta,$correo_consulta,$contraseña_consulta);
                            $sentencia->fetch();
                            if(password_verify($contraseña , $contraseña_consulta)){
                                
                                session_start();
                                $_SESSION['username'] = $nombre_consulta;
                                $_SESSION['correo'] = $correo_consulta;
                                $_SESSION['logged'] = "true";
                                $sentencia->close();
                                echo '<script language="javascript">alert("Bienvenido, '. $_SESSION['username'] .'");</script>'; 
                                echo '<script language="javascript">window.location.href="index.php";</script>';
                                
                            }else{
                                echo '<script language="javascript">alert("Contraseña incorrecta");</script>'; 
                            }
                        }else{
                            throw new Exception("Error ejecutando la sentencia SELECT");
                        }

                    }else{
                        throw new Exception("Fallo preparando la sentencia SELECT");
                    }
                }
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
        <form class="form-register"  action="login.php" method="post" >
            <!--The form that the user will fill to register. */ -->
            <div class="input-register">
                <label for="email"><p>Correo</p></label>
                <input type="email" id="email" name="email" placeholder="Correo" required><br>
                <label for="password"><p>Contraseña</p></label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required><br>
                <input type="submit" id="btn_submit">
            </div>
            <div class="container-signin">
                <p>No tiene cuenta? <a id="a_reg" href="register.php">Registrarse</a></p>
                <p><a id="a_reg" href="index.php">Volver</a></p>
            </div>
        </form>
    </div>
  </div>
</body>
</html>