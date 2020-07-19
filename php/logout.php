<?php
error_reporting(0);
session_start();
session_destroy();
echo" Please Wait...";
header('location:../index.php');
?>