<?php
session_start();
include('../user site/conn.php');
$did=$_GET['did'];
$sql="DELETE FROM `scholarship` WHERE `id`='$did'";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:scholarship.php');
}
else{
    echo "record not deleted";
}
?>