<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$servername = "remotemysql.com";
$username = "u4ALLcHTNG";
$password = "XROIUJxZdU";
$dbname = "u4ALLcHTNG";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userTable (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "we will contact you soon.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
