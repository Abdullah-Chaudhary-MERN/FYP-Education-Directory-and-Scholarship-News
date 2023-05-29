<?php
session_start();
include('conn.php');
if(!isset($_SESSION['fid'])){
  header('location:login.php');
}
else{
  $id=$_SESSION['fid'];
  $flname=$_SESSION['flname'];
  $uname=$_SESSION['uname'];
}
?>
<!DOCTYPE html>
<html>
    <head>
     <title>

     </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
       <style>
       .col-6{
    background-color: rgb(173, 170, 170,0.5);
    
      
      }
      .col-6:hover{
        background-color: rgba(80, 79, 79, 0.9);
   
      
      }
      .navbar-brand{
        color: #BB8D52 ;
        
      }
      .navbar{
      
      background-color:black;
      padding: 0%;
    }
    .nav-link{
      color:aliceblue;
      font-size: larger;
      } 
      .nav-link:hover{
        /* background-color:#BB8D52 ;
        color:white;
        border-radius: 10px; */
        border-bottom: 3px solid #BB8D52;
        font-size: 20px;
        color: #BB8D52;
        font-weight: bold;
      }
      .form-label{
        color: white;
      }
      .abc{
      color:white;
      text-align: center;
    }
 .card-text{
 color:#000000 ;
 font-size:18px;
 text-decoration: none;
  }
      .card-text:hover{
 /* background-color:; */
 color:#BB8D52;
 padding:5px;
 border-radius:20px;
 
      }
      .card-title{
 margin-top:-15px;
      }
      .crd{
 font-weight: bold;
   text-align: center;
      }
      .carosal{
 margin-left: 115px;
      }
      .simple{
 background-color: black;
      }
      .footor{
 text-decoration: none;
 list-style: none;
 display:flex;
      }
      .icon{
 padding-top: 25px;
 padding-left: 430px;
      }
      .ir{
 font-size: 20px;
 background-color:black;
 border-radius: 50px;
 color: white;
 margin-left: 15px !important;
      }
      .wa:hover{
 color: rgb(253, 252, 252);
      background-color: rgb(16, 238, 9);
      }
      .fb:hover{
 color: rgb(250, 246, 246);
      background-color: rgb(11, 112, 245);
      }
      .tw:hover{
 color: rgb(248, 247, 247);
      background-color: rgb(11, 211, 247);
      }
      .gm:hover{
 color: rgb(248, 242, 242);
      background-color: rgb(240, 54, 54);
      }
      .fot1{
 text-decoration: none;
 color:white;
 font-size: 20px;
       
      }
      .fot1:hover{
 background-color: #BB8D52;
 color: white;
      }
      .fot2{
 margin-left: 140px;
 padding-top: 2px;
      }
      .fot3{
 margin-left: 80px;
      }
      .btn_2 {
        text-decoration: none;
        margin-top: 0.5rem;
        display: inline-block;
        padding: .4rem 12px;
        border-radius: .5rem;
        color: white;
        background: #0096FF;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 400;
        /* margin-left: 12px; */
    }
    .btn_2:hover {
        color: black;
        transform: 0.8s;
    }
       </style>
   
 </head>
    <body style="background-image: url('995.jpg'); background-size: cover; " >
    <?php
      session_start();
      include('conn.php');
      if(!isset($_SESSION['fid'])){?>
<nav class="navbar navbar-expand-lg fixed-top">
 <div class="container-fluid">
   <a class="navbar-brand" href="Home.php" >
     <img src="logo 75.png" alt=""  >
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="fa fa-bars" style="color: white;"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
     <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="Institute.php">Institute</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Scholarships.php">Scholarship</a>
  </li>
  <li class="nav-item dropdown ">
  <li class="nav-item">
    <a class="nav-link" href="admission.php">Admission</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="register.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="ContactUs.php">Contact US</a>
  </li>
  </ul>
   </div>
 </div>
      </nav>
      <?php }
      else { 
 $fname=$_SESSION['flname'];
 ?>
     <nav class="navbar navbar-expand-lg fixed-top">
 <div class="container-fluid">
   <a class="navbar-brand" href="Home.php" >
     <img src="logo 75.png" alt=""  >
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="fa fa-bars" style="color: white;"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
     <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="Institute.php">Institute</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Scholarships.php">Scholarship</a>
  </li>
  <li class="nav-item dropdown ">
  <li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
     Admission
   </a>
   <ul class="dropdown-menu UL" aria-labelledby="navbarDropdown">
     <li><a class="dropdown-item" href="Admission.php#add">Add Admission</a></li>
     <li><a class="dropdown-item" href="Admission.php#admission">Manage Admission</a></li>
   </ul>
 </li>
  <li class="nav-item">
    <a class="nav-link" href="Logout.php">Logout</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="ContactUs.php">Contact US</a>
  </li>
  </ul>
   </div>
 </div>
 
      </nav>
      <?php }?>
      
 <br>
 <br>
 <br>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include("../TECHSTEP/conn.php");
    $eid=$_GET['eid'];
    $sql="SELECT * FROM `admission form` WHERE `id`='$eid'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
     ?>
 <Form class="col-6 mx-auto p-3 mt-5 was-validated" action="phpwork.php?eid=<?php echo $eid;?>" method="post" enctype="multipart/form-data" id="add">
      <h1 class="abc">Add Admission Form</h1>
 <label class="form-label" style="color: white" >
    

      </label>
 
 <input type="hidden" class="form-control" name="fpname" placeholder="Enter Your Name" required pattern="[A-Z,a-z, ]{3,}"  value="<?php echo $row['fpname']?>">
 <div class="invalid-feedback">
   Please enter a Name.
 </div>
 <label class="form-label" style="color: white" >
     University Name
  </label>
  <input type="text" class="form-control" name="uname" placeholder="Enter Your University Name" required pattern="[A-Z,a-z, ]{3,}" value="<?php echo $row['uname']?>">
  <div class="invalid-feedback">
   Please enter a University Name.
 </div>
  <label class="form-label" style="color: white" >
     Acadmic Year
  </label>
  <input type="year" class="form-control" name="ayear" required pattern="[0-9]{4}" value="<?php echo $row['ayear']?>">
  <div class="invalid-feedback">
   Please enter Acadmic Year.
 </div>
 <label class="form-label" style="color: white" >
     Admission Date Start
  </label>
  <input type="date" class="form-control" name="adstart" required pattern="[0-9]{2}[0-9]{2}[0-9]{4}" value="<?php echo $row['adstart']?>">
  <div class="invalid-feedback">
   Please Enter Admission Date Start.
 </div>
 <label class="form-label" style="color: white" >
     Admission Date End
  </label>
  <input type="date" class="form-control" name="adend" required pattern="[0-9]{2}[0-9]{2}[0-9]{4}" value="<?php echo $row['adend']?>">
  <div class="invalid-feedback">
   Please Enter Admission Date End.
 </div>
 <Label class="form-label" >
     Choose Programe
  </Label>
  <select class="form-select" name="cprog">
     <option>
     <?php echo $row['cprog'] ?>
     </option>
     <option >
        Under-Graduation
     </option>
     <option >
  Graduation
     </option>
     <option >
  Others
     </option>
  </select>
     <Label class="form-label" >
       Choose Catagory
    </Label>
    <select class="form-select" name="ccata">
       <option>
       <?php echo $row['ccata'] ?>
       </option>
       <option>
    Pre-Engineering
       </option>
       <option >
    Pre-Medical
       </option>
       <option >
    PHD
       </option>
       <option >
    MS-IT
       </option>
       <option >
       MS CS
       </option>
       <option>
    BS IT
       </option>
       <option>
    BS CS
       </option>
       <option>
    BS SE
       </option>
       <option >
    Others
       </option>
 </select>
 <label class="form-label">
   Upload your image
 </label>
 <input type="file" class="form-control" name="image1" required value="<?php echo $row['image']?>">
 <div class="invalid-feedback">
   Please Upload a Picture.
 </div>
 <img src="upload/<?php echo $row['image']?>" height ="150px" width="150px" class="p-1"><br>
 <br>
 <div class="row">
 <div class="col-5 "></div>
 <div class="col-5 "><a type="submit" name="edit"class=" btn_2"  style="background-color: #F3AD24;">Submit</a></div>
 </div>
       </div>
    </Form>
    <div>
      
    </div>
    <br>
    <br>
    
    <footer class="container-fluid" style="background-color:black ;">
      <div class="row p-3">
 <div class="col-md-4" style="justify-content:center;">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
 <div class="col-md-4">
   <h4 class="text-center" style="color: white; margin-left: 15px;">Services</h4>
   <ul class="fot2"style="list-style:none;">
    <a class="fot1" href="institute.php"> <li class="mt-2">
       Institute
     </li></a>
     <a class="fot1" href="Institute.php"> <li class="mt-2">
       Scholarship
     </li></a>
     <a class="fot1" href="Scholarships.php"> <li class="mt-2">
       Admission
     </li></a>
     <a class="fot1" href="Admission.php"> <li class="mt-2">
       Register
     </li></a>
     <a class="fot1" href="Login.php"> <li class="mt-2">
       Login
     </li></a>
   </ul>
 </div> 
 <div class="col-md-4">
   <a href=""><img src="logo.png" style="height: 150px;margin-left:130px ;" ></a>
   <h4 class="text-center" style="margin-top:5px ; color: white; margin-left: 20px;">Contact US</h4>
   <div class="d-flex fot3">
     <a href="https://web.whatsapp.com/"> <i class="fa fa-whatsapp p-3 wa ir "></i></a>
     <a href="https://www.facebook.com/"> <i class="fa fa-facebook p-3 fb ir"></i></a>
     <a href="https://www.twitter.com/"> <i class="fa fa-twitter p-3 tw ir"></i></a>
     <a href="https://www.google.com/"> <i class="fa fa-google p-3 gm ir"></i></a>
  </div>
 </div>
      </div>
     </footer>
    
     <div class="container-fluid bg-dark text-white text-center p-1"><h6>Copyright@EDS.com</h6></div>
    </body>
     </html>