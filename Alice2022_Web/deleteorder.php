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
    
    $orderid=$_POST['id_txt'];
    $cname=$_POST['cname_txt'];
    $pnum=$_POST['pnum_txt'];
    $email=$_POST['email_txt'];
    $method=$_POST['meth_txt'];
    $hno=$_POST['hno_txt'];
    $street=$_POST['street_txt'];
    $ct=$_POST['ct_txt'];
    $state=$_POST['state_txt'];
    $coun=$_POST['coun_txt'];
    $poscode=$_POST['poscode_txt'];
    $totord=$_POST['totord_txt'];
    $totpr=$_POST['totpr_txt'];

    //compare textbox 1vs 2 

    if(strlen($cname)<4)
    {
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$message')</SCRIPT>");

        exit();
    }
}

//check id for delete
if(isset($_GET['deleted'])){
    $sql="delete from ordertbl where id='{$_GET['id']}' ";
	$result=$mysqli->query($sql);
    if($result)
	{
		{
            echo "
            <script>
            alert('Deleted Succesful !');
                document.location.href = 'view_order.php';
            </script>
        ";
			header('Refresh:0; view.php');
		}
	}
}
?>
</body>
    </html>

    