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
        $sql = "SELECT * FROM tbluser order by full_name ASC"; 
        $result = $mysqli->query($sql); 
?>

    <form name="form1" method="post" action="searchname.php">
    <input name="searchname_txt" type="text" id="searchname_txt" placeholder="Search..">
    <button class="button">SEARCH NAME</button>

</form>


<br>
<h1 style="color:white;text-align:center;">Customer Information</h1>

<form>

<br> <table cellpadding="0" cellspacing="10" border="1" align="center">
<tr>
<th>User Id</th>
<th>Username</th>
<th>Full Name</th>
<th>Phone Number</th>
<th>Address</th>
<th>Email</th>
<th>Gender</th>
<th>Action</th>
</tr> 

<?php 
//Fetch Data form database 
if($result->num_rows > 0){ 
while($row = $result->fetch_assoc()){ 
?>

<tr> 
<td><?php echo $row['user_id']; ?></td> 
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['full_name']; ?></td>
<td><?php echo $row['phone_number']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><a href="delete.php?deleted=1&id=<?php echo $row['user_id'];?>"  class="hero-btn">Delete</a> </td>

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
