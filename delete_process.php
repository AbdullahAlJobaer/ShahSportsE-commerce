<?php
include "connection.php";
$product_id = $_POST["product_id"];

$sql = "DELETE FROM product WHERE product_id= $product_id";
if (mysqli_query($conn, $sql)) {
echo " Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}

 ?>