<?php include("php/links.php");?>
<?php include_once("php/navbar.php");?>
<?php include('php/slider.php');?>

<p class="text-center text-danger mb-5" style="font-family: 'Abril Fatface', cursive;">Home | Event </p>


<div class="row" style="margin-top:1rem;">
 
	<?php
    error_reporting(0);
	$con = mysqli_connect('localhost','root','');
	 mysqli_select_db($con,'ngo');

	


	$query = " SELECT `filepath`,`id`, `filename`, `title`, `description`, `shortdescription`,`Datetime` FROM `gallery` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($row= mysqli_fetch_array($queryfire)){
		
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form>
				<div class="card" style="margin-top:4rem;margin-left:4rem;">
					<h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo $row["title"];  ?> </h6>
					

					<div class="card-body">
						<img src="<?php  echo "php/" .$row["filepath"];  ?>" alt="<?php echo $row["filename"]; ?>" class="img-fluid mb-2 img-thumbnail" >
                        

						<h6><?php echo $row["shortdescription"]; ?> </h6> <br/>

						<h6> Posted Date : <?php echo $row["Datetime"];  ?> </h6> 
 

					</div>
						<div class="btn-group d-flex">
						<a href="<?php echo "readmore.php?id=".$row['id'];?>" class="btn btn-outline-primary flex-fill" role="button" aria-pressed="true">Read more</a>
							<!-- <button class="btn btn-success flex-fill"></button>  -->
						</div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>
</div>
<br/>



<?php include("php/footer.php");?>