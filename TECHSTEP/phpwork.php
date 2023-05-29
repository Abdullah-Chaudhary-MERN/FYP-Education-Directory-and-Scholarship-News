<?php
include('conn.php');
if(isset($_POST['contact'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $subject2=$_POST['subject2']
    $sql="INSERT INTO `contact`(`id`,`name`,`email`,`subject`,`message`,`subject2`) VALUES ('','$name','$email','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "success";
    }
}

    if(isset($_POST['submit'])){
        $fpname=$_POST['fpname'];
        $uname=$_POST['uname'];
        $oname=$_POST['oname'];
        $ayear=$_POST['ayear'];
        $sdstart=$_POST['sdstart'];
        $sdend=$_POST['sdend'];
        $ccatagory=$_POST['ccatagory'];
        $image1=$_FILES['image'];
        $filname=$image1['name'];
        move_uploaded_file($image1['tmp_name'],'upload/'.$filname);
        $sf="INSERT INTO `scholarship form`(`id`, `fpname`, `uname`, `oname`, `ayear`, `sdstart`, `sdend`, `ccatagory`, `image`) VALUES ('','$fpname','$uname','$oname','$ayear','$sdstart','$sdend','$ccatagory','$filname')";
        $result=mysqli_query($conn,$sf);
        if ($result){
            header ('location:Scholarships.php');
        }
    }
    if(isset($_POST['send'])){
        $fpname=$_POST['fpname'];
        $uname=$_POST['uname'];
        $ayear=$_POST['ayear'];
        $adstart=$_POST['adstart'];
        $adend=$_POST['adend'];
        $cprog=$_POST['cprog'];
        $ccata=$_POST['ccata'];
        $image1=$_FILES['image1'];
        $filname=$image1['name'];
        move_uploaded_file($image1['tmp_name'],'upload/'.$filname);
        $adm="INSERT INTO `admission form`(`id`, `fpname`, `uname`, `ayear`, `adstart`, `adend`, `cprog`, `ccata`,`image`) VALUES ('','$fpname','$uname','$ayear','$adstart','$adend','$cprog','$ccata','$filname')";
        $result=mysqli_query($conn,$adm);
        if ($result){
            // echo "success";
            header ('location:admission.php');
        }
    }
    if(isset($_POST['send1'])){

        $flname=$_POST['flname'];
        $cnic=$_POST['cnic'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $uname=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $ucontact=$_POST['ucontact'];
        $email=$_POST['email'];
        $designation=$_POST['designation'];
        $ucard=$_POST['ucard'];
        $uprofilepic=$_FILES['uprofilepic'];
        $filname=$uprofilepic['name'];
        move_uploaded_file($uprofilepic['tmp_name'],'upload/'.$filname);
        $reg="INSERT INTO `focal person registration`(`id`, `flname`, `cnic`, `dob`, `address`, `uname`, `uemail`, `ucontact`, `email`, `designation`, `ucard`, `uprofilepic`) VALUES ('','$flname','$cnic','$dob','$address','$uname','$uemail','$ucontact','$email','$designation','$ucard','$filname')";
        $result=mysqli_query($conn,$reg);
        if ($result){
            header('location:Register success.php');
        }
        }
        if(isset($_POST['edit'])){
            $eid=$_GET['eid'];
            $fpname=$_POST['fpname'];
            $uname=$_POST['uname'];
            $ayear=$_POST['ayear'];
            $adstart=$_POST['adstart'];
            $adend=$_POST['adend'];
            $cprog=$_POST['cprog'];
            $ccata=$_POST['ccata'];
            $image1=$_FILES['image1'];
            $filname=$image1['name'];
            move_uploaded_file($image1['tmp_name'],'upload/'.$filname);
            $adm="UPDATE `admission form` SET `fpname`='$fpname',`uname`='$uname',`ayear`='$ayear',`adstart`='$adstart',`adend`='$adend',`cprog`='$cprog',`ccata`='$ccata',`image`='$filname' WHERE `id`='$eid'";
            $result=mysqli_query($conn,$adm);
            if ($result){
                header('location:admission.php');
            }
            else{
                echo "error";
            }
        }
        if(isset($_POST['update'])){
            $eid=$_GET['eid'];
            $status=$_POST['status'];
            $remarks=$_POST['remarks'];
            $select="SELECT * FROM `addmissionform` WHERE `id`='$eid'";
            $result1=mysqli_query($conn,$select);
            $row=mysqli_fetch_assoc($result1);
            $idpass=$row['nts'];
            $sql="UPDATE `addmissionform` SET `status`='$status',`Remarks`='$remarks' WHERE `id`='$eid'";
            $result=mysqli_query($conn,$sql);
            if ($result){
                header('location:studentdata.php?did=' . $idpass);
            }
            else{
                echo "error";
            }
        }
?>