<?php 


//Connection to database 
include 'db_connect.php';
//$json = array();
$id=$_POST["txtID"];
$query = "Select * from tbluser WHERE id = '$id'";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result))
    $userid = $row['userid'];
 //   $json[] = array('name' => $name);}

echo json_encode($userid);
?>

