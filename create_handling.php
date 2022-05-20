<?php 
    if(session_status() === PHP_SESSION_NONE) session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wallet']) && isset($_POST['review'])){
        $user = $_SESSION['id'];
        $wallet = $_POST['wallet'];
        $review = $_POST['review'];
        $query = "INSERT INTO reseñas VALUES (?,?,?)";
        //header("Location:reviews.php");
    }
?>