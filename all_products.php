<?php
include "connection.php";
$sql1 = "SELECT product_id, name, brand, description, price FROM product";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "Product id: " . $row["product_id"]. " - Name: " .
$row["name"]. " - Brand: " . $row["brand"]. " - Description: " . $row["description"]. " - Price: " . $row["price"]. "<br>";
}
} else {
echo "0 results";
}





  ?>