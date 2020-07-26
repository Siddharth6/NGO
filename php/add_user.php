
<?php  
 $connect = mysqli_connect("localhost", "root", "", "ngo");  
 
 error_reporting(0);
 session_start();
 if(!isset($_SESSION['user'])){
     header('location:../index.php');
 } 
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $role =     mysqli_real_escape_string($connect, $_POST["role"]);  
           $query = "INSERT INTO login_users (user, password ,role) VALUES('$username', '$password','$role')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  

 }  

  ?>  
 <!DOCTYPE html>  
 <html>  
      
           
           
            <div class="container card border-primary  mb-3" style="width:500px;">  
            <img src="../img/favicon1.png"  class="img-thumbnail img-fluid" style="width:100px;margin-top:16px;margin-left:170px;"/>
            
                <h3 class="text-center text-primary pt-4">AVADH JANKALYAN SAMITI</h3>  
                
                <h3 class="text-center">Register</h3>  
                <br />  
                <form method="post" action="">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" />  
                     <br />  
                     <label>user type :</label>  
                    <select name="role" class="form-control">
                     <option value="member"> member</option>
                    </select>
                     <br />  
                 

                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="../das.php">Dashboard</a></p>  
                </form>  
               
            
        </div>
        