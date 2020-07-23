
<?php

error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php');
}
?>

<div class="row" style="margin-top:1rem;">
 
	<?php
    error_reporting(0);
	$con = mysqli_connect('localhost','root','');
	 mysqli_select_db($con,'ngo');

	$query = " SELECT `id`, `user`, `password` FROM `login_users` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($row= mysqli_fetch_array($queryfire)){
		
			?>
			
		<div class="">
                    
                <form>
                    <div class="row">
                    
                        <div class="col">
                             <label for="">Name :</label>
                        </div>
                        <div class="col">
                             <input type="text" class="form-control" value="<?php echo $row["user"];?>" readonly>
                        </div>

                        <div class="col">
                            <label for="">Password :</label>
                        </div>
                        <div class="col">
                             <input type="password" class="form-control" value="<?php echo $row["password"];?>" readonly>
                        </div>
                    </div><br/>

                    <div class="btn-group d-flex">
						<a href="<?php echo "password_change.php?id=".$row['id'];?>" class="btn btn-outline-primary flex-fill" role="button" aria-pressed="true">change password</a>
							<!-- <button class="btn btn-success flex-fill"></button>  -->
						</div>
                </form>

		</div>


	<?php		
		}
	}
	?>
</div>
<br/>



