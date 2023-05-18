<?php
include 'db_connect.php';
						
$username = $_POST['txtUsername']; 					// assign textbox to variable
$password = $_POST['txtPassword'];

$query = "SELECT * FROM tbluser where username='$username' AND password='$password'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
	echo "Login Error";
  else  
    {  
		while($row = mysqli_fetch_array($result)){
		$id = $row['id'];
		}
		echo $id;
		
	}
mysqli_close($link);
?>
	