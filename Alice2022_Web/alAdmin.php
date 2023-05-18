<?php
$conn = mysqli_connect("localhost","root","","dbalice");
    
function query($query)
{
    global $conn;
    
    $result  = mysqli_query($conn,$query);
    
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    
    return $rows;
}

function addAdmin($data)
{
    global $conn;
    
    $adminid = $data["adminid"];
    $staffid = $data["staffid"];
    $aname = $data["aname"];
    $pass = $data["password"];
    $fname =$data["fname"];
    $phonenum =$data["phonenum"];

    
    $query = "INSERT INTO tbladmin VALUES ('$adminid','$staffid','$aname','$pass','$fname','$phonenum')";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}