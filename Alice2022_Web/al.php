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

function addCustomer($data)
{
    global $conn;
    
    $userid = $data["userid"];
    $uname = $data["uname"];
    $pass = $data["password"];
    $fname = $data["fname"];
    $phonenum = $data["phonenum"];
    $address = $data["address"];
    $email = $data["email"];
    $gender = $data["gender"];

    $query = "INSERT INTO tbluser VALUES ('$userid','$uname','$pass','$fname','$phonenum','$address','$email','$gender')";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}