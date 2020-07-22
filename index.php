<?php
include("php/links.php");
include("php/navbar.php");
include("php/slider.php");
?>

<section class="about">

 <div class="container pt-5">
 <h3 class=" text-center text-uppercase">About</h3>
    <div class="row pt-5">
        <div class="col-6">
            <img src="img/favicon1.png" style="width:50%"/>
        </div>
        <div class="col-6">
        <div class="card border-success " style="max-width: 28rem;">
        <div class="card-header">Who am I ?</div>
        <div class="card-body text-dark">
            <h5 class="card-title">AVADH JANKALYAN SAMITI</h5>
            <hr>
            <p class="card-text">
            Our NGO has played a crucial role in helping the needy in society. We care and provide education to the
             children living in the SLUMS Area and even providing education to those people who are unable to go to school. 
             Our leading causes are providing primary education, 
            vocational training, self-employment, legal aid, and protection for women and self -awareness programs.
            </p>
        </div>
        </div>
        </div>
    </div>
</div>

</section>


<section class="about">

 <div class="container pt-5">
     <h3 class=" text-center text-uppercase">gallery</h3>
                               
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />


<div class="gallery" style="margin-top:8rem;margin-left:70px; margin-right:70px;">

    <?php 

    // Include database configuration file 
    $link = mysqli_connect('localhost','root','','ngo') or die("Error ".mysqli_error($link));
     
    // Retrieve images from the database 
    $query =$link->query("SELECT  DISTINCT * FROM images  ORDER BY Rand() LIMIT 5"); 
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $imageThumbURL = 'php/uploads/'.$row["file_name"]; 
            $imageURL = 'php/uploads/'.$row["file_name"]; 
    ?>
		<!-- img -->
        
            <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["file_name"]; ?>" >
               <img src="<?php echo $imageThumbURL; ?>" alt="" />
            </a>



    <?php } 
    } ?>
<script>
  $("[data-fancybox]").fancybox();
</script>
</div>


</div>

</section>


<!-- only image -->
<section class="work">



 

</section>


<!-- Featured Causes || Support Nation -->
<section class="about">

 <div class="container pt-5">
  <h2 class="text-center text-uppercase"> Featured Causes || Support Nation</h2>

    
   <div class="card-deck pt-5">
  <div class="card">
  <p class="card-text"> <img class="img-fluid img-thumbnail card-img-top" src="img/s3.jpg" alt="Card image cap"></p>
    <div class="card-body">
    <div class="card-header bg-transparent text-center">Education</div>
      <p class="card-text">Education opens up the mind, expands it and allows you to improve your life in so many ways.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <p class="card-text"> <img class="img-fluid img-thumbnail card-img-top" src="img/s4.jpg" alt="Card image cap"></p>
    <div class="card-body">
    <div class="card-header bg-transparent text-center">Women Empowerment</div>
      <p class="card-text"> There is a special place in hell for women who do not help other women.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <p class="card-text"> <img class="img-fluid img-thumbnail card-img-top" src="img/s5.jpg" alt="Card image cap"></p>
    <div class="card-body">
    <div class="card-header bg-transparent text-center">Environment</div>
      <p class="card-text">The Earth is what we all have in common.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div><br/>
   <center>
   <a href="./show.php" class="btn btn-outline-info " role="button" aria-pressed="true">Read More</a></center>
</div>

</section>



<?php include("php/footer.php");?>