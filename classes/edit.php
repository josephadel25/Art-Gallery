<?php
require "connect.php";
session_start();
$invalid_error=null;
$database = Connect::getInstance();
$conn = $database->getConnection();

if (isset($_POST['update'])) {

    $ID = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $width = $_POST['width'];
    $height =$_POST['height'];
    $depth = $_POST['depth'];
    // pdate the row using the inputs
    $query = "UPDATE artworks SET title='$title', price='$price' , width='$width',height='$height',depth='$depth' WHERE id=$ID";
    mysqli_query($conn, $query);

    header("Location: ../artist/studio.php");
    exit();
}
if (isset($_POST['info'])) {

    $ID = $_SESSION['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email =$_POST['email'];
    // Update the row using the inputs
    $query = "UPDATE users SET name='$name', address='$address' , email='$email',phone='$phone' WHERE id=$ID";
    mysqli_query($conn, $query);
    header("Location: ../artist/info.php");
    exit();
}
if (isset($_POST['pass'])) {

    $ID = $_SESSION['id'];
    $old = $_POST['old'];
    $new = $_POST['new'];
    $new2 = $_POST['new2'];
    

    if ($new == $new2){
    // Update the row using the inputs
    $queryd = "SELECT * FROM users WHERE id=$ID";
    $result = $conn->query($queryd);
    $row = $result->fetch_assoc();
    if($old == $row['password']){
        $query = "UPDATE users SET password='$new' WHERE id=$ID";
        mysqli_query($conn, $query);
        header("Location: ../user/info.php");
    }else{
        header("Location: ../user/info.php?errorold=Incorrect Password O");
    }
    } else{
        header("Location: ../user/info.php?error=Passwords do not match");
    }
    
    exit();
}
?>
