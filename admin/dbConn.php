
<?php
$servername = "localhost";
$username = "mazo";
$password = "2801Mazo02";
$database = "id18856955_walletz";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection to database failed");
}
//debugging echo "Connected successfully";
?>
