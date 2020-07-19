
<?php
// include("./links.php");
// include("./admin_nav.php");
session_start();
error_reporting(0);

if(!isset($_SESSION['user'])){
    header('location:../index.php?error= Try again');
}

if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `message` WHERE CONCAT( `name`, `email`, `message`,`Date`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);

}
else {
$query = "SELECT * FROM `message` order by id DESC";
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
<a  class="btn btn-primary" href="../das.php" role="button">Dashbord</a>
<br/> <br/> 

    
    
        <table class="table table-bordered">
            <thead>
                    <tr>
                            <th>ID</th>
                            <th>name </th>
                            <th>email</th>
                            <th>message</th> 
                            <th>Date</th> 
                            
                    </tr>
            </thead>
<tbody>

  <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
               
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['message'];?></td>
                
                <td><?php echo $row['Date'];?></td>
                
                
            <?php endwhile;?>
        </tbody>
</table>
</form>
</div>  





