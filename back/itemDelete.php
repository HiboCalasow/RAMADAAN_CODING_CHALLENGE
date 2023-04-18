<?php
 include "connect.php";
$sql=mysqli_query($connection,"DELETE  FROM items WHERE itemId='".$_GET['itemId']."'");
header("location:ItemsVeiw.php");
?>