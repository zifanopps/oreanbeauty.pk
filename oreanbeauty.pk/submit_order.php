<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "oreanbeauty.pk");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$product = $_POST['product'];

// Insert into database
$sql = "INSERT INTO orders (firstname, lastname, mobile, address, product)
        VALUES ('$firstName', '$lastName', '$mobile', '$address', '$product')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Order placed successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
