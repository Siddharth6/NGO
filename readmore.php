<?php include('php/links.php');?>
<?php include('php/navbar.php');?>
<?php include('php/slider.php');?>

<?php

error_reporting(0);
$id = $_GET["id"];
$link = mysqli_connect("localhost", "root", "", "ngo"); 

if($link === false){ 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 

$sql = "SELECT `filepath`, `filename`, `title`, `description`, `shortdescription`,`Datetime` FROM gallery WHERE id=$id"; 
$result = mysqli_query($link, $sql);  
?>

    <?php while($row = mysqli_fetch_array($result)):?>
                
     <div class="container">
        <div class=" card " style="margin-top:7rem;">
                	   
        <h5 class="card-title text-uppercase text-center text-dark"  style="margin-top:3rem; "><?php echo $row['title'];?></h5>
                     <br/>
                     <div class="card-body">
                     <div class="container">
                                   <img src="<?php echo "php/".$row['filepath']; ?>" alt="<?php echo $row["filename"]; ?>" class="rounded img-fluid"/>
                    </div> <br/><br/>

                          <p class="card-text text-capitalize lead text-justify"><?php echo $row['shortdescription'];?></p><br/>

                          <p class="card-text text-capitaliz lead text-justifye"><?php echo $row['description'];?></p>
                       
                          <p class="card-text"><small class="text-muted">  publish date  <?php echo $row['Datetime'];?></small></p>
					    
                    </div>
                </div>
              </div>  
    <?php endwhile;?>
<!-- social icon -->
<div class="icon-bar py-2">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

<section class="about">

<div class="container pt-5">
 
     <center><a href="./show.php" class="btn btn-outline-info " role="button" aria-pressed="true">Read More</a></center>
</div>

</section>


<?php include("php/footer.php");?>