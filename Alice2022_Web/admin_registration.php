<?php

require 'alAdmin.php';

            if (isset($_POST["submit"]))
            {
                if (addAdmin($_POST) > 0)
                {
                    echo "
                    <script>
                        alert('Succeeded');
                        document.location.href = 'admin_login.php';
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script>
                        alert('Failed');
                        document.location.href = 'admin_registration.php';
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
           Admin Registration
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
            <div class="titleSign">Admin Registration</div>
            <br>
            <form action="" method="post">
                <div class="user-details">

                <div class="input-box">
                        <span class="details">Admin Id:</span>
                        <input type="text" name="adminid" placeholder="Enter username" required>   
                    </div>

                <div class="input-box">
                        <span class="details">Username :</span>
                        <input type="text" name="aname" placeholder="Enter username" required>   
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
                        <span class="details">Staff ID :</span>
                        <input type="text" name="staffid" placeholder="Enter your Staff Id" required>   
                    </div>

                
                    <div class="input-box">
                        <span class="details">Phone Number :</span>
                        <input type="text" name="phonenum" placeholder="Enter your Number Phone" required>   
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
