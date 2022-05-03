<?php 
    require "dbConn.php";
    $nombre = $correo = $usr_password = $confirm_password ="";
    $error="";
    $consultas = [
        "consulta_select_user" =>"SELECT id FROM Usuarios WHERE Correo = ?",
        "consulta_insert_user" =>"INSERT INTO Usuarios (Nombre,Correo,Contrasena) VALUES (?,?,?)" 

    ];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty(trim($_POST['correo']))){
            $error = "Usuario vacío";
        }else{ //Verificar si el correo existe en la base de datos

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
