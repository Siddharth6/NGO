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
$message = $mysqli->real_escape_string($_REQUEST['message']);
// Attempt insert query execution
if(isset($name) && ($email) && ($message) != "") 
{
  //Do my PHP code
  $sql = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";

  $mysqli->query($sql) === true;
  echo "<script>alert('Message Send.');document.location ='../contact.php'; </script>";

}
else{
    echo "<script>document.location ='../join.php'; </script>";
}
 
// Attempt insert query execution
// $sql = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";
// if($mysqli->query($sql) === true){
//     echo "<script>alert('Message Send.');document.location ='../contact.php'; </script>";
// } else{
//     echo "<script>document.location ='../join.php'; </script>";
// }
 
// Close connection
$mysqli->close();
?>