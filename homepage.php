<?php 
include 'navbar.php'; ?>
<html lang="en">
<head>
  <title>🏚️ Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
body
  {
	 background-image: url(menu2.jpg);
    background-color: rgba(0,255,255,0.1);
    background-blend-mode: lighten;
	color:white;
  }
  
  .col-12{
	  font-size:50px;
	  background-color:black;
	  text-align:center;
	  margin-top:50px;
  }
  .col-3
  {
	  border:1px solid black;
	  border-radius:8px;
	  margin-left:95px;
	  background-color: rgba(0,0,0,0.4);
	  margin-top:10px;
  }
  
  .col-2
  {
	  border:1px solid black;
	  border-radius:8px;
	  margin-left:41px;
	  background-color: rgba(0,0,0,0.4);
	  margin-top:10px;
  }
  .col-1
  {
	  margin-top:20px;
	  margin-left:180px;
  }
  .col-5
  {
	  background-color: rgba(0,0,0,0.4);
	  margin-left:80px;
  }
  
  
  .col-11
  {
	  text-align:center;
	  background-color: rgba(0,0,0,0.4);
	  font-size:20px;
  }
</style>
</head>
<body>
<div style="margin-left:320px; margin-top:-60px;background-color:black;color:white;width:250px;position:absolute;">
  <center><img src="menu9.jpg"style="width:200px;"></center>
  <h2><center>Agarwal<br> Restaurant</center></h2>
</div>
<div class="container-fluid">
<br>
<div class='row'>

<div class='col-4'><a href="mailto:yashagarwal3221@gmail.com" style="color:white;test-decoration:none;"><button type='button' class='btn btn-outline-danger'>Drop a Mail 📧</button></a>
</div>

<div class='col-5'><h1 style='font-size:75px;'>Indian Taste🍦🍨</h1><br><h3>Rajasthan Ro Desi Khano ( राजस्थान रो देसी खाणो )</h3></div>
</div>

<br>
<div class="row">
<div class="col-md-3"><br><br><img src='book.jpg' style='width:300px;height:300px;'></div>

<div class="col-6">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="enjoy.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="enjoy1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="enjoy.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="col-md-3"><br><br><img src='book1.jpg' style='width:300px;height:300px;'></div>

</div>
<br>


<div class="row"><div class="col-12">Varieties of food offer by us </div></div>
<div class="row">
<div class="col-2"><center><h3>North Indian</h3>
<img src='indi8.jpg' style='width:200px;'><br>
</center></div>

<div class="col-2"><center><h3>South Indian</h3>
<img src='indi4.jpg' style='width:200px;'><br>
</center></div>

<div class="col-2"><center><h3>Fast Food</h3>
<img src='indi5.jpg' style='width:200px;'><br>
</center></div>

<div class="col-2"><center><h3>Soft Drinks</h3>
<img src='pa.jpg' style='width:200px;'><br>
</center></div>

<div class="col-2"><center><h3>Sweets</h3>
<img src='indi7.jpg' style='width:200px;'><br>
</center></div>
<div class='col-4'></div>

<div class='col-1'><button type='button' class='btn btn-primary' onclick="window.location='http://localhost/project/customeroffer.php'">See Menu</button></div>


</div>














<div class="row"><div class="col-12">Reviews by Our Customers </div></div>

<div class="row">
<div class="col-3"><center><img src='img1.webp' style='width:150px; border-radius:40%;'><hr><h4>Hitesh</h4> <h6>
<hr>Excellent Booking System of the restaurant saved by time, and there is no headache after booking , I just went and enjoyed the delicious food.</h6>
</center></div>
<div class="col-3"><center><img src='img2.webp' style='width:150px; border-radius:40%;'><hr><h4>Divya</h4> <h6>
<hr>Great Services offered by Restraunt, I ordered food on 10th March, Received food within 15min, and the food was very tasty and fresh.</h6>
</center></div>
<div class="col-3"><center><img src='img3.webp' style='width:150px; border-radius:40%;'><hr><h4>Richa</h4> <h6>
<hr>Visited this Restaurant in feb-2021, was surprised after seeing its excellent seating arrangements, and the food was very delicious and hygenic.</h6>
</center></div>

</div>




<div class="row" id='about'><div class="col-12">About Us</div></div>

<div class="row">
<div class="col-3"><center><h1>Sumanth Reddy</h1><hr><img src='sumanth.jpg' style='border-radius:50%;width:150px;'><hr><h3>Co-Founder,CEO,Developer</h3><hr><a class='navbar-brand' href="">
  <img src="fb.jpg" alt="fb" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="insta.jpg" alt="instagram" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="twit.jpg" alt="twitter" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="mail.jpg" alt="mail" style="width:30px;border-radius:50%;">
  </a>
  <hr>
  <h2>📞 +91 95155 36577</h2>
  
</center></div>




<div class="col-3">
<center><h1>Yash Agarwal</h1><hr><img src='yash.jpg' style='border-radius:50%;width:150px;'><hr><h2>Founder,CEO,Manager</h2><hr><a class='navbar-brand' href="https://www.facebook.com/profile.php?id=100052052304252">
  <img src="fb.jpg" alt="fb" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="https://www.instagram.com/yashagarwal2/">
  <img src="insta.jpg" alt="instagram" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="https://twitter.com/YashAga30466735">
  <img src="twit.jpg" alt="twitter" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="mailto:yashagarwal3221@gmail.com">
  <img src="mail.jpg" alt="mail" style="width:30px;border-radius:50%;">
  </a>
  <hr>
  <h2>📞 +91 9079150556</h2>
  
  
</center></div>

<div class="col-3">
<center><h1>Mukul Choudhary</h1><hr><img src='mukul.jpg' style='border-radius:50%;width:100px;'><hr><h2>Ex CEO</h2><hr><a class='navbar-brand' href="">
  <img src="fb.jpg" alt="fb" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="insta.jpg" alt="instagram" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="twit.jpg" alt="twitter" style="width:30px;border-radius:50%;">
  </a>
  <a class='navbar-brand' href="">
  <img src="mail.jpg" alt="mail" style="width:30px;border-radius:50%;">
  </a>
  <hr>
  <h2>📞 +91 87550 14406</h2>
  
  
</center></div>


</div>
<br>
<div class="row"><div class="col-11">@copyright 2021</div></div>
</div>
</body>
</html>
