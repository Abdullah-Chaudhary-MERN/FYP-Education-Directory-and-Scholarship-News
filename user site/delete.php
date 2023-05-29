<?php
include('conn.php');
$did=$_GET['did'];
$sql="DELETE FROM `addmissionform` WHERE `id`='$did'";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:myadmission.php');
}
else{
    echo "not deleted";
}
?>