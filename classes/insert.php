<?php 
require("Art.php");
require("customer.php");

if(isset($_POST['upload']))
{
    $database = Connect::getInstance();
    $conn = $database->getConnection();
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $price=$_POST['price'].'$';
    $file=$_FILES['image'];
    $image_location=mysqli_real_escape_string($conn, $_FILES['image']['tmp_name']);
    $image_name=mysqli_real_escape_string($conn, $_FILES['image']['name']);
    $image_up="images/".$image_name;
    $type=$_POST['type'];
    $Art=new Art($title,$price,$image,$category,$width,$height,$depth);
}

else if(isset($_POST['signup'])){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $user=new customer($name, $address, $phone, $email, $password);
}

else if(isset($_GET['cart'])){
    $ID = $_GET['value'];
    customer::add_cart($ID);
}

else if(isset($_POST['fav'])){
    $ID = $_POST['value'];
    customer::add_fav($ID);
}

else if(isset($_POST['contact'])){
    $email = $_POST['email'];
    $message = $_POST['message'];
    $database = Connect::getInstance();
    $conn = $database->getConnection();
    $sql = "INSERT INTO message (email, message) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $message);
    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../user/contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>