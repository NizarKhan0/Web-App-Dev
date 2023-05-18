<?php 
 include 'db_connect.php';

       $edit_id=$_POST['edit_id'];
	   $edit_password=$_POST['txtpassword']; 	
	   $edit_tel=$_POST['txtphone'];
	   $edit_address=$_POST['txtaddress']; 
	   $edit_email=$_POST['txtemail'];
       //Update data   
	   $query="Update tbluser set userid='$edit_id',password='$edit_password',address='$edit_address',phone_number='$edit_tel',email='$edit_email' where userid='$edit_id'" ;
	   $result = mysqli_query( $link,$query) or die("Query failed");
	  
        if ($result)
		{ echo "Updated-successfully"; }
		   else
		{ echo "Problem occured !"; }
	
        mysqli_close($link);	
?>
