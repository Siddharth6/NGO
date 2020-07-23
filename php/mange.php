
<?php
include("./links.php");
include("./admin_nav.php");
session_start();
error_reporting(0);

if(!isset($_SESSION['user'])){
    header('location:../index.php?error= Try again');
}

if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `add_users` WHERE CONCAT( `id`, `user`, `password`,`date`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);

}
else {
$query = "SELECT * FROM `add_users` order by id DESC";
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




  
<div class="table-responsive " style="margin-left:20px;margin-right:20px;">
<a  class="btn btn-primary" href="../das.php" role="button">Dashbord</a>
<br/> <br/> 

    
    
        <table class="table table-bordered">
            <thead>
                    <tr>
                            <th>ID</th>
                            <th>name </th>
                            <th>Password (encoded)</th>
                             
                            <th>Date</th>
                            <th>Action</th> 
                            
                            
                    </tr>
            </thead>
<tbody>

  <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['user'];?></td>
               
                <td><?php echo $row['password'];?></td>
               
                
                <td><?php echo $row['date'];?></td>
                <td><a href="<?php echo "update_user.php?id=".$row['id'];?>" class="btn btn-outline-success"  role="button" aria-pressed="true">Update</a>
                   <a href="<?php echo "dele_users.php?id=".$row['id'];?>" class="btn btn-outline-danger" onclick="return dele()" role="button" aria-pressed="true">Delete</a></td>
                
                
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
</body></html>




