<?php
include("conn.php");
if(isset($_POST['signup'])){

    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $cnic=$_POST['cnic'];
    $pnum=$_POST['pnum'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO `signup`(`id`, `name`, `fname`, `dob`, `cnic`, `pnum`, `email`, `address`, `gender`, `password`) VALUES (' ','$name','$fname','$dob','$cnic','$pnum','$email','$address','$gender','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:login.php');
    }
}

if(isset($_POST['send'])){
   $uid=$_POST['uid'];
       $name=$_POST['name'];
    $father=$_POST['father'];
    $number=$_POST['number'];
    $cinc=$_POST['cinc'];
    
    $email=$_POST['email'];
    $address=$_POST['address'];
    $image=$_FILES['upload'];
    $filename=$image['name'];
    move_uploaded_file($image['tmp_name'],'uploadfile/'.$filename);
    $degree=$_POST['degree'];
    $year=$_POST['year'];
    $insitute=$_POST['institute'];
    $marks=$_POST['marks'];
    $image4=$_FILES['resultcard'];
    $resultcard=$image4['name'];
    move_uploaded_file($image4['tmp_name'],'uploadfile/'.$resultcard);
    $image5=$_FILES['inter'];
    $inter=$image5['name'];
    move_uploaded_file($image5['tmp_name'],'uploadfile/'.$inter);
    $image6=$_FILES['student'];
    $student=$image6['name'];
    move_uploaded_file($image6['tmp_name'],'uploadfile/'.$student);
    $image7=$_FILES['domicel'];
    $domicel=$image7['name'];
    move_uploaded_file($image7['tmp_name'],'uploadfile/'.$domicel);
    $image8=$_FILES['fathercinc'];
    $fathercnic=$image8['name'];
    move_uploaded_file($image8['tmp_name'],'uploadfile/'.$fathercnic);
    $nts=$_POST['nts'];
    
    $image3=$_FILES['character'];
    $character=$image3['name'];
    move_uploaded_file($image3['tmp_name'],'uploadfile/'.$character);

    $sql="INSERT INTO `addmissionform`(`id`,`uid`,`name`, `father`, `number`, `cinc`, `email`, `address`, `upload`, `degree`, `year`, `institute`, `marks`, `resultcard`, `inter`, `student`, `domicel`, `fathercinc`, `nts`, `character`) VALUES ('','$uid','$name','$father','$number','$cinc','$email','$address','$filename','$degree','$year','$insitute','$marks','$resultcard','$inter','$student','$domicel','$fathercnic','$nts','$character')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:myadmission.php');
    }
    else{
        echo "error";
    }
}
if(isset($_POST['send1'])){

    $pname=$_POST['pname'];
    $uniname=$_POST['uniname'];
    $sname=$_POST['sname'];
    $startname=$_POST['startname'];
    $cdate=$_POST['cdate'];
    $rname=$_POST['rname'];
    $image2=$_FILES['image2'];
    $filename=$image2['name'];
    move_uploaded_file($image2['tmp_name'],'uploadfile/'.$filename);
    $sql="INSERT INTO `scholarshipform`(`id`, `pname`, `uniname`, `sname`, `startname`, `cname`, `rname`, `image`) VALUES ('','$pname','$uniname','$sname','$startname','$cdate','$rname','$filename')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "success h";
    }
    else{
        echo "error";
    }
}
if(isset($_POST['go'])){

    $pname=$_POST['pname'];
    $ename=$_POST['ename'];
    $sname=$_POST['sname'];
    $mname=$_POST['mname'];

    $sql="INSERT INTO `contactus`(`id`, `pname`, `ename`, `sname`, `mname`) VALUES ('','$pname','$ename','$sname','mname')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "success";
    }
}
if(isset($_POST['yes'])){

    $ename=$_POST['ename'];
    $pname=$_POST['pname'];

    $sql="INSERT INTO `loginform`(`id`, `ename`, `pname`) VALUES ('','$ename','$pname')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "success";
    }
}
if(isset($_POST['institute1'])){

    $name=$_POST['name'];
    $subcam=$_POST['subcam'];
    $maincam=$_POST['maincam'];
    $directorcam=$_POST['directorname'];
    $phoneno=$_POST['phoneno'];
    $address=$_POST['address'];
    $link=$_POST['link'];
    $image1=$_FILES['backimg'];
    $filename=$image1['name'];
    move_uploaded_file($image1['tmp_name'],'uploadfile/'.$filename);

    $sql="INSERT INTO `instute`(`id`, `name`, `subcam`, `maincam`, `directorcam`, `phoneno`, `address`, `link`, `backimg`) VALUES ('','$name','$subcam','$maincam','$directorcam','$phoneno','$address','$link','$filename')";
     $result=mysqli_query($conn,$sql);
     if($result){
         header('location:../university/institute nav.php');
     }
     else{
         echo "error";
     }
}
if(isset($_POST['institute2'])){

    $name=$_POST['name'];
    $title=$_POST['title'];
    $detail=$_POST['detail'];
    $title1=$_POST['title1'];
    $detail1=$_POST['detail1'];
    $scdate=$_POST['scdate'];
    $scend=$_POST['scend'];

    $image2=$_FILES['upload'];
    $filename=$image2['name'];
    move_uploaded_file($image2['tmp_name'],'uploadfile/'.$filename);

    $sql1="INSERT INTO `scholarship`(`id`, `name`, `title`, `detail`, `title1`, `detail1`, `scdate`, `scend`, `upload`) VALUES ('','$name','$title','$detail','$title1','$detail','$scdate','$scend','$filename')";
    $result1=mysqli_query($conn,$sql1);   
    if($result1){
        echo "success";
    }
    else{
        echo "error";
    }
}
if(isset($_POST['insitute4'])){

    $news=$_POST['news'];
    $date=$_POST['date'];
    $text=$_POST['text'];
    $image3=$_FILES['upload'];
    $filename=$image3['name'];
    move_uploaded_file($image3['tmp_name'],'uploadfile/'.$filename);

    $sql="INSERT INTO `newsreport`(`id`, `news`, `date`, `text`, `upload`) VALUES ('','$news','$date','$text','$filename')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "success";
    }
    else{
        echo "hello3";
    }
}
if(isset($_POST['edit'])){
    $eid=$_GET['eid'];
    $uid=$_POST['uid'];
        $name=$_POST['name'];
     $father=$_POST['father'];
     $number=$_POST['number'];
     $cinc=$_POST['cinc'];
     
     $email=$_POST['email'];
     $address=$_POST['address'];
     $image=$_FILES['upload'];
     $filename=$image['name'];
     move_uploaded_file($image['tmp_name'],'uploadfile/'.$filename);
     $degree=$_POST['degree'];
     $year=$_POST['year'];
     $insitute=$_POST['institute'];
     $marks=$_POST['marks'];
     $image4=$_FILES['resultcard'];
     $resultcard=$image4['name'];
     move_uploaded_file($image4['tmp_name'],'uploadfile/'.$resultcard);
     $image5=$_FILES['inter'];
     $inter=$image5['name'];
     move_uploaded_file($image5['tmp_name'],'uploadfile/'.$inter);
     $image6=$_FILES['student'];
     $student=$image6['name'];
     move_uploaded_file($image6['tmp_name'],'uploadfile/'.$student);
     $image7=$_FILES['domicel'];
     $domicel=$image7['name'];
     move_uploaded_file($image7['tmp_name'],'uploadfile/'.$domicel);
     $image8=$_FILES['fathercinc'];
     $fathercnic=$image8['name'];
     move_uploaded_file($image8['tmp_name'],'uploadfile/'.$fathercnic);
     $nts=$_POST['nts'];
     
     $image3=$_FILES['character'];
     $character=$image3['name'];
     move_uploaded_file($image3['tmp_name'],'uploadfile/'.$character);
 
     $sql="UPDATE `addmissionform` SET `uid`='$uid',`name`='$name',`father`='$father',`number`='$number',`cinc`='$cinc',`email`='$email',`address`='$address',`upload`='$filename',`degree`='$degree',`year`='$year',`institute`='$insitute',`marks`='$marks',`resultcard`='$resultcard',`inter`='$inter',`student`='$student',`domicel`='$domicel',`fathercinc`='$fathercnic',`nts`='$nts',`character`='$character' WHERE `id`='$eid'";
     $result=mysqli_query($conn,$sql);
     if($result){
         header('location:myadmission.php');
     }
     else{
         echo "error";
     }
 }
?>