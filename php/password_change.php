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
mysqli_query($link,"UPDATE login_users set id='" . $_POST['id'] . "', user='" . $_POST['title'] . "', password='" . $_POST['password1'] . "' WHERE id='" . $_POST['id'] . "'");


$message = "


<script>alert('Record was update successfully.');document.location ='../settings.php'; </script>


";
}
   
$result = mysqli_query($link,"SELECT * FROM login_users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html> 
<html> 
	<head> 
    <?php include("links.php");?>
		<script> 
		
			// Function to check Whether both passwords 
			// is same or not. 
			function checkPassword(form) { 
				password1 = form.password1.value; 
				password2 = form.password2.value; 

				// If password not entered 
				if (password1 == '') 
					alert ("Please enter Password"); 
					
				// If confirm password not entered 
				else if (password2 == '') 
					alert ("Please enter confirm password"); 
					
				// If Not same return False.	 
				else if (password1 != password2) { 
					alert ("\nPassword did not match: Please try again...") 
					return false; 
				} 

				// If same return True. 
				else{ 
					alert("Password change sucessfully !") 
					return true; 
				} 
			} 
		</script> 
		
	</head> 
	<body> 
    <?php  include ('admin_nav.php');?>
		
		<form onSubmit = "return checkPassword(this)" method="post" action="" style="margin-top:5rem;"> 
		<table border = 1 align = "center"> 
			<tr> 
				<!-- Enter Username -->
				<td>User-ID:</td> 
				
                <td><input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly/></td>
			</tr> 
            <tr>
				<td>Username:</td> 
				
            <td> <input type="text" name="title" class="form-control" value="<?php echo $row['user']; ?>" readonly/></td>
            </tr>
			<tr> 
				<!-- Enter Password. -->
				<td>Password:</td> 
				<td><input type = password class="form-control" name = password1 size = 25 required/></td> 
			</tr> 
			<tr> 
				<!-- To Confirm Password. -->
				<td>Confirm Password:</td> 
				<td><input type = password class="form-control" name = password2 size = 25 required></td> 
			</tr> 
			<tr> 
				<td colspan = "2" align = right> 
				<input type = submit class="btn btn-outline-primary flex-fill" value = "change"></td> 
			</tr> 
		</table> 
		</form> 

        <div class="pt-5">
		<?php include("../we.php");?>
		</div>
	</body> 
</html>					 
