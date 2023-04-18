

<?php

include("header.php");

include("headers.php");
include("connect.php");

$q=mysqli_query($connection,"SELECT * from items where itemId='".@$_GET['itemId']."'");
$data=mysqli_fetch_array($q);

?>
<div class="main">
<div class="container-fluid mt-3">
<div class="card">
<div class="card-header bg-success text-white">item Update</div>
<div class="card-body">
    <form action="itemEdit.php" method="post">
    <label  class="form-label">item Id :</label>
    <input type="text" name="item_Id" id="" class="form-control" readonly value="<?php echo $data['itemId']; ?>">
    <label  class="form-label">item Name :</label>
    <input type="text" name="itemName" id="" class="form-control"  value="<?php echo $data['itemName']; ?>">
    <label  class="form-label">Description :</label>
    <input type="text" name="description" id="" class="form-control"  value="<?php echo $data['description']; ?>">
   
    <label  class="form-label">Date Created :</label>
    <input type="text" name="dateCreated" id="" class="form-control"  value="<?php echo $data['dateCreated']; ?>">
   
    <label  class="form-label">category Name  :</label>
    <select type="text" name="catId" class="form-control">
    <?php
      $sql=mysqli_query($conn,"select * from category");
        while($d=mysqli_fetch_array($sql)){

        ?>
      
  
          <option value="<?php echo $d['catId'];?>"><?php echo $d['catName'];?> </option> 
       <?php
        }
        ?>
    </select>
   
    <a href="itemsVeiw.php" class="btn btn-danger mt-2 btn-sm" style="float:right;">Veiw record</a>
    <input type="submit" name="save_item" value="Save Change" class="btn btn-primary mt-2 btn-sm mr-2" style="float:right;">
    
</form>
    <?php
     if(isset($_POST['save_item'])){
        $catId=@$_POST['catId'];
        $itemId=$_POST['item_Id'];
        $itemName=$_POST['itemName'];
        $description=$_POST['description'];
        $dateCreated=$_POST['dateCreated'];
        $query=mysqli_query($connection,"UPDATE  items SET itemName='$itemName' , description='$description' , dateCreated='$dateCreated' where itemId='$itemId'");
        echo "<div class='alert alert-success mt-5'><b>".$itemName."</b> has been Modified</div>";
     };
     ?>
</div>
</div>
</div>
</div>
<?php
include "footer.html";
?>