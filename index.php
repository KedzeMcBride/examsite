
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
</head>
<style>
        .carousel-indicators img{
            width: 70px;
            display: block;
        }
        .carousel-indicators button{
            width: max-content!important;
        }
        .carousel-indicators{
            position: unset;
        }
    </style>
<body>

<?php $form=true;?>
<?php include 'nav.php'; ?>
<div class="container-fluid banner">
<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">WELCOME ONCE MORE</h1>
				<p class="text-center">
					BE AMAZED DYNAMIC WEB DESIGN
				</p>
				<a href="#" class="btn btn-md text-center">GET STARTED</a>
			</div>
            <div class="jumbotron jumbotron-fluid bg-secondary text-white text-center" style="background: #333;">
    <div class="container">
    <h1 class="display-1">Welcome KEDZE to CEC319</h1>
    <p class="lead">Dynamic web page design with jquery, bootstrap, php and Ajax</p>
    </div>
</div>
</div>
</div>
</div>
<div class="carousel slide" 
id="carouselDemo"
data-bs-wrap="true" 
data-bs-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img1.jpg" class="w-100">
            <div class="carousel-caption">
                <h5>ROAD ART</h5>
                <p>
                    ENJOY THE SAN FRANSISCO BAY ROAD
                </p>
            </div>
        </div>

        <div class="carousel-item " 
        data-bs-interval="2000">
            <img src="img2.jpg" class="w-100">
            <div class="carousel-caption">
                <h5>CAR ART</h5>
                <p>
                    ENJOY THIS 1989 RIDE
                </p>
            </div>
        </div>

        <div class="carousel-item ">
            <img src="img3.jpg" class="w-100">
            <div class="carousel-caption">
                <h5>ARTISTICS</h5>
                <p>
                    ENJOY THE VIEW
                </p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" 
    type="button"
    data-bs-target="#carouselDemo" 
    data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next"
    type="button"
    data-bs-target="#carouselDemo"
    data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>

    <div class="carousel-indicators">
        <button type="button" class="active"
            data-bs-target="#carouselDemo"
            data-bs-slide-to="0">
            <img src="img1.jpg" />
        </button>

        <button type="button" 
        data-bs-target="#carouselDemo"
        data-bs-slide-to="1">
            <img src="img2.jpg" />
        </button>

        <button type="button"
        data-bs-target="#carouselDemo"
        data-bs-slide-to="2">
            <img src="img3.jpg" />
        </button>
    </div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
<!---14:36-->