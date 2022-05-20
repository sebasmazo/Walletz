
<?php

function toUser($user, $conn) { /* Convierte el ID de un usario al nombre */
    $nombre = NULL;
    
    $query = "SELECT Nombre FROM usuarios WHERE ID_User = ?";
    $sentencia = $conn->prepare($query);
    $sentencia -> bind_param("i",$user);
    $sentencia ->execute();
    $sentencia->bind_result($nombre);
    $sentencia->fetch();
    return $nombre;
}
?>


