<?php 


//Connection to database 
include 'db_connect.php';
$json = array();
$search= $_POST["txtSearch"];

$query = "Select * from tblbooking WHERE full_name LIKE '%{$search}%'  order by full_name Asc";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result)){
		$json[]=$row;
}


echo json_encode($json);
?>

