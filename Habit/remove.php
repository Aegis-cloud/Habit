<html>
    <body>
<?php
            include('connection.php');
            session_start();
                $name=$_GET['name']; 
                $a="Delete FROM cart where item_name='$name'";
	            mysqli_query($conn,$a);
        $_SESSION['cart_count']-=1;
        header("location:cart_check.php");
?>
    </body>
</html>