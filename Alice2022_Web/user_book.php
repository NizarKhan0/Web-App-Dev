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

function addBooking($data)
{
    global $conn;
    
    $id =  $data["id"];
    $fname = $data["fname"];
    $date = $data["date"];
    $time = $data["time"];

    $query = "INSERT INTO tblbooking VALUES ('$id','$fname','$date','$time')";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);

}
?>