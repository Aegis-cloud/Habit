<html>
    <body>
<?php
            include('connection.php');
            $u=$_SESSION['u'];
                $a="SELECT * FROM cart where Uname='$u'";
	            $sql=mysqli_query($conn,$a);
                $_SESSION['cart_count']=0;
                while($row=mysqli_fetch_assoc($sql))
	                    $_SESSION['cart_count']++;
?>
    </body>
</html>