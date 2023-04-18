<?php
 include "connect.php";
$sql=mysqli_query($connection,"DELETE  FROM category WHERE catId='".$_GET['catId']."'");
header("location:catVeiw.php");
?>