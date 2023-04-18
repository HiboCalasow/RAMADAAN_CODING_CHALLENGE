<?php

 //include "header.php";
 include("headers.php");
 include("connect.php");
?>
  <h1 class="h3 mb-4 text-gray-800">here is customers</h1>
<div class="main">
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header bg-success p-1 text-white">Customer Profile</div>
            <div class="card-body">
                <form action="addCustomer.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                        <label class="form-label">Customer Id</label>
                    <input type="text" name="cid" class="form-control form-control-sm" required readonly>
                       </div>
                       <div class="col">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="cName" class="form-control form-control-sm" required>
                    </div>
                    <div class="col">
                    <label  class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control form-control-sm" required>
                        </div>
                    </div>

                   <div class="row">

                    <div class="col">
                    <label  class="form-label mt-5">Customer Phone</label>
                    <input type="number" name="phone" class="form-control form-control-sm" required>
                    </div>
                    <div class="col">
                    <label  class="form-label  mt-5">Gender</label>
                    <input type="radio" name="gender"value="Male" class="ml-4" checked>Male
                    <input type="radio" name="gender"value="Female" class="ml-4" >Female
                    </div>
                    <div class="col">
                    <label  class="form-label  mt-5">Choose Image</label>
                    <input type="file" name="image" class="form-control form-control-sm pb-5 pt-3" required>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">

                    <label  class="form-label  mt-5">Openning blance</label>
                    <input type="text" name="blance" class="form-control form-control-sm" required>
                    </div>
                    <div class="col">
                    <label  class="form-label  mt-5">Date </label>
                    <input type="date" name="date" class="form-control form-control-sm" required>
                    </div>
                    <div class="col">
                        <button type="submit" name="save" class="btn btn-primary text-center text-white" style="margin-top:5rem">Save Customer</button>
                        <a href="profle.php" class="btn btn-success text-center text-white"  style="margin-top:5rem">Veiw Profo]iles</a>
                    </div>
                    </div>
                   </div>

                </form>
                <?php
                if(isset($_POST['save'])){
                    $cName=$_POST['cName'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $gender=$_POST['gender'];
                    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $blance=$_POST['blance'];
                    $date=$_POST['date'];
                    $sql=mysqli_query($connection,"INSERT INTO  customers VALUES(null,'$cName','$email','$phone','$gender','$image','$blance',null)");
                }
            
                   ?>
            </div>
        </div>
    </div>
</div>
<?php
