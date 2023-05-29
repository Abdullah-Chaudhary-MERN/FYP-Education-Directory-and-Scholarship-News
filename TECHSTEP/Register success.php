<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
  </head>
  <style>
* {
    padding: 0;
    margin: 0
}

.wrapper {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:white;
}

.animated-check {
    height: 10em;
    width: 10em
}

.animated-check path {
    fill: none;
    stroke: #7ac142;
    stroke-width: 4;
    stroke-dasharray: 23;
    stroke-dashoffset: 23;
    animation: draw 1s linear forwards;
    stroke-linecap: round;
    stroke-linejoin: round
}
.fm{
  background-color: #F3AD24;
  color: white;
  /* position: relative;
  left: 630px;
  top: 10px; */
  width: 120px;
}
.fm:hover{
  color: white;
        background-color: rgba(8, 8, 8, 0.9);
   
      
      }

@keyframes draw {
    to {
        stroke-dashoffset: 0
    }
}
  </style>
  <body>
    <div class="wrapper" style="margin-top: -100px;"> 
      <svg class="animated-check" viewBox="0 0 24 24">
      <path d="M4.1 12.7L9 17.6 20.3 6.3" fill="none" /> </svg>
     
      
    </div>
    <h2 style="margin-top:-200px" class="text-center">
      You have been registered succefully.
    </h2>

    

     <div class="row">
    <div class="col-md-5">

    </div>
     <div class="col-md-2 btn bot">
      <!-- <button style="text-decoration: none;"  href="register.php" >Back</button> -->
      <a  href="register.php" type="button" class="btn btn-warning fm" >Back</a>
    </div> 
     <div class=" col-md-5 "></div></div>
    <div> 
      
    </div>
  </body>
</html>