<?php
require "User.php";

class admin extends User {    
    // Constructor
    public function __construct( $name, $address, $phone, $email, $password){
        parent::setName($name);
        parent::setAddress($address);
        parent::setPhone($phone);
        parent::setEmail($email);
        parent::setPassword($password);
        parent::signup($name, $address, $phone, $email, $password);
        
    }

    public static function delete_artist($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $query = "DELETE FROM users WHERE id='$ID'";
        mysqli_query($conn, $query);
    }
    public static function delete_msg($ID){
        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        $query = "DELETE FROM message WHERE id='$ID'";
        mysqli_query($conn, $query);
    }
}
?>