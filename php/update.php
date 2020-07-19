<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php?error= login');
}
?>

<?php
include('links.php');
$id = $_GET["id"];
$link = mysqli_connect("localhost", "root", "", "ngo"); 

if($link === false){ 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 

$sql = "SELECT `filepath`, `filename`, `title`, `description`,`shortdescription`, `Datetime` FROM gallery WHERE id=$id"; 
$result = mysqli_query($link, $sql);  
?>

    <?php while($row = mysqli_fetch_array($result)):?>
            <div class="container">
        <div class=" card-body">
                	   <form method="GET" action="update_post.php" enctype="multipart/form-data">

                      <input type="text" class="form-control" name ="id" value=" <?php echo $_GET["id"];?>" readonly/><br/>

                       <input type="text" class="form-control "name="title" value="<?php echo $row['title'];?>"/> <br/>
					   <!--  -->

                       <input type="text" class="form-control " name="shortdescription" value="<?php echo $row['shortdescription'];?>" style=" height:100px;width:auto; margin-top:4rem;"/>
                       <input type="text" class="form-control " name="description" value="<?php echo $row['description'];?>" style=" height:500px;width:auto; margin-top:4rem;"/>
                      
					    <br/><?php echo $row['Datetime'];?><br/>
					    <input TYPE="submit" class="btn btn-outline-success"name="upload" value="update"/>
					</form>
                </div>
                </div>
    <?php endwhile;?>