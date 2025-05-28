<?php 
require "connect.php";
session_start();
$invalid_error = null;
$email = null;
$password = null;
$database = Connect::getInstance();
$conn = $database->getConnection();

if(isset($_POST["login"])){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // Check if the email belongs to an admin
    if(strpos($email, "@admin.com") !== false){
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['adminemail'] = $row['email'];
            $_SESSION['adminfname'] = $row['name'];
            setcookie("admin", $row['name'], time() + (86400));
            header("Location: ../admin/admin.php");
            exit();
        } else {
            header("Location: ../user/signin.php?errorold=Incorrect Password or Email");
        }
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                setcookie("user", $row['name'], time() + (86400));
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../user/signin.php?errorold=Incorrect Password or Email");
        }
    } 
}
?>
