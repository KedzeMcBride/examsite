<?php
 session_start();
 if(!isset($_SESSION["policy"])){
    header("location: chat.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="font/css/all.min.css">
    <style>
      .center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 400px;
      }
      .center a:hover{
        color: red;
      }
      .center button:hover{
        background-color: red;
      }
      .icon{
        display: flex;
      }
      .icon i{
        padding-left: 15px;
      }
      .head{
        background-image: url("images/OIP.jpeg");
        height:550px;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .text{
        padding-top: 150px;
      }
      .options{
        justify-content: space-between;
        margin-left: 0px;
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
      }
      .options img{
        width: 350px;
        height: 300px;
        padding-left: 20px;
        padding-top: 15px;
      }
      .carousel-inner img {
			width: 350px;
			height: 350px;
		}
    .storm{
      padding-top: 20PX;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Free shipping</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="genderDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gender</a>
                  <ul class="dropdown-menu" aria-labelledby="genderDropdown">
                    <li><a class="dropdown-item" href="#">Male</a></li>
                    <li><a class="dropdown-item" href="#">Female</a></li>
                    <li><a class="dropdown-item" href="#">Alien</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Language</a>
                  <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                    <li><a class="dropdown-item" href="#">French</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="countryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Country</a>
                  <ul class="dropdown-menu" aria-labelledby="countryDropdown">
                    <li><a class="dropdown-item" href="#">USA</a></li>
                    <li><a class="dropdown-item" href="#">Canada</a></li>
                    <li><a class="dropdown-item" href="#">Mexico</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
      </nav>
      <nav class="navbar navbar-expand-sm bg-light" style="margin-top: 55px;">
        <div class="container-fluid">
          <h4>KED <span style="color: crimson;">ECOM</span></h4>
        </div>
        <div class="center">
          <a href="#" class="btn btn- mx-2">Home</a>
          <a href="#" class="btn btn- mx-2">About</a>
          <a href="#" class="btn btn- mx-2">Shop</a>
          <button class="btn btn-secondary mx-2"><a href="registration.php" style="color: aliceblue;text-decoration: none;">Register</a></button>
          <button class="btn btn-secondary mx-2"><a href="login.php" style="color: aliceblue;text-decoration: none;">Login</a></button>
        </div>
        <div class="icon"><i class="fa fa-heart" aria-hidden="true"></i>
          <i class="fa fa-user-circle" aria-hidden="true"></i>
          <i class="fa fa-car" aria-hidden="true"></i>
        </div>
      </nav> 

      <div class="head">
        <div class="text">
          <h5>Spring <span style="color: red;">Summer collection 2023</span> </h5>
          <h1>GET UPTO 30% OFF per <br> DELIVERY</h1>
          <button type="button" class="btn btn-danger">Shop Now</button>
        </div>
      </div>
      <div class="options">
        <img src="images/flt3.jpeg">
        <img src="images/flt2.jpeg">
        <img src="images/flt1.jpeg">
      </div>

      <div class="storm">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/shoe.jpeg" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="images/male.jpeg" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="images/female.jpeg" alt="Slide 3">
            </div>
          </div>
        </div>
      </div>

      <footer style="background-color: rgba(31, 30, 30, 0.753); color:white; margin-top: 50px; padding-top: 60px;">
        <div class="container">
         <div class="row">
    
            <div class="col-md-4">
                <h3>About KED <span style="color: red;"> eCom</span></h3>
                
                    <p style="color: grey;">KEDECOM best place to get your dream fit</p>
                
           </div>
    
           <div class="col-md-4 container">
            <h3>Quick Links</h3>
            <div class="row">  
                    <ul class="col-md-6" style="list-style: none;">
                        <li><a href="#" style="text-decoration: none; color: grey;">Home</a></li>
                        <li><a href="#" style="text-decoration: none; color: gray;">Employers</a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;">Go to top</a></li>
                    </ul>
    
                    <ul class="col-md-6" style="list-style: none;">
                        <li><a href="#" style="color: grey;">Job List</a></li>
                        <li><a href="#" style="color: grey;">Contact Us</a></li>
                    </ul>
                    </div>
                    </div>
        
    
            <div class="col-md-4">
                <h3>KEDeCOM Contact</h3>
                <ul class="col-md-6" style="list-style: none; color: grey;">
                    <li>Address : Molyko -Buea</li>
                    <li><a href="#" style="text-decoration: none; color: grey;">Email:jobdoorway@gmail.com</a></li>
                    <li>Phone: +237679495102</li>
                </ul>
    
            </div>
         </div>
        </div>
    
        <div class="container-fluid" style="background-color: rgb(31, 30, 30)">
        <div class="container">
            <div class="row">
            <p class="col-md-5" style="color: gray;">&copyCopyright 2023 TECHCOSOLVED 6</p>
            <p class="col-md-5" style="color: gray;">Developed by TECHRITOMA Inc</p>
            <p class="col-md-2" style="color: gray;"><i class="fa-brands fa-twitter" style="margin: 0 3px;"></i> <i class="fa-brands fa-facebook" style="margin: 0 3px;"></i> <i class="fa-brands fa-instagram" style="margin: 0 3px;"></i></p>
          </div>
        </div>
    </div>
       </footer>
 
      <!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		// Initialize the carousel
		var myCarousel = document.querySelector('#myCarousel')
		var carousel = new bootstrap.Carousel(myCarousel, {
			interval: 2000,
			wrap: true
		})
	</script>
</body>
</html>