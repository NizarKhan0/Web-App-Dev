<?php 

include 'db_connect.php';
           //assign textbox to variable
		$staffid = $_POST['txtstaffid'];
		$adminusername	=$_POST['txtuseradmin']; 
	    $adminpassword = $_POST['txtpassadmin'];
		$adminfullname = $_POST['txtadminname']; 				
		$adminnophone= $_POST['txtadminnophone']; 
		
                //insert data
	   $query= "INSERT INTO tbladmin(staff_id,admin_username,admin_password	,admin_fullname,admin_nophone) VALUES ('$staffid','$adminusername','$adminpassword','$adminfullname','$adminnophone')" ;		
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
         //checking either success or not
                 if ($result)
		 echo " Register Successfully !";		
		 
		else
		 echo "Problem occured !"; 	
	    mysqli_close($link);
	
?>
