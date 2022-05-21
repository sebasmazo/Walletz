 
<?php

// Creating an array of error codes and their corresponding messages.
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
    403 => array('403', 'Petición rechazada por el servidor. Tal vez no tienes permiso para entrar acá!'),
    404 => array('404', 'Pagina no encontrada'),
    405 => array('405', 'Metodo no permitido'),
    408 => array('408', 'Petición sin respuesta'),
    500 => array('500', 'Error interno en el servidor'),
    502 => array('502', 'Respuesta invalida del servidor'),
    504 => array('504', 'Sin respuesta del otro servidor'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Codigo de error invalido';
}
// Display error message in HTML with echo
echo 
'';

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
    
    <div style="display:flex;">
        <object data="imgs/file0.svg" width="500" height="300"> </object>
        <div> 
            <h1 id="index"> Oops! Encontramos un error <?php echo $title ?></h1>
            <p id="index"><?php echo $message ?></p>
        </div>
    </div>
</body>
</html>