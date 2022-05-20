<?php 
    require 'admin/dbConn.php';
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wallet']) && isset($_POST['review']) && isset($_SESSION['id'])){
        $user = $_SESSION['id'];
        $wallet = $_POST['wallet'];
        $review = $_POST['review'];
        $query = "INSERT INTO reseñas (ID_User, Wallet, Reseña) VALUES (?,?,?)";
        $sentencia = $conn->prepare($query);
        $sentencia->bind_param("iss",$user,$wallet,$review);
        if($sentencia->execute()){
            header("Location:reviews.php");
        }else{
            echo "Error";
        }
        
    }else{
        header("Location:login.php");
    }
?>