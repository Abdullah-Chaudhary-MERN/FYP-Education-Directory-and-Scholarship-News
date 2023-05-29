<?php
session_start();
include('../user site/conn.php');
if(!isset($_SESSION['aid'])){
   header('location:admin login.php');
}
else{
    $aid=$_SESSION['aid']; 
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Dashboard
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  body{
    background-color: rgba(255, 166, 0, 0.836);
  }
  
  .navbar-brand {
      color: rgb(145, 101, 35);
      font-size: 40px;
    }
  
    .navbar {
  
      background-color: black;
  
    }
  
    .nav-link:hover {
      background-color: rgb(145, 101, 35);
      color: white;
  
    }
  
    .nav-link {
      color: rgb(250, 250, 250);
    }
  
    .abc {
      color: white;
      text-align: center;
    }
  

  .card-title {
    margin-top: -15px;

  }

  .container {
    margin-top: 5px;
    margin-right: 70px;
  }
  .card-img-top:hover{
    color: white;
    border-radius: 20px;
    opacity: 0.5;
  }
  .row .card-body a{
text-decoration: none;
color: black;
  }
  .card-text:hover{
    background-color: goldenrod;
    border:1px solid goldenrod;
    border-radius: 20px;

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
  color: goldenrod;
  background-color: goldenrod;
     }
      .fot2{
        margin-left: 140px;
        padding-top: 2px;
      }
      .fot3{
        margin-left: 80px;
      }
</style>

<body>
<?php
      session_start();
      include('conn.php');
      if(!isset($_SESSION['aid']))
      {
      ?>
  <nav class="navbar navbar-expand-lg fixed-top" >
    <div class="container-fluid">
      <a class="navbar-brand"><img src="logo 75.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars" style="color:white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashborad.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="institute nav.php">Institute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="scholarship.php">Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              All users
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="admin login.php">Admin</a></li>
              <li><a class="dropdown-item" href="focal.php">Focal person</a></li>
              <li><a class="dropdown-item" href="student.php">Students</a></li>
            </ul>
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
        <span class="fa fa-bars" style="color:white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashborad.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="institute nav.php">Institute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="scholarship.php">Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              All users
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="admin login.php">Admin</a></li>
              <li><a class="dropdown-item" href="focal.php">Focal person</a></li>
              <li><a class="dropdown-item" href="student.php">Students</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php }?>
      <br>
      <br>
  <h1 class="text-center mt-5">Not Approved focal person</h1>
  <table class="table mt-5 container bg-light">
    <thead>
      <tr>
        <th >No#</th>
        <th >Name</th>
        <th >CNIC</th>
        <th >Phone Number</th>
        <th >Address</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include("../user site/conn.php");
            $sql="SELECT * FROM `focal person registration` WHERE `status`=''";
            $res=mysqli_query($conn,$sql);
            foreach($res as $row){
            ?>
      <tr>
        <th scope="row"><?php echo $row['id'] ?></th>
        <td><?php echo $row['flname'] ?></td>
        <td><?php echo $row['cnic'] ?></td>
        <td><?php echo $row['ucontact'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td>
          <form action="work.php?eid=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
            <input name="status" type="hidden" value="approved">
            <button type="submit" class="btn btn-success" name="approve">Approve</button>
            </form>
          <td>
      </tr>
     <?php }?>
    </tbody>
  </table>
  <br>
  <br>
  <br>
  <h1 class="text-center">Approve focal person</h1>
  <table class="table mt-5 container bg-light">
    <thead>
      <tr>
        <th >No#</th>
        <th >Name</th>
        <th >CNIC</th>
        <th >Phone Number</th>
        <th >Address</th>
        <th>Email</th>
    
      </tr>
    </thead>
    <tbody>
    <?php
            include("../user site/conn.php");
            $sql="SELECT * FROM `focal person registration` WHERE `status`='approved'";
            $res=mysqli_query($conn,$sql);
            foreach($res as $row){
            ?>
      <tr>
        <th scope="row"><?php echo $row['id'] ?></th>
        <td><?php echo $row['flname'] ?></td>
        <td><?php echo $row['cnic'] ?></td>
        <td><?php echo $row['ucontact'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['email'] ?></td>
        
      </tr>
     <?php }?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <footer class="container-fluid" style="background-color:rgb(26, 25, 25) ;">
      <div class="row p-3">
        <div class="col-md-4" style="justify-content:center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="col-md-4">
          <h1 class="text-center text-white">Services</h1>
          <ul class="fot2"style="list-style:none;">
           <a class="fot1" href="institute.php"> <li class="mt-2">
              Institute
            </li></a>
            <a class="fot1" href="scholarship.php"> <li class="mt-2">
              Scholarship
            </li></a>
            <a class="fot1" href="addmission.php"> <li class="mt-2">
              Admission
            </li></a>
            <a class="fot1" href="contact us .php"> <li class="mt-2">
              contact us
            </li></a>
            <a class="fot1" href="admin login.php"> <li class="mt-2">
              Login
            </li></a>
            
          </ul>
        </div> 
        <div class="col-md-4">
          <a href=""><img src="logo.png" style="height: 150px;margin-left:130px ;" ></a>
          <h1 class="text-center" style="margin-top:5px ; color: white;">Contact US</h1>
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
    </body>
    
  </html>