<?php 

include 'db_connect.php';
           //assign textbox to variable
		//$booking_id	=$_POST['txtbookid']; 
	    $full_name= $_POST['txtfname'];
		$date = $_POST['txtdate']; 				
		$time= $_POST['txttime']; 
		
                //insert data
	   $query= "INSERT INTO tblbooking(full_name,date,time) VALUES ('$full_name','$date','$time')" ;		
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
         //checking either success or not
                 if ($result)
		 echo " Register Successfully !";		
		 
		else
		 echo "Problem occured !"; 	
	    mysqli_close($link);
	
?>
