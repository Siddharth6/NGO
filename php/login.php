
<!--check user data and password--->
<?php

session_start();
error_reporting(0);
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "ngo";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  


    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login_users where user = '$username' and password = '$password'";  
		$result = mysqli_query($con, $sql);  
		
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

			$_SESSION["user"] =  $username ;

			header('Location:../das.php'); 

			
			
			
        }  
        else{  
			echo "<script>alert('Sorry !!! Incorrect username or password.');document.location ='../index.php'; </script>";    
        }     
 
 ?>