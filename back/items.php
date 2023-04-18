<?php


include("headers.php");
include("connect.php");
?>
  <h1 class="h3 mb-4 text-gray-800">here is Items</h1>
<div class="main">
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-header p-1 bg-success text-white">item registration</div>
            <div class="card-body">
                <form action="items.php"method="post">
                    <label class="form-label">Item Id</label>
                    <input type="text" name="itemId" class="form-control form-control-sm" readonly>
    
                    <label  class="form-label">Item Name</label>
                    <input type="text" name="itemName" class="form-control form-control-sm">
                  
                    <label  class="form-label">Category Name </label>
                    <select type="text" name="catId" class="form-control form-control-sm">
                         <option value="">Select Category Name From Dropdown</option>
                         <?php
                         $query=mysqli_query($connection,"SELECT * FROM category");
                         while($data=mysqli_fetch_array($query)){

                         
                         ?>
                         <option value="<?php echo $data['catId'];?>">
                         <?php echo $data['catName'];?>
                         <?php
                         }
                         ?>
                         </option>
                </select>
                    
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control form-control-sm">
                  
                    <label for="" class="form-label">Date Created</label>
                    <input type="date" name="dateCreated" class="form-control form-control-sm" >
                    
                    <input type="submit" value="Save Item" name="save_item" class="btn btn-primary btn-sm mt-2">

                    <a href="itemsVeiw.php" class="btn btn-danger btn-sm mt-2">View Item</a>
                </form>
                <?php
                if(isset($_POST['save_item'])){
                    $itemName=$_POST['itemName'];
                    $catId=$_POST['catId'];
                    $description=$_POST['description'];
                    $dateCreated=$_POST['dateCreated'];
               

                    $q=mysqli_query($conn,"INSERT INTO items VALUES(NULL,'$itemName','$description','$dateCreated','$catId')");
                    if($q){
                        echo "<div class='alert alert-success p-1 mt-5'>".$itemName." has been created successfully</div>";
                    }
                    else{
                        echo "<div class='alert alert-warning p-1 mt-5'> Insertio Operation failed</div>";
                    };

                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.html";