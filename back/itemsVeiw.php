<?php

 include "header.php";

 include("headers.php");
 include("connect.php");
?>


<div class="main">
<div class="container-fluid mt-3  mb-3 sm">
 <div class="card">
    <div class="card-header bg-light p-0">item Lists</div>
    <div class="card-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>item Name</th>
                <th>Description</th>
                <th>Data Created</th>
                <th>category Name</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
           
            <?php
             $count=1;
            $sql=mysqli_query($connection,"SELECT i.* ,c.catName from items i inner join category c on i.catId=c.catId ");
            while($row=mysqli_fetch_array($sql)){
             echo "<tr>";
             echo "<td>".$count."</td>";
             echo "<td>".$row['itemName']."</td>";
             echo "<td>".$row['description']."</td>";
             echo "<td>".$row['dateCreated']."</td>";
             echo "<td>".$row['catName']."</td>";
             ?>
             <td>
                <a href="itemEdit.php?itemId=<?php echo $row['itemId'];?>" class=" btn btn-primary">Update</a>
                <a onclick="return confirm('Are You Sure To Delete [<?php echo $row['itemName'] ;?>]?')" href="itemDelete.php?itemId=<?php echo $row['itemId'];?> " class=" btn btn-danger">Delete</a>
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