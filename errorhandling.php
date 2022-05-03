 
<?php

// Creating an array of error codes and their corresponding messages.
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
    403 => array('403', 'Petición rechazada por el servidor.'),
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
'<div style="display:flex;"><img src="imgs/LogoWalletz-sinfondo.png"><div> <h1> Oops! Encontramos un error '.$title.'</h1>
<p>'.$message.'</p></div></div>';

?>