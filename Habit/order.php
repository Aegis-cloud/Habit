<html>
    <body>
<?php
            include('connection.php');
            session_start();
            $u=$_SESSION['u'];
            $d=$_SESSION['d'];
        
        //Inserting values to Address table
      
         
         extract($_POST);
        
         
        //Getting values from cart table
          $a="SELECT * FROM cart where Uname='$u'";
	            $sql=mysqli_query($conn,$a);
                $date=date("Y/m/d");
                while($row=mysqli_fetch_assoc($sql))
                 {  $id=rand(1000,9999);
                    
                    $did=$row['item_id'];
                    $name=$row['item_name'];
                    $quan=$row['item_quan'];
                    $pic=$row['item_pic'];
                    $price=$row['item_price'];
                    
                    //Inserting values to Address table
                    $b="insert into myorder(Uname,order_id,name,quan,price,pic,order_date,order_status,order_price,del_type) values ('$u','$id','$name','$quan','$price','$pic','$date','Ordered','$d','$type')";
                    mysqli_query($conn,$b);
                    
                    //Getting Quantity from item table
                    $c="SELECT * FROM item WHERE id='$did'";
                    $sql1=mysqli_query($conn,$c);
                    $r=mysqli_fetch_assoc($sql1);
                    $p=$r['quan'];
                    $s=$p-$quan;     //Decrementing Value of Quantity
                    //Updating Quantity in item table
                    $d="UPDATE item SET quan=$s WHERE id='$did'";
                    mysqli_query($conn,$d);
                     
                  $x="INSERT into address(F_name,L_name,Address,Post,Town,State,Pincode,order_id,Phone) values ('$fname','$lname','$street','$post','$town','$state','$pin','$id','$phone')";
        mysqli_query($conn,$x);
                }
        
    //Deleting values from cart table
             $e="Delete FROM cart where Uname='$u'";
             mysqli_query($conn,$e);
         
              header("location:myorder.php");
                
?>
    </body>
</html>