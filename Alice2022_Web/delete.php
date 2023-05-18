<html>
    <head>
</head>
<body>
<?php include('db_connect.php'); 
$error=""; 
$message = "Too Short";   

$user_id="";
$username="";
$full_name="";
$phone_number="";
$address="";
$email="";
$gender="";

if(isset($_POST['btnsave']))
{
   
    $user_id=$_POST['userid_txt'];
    $username=$_POST['username_txt'];
    $full_name=$_POST['fullname_txt'];
    $phone_number=$_POST['phonenum_txt'];
    $address=$_POST['address_txt'];
    $email=$_POST['email_txt'];
    $gender=$_POST['gender_txt'];

    //compare textbox 1vs 2 

    if(strlen($username)<4)
    {
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$message')</SCRIPT>");

        exit();
    }
}

//check id for delete
if(isset($_GET['deleted'])){
    $sql="delete from tbluser where user_id='{$_GET['id']}' ";
	$result=$mysqli->query($sql);
    if($result)
	{
		{
            echo "
            <script>
            alert('Data deletion Successful');
                document.location.href = 'view_user.php';
            </script>
        ";
			header('Refresh:0; view.php');
		}
	}
}
?>
</body>
    </html>

    