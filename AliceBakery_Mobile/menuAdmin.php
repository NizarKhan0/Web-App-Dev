<?php 


//Connection to database 
include 'db_connect.php';
//$json = array();
$id=$_POST["ttxtID"];
$query = "Select * from tbladmin WHERE staffid = '$id'";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result))
    $admin_fullname = $row['admin_fullname'];
 //   $json[] = array('name' => $name);}

echo json_encode($admin_fullname);
?>

