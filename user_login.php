<?php  
 $connect = mysqli_connect("localhost", "root", "", "ngo");  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:das.php");  
 }  

 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM add_users WHERE user = '$username'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["user"] = $username;  
                          header("location:user/das.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
  ?>  
 <?php include("php/links.php");?>
      
           
           
            <div class="container card border-primary  mb-3" style="width:500px;margin-top:12rem;">  
            <img src="img/favicon1.png"  class="img-thumbnail img-fluid" style="width:100px;margin-top:16px;margin-left:170px;"/>
            
                <h3 class="text-center text-primary pt-4">AVADH JANKALYAN SAMITI</h3>  
                <br />  
                  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post" action="">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Back To NGO</a></p>  
                </form>  
                
            
        </div>
        </body>
        
        </html>