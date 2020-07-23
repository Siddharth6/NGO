
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php?error= login');
}
?>

<?php
$id = $_GET["id"];
$link = mysqli_connect("localhost", "root", "", "ngo"); 

if($link === false){ 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 

$sql = "DELETE FROM add_users WHERE id=$id"; 
if(mysqli_query($link, $sql)){ 
	echo "<script>alert('Record was deleted successfully.');document.location ='./mange.php'; </script>"; 
} 
else{ 
	echo "ERROR: Could not able to execute $sql. " 
								. mysqli_error($link); 
} 
mysqli_close($link); 
?> 
