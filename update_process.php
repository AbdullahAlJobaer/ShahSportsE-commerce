<?php
include "connection.php";
$product_id = $_POST["product_id"];
$price = $_POST["price"];

$sql = "UPDATE product SET price='$price' WHERE product_id=$product_id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


 ?>