<?php
require "User.php";
class customer extends User{    
    // Constructor
    public function __construct( $name, $address, $phone, $email, $password){
        parent::setName($name);
        parent::setAddress($address);
        parent::setPhone($phone);
        parent::setEmail($email);
        parent::setPassword($password);
        parent::signup($name, $address, $phone, $email, $password);
    }

    public static function delete_cart($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $query = "DELETE FROM cart WHERE id='$ID'";
        mysqli_query($conn, $query);
    }

    public static function add_cart($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM cart WHERE artid = $ID ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        $sql_delete= "DELETE FROM cart WHERE artid=$ID ";
        if ($conn->query($sql_delete) === TRUE) {
        }
        } else {
        $sql_insert = "INSERT INTO cart (artid, userid) VALUES ($ID, $id)";
        mysqli_query($conn,$sql_insert);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        $conn->close();
        
    }

    public static function add_fav($ID){
        $id=$_SESSION['id'];
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $sql = "SELECT * FROM favorite WHERE artid = $ID AND userid=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        $sql_delete= "DELETE FROM favorite WHERE artid=$ID AND userid=$id ";
        if ($conn->query($sql_delete) === TRUE) {
        }
        } else {
        $sql_insert = "INSERT INTO favorite (artid, userid) VALUES ($ID, $id)";
        mysqli_query($conn,$sql_insert);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        $conn->close();
    }
}
?>