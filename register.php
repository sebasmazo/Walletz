<?php 
    require "admin/dbConn.php"; //conn es la instancia mysqli
    try{
        $nombre = $correo = $usr_password = "";
    
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contraseña'])){
            $nombre = $_POST['fname'];
            $correo = $_POST['email'];
            $usr_password = $_POST['contraseña']; //Hacer un password_hash
            /* Checking if the email is already in the database. */
            if($sentencia = $conn -> prepare("SELECT Id_User FROM usuarios WHERE Correo = ?")){
                $sentencia->bind_param('s',$correo);
                $sentencia->execute();
                $sentencia->store_result(); 
                if($sentencia->num_rows() == 0){ //Correo no existe
                    //TODO agregar usuario
                    $sentencia->close();
                    $usr_password = password_hash($usr_password, PASSWORD_DEFAULT);
                    if($sentencia = $conn -> prepare("INSERT INTO Usuarios (Nombre,Correo,Contraseña) VALUES (?,?,?)")){
                        $sentencia->bind_param('sss',$nombre,$correo,$usr_password);
                        if($sentencia->execute()){
                            echo '<script language="javascript">alert("Usuario registrado correctamente");</script>'; 
                            echo '<script language="javascript">window.location.href="login.php";</script>';
                        }else{
                            throw new Exception("execute de insert ha fallado");
                        }
                    }else{
                        throw new Exception("Preparación de sentencia INSERT ha fallado");
                    }
                }else{
                    echo '<script language="javascript">alert("Correo ya existe");</script>';
                }
            }else{
                throw new Exception("Preparación de sentencia SELECT ha fallado");
            }
            
        }
    }/* Catching any exception that may occur and displaying it in an alert. */
    catch(Exception $e){
        echo '<script language="javascript">alert("'. $e->getMessage() .'");</script>'; 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./imgs/LogoWalletz.ico">
</head>
<body>
    
<div class="container-register">
    <div class="title-register">
        <h3>Registro</h3>
    </div>
    <div class="form-container">
        <form class="form-register"  action="register.php" method="post" >
            <!--The form that the user will fill to register. */ -->
            <div class="input-register">
                <label for="fname"><p>Nombre</p></label>
                <input type="text" id="fname" name="fname" placeholder="Nombre" required ><br>
                <label for="email"><p>Correo</p></label>
                <input type="email" id="email" name="email" placeholder="Correo" required><br>
                <label for="password"><p>Contraseña</p></label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required><br>
                <input type="submit" id="btn_submit">
            </div>
            <div class="container-signin">
                <p>Ya está registrado? <a id="a_reg" href="login.php">Iniciar sesión</a></p>
                <p><a id="a_reg" href="index.php">Volver</a></p>
            </div>
        </form>
    </div>
  </div>
    
</body>
</html>
