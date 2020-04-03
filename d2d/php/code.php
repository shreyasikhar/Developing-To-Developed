<?php

//$con = mysqli_connect("localhost","phpmyadmin","ankita23","store") or die(mysqli_error($con));
include "../includes/common.php";
if(mysqli_connect_errno())
   echo "failed to connect:". mysqli_connect_errno();
?>