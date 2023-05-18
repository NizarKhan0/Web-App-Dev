<?php
    require 'al.php';

    $users = query("SELECT * FROM tbluser");

    $i=0;
    $j=0;

    if (isset($_POST["submit"]))
    {
        foreach ($users as $user)
        {
            $j++;
        }

        foreach ($users as $user)
        {
            if ($_POST["uname"] == $user["username"] && $_POST["password"] == $user["password"])
            {
                echo "
                    <script>
                    alert('Login Successful');
                        document.location.href = 'user_home.php';
                    </script>
                ";
            }
            else
            {
                $i++;
            }
        }

        if ($i == $j)
        {
            echo "
                <script>
                    alert('You Entered a wrong username or password, please try again.');
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
           Login
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Koulen&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
        <section class="login">
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
            <div class="container">
                <div class="forms">
                    <div class="form">
                        <h1>Login</h1>
                        <form action="" method="POST">
                            <br>
                            <br>

                           
                            
                   
                            <div class="input-field">
                                
                                <input type="text" name="uname" placeholder="Enter your username" required>
                                <i class="fa fa-user-circle icon"></i>

                            </div>

                            <div class="input-field">
                                
                                <input type="password" name="password" placeholder="Enter your password" required>
                                <i class="fa fa-key icon"></i>
                                <i class="fa fa-eye-slash showHidePw"></i>
                                <br>
                                <br>


                                <input type="submit" value="login" name="submit" class="login-button">


                            </div>

                            
                        </form>

                        <div class="login-signup">
                           
                            <br>
                            <br>
                            <h5 style="color:black" align="center">Not register yet?
                            <a href="user_registration.php" style="font-size:12px">Sign-Up Now</a>
                            </h5>
                        </div>

                    </div>

                </div>
            </div>

        </section>
    </body>
</html>
