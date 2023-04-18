<?php
 include "./connect.php";
$sql=mysqli_query($connection,"DELETE  FROM users WHERE user_ID='".$_GET['user_ID']."'");
header("location:users.php");
?>