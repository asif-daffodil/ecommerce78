<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];
    $catDes = $_POST['catDes'];

    // Perform server-side form validation
    if (empty($catName)) {
        echo "error"; // Return an error message
        exit;
    }

    // Update the category in the database
    $sql = "UPDATE product_categories SET name='$catName', description='$catDes' WHERE id=$catId";
    if (mysqli_query($conn, $sql)) {
        echo "success"; // Return success message
    } else {
        echo "error"; // Return error message
    }

    // Close the database connection
    mysqli_close($conn);
}
