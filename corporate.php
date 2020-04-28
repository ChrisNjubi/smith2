<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporate Photography</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/corporate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/footer.css">
</head>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-sm  navbar-dark">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Packages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="studio.php">Studio Photography</a>
                        <a class="dropdown-item " href="landscape.php">Landscape Photography</a>
                        <a class="dropdown-item" href="weddings.php">Weddings</a>
                        <a class="dropdown-item active" href="corporate.php">Corporate Events</a>
                        <a class="dropdown-item" href="product.php">Product Photography</a>
                        <a class="dropdown-item" href="potrait.php">Portrait Photography</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<br>
<h1 style="font-size: 50px">Corporate Photography</h1>
<div class="container">
    <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="resources/corp2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="resources/corp6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="resources/corp8.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <img class="demo cursor" src="resources/corp2.jpg" style="width:100%" onclick="currentSlide(1)" alt="corp2">
        </div>
        <div class="col-md-4">
            <img class="demo cursor" src="resources/corp6.jpg" style="width:100%" onclick="currentSlide(2)" alt="corp6">
        </div>
        <div class="col-md-4">
            <img class="demo cursor" src="resources/corp8.jpg" style="width:100%" onclick="currentSlide(3)" alt="corp8">
        </div>
    </div>
</div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 3 seconds
            }

        </script>
<br>
<br>
<h1 style="font-size: 50px">Our Clients</h1>

    <img src="resources/client2.png" alt="Avatar"style="width: 130px" class="image">




    <img src="resources/client4.png" alt="Avatar"style="width: 130px"class="image">



    <img src="resources/client5.png" alt="Avatar"style="width: 130px"class="image">



    <img src="resources/client6.png" alt="Avatar"style="width: 130px"class="image">


    <img src="resources/client7.png" alt="Avatar"style="width: 130px;"class="image">





    <img src="resources/client8.png" alt="Avatar"style="width: 130px;"class="image">



    <img src="resources/client10.png" alt="Avatar"style="width: 130px"class="image">


    <img src="resources/client13.png" alt="Avatar"style="width: 130px"class="image">


        <!--Footer-->

        <footer class="footer-distributed">
            <div class="footer-left">
                <img src="image/logo.png">
                <h3>About<span>Smith Photography</span></h3>

                <p class="footer-links">
                    <a href="index.php">Home</a>
                    |
                    <a href="register.php">Register</a>
                    |
                    <a href="about_us.php">About</a>

                </p>

                <p class="footer-company-name">©2020 Smith Photography</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>309 - Westlands Rd,
             Bldg. No. A - 1, Sector - 1</span>
                        Westlands, Nairobi Kenya - 400710</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+254 772 800613</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:smith@photography.com">smith@photography.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About Us</span>
                    Raffs cafe is definitely the place you want to be when in need of a quick, tasty meal, a fun time time with the kids, a meeting
                    with colleagues or on special occasions with family or friends.</p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </footer>


</body>
</html>
