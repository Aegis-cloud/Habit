<html>
    <body>
<?php
session_start();  
$u=$_SESSION['u'];
include('connection.php');
$id=$_GET['id'];
$n=$_GET['name'];
$p=$_GET['price']; 
$i=$_GET['pic'];
$sql="Select * from cart where Uname='$u'";
$a=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($a))
{
    if($row['item_name']==$n)
    {   
        echo "<script type='text/javascript'>alert('Already in Cart'); window.history.go(-1); </script>"; 
        return;
    }
}
$sql1="insert into cart(Uname,item_id,item_name,item_quan,item_price,item_pic) values ('$u',$id,'$n',1,$p,'$i')";
mysqli_query($conn,$sql1);
$_SESSION['cart_count']+=1;

?>
<script>
        window.history.go(-1);
        </script>
    </body>
</html>