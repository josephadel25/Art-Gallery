<?php
$conn = mysqli_connect("localhost", "root", "", "artgallery");
session_start();
$userid = $_SESSION['id'];

// Select artworks that are in the cart of the current user
$query ="SELECT artworks.*, users.name AS artist_name, cart.id AS cart_id
        FROM artworks 
        JOIN cart ON artworks.id = cart.artid 
        JOIN users ON artworks.artistid = users.id 
        WHERE cart.userid = $userid";

$result = mysqli_query($conn, $query);
$userid = $_SESSION['id'];
while ($row = mysqli_fetch_array($result)) {
    $artid = $row['id'];
    $price = $row['price'];
    $sql = "INSERT INTO checkout (userid, artid, price) VALUES ('$userid', '$artid', '$price')";
    mysqli_query($conn, $sql);
    $query = "DELETE FROM cart WHERE id='$row[cart_id]'";
    mysqli_query($conn, $query);
}

echo "<script>
alert('Delivery by 10 December ');
window.location.href='../index.php';
</script>";

exit();
?>
