
<?php

include("headers.php");
include("connect.php");

$q=mysqli_query($connection,"SELECT MAX(catId) AS catId from category");
$data=mysqli_fetch_array($q);
$catid=$data['catId']+1;
?>
  <h1 class="h3 mb-4 text-gray-800">here is category</h1>
<div class="main">
<div class="container-fluid mt-3">
<div class="card">
<div class="card-header bg-success text-white">Category Registration</div>
<div class="card-body">
    <form action="category.php" method="post">
    <label  class="form-label">Category Id :</label>
    <input type="text" name="catId" id="" class="form-control" readonly value="<?php echo $catid; ?>">
    <label  class="form-label">Category Name :</label>
    <input type="text" name="catName" id="" class="form-control">
    <a href="catVeiw.php" class="btn btn-danger mt-2 btn-sm" style="float:right;">Veiw record</a>
    <input type="submit" name="btn_save" value="Save Category" name="convert" class="btn btn-primary mt-2 btn-sm mr-2" style="float:right;">
    </form>
    <?php
     if(isset($_POST['btn_save'])){
        $catname=$_POST['catName'];
        $query=mysqli_query($connection,"INSERT INTO category VALUES(NULL,'$catname',NULL)");
        echo "<div class='alert alert-success mt-5'><b>".$catname."</b> has been created</div>";
     };
     ?>
                        <?php
                   if(isset($_POST['convert']));
                   {
                    // $cName=@$_POST['cName'];
                    @$catname=htmlspecialchars($catname);
                    $catname=rawurlencode($catname);

                    @$convert=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$catname.'&tl=en-IN');
                    $audio_player="<audio style='display: none;' controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($convert)."'></audio>";
                   }
                   echo $audio_player;
                   ?>
</div>
</div>
</div>
</div>
<?php
include "footer.html";