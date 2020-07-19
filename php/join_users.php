
<?php
include("./links.php");
include("./admin_nav.php");
session_start();
error_reporting(0);
if(!isset($_SESSION['user'])){
header('location:index.php');
}
if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `community` WHERE CONCAT( `name`, `email`, `phone`, `whyjoin`, `Date`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);

}
else {
$query = "SELECT * FROM `community`";
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



<h2 class ="text-center text-info mt-5" style="margin-top:6rem;"> <u> WELCOME : <?php echo $_SESSION['user'];?>.</u></h2>
  
<div style="margin-left:20px;margin-right:20px;margin-top:4rem;">
<a  class="btn btn-primary" href="../das.php" role="button">Dashbord</a>
<br/> <br/> 

    
    
        <table class="table table-bordered">
            <thead>
                    <tr>
                            <th>ID</th>
                            <th>name </th>
                            <th>phone</th>
                            <th>email</th>
                            <th>why Join</th> 
                            <th>Date</th> 
                            <th class=" text-center"colspan="2">Action</th>
                    </tr>
            </thead>
<tbody>

  <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['whyjoin'];?></td>
                
                <td><?php echo $row['Date'];?></td>
                
                <td><a href="<?php echo "deletejoin.php?id=".$row['id'];?>" class="btn btn-outline-danger" onclick="return dele()" role="button" aria-pressed="true">Delete</a></td>
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



