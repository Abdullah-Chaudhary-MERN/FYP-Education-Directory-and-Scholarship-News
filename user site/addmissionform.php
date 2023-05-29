<?php
session_start();
include('conn.php');
if(!isset($_SESSION['uid'])){
  header('location:login.php');
}
else{
  $uid=$_SESSION['uid'];
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];

}
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Addmission Form
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  
  .bg {
    background-image: url(006.webp);
    background-size: cover;
    background-repeat: no-repeat;
    background-size: 1500px;
    
  }

  .nav-link {
    font-size: 20px;
    color: rgb(255, 255, 255);
  }

  .nav-link:hover {
    color: rgb(104, 73, 73);
  }

  .navbar-brand {
    color: rgb(255, 255, 255);
    font-size: 20px;

  }

  .abc {
    size: 20px;
    text-align: center;
  }
 
  .navbar{
    height: 80px;

background-color:rgb(23, 184, 170);

  }
  .firm{
    
          background-color: rgba(12, 12, 12, 0.1);
           color: white;
           border-color: transparent;
         
         }
         .firm:hover{
        
          background-color: rgba(12, 12, 12, 0.5);
           border-radius: 5px;
           color:rgb(206, 180, 180);
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
      .abc{
        padding-right: 300px;
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
      
  
</style>
<body class="bg"  >
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


<div>
  <br>
  <br>
 
  <?php
    include("../user site/conn.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM `admission form` WHERE `id`='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    ?>
          <form class="col-6 mx-auto p-3 mt-5 firm needs-validation" action="work.php" method="post" enctype="multipart/form-data"  novalidate>
            <h1 style="color:white;text-align:center;font-family: Verdana, Geneva, Tahoma, sans-serif;" >Addmission form </h1>
             <br>
             <input type="hidden" class="form-control" placeholder="Enter your Full Name "id="validationCustom01" required name="uid" value="<?php echo $uid;?>">
             <label class="form-label" style="color: white;" >
                Name
             </label>
             <input type="text" class="form-control" placeholder="Enter your Full Name "id="validationCustom01" required name="name" pattern="[a-z,A-Z, ]{3,}">
             <div class="invalid-feedback">
              Please enter a Name
            </div>
             <label class="form-label"style="color: white;">
               Father Name
             </label>

             <input type="text" class="form-control" placeholder="Enter your Father Name" id="validationCustom01" required  name="father" pattern="[a-z,A-Z, ]{3,}">
             <div class="invalid-feedback">
              Please enter Father Name
            </div>
             <label class="form-label" style="color: white;">
               Phone Number
             </label>
             <input type="text" class="form-control" placeholder="+92xxxxxxxxxx" id="validationCustom01" required name="number" >
             <div class="invalid-feedback">
                Please enter phone Number
            </div>
             <label class="form-label" style="color: white;">
               CINC/B-form
             </label>
             <input type="text" class="form-control" placeholder="Enter Your CINC" id="validationCustom01" required name="cinc" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}">
             <div class="invalid-feedback">
              Please enter CINC
            </div>
             <label class="form-label"style="color: white;">
               Email
             </label>
             <input type="text" class="form-control" placeholder="Enter Your Email" id="validationCustom01" required name="email">
             <div class="invalid-feedback">
              Please enter Email
            </div>
             <label class="form-label"style="color: white;">
               Address
             </label>
             <input type="text" class="form-control" placeholder="Enter Your Address" id="validationCustom01" required name="address">
             <div class="invalid-feedback">
              Please enter Address
            </div>
             <label class="form-label" style="color: white;">
               Upload Image
             </label>
             <input type="file" class="form-control" placeholder="Upload Your Image" id="validationCustom01"  name="upload">
             <div class="invalid-feedback">
              Upload your Image
            </div>
             <label class="form-label" style="color: white;">
              Last Degree
           </Label>
           <select class="form-select" name="degree">
              <option>
                  Choose
              </option>
              <option>
                  Fsc(Pre-Engineering)
              </option>
              <option >
                  Fsc(Pre-Medical)
              </option>
              <option >
                 Under-Graduation
              </option>
              <option >
                  Graduation
              </option>
              <option >
                  O Level
              </option>
              <option >
                  A Level
              </option>
              <option >
              I.Com
              </option>
              <option>
                  DAE
              </option>
              <option>
                  ICS
              </option>
              <option>
                  FA IT
              </option>
              <option>
                FA
            </option>
              <option >
                  Others
              </option>
        </select>
        <div class="invalid-feedback">
          Please Upload Last Degree
        </div>
             <label class="form-label"style="color: white;">
               Year
             </label>
             <input type="text" class="form-control" placeholder="Enter Year" id="validationCustom01" required  name="year" pattern="[0-9]{4}" value="<?php echo $row['ayear']?>">
             <div class="invalid-feedback">
              Please Upload Year
            </div>
             <label class="form-label" style="color: white;">
               Institute
             </label>
             <input type="text" class="form-control" placeholder="Enter your Institute" id="validationCustom01" required name="institute" value="<?php echo $row['fpname']?>">
             <div class="invalid-feedback">
              Please Upload Your Institute
            </div>
             <label class="form-label" style="color: white;">
               Marks/CGPA
             </label>
             <input type="text" class="form-control" placeholder="Enter YouR Marks/CGPA" id="validationCustom01" required name="marks" pattern="[0-4]{1}.[0-9]{2}">
             <div class="invalid-feedback">
              Please Upload Your Marks
            </div>
             <label class="form-label"style="color: white;">
               Resultcard last degree
             </label>
             <input type="file" class="form-control" placeholder="upload Your Resultcard" id="validationCustom01" required name="resultcard">
             <div class="invalid-feedback">
              Please Upload Your last Degree
            </div>
             <label class="form-label"style="color: white;">
               Resultcard Matrix/Inter
             </label>
             <input type="file" class="form-control" placeholder="Enter Your Resultcard" id="validationCustom01" required name="inter">
             <div class="invalid-feedback">
              Please Upload Your Resultcard
            </div>
             <label class="form-label" style="color: white;" >
                Student CNIC
             </label>
             <input type="file" class="form-control" placeholder=" CNIC front " id="validationCustom01" required name="student">
             <div class="invalid-feedback">
              Please Upload Student CINC
            </div>
             <label class="form-label"style="color: white;">
               Domicel
             </label>
             <input type="file" class="form-control" placeholder="Enter your Domicel" id="validationCustom01" required  name="domicel">
             <div class="invalid-feedback">
              Please Upload Domicel
            </div>
             <label class="form-label" style="color: white;">
               Father CNIC
             </label>
             <input type="file" class="form-control" placeholder="Enter your CNIC" id="validationCustom01" required name="fathercinc">
             <div class="invalid-feedback">
              Please Upload Father CINC
            </div>
            
             <input type="hidden" class="form-control" placeholder="(Optional)" id="validationCustom01" required name="nts" value="<?php echo $row['id']?>">
             <label class="form-label"style="color: white;">
               Character certificate
             </label>
             <input type="file" class="form-control" placeholder="upload your Character certificate" id="validationCustom01" required name="character">
             <div class="invalid-feedback">
              Please Upload Character certificate
            </div>
            
         
         
             <br>
             <div class="row">
               <div class="col-3"></div>
               <div class="col-3"></div>
               <div class="col-3"></div>
               <div class="col-3"><button type="submit" name="send" class=" btn btn-success" name="send">send</button></div>
             </div>
         
           </form>
        </strong>
        

      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>

<footer class="container-fluid " style="background-color:rgb(23, 184, 170) ;">
  <div class="row p-3">
    <div class="col-md-4" style="justify-content:center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.308894892646!2d73.07935481454352!3d33.6491572463125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e017d0acd%3A0xf20be4a76782ceaf!2sPir%20Mehr%20Ali%20Shah%20Arid%20Agriculture%20University%20-%20PMAS%20AAUR!5e0!3m2!1sen!2s!4v1655965031520!5m2!1sen!2s"  height="300px" class="col-11" style="border:3px solid transparent;border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    <div class="col-md-4">
      <h1 class="text-center" style="color: black;">Services</h1>
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
      <h1 class="text-center" style="margin-top:5px ; color: black;">Contact US</h1>
      <div class="d-flex fot3">
        <a href="https://web.whatsapp.com/"> <i class="fa fa-whatsapp p-3 ir ir"></i></a>
        <a href="https://www.facebook.com/"> <i class="fa fa-facebook p-3 ih ir"></i></a>
        <a href="https://www.twitter.com/"> <i class="fa fa-twitter p-3 ik ir"></i></a>
        <a href="https://www.google.com/"> <i class="fa fa-google p-3 if ir"></i></a>
       
   
     </div>
    </div>
    
  </div>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>
 </footer>
 <div class="container-fluid bg-dark text-white text-center p-1"><h4>Copyright@EDS.com</h4></div>
</body>
</html>