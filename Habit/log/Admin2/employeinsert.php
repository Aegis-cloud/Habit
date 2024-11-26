<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$e1=$_POST['e_id'];
	$e2=$_POST['f_name'];
	$e3=$_POST['s_name'];
	$e4=$_POST['gender'];
	$e5=$_POST['h_name'];
	$e6=$_POST['p_name'];
	$e7=$_POST['c_name'];
	$e8=$_POST['DOJ'];
	$e9=$_POST['desig'];
    $e10=$_POST['tele'];
	$e11=$_POST['mail'];
		
	
	$sql1="INSERT INTO employe(EMP_ID,FIRST_NAME,SECOND_NAME,GENDER,HOUSE_NAME,POST_OFFICE,CITY,JOIN_DATE,DESIGNATION,CONTACT_NO,EMAIL)
		VALUES('$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$e11')";
    if(mysqli_query($conn,$sql1))
   {
	//echo "inserted succefully";
         //echo "<script type='text/javascript'>alert('Inserted Successfully')</script>";
            //redirect('adminempadd.html');
         echo "<script type='text/javascript'>alert('inserted Successfully');
window.location='adminempadd.html';
</script>";
       //header('location:adminempadd.html'); 
	}
	else
	{
		echo "error".$sql1."<br>".mysqli_error($conn);
	}
	
	?>
</body>
</html>