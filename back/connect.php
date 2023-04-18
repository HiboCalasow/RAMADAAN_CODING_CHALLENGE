<?php 
$connection = new mysqli('localhost','root','','bidhaandb');
if(!$connection){
    die(mysqli_error($connection));
}
?> 