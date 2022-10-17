<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$servername = "sql6.freemysqlhosting.net";
$username = "sql6525693";
$password = "ylDik4dEIc";
$dbname = "sql6525693";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$ok =mail("mobwebguru@gmail.com","Query Website","heelo");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userTable (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "we will contact you soon.".$ok;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
