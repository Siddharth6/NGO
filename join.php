<?php
include("php/links.php");

include("php/navbar.php");

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./img/banner2.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;height:700px;margin-top:0rem; opacity: 0.7;">
      <div class="carousel-caption  d-md-block">
        <img src="img/favicon1.png" alt="" srcset=""style="width:20%;margin-bottom: 3.5rem;" class="img-fluid "/><br/>
        <a href="join.php" class="btn  btn-outline-success" role="button" aria-pressed="true" style="margin-bottom: 6.5rem;"> Join Us</a>
    </div>
    </div>
    <div class="carousel-item">
    <img src="./img/help-4398024_1920.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;height:700px;margin-top:0rem; ">
    <div class="carousel-caption  d-md-block">
        <h1 class="text-uppercase" style="font-family: 'Grenze Gotisch', cursive; margin-bottom: 11.5rem;">“A few people of integrity can go a long way.”</h1>
        <a href="join.php" class="btn btn-outline-success" role="button" aria-pressed="true">Join Us</a>
    </div>
    </div>
    <div class="carousel-item">
    <img src="./img/banner31.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;height:700px;margin-top:0rem; ">
    <div class="carousel-caption  d-md-block">
        <h1 class="text-uppercase" style="font-family: 'Grenze Gotisch', cursive; margin-bottom: 11.5rem;"> “The best way to find yourself is to lose yourself in the service of others.”</h1>
        <a href="join.php" class="btn btn-success" role="button" aria-pressed="true">Donate</a>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- join form -->
<div class="container" style="margin-top:4rem;">
<div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header">Join Now </div>
  <div class="card-body text-uppercase">
    <h5 class="card-title text-center">We welcome you to take responsibility. Get ready for new beginning.</h5>
          <form action="php/joinuser.php" method="post">
              <div class="form-group">
                
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="your full name" required/>
              </div>

              <div class="form-group">
                
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required/>
              </div>

              <div class="form-group">
                
                <input type="phone" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="+91 ">
              </div>
              
              <div class="form-group">
                
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="why you are join ?"></textarea>
              </div>

              <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
  </div>
</div>
</div>



<!-- social icon -->
<div class="icon-bar py-2">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>



<div class="container" style="margin-top:4rem;">
<div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header"> Donate  </div>
  <div class="card-body text-uppercase">
    <h5 class="card-title text-center"> Donation box</h5>
    <div class="container pt-5">
 
    <div class="row">
        <div class="col-6">
            <img src="img/favicon1.png" style="width:50%"/>
        </div>
        <div class="col-6">
        <div class="card" style="max-width:28rem;">
        <div class="card-header">Donate</div>
        <div class="card-body text-dark">
            <h5 class="card-title">AVADH JANKALYAN SAMITI</h5>
            <hr>
            <p class="card-text">
            Bank Name : BANK OF BARODA <br/><br/>
            Account Number :  58010100003088<br/><br/>
            IFSC Code : BARBOMAHEWA<br/><br/>
            Bank Address : MAHEWA NAINI,PRAYAGRAJ,ALLAHABAD, UTTRA PRADESH, INDIA
            </p>
        </div>
        </div>
        </div>
    </div>
</div>
  </div>
</div>
</div>

<?php include("php/footer.php");?>

   
