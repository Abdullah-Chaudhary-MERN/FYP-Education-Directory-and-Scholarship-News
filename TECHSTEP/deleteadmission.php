<?php
include('conn.php');
$did=$_GET['did'];
$sql="DELETE FROM `admission form` WHERE `id`='$did'";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:admission.php#admission');
}
else{
    echo "not deleted";
}
?>