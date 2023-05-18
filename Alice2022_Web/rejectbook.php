<html>
    <head>
</head>
<body>
<?php include('db_connect.php'); 
$error=""; 
$message = "Too Short";   

$id="";
$fname="";
$date="";
$time="";

if(isset($_POST['btnsave']))
{
   
    $id=$_POST['id_txt'];
    $fname=$_POST['fname_txt'];
    $date=$_POST['date_txt'];
    $time=$_POST['time_txt'];

    //compare textbox 1vs 2 

    if(strlen($fname)<4)
    {
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$message')</SCRIPT>");

        exit();
    }
}

//check id for delete
if(isset($_GET['deleted'])){
    $sql="delete from tblbooking where id='{$_GET['id']}' ";
	$result=$mysqli->query($sql);
    if($result)
	{
		{
            echo "
            <script>
            alert('Booking Rejected !');
                document.location.href = 'bookInfo.php';
            </script>
        ";
			header('Refresh:0; view.php');
		}
	}
}
?>
</body>
    </html>

    