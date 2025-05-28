<?php
require "connect.php";
require "admin.php";
require "customer.php";
require "artist.php";
$database = Connect::getInstance();
$conn = $database->getConnection();
    if(isset($_POST["msg"])){
        $ID = $_POST['msg'];
        admin::delete_msg($ID);
    }
    else if(isset($_POST["fol"])){
        $ID = $_POST['fol'];
        artist::delete_follower($ID);
    }
    else if(isset($_GET["cart"])){
        $ID = $_GET['name'];
        customer::delete_cart($ID);
    }
    else if(isset($_POST["delete"])){
        $ID = $_POST['delete'];
        admin::delete_artist($ID);
    }
    else{
        $ID = $_GET['name'];
        artist::delete_art($ID);
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
?>
