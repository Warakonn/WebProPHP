<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$namedb = $_POST["nameDB"];
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["submitDB"])) {
// Create database
$sql = "CREATE DATABASE $namedb";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
echo ""
}
if (isset($_POST["submitDB"])){
    
}
?>