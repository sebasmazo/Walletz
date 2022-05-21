
<?php
$servername = "localhost";
$username = "id18856955_mazo";
$password = "z?E8E&hxs8No^iK0";
$database = "id18856955_walletz";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection to database failed");
}
//debugging echo "Connected successfully";
?>
