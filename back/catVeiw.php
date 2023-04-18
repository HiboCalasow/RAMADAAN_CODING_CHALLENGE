

<?php
include("headers.php");

 include "connect.php";
?>


<div class="main">
<div class="container-fluid mt-3 sm">
 <div class="card">
    <div class="card-header bg-light p-0">Categort Lists</div>
    <div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Data Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
             $count=1;
            $sql=mysqli_query($connection,"SELECT * FROM category ORDER BY dat_created DESC");
            while($row=mysqli_fetch_array($sql)){
             echo "<tr>";
             echo "<td>".$count."</td>";
             echo "<td>".$row['catName']."</td>";
             echo "<td>".$row['dat_created']."</td>";
             ?>
             <td>
                <a href="catEdit.php?catId=<?php echo $row['catId'];?>" class=" btn btn-primary">Update</a>
                <a onclick="return confirm('Are You Sure To Delete [<?php echo $row['catName'] ;?>]?')" href="catDelete.php?catId=<?php echo $row['catId'];?> " class=" btn btn-danger">Delete</a>
             <?php
                echo "</tr>";
             $count++;
            }
            ?>
            
        </tbody>
    </table>

</div>
 </div>
 
</div>
</div>

    <script>
    $(document).ready(function(){
        $('table').dataTable();
    });
</script>