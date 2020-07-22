
<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['user'])){
header('location:index.php');
}
if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `gallery` WHERE CONCAT( `filepath`, `filename`, `title`, `description`, `Datetime`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);

}
else {
$query = "SELECT * FROM `gallery`";
$search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
$connect = mysqli_connect("localhost", "root", "", "ngo");
$filter_Result = mysqli_query($connect, $query);
return $filter_Result;
}

?>




  
<div style="margin-left:20px;margin-right:20px;">
<a  class="btn btn-primary" href="das.php" role="button">Dashbord</a>
<br/> <br/> 

    
    
        <table class="table table-bordered table-responsive">
       <thead>
       <tr>
            <th>ID</th>
            <th>Title </th>
            <th>Image</th>
            <th>Description</th>
           
            <th>Reporting Time</th> 
            <th class=" text-center"colspan="2">Action</th>
      </tr>
    </thead>
<tbody>

  <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><img src="<?php echo "php/" .  $row['filepath'];; ?>" alt="<?php echo $row["filename"]; ?>" class="rounded img-fluid img-thumbnail" /></td>
                <td><?php echo $row['shortdescription'];?></td>
                
                <td><?php echo $row['Datetime'];?></td>
                <td><a href="<?php echo "php/update_post.php?id=".$row['id'];?>" class="btn btn-outline-primary " role="button" aria-pressed="true">Update</a></td>
                <td><a href="<?php echo "php/delete.php?id=".$row['id'];?>" class="btn btn-outline-danger" onclick="return dele()" role="button" aria-pressed="true">Delete</a></td>
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



