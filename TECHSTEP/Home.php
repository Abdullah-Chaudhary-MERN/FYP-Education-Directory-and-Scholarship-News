<?php
session_start();
include('conn.php');
if(isset($_POST ['submit'])){
  $Email=$_POST['email'];
  $cnic=$_POST['cnic'];
  $check="SELECT * FROM `focal person registration` WHERE `status`='approved'";
  $result1=mysqli_query($conn,$check);
  $row1=mysqli_num_rows($result1);
  if($row1 > 0){
    $qry = "SELECT * FROM `focal person registration` WHERE `email`='$Email' AND `cnic`='$cnic'";
  $result=mysqli_query($conn,$qry);
  $row=mysqli_num_rows($result);
  if ($row > 0){
      $row=mysqli_fetch_assoc($result);
      $_SESSION['fid']=$row['id'];
      $_SESSION['flname']=$row['flname'];
      $_SESSION['uname']=$row['uname'];
      header("location:Institute.php");
   
  }
  else{
    echo '<script type ="text/JavaScript">';  
      echo 'alert("Data did not match")';  
      echo '</script>';
  }}
  else{
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Focal person is not approved Yet!")';  
      echo '</script>';
  }
}
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>
   EDS
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      </head>
    <style>
 
   .navbar{
     background-color:black; 
     margin:0px;
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
 .UL{
  color: aliceblue;
 }
 .UL :hover{
  color: #BB8D52;
  border-bottom: 2px solid #BB8D52;
 }
      .card-text{
        color:#000000 ;
        font-size:18px;
        text-decoration: none;
 }
      .card-text:hover{
        /* background-color:; */
        color: #F3AD24;
        padding:5px;
        border-radius:20px;
      }
      .crd{
        font-weight: bold;
        text-align: center;
      }
      .container{
        margin-right:55px;
      }
      .card-img-top:hover{
        color: white;
        border-radius: 20px;
        opacity: 0.5;
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
        color: white;
      }
      .fot2{
        margin-left: 140px;
        padding-top: 2px;
      }
      .fot3{
        margin-left: 80px;
      }
      .abt-content {
        padding: 3.5rem;
        background-color: #f3f3f3;
    } 
    .abt-content h3 {
        font-size: 1.5rem;
        color: black;
        text-transform: uppercase;
    }

    .abt-content p {
        padding: .5rem 0;
        line-height: 1;
        font-size: 1.4rem;
        color: black;
        font-weight: 100;
    } 
    .abt-content .btn_2 {
        text-decoration: none;
        margin-top: 0.5rem;
        display: inline-block;
        padding: .4rem 12px;
        border-radius: .5rem;
        color: white;
        background: #0096FF;
        font-size: 1.4rem;
        cursor: pointer;
        font-weight: 400;
        margin-left: 12px;
    } 
    .abt-content .btn_2:hover {
        color: black;
        transform: 0.8s;
    }
    </style>
    <body class="bg-light">
      <?php
      session_start();
      include('conn.php');
      if(!isset($_SESSION['fid']))
      {
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
      else { ?>
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
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
        <div class="carousel-inner">
 <div class="carousel-item active" data-bs-interval="2500">
   <img src="C5.jpg" class="d-block w-100" alt="..." style="height: 450px;">
 </div>
 <div class="carousel-item">
   <img src="C1.jpg" class="d-block w-100" alt="..."style="height: 450px;">
 </div>
 <div class="carousel-item">
   <img src="C2.jpg" class="d-block w-100" alt="..."style="height: 450px;">
 </div>
 <div class="carousel-item">
   <img src="C3.jpg" class="d-block w-100" alt="..."style="height: 450px;">
 </div>
 <div class="carousel-item">
   <img src="C4.jpg" class="d-block w-100" alt="..."style="height: 450px;">
 </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
      </button>
      </div>
 <div class="container-fluid" >
     <div class="row mx-auto p-4 mb-5">
 
 <div class=" col-lg-4 col-md-5 ">
    <img src="contactuscard.jpg" alt="" width="480px" height="480px" />
 </div>
 
 <div class="abt-content col-lg-8 col-md-7 py-5">
    <h3>why choose us?</h3>
    <p>We realise that choosing the right university-level course and where to study can be a challenge, which is why EDS offers everything you’ll need to make the right decision on your future.</p>
    <p>Competence means to turn knowledge into action. Effective professional education is a key competitive advantage for both an organization and the individual.</p>
    <p>Based on different needs for training, we have developed a unique educational system with a large number of admissions, scholarships in the areas our clients require. We have developed and sold e-learning since 1997 and has over ten years experience in the field. Since 2003 we have also trained personnel internationally.</p>
    <a href="ContactUs.php" class="btn_2" style="background-color: #F3AD24;">Contact Us</a>
 </div>
 
     </div>
 </div>
 <div class="container crd" style="margin-top: 50px;">
 <div class="row">
 <div class="card shadow m-3" style="width:20rem;">
   <a href="Institute.php"><img src="534.jpg" class="card-img-top "  style="height:200px;" alt=".."></a>
   <div class="card-body">
     <a class="card-text " href="Institute.php" style="text-align:center; ">Institute</a>
   </div>
 </div>
 <div class="card shadow m-3" style="width: 20rem;">
   <a href="Scholarships.php "><img src="533.JPG" class="card-img-top" style="height:200px;" alt="..."></a>
   <div class="card-body">
    <a class="card-text" href="Scholarships.php">Scholarships</a>
   </div>
 </div>
 <div class="card shadow m-3" style="width: 20rem;">
  <a href="Admission.php"> <img src="535.jpg" class="card-img-top" style="height:200px;" alt="..."></a>
   <div class="card-body">
   <a  href="Admission.php" class="card-text">Admissions</a>
   </div>
 </div>
 </div>
 </div>
 <br>
 <br>
 <br>
 <div>
 </div>
      <div class="col-md-12" style="background-color: #F3AD24;">
        <div class="mx-auto">
 <h4 class="text-white text-center p-3">𝑬𝒅𝒖𝒄𝒂𝒕𝒊𝒐𝒏 𝒊𝒔 𝒕𝒉𝒆 𝒂𝒃𝒊𝒍𝒊𝒕𝒚 𝒕𝒐 𝒍𝒊𝒔𝒕𝒆𝒏 𝒕𝒐 𝒂𝒍𝒎𝒐𝒔𝒕 𝒂𝒏𝒚𝒕𝒉𝒊𝒏𝒈 𝒘𝒊𝒕𝒉𝒐𝒖𝒕 𝒍𝒐𝒔𝒊𝒏𝒈 𝒚𝒐𝒖𝒓 𝒕𝒆𝒎𝒑𝒆𝒓 𝒐𝒓 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒇-𝒄𝒐𝒏𝒇𝒊𝒅𝒆𝒏𝒄𝒆.
 <br>𝑹𝒆𝒋𝒆𝒄𝒕𝒊𝒐𝒏 𝒊𝒔 𝒂𝒏 𝒐𝒑𝒑𝒐𝒓𝒕𝒖𝒏𝒊𝒕𝒚 𝒇𝒐𝒓 𝒚𝒐𝒖𝒓 𝒔𝒆𝒍𝒆𝒄𝒕𝒊𝒐𝒏.</h4>
        </div>
      </div>

 <div class="container-fluid mt-5" >
     <div class="row mx-auto p-4 mb-5">
 
 <div class=" col-lg-6 col-md-8 ">
    <img src="hlogin.jpg" alt="" class="col-md-12" height="480px" />
 </div>
 
 <div class="abt-content col-lg-6 col-md-6 py-5">
 <h1 style="text-align:center; margin-bottom:2rem;" class="">Sign in <i class="fa fa-unlock-alt"></i></h1>
  <Form class=" was-validated" style="margin-top:100px" action="" method="post" enctype="multipart/form-data" >
      <label class="form-label" style="color: rgb(0, 0, 0)" >
 Email
      </label class=" form-label">
      <div class="invalid-feedback">
        Please enter a message in the textarea.
      </div>
      <br>
      <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
      <label class="form-label" style="color: rgb(7, 7, 7)" >
 CNIC
       </label class=" form-label">
       <br>
       <input type="text" class="form-control" name="cnic" placeholder="Enter Your CNIC" required pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}">
       <br>
      <div class="row">
      <div class="col-3"><a href="register.php">Create New Account</a></div>
      <div class="col-3"></div>
      <div class="col-3 "></div>
      <div class="col-3 ">
        <button type="submit" name="submit" class="btn_2" style="background-color: #F3AD24;">Submit</button>
      </div>
     </div>
  </Form>
 </div>
     </div>
 </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <footer class="container-fluid" style="background-color:black ;">
    <div class="row p-3">
      <div class="col-md-4" style="justify-content:center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
  </html>