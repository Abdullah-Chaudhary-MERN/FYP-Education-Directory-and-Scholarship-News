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
          height: 80px;
          background-color:rgb(23, 184, 170);
           }
        .nav-link:hover{
        
          
          color:rgb(128, 113, 113);

        }
        .nav-link{
          font-size: 20px;
          color: rgb(250, 250, 250);
        }
      .abc{
        color:white;
        text-align: left;
      }
      .card-text{
        color:rgb(36, 34, 32) ;
        font-size:18px;
        text-decoration:none;
        
      }
      .card-text:hover{
        background-color:rgb(23, 184, 170);
        color:white;
        padding: 5px;
        border-radius:40px;
        
      }
      .card-title{
        margin-top:15px;
      }
      .card{
        text-align: center;
        background-color: transparent;
        border-radius: 20px;
        border-color: transparent;
        
        
      }
      .card-img-top:hover{
        border: 2px solid;
        border-color: transparent;
        opacity: 0.5;
        border-radius: 20px;
        
      }
      .bg1{
        height:100px;
        border-radius:50%;
        border:1px solid black;
        width: 100px;
        
      }
      .bg2{
        background-color: rgb(240, 240, 234);
        padding: 20px;
      }
      .bg3{
        background-color: beige;
        
      }
      .col-5{
        background-color: rgb(23, 184, 170);
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
        background-color: black;
        border-radius: 50px;
        color: white;
        margin-left: 15px !important;
      }
      
      .ir:hover{
        background-color:rgb(93, 216, 93);
        color: rgb(255, 255, 255);
      }
      .ih:hover{
        background-color: rgb(49, 182, 235);
        color: rgb(255, 255, 255);
      }
      .ik:hover{
        background-color: rgb(49, 182, 235);
        color: rgb(255, 255, 255);
      }
      .if:hover{
        background-color: rgb(219, 53, 67);
        color: rgb(255, 255, 255);
      }
      .fot1{
        
        text-decoration: none;
        color:white;
        font-size: 15px;
       
      }
      .fot1:hover{
        color: black;
      }
      .fot2{
        margin-left: 100px;
        padding-top: 2px;
      }
      .fot3{
        margin-left: 80px;
      }
      .set{
        border: 1px solid white;
        margin: 25px;
        margin-left: 70px;
        margin-right: 40px;
        padding-top: 20px;
      }
      .set2{
        border: 1px solid white;
        margin: 40px;
        margin-left: 35px;
        margin-right: 40px;
        padding-top: 20px;
        
      }
      .col-3{
        margin:-5px;
        padding-top: 10px;
      }
      .row1{
        margin-left: 50px;
        margin-right: 40px;
      }
      .UL{
  color: aliceblue;

 }
 .UL :hover{
  color: #BB8D52;
  border-bottom: 2px solid #BB8D52;
 }
   
   
    </style>

    <body>
      <br>
      <br>
      <br>
      <br>
      <?php
session_start();
include('conn.php');
if(!isset($_SESSION['uid'])){
 
?>

      <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand"><img src="logo 75.png" alt="" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="	fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
            <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="institute.php">Institute</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="all scolorships.php">Scholarship</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admission.php">Admissions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sign.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contactus.php">Contact US</a>
  </li>
  
  
            </ul>
          </div>
        </div>
      </nav>
      <?php }
      else { ?>
      <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand"><img src="logo 75.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="	fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
            <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="institute.php">Institute</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="all scolorships.php">Scholarship</a>
  </li>
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Admission
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute; left: 1100px; top: 80px;">
    <li><a class="dropdown-item " href="admission.php" >Admissions</a></li>
    <li><a class="dropdown-item " href="myadmission.php">Manage Admissions</a></li>
  </ul>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">logout </a>
  </li>
  
  
            </ul>
          </div>
        </div>
      </nav>
      <?php } ?>
         
        <div id="carouselExampleSlidesOnly" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="2500">
    <img src="Image-Size-1.jpg" class="d-block w-100" style="height: 500px;" alt="...">
  </div>
  <div class="carousel-item" data-bs-interval="2500">
    <img src="28466.jpg" class="d-block w-100" style="height:500px;" alt="...">
  </div>
  <div class="carousel-item" data-bs-interval="2500">
    <img src="fff.jpg" class="d-block w-100"  style="height:500px;"alt="...">
  </div>
            </div>
          </div>
          <br>
          <br>
          <h3 style="text-align: center; color: rgb(7, 7, 7); font-family: Georgia, 'Times New Roman', Times, serif;" class="bg2" >We Have Made This Website For Convenience of The Student So That They Can Easily Access Education Detail And Apply</h3>
          <div class="container" style="margin-top: 40px;margin-right: 85px; "  >
            <div class="row mx-auto">
            <div class="card m-3" style="width:11rem;">
 <a href="institute.php"> <img src="534.jpg" class="card-img-top bg1"   alt=".."></a>
  <div class="card-body">
    <a href="institute.php" class="card-text">Institute</a>
  </div>
            </div>
            
            <div class="card m-3" style="width: 11rem;">
 <a href="sign.php"> <img src="535.jpg" class="card-img-top bg1"  alt="..."></a>
  <div class="card-body">
    <a href="sign.php" class="card-text">Register</a>
  </div>
            </div>
            <div class="card m-3" style="width: 11rem;">
  <a href="EDS.php"> <img src="891.jpg" class="card-img-top bg1"  alt="..."></a>
   <div class="card-body">
     <a href="login.php" class="card-text">Admission</a>
   </div>
 </div>
            <div class="card m-3" style="width: 11rem;">
 <a href="EDS.php"> <img src="2756685.jpg" class="card-img-top bg1"  alt="..."></a>
  <div class="card-body">
    <a href="login.php" class="card-text">Login</a>
  </div>
            </div>
            <div class="card m-3" style="width: 11rem;">
 <a href="contactus.php"> <img src="6230545.jpg" class="card-img-top bg1"  alt="..."></a>
  <div class="card-body">
    <a href="contactus.php" class="card-text">Contact Us</a>
  </div>
  <div class="card m-3" style="width: 11rem;">
 <a href="contactus.php"> <img src="6230545.jpg" class="card-img-top bg1"  alt="..."></a>
  <div class="card-body">
    <a href="contactus.php" class="card-text">about Us</a>
  </div>
            </div>
            </div>
            </div>
            <div class="container-fluid" style="background-color:rgb(240, 240, 234) ; border: outset;">
          <div class="container" style="margin-top: 40px;margin-right: 75px;"  >
          <div class="row mx-auto">
          
          <div class="card m-4" style="width:30rem;">
          <a href="scholrship.php">  <img src="533.JPG" class="card-img-top bg3" style="height:220px; border-radius: 30px;" alt="..."></a>
            <div class="card-body">
  <a href="all scolorships.php" class="card-text">Scholarships</a>
            </div>
          </div>
          <div class="card m-4" style="width: 30rem;">
           <a href="Add Addmission form.php"> <img src="535.jpg" class="card-img-top bg3" style="height:220px;border-radius: 30px;" alt="..."></a>
            <div class="card-body">
  <a  href="addmission.php" class="card-text">Addmission</a>
            </div>
          </div>
       
        
          
          </div>
          </div>
        </div>
          <br>
          <section class="set">
            <div><h1 style="margin-bottom: 20px;">University life <i class='fa fa-graduation-cap' style='font-size:40px'></i></h1></div>
            <div class="row">
            <div class="col-3"><img src="bnm.jpg" style="height:180px;" class="col-12"></div>
            <div class="col-3"><img src="2.jpg" style="height:180px;" class="col-12"></div>
            <div class="col-3"><img src="3.jpg" style="height:180px;" class="col-12"></div>
            <div class="col-3"><img src="4.jpg" style="height:180px;" class="col-12"></div>
            <div class="col-3"><img src="0099.webp" style="height:180px; padding-top: 5px;" class="col-12"></div>
            <div class="col-3"><img src="scc.webp" style="height:180px; padding-top: 5px;" class="col-12"></div>
            <div class="col-3"><img src="891.jpg" style="height:180px;padding-top: 5px;" class="col-12"></div>
            <div class="col-3"><img src="add.webp" style="height:180px;padding-top: 5px;" class="col-12"></div>
            
            
          </div>
          </section>  
          <section class="container">
            <div><h1 style="margin-bottom: 20px; background-color: rgb(241, 102, 102)">Recent News <i class="fa fa-bullhorn" style="font-size: 40px;"></i></h1></div>
            <div class="row col-12 mx-auto">
  <?php
  include('conn.php');
  $sql="SELECT * FROM `newsreport`";
  $result=mysqli_query($conn,$sql);
  foreach($result as $row){
  ?>
            <div class="card zoom-in" style="width: 22rem;">
  <img src="../university/uploadfile/<?php echo $row['upload'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['news'] ?></h5>
    <p class="card-text1"><?php echo $row['text'] ?> </p>
    <a href="#" class="text-black"><?php echo $row['date'] ?></a>
  </div>
            </div>
           <?php
  }
           ?>
          </div>
          </section>   
         
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
 <footer class="container-fluid" style="background-color:rgb(23, 184, 170) ;">
  <div class="row p-3">
    <div class="col-md-4" style="justify-content:center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    <div class="col-md-4" >
      <h1 class="text-center">Services</h1>
      <ul class="fot2"style="list-style:none;">
       <a class="fot1" href="institute.php"> <li class="mt-2">
          Institute
        </li></a>
        <a class="fot1" href="scholrship.php"> <li class="mt-2">
          Scholarship
        </li></a>
        <a class="fot1" href="addmission.php"> <li class="mt-2">
          Admission
        </li></a>
        <a class="fot1" href="sign.php"> <li class="mt-2">
          Register
        </li></a>
        <a class="fot1" href="EDS.php"> <li class="mt-2">
          Login
        </li></a>
        
      </ul>
    </div> 
    <div class="col-md-4">
      <a href=""><img src="logo.png" style="height: 150px;margin-left:130px ;" ></a>
      <h3 class="text-center" style="margin-top:10px ;margin-left: 40px;">Contact US</h3>
      <div class="d-flex fot3">
        <a href="https://web.whatsapp.com/"> <i class="fa fa-whatsapp p-3 ir ir"></i></a>
        <a href="https://www.facebook.com/"> <i class="fa fa-facebook p-3 ih ir"></i></a>
        <a href="https://www.twitter.com/"> <i class="fa fa-twitter p-3 ik ir"></i></a>
        <a href="https://www.google.com/"> <i class="fa fa-google p-3 if ir"></i></a>
       
   
     </div>
    </div>
    
  </div>

 </footer>
 <div class="container-fluid bg-dark text-white text-center p-1"><h4>Copyright@EDS.com</h4></div>
      </html>