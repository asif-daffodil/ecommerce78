<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost", "root", "", "ecommers78");
$query = $conn->query("SELECT * FROM `sub_sub_cat` WHERE `sub_cat_id` = $id ORDER BY `id` DESC");
$sub_categories = array();

while ($row = $query->fetch_object()) {
    $sub_categories[] = $row;
}

echo json_encode($sub_categories);
