<?php
include("php/links.php");
include("php/navbar.php");
include("php/slider.php");

?>


<section style="margin-top:7rem; backgroud-image:url('../img/module_table_bottom.png');">

<div class="container">
  
    <!-- contact section -->
  <div class="row justify-content-between">
    <div class="col-5">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Our Contact </div>
                <div class="card-body text-dark">
                    <h5 class="card-title">ADDRESS</h5>
                    <p class="card-text">108/B, Gangotri Nagar, Dandi, Naini Allahabad, Uttar Pradesh - 211008</p>
                </div>

                <div class="card-body text-dark">
                    <h5 class="card-title">Phone Number</h5>
                    <p class="card-text">+91-8004793591</p>
                </div>

                <div class="card-body text-dark">
                    <h5 class="card-title">E-mail</h5>
                    <p class="card-text"> avadhjks7717@gmail.com</p>
                </div>
                
            </div>
        </div>
    <div class="col-6">
   
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">Contact form </div>
            <div class="card-body text-uppercase">
                <h5 class="card-title text-center"></h5>
                    <form method="POST" action="php/con.php">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="your full name" required/>
                        </div>

                        <div class="form-group">
                            
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required/>
                        </div>

                        <div class="form-group">
                            
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
            </div>
    </div>
</div>
</div>

</div>

</section>

<!-- social icon -->
<div class="icon-bar py-2">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

<section class="about">

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

