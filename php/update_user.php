<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php?error= login');
}
?>
<?php
$link = mysqli_connect('localhost','root','','ngo') or die("Error ".mysqli_error($link));
if(count($_POST)>0) {
mysqli_query($link,"UPDATE add_users set id='" . $_POST['id'] . "', user='" . $_POST['title'] . "', password='" .password_hash( $_POST['shortdescription'],PASSWORD_DEFAULT) . "' WHERE id='" . $_POST['id'] . "'");


$message = "


<script>alert('Record was update successfully.');document.location ='./mange.php'; </script>


";
}
$result = mysqli_query($link,"SELECT * FROM add_users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<?php include("links.php");?>
<title>Update Post</title>
</head>
<body>
<?php  include ('admin_nav.php');?>

<div class="container" style="margin-top:6rem;">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="../das.php" class="btn btn-outline-dark flex-fill">Dashboard</a>
</div>
ID :<br>
<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
<input type="text" name="id"  class="form-control" value="<?php echo $row['id']; ?>" readonly/>
<br>
Name : <br>
<input type="text" name="title" class="form-control" value="<?php echo $row['user']; ?>"/>
<br>
Password : <br>
<input type="password" name="shortdescription" class="form-control" value="<?php echo $row['password']; ?>"/>
<br>


<br>

<input type="submit" name="submit" value="Update" class="btn btn-outline-success flex-fill">

</form>
</div>
</body>
</html>