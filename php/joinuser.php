<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "ngo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);

$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$whyjoin =$mysqli->real_escape_string($_REQUEST['message']);
 
// Attempt insert query execution
$sql = "INSERT INTO community (name, email, whyjoin,phone) VALUES ('$name', '$email', '$whyjoin','$phone')";
if($mysqli->query($sql) === true){
    echo "<script>alert('Message Send.');document.location ='../contact.php'; </script>";
} else{
    echo "<script>document.location ='../join.php'; </script>";
}
 
// Close connection
$mysqli->close();
?>