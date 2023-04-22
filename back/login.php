<?php
session_start(); 
 //include "header.php";
//include "./header.php";
include "./connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>BIDHAAN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<h2 class="bg-success text-white text-center " >Bidhaan Manegment System</h2> 
<div class="container-fluid col-md-4 mt-5 p-1">
    <div class="card">
        <div class="card-header">
         <h1 class="bg-success text-white text-center " >Admin Login</h1>             
        </div>
        <div class="card-body bg-light">
            <form action="login.php" method="post">
                <label for="user" class="form-label mt-3"><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" class="form-control" name="username">
                <label class="form-label mt-4"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" class="form-control" name="password">
                <input type="submit" class="form-control bg-success fs-4 mt-3 text-center text-white p-2" value="Login" name="btn_login">             
                <input type="checkbox" checked="checked" name="remember" class="mt-3" value="Remember me"> Remember me
             
                <div class="container mt-2">
                 <button type="button" class="btn btn-primary ">Cancel</button>
                 <span class="f-righ ml-5">Forgot <a href="#">password?</a></span>
                </div>
              
            </form>
            <?php
            if(isset($_POST['btn_login'])){
                if(empty($_POST['username']) or empty($_POST['password'])){
                    echo "<div class='alert alert-danger mt-2 p-1'> Please Enter User Name And Password </div>";
                }
                else{
                    $check=mysqli_query($connection,"SELECT * FROM login WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
                    if(mysqli_num_rows($check)==0){
                        echo "<div class='alert alert-danger mt-2 p-1'> Invalid  User Name or Password </div>";
                    }
                    else{
                        $_SESSION['user']=$_POST['username'];
                        $_SESSION['status']=1;
                        header("location:dashboard.php");
                    }

                }
            }
            ?>

