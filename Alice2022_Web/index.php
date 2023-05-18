<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>ALICE BAKERY HOUSE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Koulen&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        </head>
<body>

    <section class="header">
        <nav>
            <a href="index.html"><img src="image/logo2.png"></a>
            <div class="nav-links" id="navLinks">
                
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="locateus.php">LOCATION</a></li>

                </ul>
                </div>
              
                
        </nav>

        <div class="text-box">

       
            <h1>Welcome to Alice Bakery House</h1>
            <br>
            <p>Please choose your category to login :</p>
            
           
          

            <a href="user_login.php" class="hero-btn">CUSTOMER</a>
            <a href="admin_login.php" class="hero-btn">ADMIN</a>
        </div>
    </section>

       <!---Gallery-->

       <div class="slideshow-container">

        <h1 id="gallery">Gallery of Alice Bakery House</h1>
        <br>
        

        <div class="mySlides fade">
            <div class="numbertext">1 / 9 </div>
            <img src="image/1.jpg" style="width:100%">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 9 </div>
            <img src="image/bg3.jpg" style="width:100%">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 9 </div>
            <img src="image/3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 9 </div>
            <img src="image/4.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 9</div>
            <img src="image/5.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 9 </div>
            <img src="image/6.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 9 </div>
            <img src="image/7.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 9 </div>
            <img src="image/8.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / 9 </div>
            <img src="image/9.jpg" style="width:100%">
        </div>

    </div>


<br>
<br>
<br>
     
    
    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    </div>
    
    <!---Script for slideShow Image-->
    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

<section class="gallery">

    <h1>Alice Bakery Video Gallery</h1>
    <p>Come to watch the Alice Bakery Video.</p>
<div class="row">
    <div class="gallery-col">
        <h3>Our Signature Menu</h3>
        <video width = "250" height = "280" controls>
            <source src = "image/1.mp4" type = "video/mp4">

    </div>

    <div class="gallery-col">
        <h3>Chocolate Muffin</h3>
        <video width = "250" height = "280" controls>
            <source src = "image/2.mp4" type = "video/mp4">

    </div>

    <div class="gallery-col">
        <h3>Coffee</h3>
        <video width = "250" height = "280" controls>
            <source src = "image/3.mp4" type = "video/mp4">

    </div>
    
</div>
</section>


<!---Contact Us-->
<section class="contactUs">
    <h1>Contact Us For More Information</h1>
    <a href="contactus.html" class="hero-btn">CONTACT US</a>
</section>

<!--Footer-->
<section class="footer">
        <h3>Locate Us</h3>
        <p>Lot PTD 210, Old Street Commercial Ctr Jalan Rotan Utama</p>
        <p>Taman Sri Jaya, Batu Pahat</p> 
        <p>83000</p>
        <p>Johor Darul Takzim, Malaysia.</p>
        <p>Tel: 017-7584761 | Email: alicebakeryhouse@gmail.com</p>

<br>
<br>
<h4>COPYRIGHT ALICE BAKERY HOUSE 2022</h4>
<p>Disclaimer & Copyright | Privacy Statement | ICT Security Policy</p>

<div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-envelope"></i>
    <i class="fa fa-phone"></i>
</div>

</section>



</body>
  
</html>