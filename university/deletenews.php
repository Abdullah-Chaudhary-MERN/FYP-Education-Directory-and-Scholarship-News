<?php
session_start();
include('../user site/conn.php');
$did=$_GET['did'];
$sql="DELETE FROM `newsreport` WHERE `id`='$did'";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:news.php');
}
else{
    echo "record not deleted";
}
?>