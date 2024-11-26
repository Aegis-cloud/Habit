<html>
    <body>
<?php
session_start();                                
include('connection.php');
$u=$_SESSION['u'];
$id=$_GET['id'];
$a="SELECT * FROM item where item_id='$id'";
$sql=mysqli_query($conn,$a);
$row=mysqli_fetch_assoc($sql);
$n=$row['item_name'];
$p=$row['item_price'];
$i=$row['item_pic'];
    
    echo $n;
    echo $p;
    echo $i;
   /* $sql1="insert into cart(Uname,item_name,item_quan,item_price,item_pic) values ('$u','$n',1,$p,'$i')";
        if(mysqli_query($conn,$sql1))
            echo "Success";
        else
            echo "Error".$sql1;*/
            
            header("location:cart.php");

?>

    </body>
</html>