<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        
        <title>
           Customer Information
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Koulen&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even){background-color: #ffa502}
        tr:nth-child(odd){background-color: #ffa502}


        th {
        background-color: #EAB543;
        color: white;
        }
        tr:hover {background-color: #F8EFBA}

        </style>

    </head>

<body>

<section class="signup">
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

        <h1 style="color:white;text-align:center;">Customer Information</h1>
<br> <table cellpadding="5" cellspacing="0" border="1" align="center">
<tr>
<th>User Id</th>
<th>Username</th>
<th>Full Name</th>
<th>Phone Number</th>
<th>Address</th>
<th>Email</th>
<th>Gender</th>
</tr> 
        <?php 
        //Connection for database 
        include 'db_connect.php';
        $search=$_REQUEST["searchname_txt"];

        //Select Database 
        $sql = "SELECT * FROM tbluser WHERE full_name LIKE '$search'"; 
        $result = $mysqli->query($sql); 
?>



  <?php 
//data looping
foreach($result as $row){ ?>
  <tr> 
<td><?php echo $row['user_id']; ?></td> 
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['full_name']; ?></td>
<td><?php echo $row['phone_number']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gender']; ?></td>
  </tr>
  <?php  // looping close
     }?>
</table>

    </body>
    </html>