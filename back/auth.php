<?php

session_start();
if($_SESSION['status']!=1){
    ?>
    <script>
        alert("you are allowed the system first login");
        window.location="login.php";
    </script>
    <?php
}

?>