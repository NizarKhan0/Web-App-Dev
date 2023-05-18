<?php 
 include 'db_connect.php';
       //delete data

       //$delete_id=$_POST['id']; 
	   $delete_id=$_POST['id'];
	   $query = "DELETE FROM  tbluser WHERE userid='$delete_id'";
	   $result = mysqli_query( $link,$query) or die("Query failed");
       if ($result)
	   echo "Deleted-successfully"; 
	     else
	   echo "Problem occured !"; 
	   mysqli_close($link);   
?>