
<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['user'])){
header('location:../index.php');
}
if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `images` WHERE CONCAT( `filepath`, `filename`, `title`, `description`, `Datetime`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);

}
else {
$query = "SELECT * FROM `images`";
$search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
$connect = mysqli_connect("localhost", "root", "", "ngo");
$filter_Result = mysqli_query($connect, $query);
return $filter_Result;
}
include("links.php");
include("./admin_nav.php");
?>



<h2 class ="text-center text-info"> <u> WELCOME : <?php echo $_SESSION['user'];?>.</u></h2>
  
<div style="margin-left:20px;margin-right:20px;margin-top:3rem;">
<a  class="btn btn-primary" href="../das.php" role="button">Dashbord</a>
<br/> <br/> 

    
    
        <table class="table table-bordered">
       <thead>
       <tr>
            <th>Image</th>
            
            <th class="text-center">Action</th>
      </tr>
    </thead>
<tbody>

  <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><img src="<?php echo "uploads/" .$row['file_name'];?>" alt="<?php echo $row["file_name"]; ?>" class="rounded img-fluid img-thumbnail" style=" width:150px;" /></td>
                <td><a href="<?php echo "gallery_delete.php?id=".$row['id'];?>" class="btn btn-outline-danger" onclick="return dele()" role="button" aria-pressed="true">Delete</a></td>
            <?php endwhile;?>
        </tbody>
</table>
</form>
</div>  

<script >
function dele(){
   return confirm("are you sure you want to delete this data ");
}
</script>



