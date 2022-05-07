<?php 
    require "dbConn.php"; //conn es la instancia mysqli
    $nombre = $correo = $usr_password = "";
    $error="";
    $consultas = [
        "consulta_select_user" =>"SELECT id FROM Usuarios WHERE Correo = ?",
        "consulta_insert_user" =>"INSERT INTO Usuarios (Nombre,Correo,Contrasena) VALUES (?,?,?)" 

    ];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $usr_password = $_POST['contraseña'];

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
                <input type="password" id="password" name="contraseña" placeholder="Contraseña" required><br>
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
