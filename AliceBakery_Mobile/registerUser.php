<?php 

include 'db_connect.php';
           //assign textbox to variable
		$add_username=$_POST['txtusername']; 
	    $add_password = $_POST['txtpassword'];
		$add_full_name = $_POST['txtfullname']; 
		$add_phone_number = $_POST['txtphonenumber']; 
		$add_address = $_POST['txtaddress'];  	 
		$add_gender = $_POST['txtgender'];		
	    $add_email = $_POST['txtemail'];
		$add_userid = $_POST['txtuserid'];
		
                //insert data
	   $query= "INSERT INTO tbluser(username,password,full_name,phone_number,address,gender,email,userid) VALUES ('$add_username','$add_password','$add_full_name',
	   '$add_phone_number','$add_address','$add_gender','$add_email','$add_userid')" ;		
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
         //checking either success or not
                 if ($result)
		 echo " Register Successfully !";		
		 
		else
		 echo "Problem occured !"; 	
	    mysqli_close($link);
	
?>
