<?php
// Replace these credentials with your actual MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommers78";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Close the connection
$conn->close();

// Send the JSON response
header("Content-type: application/json");
echo json_encode($products);
