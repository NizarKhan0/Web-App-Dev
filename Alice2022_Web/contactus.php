<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        
        <title>
            Contact Us 
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Koulen&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
        <section class="cont">

            <nav>
                <a href="index.html"><img src="image/logoalice.png"></a>
                <div class="nav-links" id="navLinks">
                    
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                        <li><a href="contactus.php">CONTACT</a></li>
                        <li><a href="locateus.php">LOCATION</a></li>
                          <li><a href="logout.php">LOGOUT</a></li>
        
                    </ul>
                    </div>
                  
                    
            </nav>
    
            <div class="contact-section">
                <div class="contact-info">
    
                   
                    <div><i class="fa fa-envelope"></i>alicebakery@gmail.com</div>
                    <div><i class="fa fa-phone"></i> 011-17679010</div>
                    <div><i class="fa fa-clock-o"></i>Monday-Friday</div>
    
                </div>
    
                <div class="contact-form">
    
                    <h2>Send Feedback to Us</h2>
                    <form class="contact" action="" method="post">

                    <fieldset>
                    <legend style="color:white">Feedback Form</legend>
                    <br>
                    <br>
                       <input type="text" name="fullName" placeholder="Your Name"> 
                       <input type="email" name="email"  placeholder="Your Email"></h6>
                        <br>
                        <br>   
                        <textarea name="msg"  rows="5" cols="50" placeholder="Your message / feedback" required></textarea>
                        <button onclick="btnFunction()" name="submit" class="send-btn">Send</button>
                        

                        <script>
                            //JavaScript:Output in alert box
                            function btnFunction(){
                                var message = "Your message have been send. Thank you!";
                            alert(message);

                            }
                           
                        </script>
                       
                        <br>
                      
    
                    </fieldset>
    
                    </form>
    
                </div>

              
            </div>

            <br>
            <br>
            <br>
            <br>

          

        </section>

       
    </body>