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

        input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
        width: 30%;
        }

        .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 12px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #1B9CFC;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        
        }

        .button:hover {background-color: #3867d6}

        .button:active {
        background-color: #3867d6;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }

        .buttonInsert {
        background-color: #273c75; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
         margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        float: left;
        }   

.buttonInsert {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.buttonInsert:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
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

        <?php 
        //Connection for database 
        include 'db_connect.php';
        //Select Database 
        $sql = "SELECT * FROM ordertbl order by name ASC"; 
        $result = $mysqli->query($sql); 
?>

    <form name="form1" method="post" action="searchorder.php">
    <input name="searchorder_txt" type="text" id="searchname_txt" placeholder="Search..">
    <button class="button">SEARCH NAME</button>

</form>


<br>
<h1 style="color:white;text-align:center;">Order Information</h1>

<form>

<br> <table cellpadding="0" cellspacing="10" border="1" align="center">
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
//Fetch Data form database 
if($result->num_rows > 0){ 
while($row = $result->fetch_assoc()){ 
?>

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
<td><a href="deleteorder.php?deleted=1&id=<?php echo $row['id'];?>"  class="hero-btn">Delete</a> </td>
</tr> 

<?php 
} 
} 
else 
{ 
?> 
<tr> 
<th colspan="5">There's No data found!!!</th> 
</tr> 
<?php 
}
?>
</table>
</form>

</section>
</body>

    </html>
