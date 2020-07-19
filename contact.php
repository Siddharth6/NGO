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


<section class="about">

 <div class="container pt-5">
  <h2 class="text-center text-uppercase"> Featured Causes || Events</h2>

    <div class="row  pt-5">
        <div class="col">

        <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header bg-transparent border-success">Education for every child</div>
            <div class="card-body text-success">
                <!-- <h5 class="card-title">Success card title</h5> -->
                <p class="card-text"> <img class="card-img-top" src="img/s3.jpg" alt="Card image cap"></p>
            </div>
         <div class="card-footer bg-transparent border-success">Children are the future, teach them well and let them lead the wa</div>
       </div>

        </div>
        <div class="col">

        <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header bg-transparent border-success">Women Empowerment</div>
            <div class="card-body text-success">
                <!-- <h5 class="card-title">Success card title</h5> -->
                <p class="card-text"> <img class="card-img-top" src="img/s4.jpg" alt="Card image cap"></p>
            </div>
         <div class="card-footer bg-transparent border-success">I’m a feminist. What’s your superpower?</div>
       </div>

        </div>
        <div class="col">

        <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header bg-transparent border-success">Animal Welfare</div>
            <div class="card-body text-success">
                <!-- <h5 class="card-title">Success card title</h5> -->
                <p class="card-text"> <img class="card-img-top" src="img/photo-1517486430290-35657bdcef51.jpg"  alt="Card image cap"></p>
            </div>
         <div class="card-footer bg-transparent border-success">Giving Animals a new leash on life!</div>
       </div>

        </div>
        <div class="col">

        <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header bg-transparent border-success">Environment</div>
            <div class="card-body text-success">
                <!-- <h5 class="card-title">Success card title</h5> -->
                <p class="card-text"> <img class="card-img-top" src="img/s5.jpg" alt="Card image cap"></p>
            </div>
         <div class="card-footer bg-transparent border-success">The Earth is what we all have in common.”</div>
       </div>

        </div>
   </div>
      <center><a href="./show.php" class="btn btn-outline-info " role="button" aria-pressed="true">Read More</a></center>
</div>

</section>


<?php include("php/footer.php");?>

