<?php
session_start(); 
include "header.php";
include "db_connect.php";
?>
<h2 class="bg-success text-white text-center " >Inventory Manement System</h2> 
<div class="container-fluid col-md-4 mt-5 p-1">
    <div class="card">
        <div class="card-header">
         <h1 class="bg-success text-white text-center " >Admin Login</h1>             
        </div>
        <div class="card-body bg-light">
            <form action="index.php" method="post">
                <label for="user" class="form-label mt-3"><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" class="form-control" name="userName">
                <label class="form-label mt-4"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" class="form-control" name="password">
                <input type="submit" class="form-control bg-success fs-1 mt-3 text-center text-white p-2" value="Login" name="btn_login">             
                <input type="checkbox" checked="checked" name="remember" class="mt-3" value="Remember me"> Remember me
             
                <div class="container mt-2">
                 <button type="button" class="btn btn-primary ">Cancel</button>
                 <span class="f-righ ml-5">Forgot <a href="#">password?</a></span>
                </div>
              
            </form>
            <?php
            if(isset($_POST['btn_login'])){
                if(empty($_POST['userName']) or empty($_POST['password'])){
                    echo "<div class='alert alert-danger mt-2 p-1'> Please Enter User Name And Password </div>";
                }
                else{
                    $check=mysqli_query($conn,"SELECT * FROM login WHERE userName='".$_POST['userName']."' and password='".$_POST['password']."'");
                    if(mysqli_num_rows($check)==0){
                        echo "<div class='alert alert-danger mt-2 p-1'> Invalid  User Name or Password </div>";
                    }
                    else{
                        $_SESSION['user']=$_POST['userName'];
                        $_SESSION['status']=1;
                        header("location:sidebar.php");
                    }

                }
            }
            ?>

