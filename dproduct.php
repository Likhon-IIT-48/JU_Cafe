<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con, "delete from checkout where id='$id'");
header("location:after_login.php");
