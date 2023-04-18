

<?php

include("headers.php");
include("connect.php");

$q=mysqli_query($connection,"SELECT * from category where catId='".@$_GET['catId']."'");
$data=mysqli_fetch_array($q);

?>
<div class="main">
<div class="container-fluid mt-3">
<div class="card">
<div class="card-header bg-success text-white">Category Update</div>
<div class="card-body">
    <form action="catEdit.php" method="post">
    <label  class="form-label">Category Id :</label>
    <input type="text" name="catId" id="" class="form-control" readonly value="<?php echo $data['catId']; ?>">
    <label  class="form-label">Category Name :</label>
    <input type="text" name="catName" id="" class="form-control"  value="<?php echo $data['catName']; ?>">
    <a href="catVeiw.php" class="btn btn-danger mt-2 btn-sm" style="float:right;">Veiw record</a>
    <input type="submit" name="btn_save" value="Save Change" class="btn btn-primary mt-2 btn-sm mr-2" style="float:right;">
    </form>
    <?php
     if(isset($_POST['btn_save'])){
        $catname=$_POST['catName'];
        $catid=$_POST['catId'];
        $query=mysqli_query($connection,"UPDATE  category SET catName='$catname' where catId='$catid'");
        echo "<div class='alert alert-success mt-5'><b>".$catname."</b> has been Modified</div>";
     };
     ?>
</div>
</div>
</div>
</div>
<?php
include "footer.html";