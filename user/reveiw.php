<?php
require "../classes/connect.php";
$database = Connect::getInstance();
$conn = $database->getConnection();
$name =$_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];
$rating = $_POST['rating'];
$artid= $_POST['artid'];
$sql = "INSERT INTO review (name, email, review,rating,artid) VALUES ('$name', '$email', '$review', '$rating','$artid')";
    if ($conn->query($sql) === TRUE) {
        header("Location: detail.php");
    }
    $conn->close();
    

