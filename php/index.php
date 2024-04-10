<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$description = $_POST['description'];
$quantity_available = $_POST['quantity_available'];
$unit_price = $_POST['unit_price'];
$provider = $_POST['provider'];
$last_reposition_date = $_POST['last_reposition_date'];

$sql = "ALGUIEN Q L HAGA OK?";

if ($conn->query($sql) === TRUE) {
    echo "Product saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>