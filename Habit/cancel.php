<html>
    <body>
        <?php
            include("connection.php");
            $id=$_GET['id'];
            $sql="Update myorder set order_status='Cancelled' where order_id='$id'";
            mysqli_query($conn,$sql);
            header("location:myorder.php");
        ?>
    </body>
</html>