<?php include("php/links.php");?>
<?php include("php/navbar.php");?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />
<?php include('php/slider.php');?>

<div class="gallery" style="margin-top:8rem;margin-left:80px; margin-right:80px;">

    <?php 

    // Include database configuration file 
    $link = mysqli_connect('localhost','root','','ngo') or die("Error ".mysqli_error($link));
     
    // Retrieve images from the database 
    $query =$link->query("SELECT * FROM images WHERE status = 1 ORDER BY uploaded_on DESC"); 
     
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $imageThumbURL = 'php/uploads/'.$row["file_name"]; 
            $imageURL = 'php/uploads/'.$row["file_name"]; 
    ?>
		<a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["file_name"]; ?>"  class="py-4">
			<img src="<?php echo $imageThumbURL; ?>" alt="" />
		</a>
    <?php } 
    } ?>
<script>
  $("[data-fancybox]").fancybox();
</script>
</div>

<?php include("php/footer.php");?>