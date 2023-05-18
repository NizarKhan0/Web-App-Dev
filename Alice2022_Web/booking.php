<?php

require 'user_book.php';

            if (isset($_POST["submit"]))
            {
                if (addBooking($_POST) > 0)
                {
                    echo "
                    <script>
                        alert('Succeeded');
                        document.location.href = 'booking.php';
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script>
                        alert('Failed');
                        document.location.href = 'booking.php';
                    </script>
                    ";
                }
            }


?>

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
            <a href="index.html"><img src="image/logoalice.png"></a>
            <div class="nav-links" id="navLinks">
                
            <ul>
                    <li><a href="admin_home.html">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                    <li><a href="locateus.html">LOCATION</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
                </div>
              
                
        </nav>

        <div class="container">
        <h1>Cafe Booking</h1>
        <h3>Please Fill in :</h3>
        <form action="" method="post">
        <label>Booking ID:</label><br>
         <input type="text" name="id" placeholder="Enter your booking id" required><br><br>
         <label>Full name :</label><br>
         <input type="text" name="fname" placeholder="Enter your full name" required><br><br>
         <label>Date:</label><br>
         <input type="date" name="date" placeholder="Enter date of your booking" required><br><br>
        <label>Time :</label><br>
        <input type="time" name="time" placeholder="Enter time of your booking" required><br><br><br>




        <input type="submit" name="submit" class="register-button">
        </form>
        </div>

      
          </section>

    


<br>
</body>
</html>