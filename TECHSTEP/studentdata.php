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
                      color: g#BB8D52 ;
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
                  .form-control{
                    color: rgb(20, 19, 19);
                  } 
                  .card-text{
        color:#BB8D52 ;
        font-size:18px;
        text-decoration: none;
        
      }
      .card-text:hover{
        background-color:#BB8D52;
        color:white;
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
        background-color: rgb(8, 8, 8);
        border-radius: 50px;
        color: white;
        margin-left: 15px !important;
      }
      .ir:hover{
        color: black;
      background-color: white;
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
       </style>   
        </head>
    <body style="background-image: url('123.jpg'); background-size: cover; " >
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
  
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admission
          </a>
          <ul class="dropdown-menu UL" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Admission.php#add">Add Admission</a></li>
            <li><a class="dropdown-item" href="Admission.php#admission">Manage Admission</a></li>
            <li><a class="dropdown-item" href="studentdata.php">Student applied</a></li>
          </ul>
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
            <li><a class="dropdown-item" href="studentdata.php">Student applied</a></li>
          </ul>
        </li>
        
  <li class="nav-item">
    <a class="nav-link"  href="register.php">Register</a>
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
                </div>
              </div>
              </div>
              </div>
              <br>
              <br>
              
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <table class="table container bg-light" style="margin-top: 20px;">
            <thead>
              <tr>
                <!-- <th >No#</th> -->
                <th >Name</th>
                <th >Cnic</th>
                <th >Email</th>
                <th > Last degree</th>
                <th >Institute name</th>
                <!-- <th >University Name</th> -->
                <!-- <th >Phone Number</th> -->
                <!-- <th >Address</th> -->
                <th >Status</th>
                <th >Remarks</th>
                <th >Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include("conn.php");
              $aid=$_GET['did'];
              $sql="SELECT * FROM `addmissionform` WHERE `nts`='$aid' AND `status`=''";
              $res=mysqli_query($conn,$sql);
              foreach($res as $row){
              ?>
              <tr>
                <th scope="row"><?php echo $row['name'] ?></th>
                <td><?php echo $row['cinc'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['degree'] ?></td>
                <td><?php echo $row['institute'] ?></td>
                <form method="post" action="phpwork.php?eid=<?php echo $row['id']; ?>" enctype="multipart/form-data">
                <td>
                    <select name="status" class="form-select">
                      <option value="approve">APPROVE</option>
                      <option value="reject">REJECT</option>
                    </select>
              </td>
              <td>
                <textarea name="remarks" class="form-control"></textarea>
              </td>
              <td>
                <button name="update">send</button>
              </td>
            </form>
    </tr><?php } ?>
            </tbody>
          </table>    
          <h1 class="text-center bg-danger" >Rejected</h1> 
          <table class="table container bg-light" style="margin-top: 20px;" >
            <thead>
              <tr>
                <th >No#</th>
                <th >Name</th>
                <th >University Name</th>
                <th >Phone Number</th>
                <th >Address</th>
                <th >Status</th>
                <th >Remarks</th>
                
              </tr>
            </thead>
            <tbody>
              <?php 
              include("conn.php");
              $sql="SELECT * FROM `addmissionform` WHERE `nts`='$aid' AND`status`='reject'";
              $res=mysqli_query($conn,$sql);
              foreach($res as $row){
              ?>
              <tr>
                <th scope="row"><?php echo $row['name'] ?></th>
                <td><?php echo $row['cinc'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['degree'] ?></td>
                <td><?php echo $row['institute'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['Remarks'] ?></td>
                
    </tr><?php } ?>
            </tbody>
          </table>
          <h1 class="text-center bg-success">Verfied</h1> 
          <table class="table container bg-light" style="margin-top: 20px;">
            <thead>
              <tr>
                <th >No#</th>
                <th >Name</th>
                <th >University Name</th>
                <th >Phone Number</th>
                <th >Address</th>
                <th >Status</th>
                <th >Remarks</th>
                
              </tr>
            </thead>
            <tbody>
              <?php 
              include("conn.php");
              $sql="SELECT * FROM `addmissionform` WHERE `nts`='$aid' AND `status`='approve'";
              $res=mysqli_query($conn,$sql);
              foreach($res as $row){
              ?>
              <tr>
                <th scope="row"><?php echo $row['name'] ?></th>
                <td><?php echo $row['cinc'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['degree'] ?></td>
                <td><?php echo $row['institute'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['Remarks'] ?></td>
                
    </tr><?php } ?>
            </tbody>
          </table>
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