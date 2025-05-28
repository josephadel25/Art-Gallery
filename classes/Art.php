<?php
session_start();
require "connect.php";
class Art {
    private $art_id;
    private $title;
    private $description;
    private $artist_id;
    private $price;
    private $image;
    private $category;
    private $width;
    private $height;
    private $depth;

    public function __construct( $title,  $price, $image,$category,$width,$height,$depth) {
        $this->title = $title;
        $this->price = $price;
        $this->image= $image;
        $this->category=$category;
        $this->width=$width;
        $this->height=$height;
        $this->depth=$depth;

        $database = Connect::getInstance(); 
        $conn = $database->getConnection();
        if(isset($_POST['upload']))
        {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $price=$_POST['price'].'$';
        $file=$_FILES['image'];
        $image_location=mysqli_real_escape_string($conn, $_FILES['image']['tmp_name']);
        $image_name=mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $image_up="img/".$image_name;
        $type=$_POST['type'];
        $width=$_POST['Width'];
        $height=$_POST['Height'];
        $depth=$_POST['Depth'];
        $artist_id=$_SESSION["id"];

                $insert="INSERT INTO ArtWorks (title,price,image,category,width,height,depth,artistid) VALUES ('$title','$price','$image_up','$type','$width','$height','$depth','$artist_id')";
            mysqli_query($conn,$insert);
            if(move_uploaded_file($image_location,"images/".$image_name))
            {
                echo "<script>alert('uploaded successfuly')</script> ";
            }
            else
            {
                echo "<script>alert(' not uploaded ')</script>";
            }
            header('location:../artist/upload.php');
}

    }

    // Getter and setter methods for art_id
    public function getArtId() {
        return $this->art_id;
    }

    public function setArtId($art_id) {
        $this->art_id = $art_id;
    }

    // Getter and setter methods for title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and setter methods for description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    // Getter and setter methods for artist_id
    public function getArtistId() {
        return $this->artist_id;
    }

    public function setArtistId($artist_id) {
        $this->artist_id = $artist_id;
    }

    // Getter and setter methods for price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}


