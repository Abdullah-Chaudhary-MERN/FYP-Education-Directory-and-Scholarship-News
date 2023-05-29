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
        background-image: url('phone.webp');
          
          background-repeat: no-repeat;
         
          background-size: 1500px;
         
            
        } 
        .navbar{
          height: 80px;

background-color:rgb(23, 184, 170);

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
         .col-6{
             background-color: black;
             opacity: 0.8;
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
      .firm{
        background-color: rgba(12, 12, 12, 0.1);
        color: white;
        border-color: transparent;

      }
      .firm:hover{
        background-color: black;
        border-radius: 5px;

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
          <br>
          <br>
          <br>
          <br>
    <body class="bg"  >
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
              <li class="nav-item">
                <a class="nav-link" href="addmission.php">Addmissions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="EDS.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact US</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <div>
        <form class="col-6 mx-auto p-3 mt-5 firm " action="work.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align: center;">Contact Us</h1>
          <b>
            <label class="form-label" >
               Name
            </label>
            <input type="Name" class="form-control" placeholder="Enter Name" required name="pname">
            <label class="form-label">
               Email
            </label>
            <input type="Email" class="form-control" placeholder="Enter Email" required name="ename">
            <label class="form label">
                Subject
            </label>
            <br>
          <input class="form-control" placeholder="Enter subject" required name="sname">
          <br>
          <label class="form label">
            Message
        </label>
        
        <br>
      <textarea class="form-control" placeholder="Enter text" required name="mname"></textarea>
      
           <BR>
           <div class="row">
            <div class="col-3"> 
            </div>
              <div class="col-3"> 
              </div>
                <div class="col-3"> 
                </div>
                
            <div class="col-3"> <button type="submit" class="btn btn-success" name="go" style="background-color: darkgreen;opacity: 1.0;">send</button>
            </div>
          </div> 
          
        </form>
</div>
<br>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.9637948420564!2d73.09229321445969!3d30.663147996035356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7dc32d1c8d5%3A0xb84801bcc0f860ed!2sBarani%20Institute%20of%20Sciences%20Sahiwal%20Campus%2C%20JV%20of%20PMAS%20Arid%20Agriculture%20University%20RWP.!5e0!3m2!1sen!2s!4v1653388220443!5m2!1sen!2s" class="container-fluid" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<footer class="container-fluid" style="background-color:rgb(23, 184, 170) ;">
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
        <a class="fot1" href="addmission.php">
           <li class="mt-2">
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
      <h3 class="text-center" style="margin-top:10px ; color: black; margin-left: 40px;">Contact US</h3>
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