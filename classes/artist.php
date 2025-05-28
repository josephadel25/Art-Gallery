<?php
require "User.php";
require_once("connect.php");
class artist extends User{    
    // Constructor
    public function __construct(){
        session_start();
        $userid = $_SESSION['id'];
        $database = Connect::getInstance();
        $conn = $database->getConnection();
        $query = "UPDATE users SET category=1 WHERE id=$userid";
        mysqli_query($conn, $query);
        header("Location: ../index.php");
        exit();
    }
    public static function delete_art($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $query = "DELETE FROM artworks WHERE id='$ID'";
        mysqli_query($conn, $query);
    }
    public static function delete_follower($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $query = "DELETE FROM Followers WHERE id='$ID'";
        mysqli_query($conn, $query);
    }
}
?>