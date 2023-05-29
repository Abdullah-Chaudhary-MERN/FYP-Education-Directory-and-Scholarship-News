<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  -webkit-animation: spin 0.5s linear infinite;
  animation: spin 0.5s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 0.5s;
  animation-name: animatebottom;
  animation-duration: 0.5s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
.abcd{
  margin-top: 20  px;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;background-image: url('https://img.freepik.com/free-photo/road-inside-parking_1203-433.jpg?w=996&t=st=1648395488~exp=1648396088~hmac=f7732bb5e42d7a9f2dd85e5427f0be96d85b6d6ba9efb072b675755bb2328254');background-repeat:repeat;background-size: cover;" >

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <h2 class="mt-5">Select Login Type</h2>
  <div class="container" style="padding-left:85px ;">
  <div class="row ">
      <div class="card m-5 p-3 border-secondary" style="width: 15rem;border:5px solid;border-style: outset;">
    <div class="fa fa-user card-img-top" style="font-size:80px;" ></div>
    <div class="card-body">
      <h5 class="card-title ">User</h5>
          <a href="user site/Home.php" type="button" class="btn btn-warning abcd ">Home</a>
      
    </div>
  </div>
  <div class="card m-5 p-3 border-secondary" style="width: 15rem;border:5px solid;border-style: outset;">
    <div class="fa fa-user card-img-top" style="font-size:80px;" ></div>
    <div class="card-body">
      <h5 class="card-title ">Focal Person </h5>
          <a href="TECHSTEP/Login.php" type="button" class="btn btn-warning abcd ">Home</a>
      
    </div>
  </div>
  <div class="card m-5 p-3 border-secondary" style="width: 15rem;border:5px solid;border-style: outset;">
    <div class="fa fa-user card-img-top" style="font-size:80px;" ></div>
    <div class="card-body">
      <h5 class="card-title ">Admin</h5>
          <a href="university/admin login.php" type="button" class="btn btn-warning abcd ">Home</a>
      
    </div>
  </div>
</div>
</div>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 100);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>