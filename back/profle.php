<?php

 include "header.php";
 include "headers.php";
 include "connect.php";
?>
<style>
    img{
        width:150px;
        height:150px;
        border:1px solid black;
    }
</style>
<div class="main">
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                <div class="card-body">
                   <?php
                     $sql=mysqli_query($connection,"SELECT * FROM customers");
                     while($result=mysqli_fetch_array($sql)){
                   ?>
                    <div class="row">
                        <div class="col-md-10">
                            <table class="table table-bordered table-hover">
                                <tr> <td>Customer Id</td> <td><?php echo $result['cId'];?></td></tr>
                                <tr> <td>Customer Name</td> <td><?php echo $result['cName'];?></td></tr>
                                <tr> <td>Email Address</td> <td><?php echo $result['email'];?></td></tr>
                                <tr> <td>Contact  Number</td> <td><?php echo $result['contact'];?></td></tr>
                                <tr> <td>Gender</td> <td><?php echo $result['gender'];?></td></tr>
                                <tr> <td>Openning  Plance</td> <td><?php echo $result['blance'];?></td></tr>
                            </table>
                         

                        </div>
                        <div class="col-md-2">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode( $result['image']);?>"/>
                        <input type="submit" class="btn btn-primary btn-sm fload-right mt-3 ml-4" value="Change Profile">
                        </div>
                    
                    </div>
                    <?php
                };
                ?>
                </div>
            </div>
        </div>
    </div>
</div>