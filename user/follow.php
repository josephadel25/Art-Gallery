<?php
require "../classes/connect.php";
session_start();
$database = Connect::getInstance();
$conn = $database->getConnection();

    $ID = $_GET['follow'];
    $uid= $_SESSION['id'];
    $sql = "SELECT * FROM followers WHERE userid = $uid and artid=$ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $sql_delete= "DELETE FROM followers WHERE artid=$ID and userid=$uid";
  if ($conn->query($sql_delete) === TRUE) {
    
  }
} else {
    $query = "INSERT INTO followers (artid, userid) VALUES ($ID, $uid)";
    mysqli_query($conn, $query);}
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
?>