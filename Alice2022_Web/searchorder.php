<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        
        <title>
           Order Information
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
        background-color: #2f3640;
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
                    <li><a href="location.html">LOCATION</a></li>
                    <li><a href="view_user.php">CUSTOMER INFO</a></li>
                    <li><a href="view_order.php">CUSTOMER ORDER</a></li>
                    <li><a href="userreport.php">REPORT</a></li>
                   

                </ul>
                </div>
              
                
        </nav>
        <br>
<h1 style="color:white;text-align:center;">Order Information</h1>
<br> <table cellpadding="5" cellspacing="0" border="1" align="center">
<tr>
<th>Order Id</th>
<th>Customer name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Method of Payment</th>
<th>House No</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Poscode</th>
<th>Total Order</th>
<th>Total Price</th>
<th>Action</th>
</tr> 
        <?php 
        //Connection for database 
        include 'db_connect.php';
        $search=$_REQUEST["searchorder_txt"];

        //Select Database 
        $sql = "SELECT * FROM ordertbl WHERE name LIKE '$search'"; 
        $result = $mysqli->query($sql); 
?>



  <?php 
//data looping
foreach($result as $row){ ?>

<tr> 
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td> 
<td><?php echo $row['number']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['method']; ?></td>
<td><?php echo $row['flat']; ?></td>
<td><?php echo $row['street']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['pin_code']; ?></td>
<td><?php echo $row['total_products']; ?></td>
<td>RM<?php echo number_format( $row['total_price'],2); ?></td>
<td><a href="delete.php?deleted=1&id=<?php echo $row['id'];?>"  class="hero-btn">Delete</a> </td>
</tr> 


  <?php  // looping close
     }?>
</table>

    </body>
    </html>