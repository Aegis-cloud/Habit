<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
    $flag=0;
	include('connection.php');
	$e2=$_POST['f_name'];
	$e3=$_POST['s_name'];
	$e6=$_POST['p_name'];
	$e5=$_POST['h_name'];
    $e8=$_POST['seldepart'];
	$e9=$_POST['sel'];
    $e10=$_POST['fabric'];
	$e11=$_POST['color'];	
	$e12=$_POST['pattern'];
    $a="SELECT * FROM item"; 
    $sql=mysqli_query($conn,$a);
    while($row=mysqli_fetch_assoc($sql))
    {
      
    if($row['name']==$e2 && $row['sub_id']==$e9 )
    {
       $flag=1; 
        $id=$row['id'];
     $c="SELECT * FROM item WHERE id=$id";
                    $sql1=mysqli_query($conn,$c);
                    $r=mysqli_fetch_assoc($sql1);
                    $p=$r['quan'];
                    $s=$p+$e6;     //incrementing Value of Quantity
                    //Updating Quantity in item table
                    $d="UPDATE item SET quan=$s WHERE id=$id";
                    mysqli_query($conn,$d);
        echo "<script type='text/javascript'>alert('Inserted Successfully');
window.location='adminitemadd.php';
</script>";
        break;
    
    }
    }
    if($flag==0)
    {  
	$sql1="INSERT INTO item(name,price,quan,pic,cat_id,sub_id,fabric,color,pattern)
		VALUES('$e2','$e3','$e6','images/$e5',$e8,'$e9','$e10','$e11','$e12')";
    if(mysqli_query($conn,$sql1))
   {
	
         echo "<script type='text/javascript'>alert('Inserted Successfully');
window.location='adminitemadd.php';
</script>";
       //header('location:adminempadd.html'); 
	}
        
	else
	{
		echo "error".$sql1."<br>".mysqli_error($conn);
	}
    }
        
	?>
</body>
</html>