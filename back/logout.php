<?php

session_destroy();
$_SESSION['status']=0;
header("location:index.php");

?>