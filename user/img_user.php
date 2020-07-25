<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])){
    header('location:../index.php?error= login');
}
?>
<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    $link = mysqli_connect('localhost','root','','ngo') or die("Error ".mysqli_error($link));
    // File upload configuration 
    $targetDir = "../php/uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $link->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "<script>alert('upload successfully.');document.location ='../das.php#Respond'; </script>".$errorMsg; 
            }else{ 
                $statusMsg = "<script>alert('Sorry, there was an error uploading your file.');document.location ='../das.php#Respond'; </script>"; 
            } 
        } 
    }else{ 
        $statusMsg = "<script>alert('Please select a file to upload.');document.location ='../das.php#Respond'; </script>"; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 
?>