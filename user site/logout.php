<?php
session_start();
include('conn.php');
session_destroy();
header("location:login.php");
?>