<?php

require_once "connect.php";

abstract class User {
    private $name;
    private $address;
    private $phone;
    private $email;
    private $password;
    
    public function signup( $name, $address, $phone, $email, $password){
    $database = Connect::getInstance();
    $conn = $database->getConnection();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    die('<h1>Error: Email already exists in the database.<a href="../users/signin.php">Login</a></h1>');
    } else {
    $sql = "INSERT INTO users (name, email, password, phone, address) VALUES ('$name', '$email', '$password', '$phone', '$address')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../user/signin.php");
    }
    }
    $conn->close();
    }

    public function signin($email, $password){
        $database = Connect::getInstance();
        $conn = $database->getConnection();
    }

    // Name Setter and Getter
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    // Address Setter and Getter
    public function setAddress($address) {
        $this->address = $address;
    }
    
    public function getAddress() {
        return $this->address;
    }
    
    // Phone Setter and Getter
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    
    public function getPhone() {
        return $this->phone;
    }

    // Email Setter and Getter
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    // Password Setter and Getter
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getPassword() {
        return $this->password;
    }

}
?>