<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../login.php?error= Try again');
}





// img 
$link = mysqli_connect('localhost','root','','ngo') or die("Error ".mysqli_error($link));


$filename=$_FILES["Filename"]["name"];
$tmpname= $_FILES["Filename"]["tmp_name"]; 
$folder ="../php/doc/".$filename;
$result=move_uploaded_file($tmpname ,$folder);
// productname  and fileDescription
$filetitle = $_POST['title'];

$fileDescription = $_POST['Description'];
$fileshortdescription =$_POST['shortdescription'];


 

 if($result) { 
    //echo "Your file <html><b><i>".$folder."</i></b></html> has been successfully uploaded";       
    $query = "INSERT INTO `gallery` (filepath,filename,description,shortdescription,title) VALUES ('$folder','$filename','$fileDescription','$fileshortdescription','$filetitle')";
    
    $link->query($query) or die("Error : ".mysqli_error($link));
    // redir
    echo"<script type='text/javascript'>alert('upload sucessfully .'); document.location ='../das.php?sucess= upload sucessfully'; </script>";
                
}
else {          
    echo "<script>alert('Sorry !!! There was an error in uploading your file');</script>";         
}
mysqli_close($link);

?>