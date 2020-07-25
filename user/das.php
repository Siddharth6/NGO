
<?php

error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
          
        <!-- Our Custom CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- summernote -->
        <link rel="stylesheet" href="../css/das.css"><title>Dashboard | NGO </title> 
       
    </head>
    <body>
        
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 style="font-size: 20px;"><?php echo $_SESSION['user']; ?> </h3>
                </div>

                <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="" >Home</a>
                        
                    </li>
                    <li>
                        <a href="#"id="Product">Upload </a>
                     </li>
                    <li>
                        <a href="#"id="Respond">View</a>     
                    </li>
                    <li>
                        <a href="#"id="image">upload images</a>       
                    </li>
                  <li><a href="../php/logout.php">Logout</a></li>   
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                             
                                <i class="fa fa-align-left"></i>
                                <span><?php echo $_SESSION['user']; ?></span>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../php/logout.php">Logout</a></li>
                            </ul>
                        </div>
                       
                    </div>
                </nav>
                
                <div class=" card Product" >
                	<div class=" card-body">
                	   <form method="post" action="upload.php" enctype="multipart/form-data">
                       <input type="text" class="form-control "name="title" placeholder="Enter The  Event Title" required/> <br/>

					   <input type="file" class="form-control" name="Filename"> <br/>
                       <textarea rows="5" cols="10"  class="form-control" name="shortdescription" placeholder="Enter The Event Short Description"></textarea><br/>
                       <textarea rows="10" cols="40"  class="form-control" name="Description" placeholder="Enter The Event Description"></textarea>
					    <br/>
					    <input TYPE="submit" class="btn btn-outline-success"name="upload" value="Submit"/>
					</form>
                </div>
            </div>
    <!-- action bar -->
                    <div class="Respond " style="display:none;">
                      
                    <?php include('show_user.php');?>

                    </div>
                    

                    <div class="image" style="display:none;">
                      
                        <form action="img_user.php" method="post" enctype="multipart/form-data">
                            Select Image Files to Upload:
                            <input type="file" name="files[]" class="form-control"multiple ><br/>

                            <input type="submit" name="submit" class="btn btn-outline-primary" value="UPLOAD">
                        </form>
                        
                        <br/>
                        <?php include("../we.php");?>
                      </div>
           
        </div>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
               

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

                $('#Product').on('click' ,function(){
                	$('.Product').toggle();
                    $('.Respond').hide();
                    $('.image').hide();

                });

                $('#Respond').on('click' ,function(){
                	$('.Respond').toggle();
                    $('.Product').hide();
                    $('.image').hide();

                });

                $('#image').on('click' ,function(){
                	$('.image').toggle();
                    $('.Product').hide();
                    $('.Respond').hide();
                    

                });
            });
        </script>
    </body>
</html>


    

