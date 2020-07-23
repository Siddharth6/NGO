<?php include("php/links.php");?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />
<?php include_once("php/navbar.php");?>
<?php include('php/slider.php');?>
<br/>

<style>
body{
	margin:0;
	padding:0;
}
 </style>
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
		 <div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="card"style="width: 18rem;">
					<div class="card-body">
						<a href="<?php echo "php/" .$row["filepath"]; ?>" data-fancybox="gallery" data-caption="<?php echo $row["file_name"]; ?>" class="img-fluid  img-thumbnail" style="width:200px; hieght:100px;" >
							<img src="<?php echo "php/" .$row["filepath"]; ?>" alt="" class="img-fluid  img-thumbnail" style="width:200px; hieght:100px;" />
						</a>
						
					</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-uppercase text-center"><?php echo $row["title"];  ?></h5>
							<p class="text-capitalize text-justify font-weight-normal"><?php echo $row["shortdescription"]; ?> </p> <br/>
							<a href="<?php echo "readmore.php?id=".$row['id'];?>" class="btn btn-outline-primary flex-fill" role="button" aria-pressed="true">Read more</a>
						</div>
					</div>
				</div>
			</div>
        </div>

<?php		
	}
}
?>

<script>
  $("[data-fancybox]").fancybox();
</script>

<?php include("php/footer.php");?>