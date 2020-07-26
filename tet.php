<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />
    <title>Events</title>
  </head>
  <body>
  <?php include_once("php/navbar.php");?>
  <?php include('php/slider.php');?>
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
		 <div class="container py-5">
            <div class="card mb-3" style="max-width: 600px;">
           <div class="row g-0">
            <div class="col-md-4">
            	<img src="<?php echo "php/" .$row["filepath"]; ?>" alt="" data-fancybox="gallery"  class="img-fluid" style="width:auto; hieght:90vh;"/>			
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title text-uppercase text-center"><?php echo $row["title"];  ?></h5>
            <p class="text-capitalize text-justify  text-truncate"><?php echo $row["shortdescription"]; ?> </p> <br/>
           
             <div class="pt-5" style="margin-top:0.8rem;">
               <a href="<?php echo "readmore.php?id=".$row['id'];?>" class="btn btn-outline-primary" role="button" aria-pressed="true" style="margin-left:12rem;">Read more</a>
            </div> 
            <p class="card-text ml-5 my-1"><small class="text-muted">Last updated <?php echo $row["Datetime"];?> ago</small></p>
         
            </div>
            </div>
        </div>
        </div>

     
    </div>

<?php		
	}
}
?>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include("php/footer.php");?>