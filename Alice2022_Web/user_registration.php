<?php

require 'al.php';

            if (isset($_POST["submit"]))
            {
                if (addCustomer($_POST) > 0)
                {
                    echo "
                    <script>
                        alert('Succeeded');
                        document.location.href = 'user_login.php';
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script>
                        alert('Failed');
                        document.location.href = 'user_registration.php';
                    </script>
                    ";
                }
            }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        
        <title>
          User Registration
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Koulen&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

  <body>

    <section class="signup">
        <nav>
            <a href="index.html"><img src="image/logoalice.png"></a>
            <div class="nav-links" id="navLinks">
                
            <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="locateus.php">LOCATION</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
                </div>
              
                
        </nav>

        <div class="containerSign">
            <div class="titleSign">User Registration</div>
            <br>
            <form action="" method="post">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">User Id:</span>
                        <input type="text" name="userid" placeholder="Enter id" required>   
                      </div>

                   <div class="input-box">
                        <span class="details">Username :</span>
                        <input type="text" name="uname" placeholder="Enter username" required>   
                    </div>

                    <div class="input-box">
                        <span class="details">Password:</span>
                        <input type="password" name="password" placeholder="Enter password" required>   
                    </div>

                    <div class="input-box">
                        <span class="details">Full Name :</span>
                        <input type="text" name="fname" placeholder="Enter your full name" required>   
                    </div>
                
                    <div class="input-box">
                        <span class="details">Phone Number :</span>
                        <input type="text" name="phonenum" placeholder="Enter your Number Phone" required>   
                    </div>

                    <div class="input-box">
                        <span class="details">Address:</span>
                        <input type="text" name="address" placeholder="Enter your address" required>   
                    </div>

                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="email" name="email" placeholder="Enter your email" required>   
                    </div>

                    <div class="user_gender">
                        <span class="user_gender">Gender</span>
                     
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                    </div>
                    

                </div>
             

                <div class="user-details">
                    <br>
                    <br>
                    
                    <input type="submit" name="submit" class="register-button">
                </div>

                

              
            </form>
        </div>
        


    </section>
  </body>
  
