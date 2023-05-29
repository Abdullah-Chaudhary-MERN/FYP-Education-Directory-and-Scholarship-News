
<!DOCTYPE html>
<head>
    <title>
       Add University
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .navbar-brand:hover{
              color: goldenrod;
            } 
    .navbar{
    background-color:black;
    }
   
    .navbar-brand{
    color:goldenrod;
    }
    .navbar-brand:hover{
           color:black;
    }
    
    .nav-link:hover{
           color:black;
           background-color:goldenrod;
    }
    .col-md-4{
           background-color: black;
           color:goldenrod;
           opacity: 0.8;
           margin-top:100px;
       }
       .nav-link{
            color:goldenrod;
        }
         
      
       .ab{
           list-style:none;
           display:flex;
       }
       .bg2{
         border-radius: 50%;
         height: 100px;
         border: 1px solid black;
         background-color: transparent;
         
       }
       .card{
         background-color: transparent;
         border-color: transparent;
       }
       .card-text{
         color:white;
         text-decoration: none;
         font-size: 20px;
       }
</style>
<body style="background-image: url(admin.jpg);background-size: cover;;">
</body>
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



<div class="container text-center">
  <div class="row">
  <?php
   include("../user site/conn.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM `instute` WHERE `id`='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    ?>
    <div class="card m-3 mt-5" style="width:15rem;">
      <img src="uploadfile/<?php echo $row['backimg'];?>" class="card-img-top bg2" style="height:200px;" alt="..">
      <div class="card-body">
        <a class="card-text fw-bold" href=""><?php echo $row['name'];?></a>
        <h5> Sub Campus</h5>
        <p class="card-text fw-bold" href=""><?php echo $row['subcam'];?></p>
        <h5> Main Campus</h5>
        <p class="card-text fw-bold" href=""><?php echo $row['maincam'];?></p>
      </div>
    </div> 
    </div>
    </div>
    <br>
    <br>
    <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<footer class="container-fluid mt-5 p-3 fixed-bottom" style="background-color:rgb(24, 23, 23);color:goldenrod;text-align: center;">
  <h6>Copyright@EDS.COM</h6>

</footer>
</body>
</html>