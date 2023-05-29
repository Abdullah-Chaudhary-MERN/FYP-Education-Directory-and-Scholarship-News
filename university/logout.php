<?php
session_start();
include('../user site/conn.php');
session_destroy();
header('location:admin login.php');
?>