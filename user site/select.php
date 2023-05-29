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
       .bg{
        background-image: url('7777.webp');
          background-color: rgb(212, 194, 194);
          background-repeat: no-repeat;
          background-size:1500px;
          
          color:rgb(228, 216, 216);
          
            
        } 
        .nav-link{
          font-size:20px;
          color:rgb(255, 255, 255);
        }
        .nav-link:hover{
          color:rgb(243, 235, 235);
        }
         .navbar-brand{
           color:black;
           font-size:40px;
           font-style: italic;
           font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
         }
         .card-text{
             color: black;
             font-size: 18px;
             text-decoration: none;
         }
         .card-text:hover{
            background-color:rgb(23, 184, 170);
        color:white;
        padding: 5px;
        border-radius:40px;
         }
         .navbar{
          height: 80px;
          background-color:rgb(23, 184, 170);
        }
      .card-img-top:hover{
        border: 2px solid;
        border-color: transparent;
        opacity: 0.5;
        border-radius: 20px;
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
        background-color: white;
        color: black;
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
        margin-left: 140px;
        padding-top: 2px;
      }
      .fot3{
        margin-left: 80px;
      }
      
          </style>
          <br>
          <br>
          <br>
    <body class="bg"  >
      <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand"><img src="logo2.png" alt="" style="height: 150px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="	fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="institute.html">Institute</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="all scolorships.html">Scholarship</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addmission.html">Addmissions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign.html">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="EDS.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact US</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>
         
          <div class="container" style="margin-top: 40px;"  >
          <div class="row mx-auto">
              <?php 
              include('conn.php');
              $sql="SELECT * FROM `addmissionform`";
              $result=mysqli_query($conn,$sql);
              foreach($result as $row){
              ?>
          <div class="card m-3" style="width:20rem;">
            <img src="uploadfile/<?php echo $row['image'] ?>" class="card-img-top"  style="height:200px;" alt="..">
            <div class="card-body text-center">
              <a href="scholrship.html" class="card-text"><?php echo $row['cdate']?></a><br>
              <a href="addmissionform.html" class="btn btn-success mt-1">apply</a>
            </div>
          </div>
      <?php } ?>
          </div>
          </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body> 


    <footer class="container-fluid" style="background-color:rgb(23, 184, 170) ;">
      <div class="row p-3">
        <div class="col-md-4" style="justify-content:center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="col-md-4">
          <h1 class="text-center" style="color: black;">Services</h1>
          <ul class="fot2"style="list-style:none;">
           <a class="fot1" href="institute.html"> <li class="mt-2">
              Institute
            </li></a>
            <a class="fot1" href="scholrship.html"> <li class="mt-2">
              Scholarship
            </li></a>
            <a class="fot1" href="addmission.html"> <li class="mt-2">
              Admission
            </li></a>
            <a class="fot1" href="sign.html"> <li class="mt-2">
              Register
            </li></a>
            <a class="fot1" href="EDS.html"> <li class="mt-2">
              Login
            </li></a>
            
          </ul>
        </div> 
        <div class="col-md-4">
          <a href=""><img src="logo.png" style="height: 150px;margin-left:130px ;" ></a>
          <h1 class="text-center" style="margin-top:5px ; color: black;">Contact US</h1>
          <div class="d-flex fot3">
            <a href="https://web.whatsapp.com/"> <i class="fa fa-whatsapp p-3 ir"></i></a>
            <a href="https://www.facebook.com/"> <i class="fa fa-facebook p-3 ir"></i></a>
            <a href="https://www.twitter.com/"> <i class="fa fa-twitter p-3 ir"></i></a>
            <a href="https://www.google.com/"> <i class="fa fa-google p-3 ir"></i></a>
           
       
         </div>
        </div>
        
      </div>
    
     </footer>
     <div class="container-fluid bg-dark text-white text-center p-1"><h4>Copyright@EDS.com</h4></div>
</html>