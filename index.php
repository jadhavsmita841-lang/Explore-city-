<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>satara</title>
    <link rel="icon" href="./files/satara.jpg">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
   
</head>
<body>

<!-- Background Video & Header -->

    <div class="banner">
        <video src="./files/vid.mp4" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

    <div class="content" id="home"> 
        <nav>
            <img src="./files/satara.jpg" class="logo" alt="Logo" title="Satara">
            
            <ul class="navbar">
                <li>
                    <a href="./index.php">Home</a>
                    <a href="#tourism">Tourism</a>
                    <a href="./contact.php">Contact Us</a>
                    <a href="./weather.html">weather</a>
                    <a href="./logout.php">Logout</a>
                   
                </li>
            </ul>
        </nav>
 
        <div class="title">
            <h1>EXPLORE THE CITY</h1>
            <p>Discover Great Places!</p>
            
        </div>
        </div>
    </div>

<!-- Services -->

<section class="container">
    <div class="text">
        <h2>Explore Satara</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
            <a href="travel.html">
           <img src="./files/travel.png" alt="">
        </a>
        </div>
        <div class="col-content"></div>
            <h4>Transportation</h4>
            <p>Arrival and Departure</p>
        </div>
    </a>
    
        <div class="container-box">
        <div class="container-image">
            <a href="food.html">
            <img src="./files/food.jpg" alt="Food">
            </a>
        </div>
        <div class="col-content"></div>
        <h4>Food </h4>
            <p>Hotels</p>
        </div>
    </a>

        <div class="container-box">
        <div class="container-image">
             <a href="culture.html">
            <img src="./files/cll.png" alt="culture">
            </a>
        </div>
        <div class="col-content"></div>
            <h4>Culture</h4>
            <p></p>
        </div>
    </a>

        <div class="container-box">
        <div class="container-image">
            <a href="img.html">
            <img src="./files/photo.jpg" alt="gallery">
            </a>
        </div>
        <div class="col-content"></div>
        
            <h4>Gallery</h4>
            <p>photos&video</p>
        </div>
    </a>
    <div class="container-box">
        <div class="container-image">
            <a href="local.html">
            <img src="./files/local.jpg" alt="local">
            </a>
        </div>
        <div class="col-content"></div>
            <h4>Local</h4>
            <p>near places</p>
        </div>
    </a>

    </div>

    </div>

</section>

<!-- Tourism -->

<section class="tourism" id="tourism">
    <div class="text">
        <h2>Tourism</h2>
    </div>

    <div class="tourism-content">
        
        <div class="col-content">
             <a href="historical.html">
            <img src="./files/3.png" alt="">
            </a>
            <h5>Historical</h5>
            <p>Places</p>
        </div></a>

       

        <div class="col-content">
             <a href="forts.html">
            <img src="./files/pra.jpg" alt="">
            </a>
            <h5>forts</h5>
            <p></p>
        </div></a>

        <div class="col-content">
            <a href="waterfall.html">
            <img src="./files/ss.jpg" alt="">
            </a>
            <h5>waterfalls</h5>

            <p></p>
        </div></a>

        <div class="col-content">
            <a href="hill.html">
            <img src="./files/hill.jpg" alt="">
            </a>
            <h5>Hill</h5>
            <p>Stations</p>
        </div></a>

        <div class="col-content">
            <a href="village.html">
            <img src="./files/village.jpg" alt="">
            </a>
            <h5>Village</h5>
            <p>Culture</p>
        </div></a>

        <div class="col-content">
            <a href="religious.html">
            <img src="./files/relious.jpg" alt="">
            </a>
            <h5>Religious</h5>
            <p>Places</p>
        </div></a>

        <div class="col-content">
            <a href="agro.html">
            <img src="./files/agrp.jpg" alt="">
            </a>
            <h5>Agro Tourism</h5>
            <p></p>
        </div></a>

        <div class="col-content">
            <a href="treaking.html">
            <img src="./files/treking.jpg" alt="">
            </a>
            <h5>Treking</h5>

            <p></p>
        </div></a>

    </div>
</section>
 <!-- Map Section -->
  <section id="map" class="mapp">
    <div class="city">
    <h2 > Map</h2>
</div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60823.73282229974!2d73.97706124541774!3d17.67461474677908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239be08d96bbd%3A0x5f4adf559fb4b19a!2sSatara%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1759682130975!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>

</section>


 
</body>
</html>
