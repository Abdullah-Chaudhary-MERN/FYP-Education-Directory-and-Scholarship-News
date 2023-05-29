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
</style>

<body>
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
  <br>
  <br>
  <br>
  <br>
  <table class="table mt-5 container bg-light">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>email</th>
        <th>Subjects</th>
        <th>message</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>M Ahmad</td>
        <td>@gmail.com</td>
        <td>web</td>
        <td>abc</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Haider</td>
        <td>@outlook</td>
        <td>eng</td>
        <td>abc</td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Abdullah</td>
        <td>@twitter</td>
        <td>math</td>
        <td>abc</td>
        
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
<footer class="container-fluid p-3 fixed-bottom" style="background-color:black">
  <h6 class="abc">Copyright@EDS.com</h6>
</footer>
</body>