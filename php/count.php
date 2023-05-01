<?php

$conn = mysqli_connect("172.18.0.3", "root", "password123","Redlock");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
// SQL query to retrieve all columns from the "user" table
$sql = "SELECT COUNT(*) AS count FROM users";

// Execute the query
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
    echo "count data = " . $row["count"];
} else {
    echo "0 results";
}
?>
