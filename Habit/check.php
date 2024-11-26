<html>
    <body>
        <?php
        $type=$_POST['delivery'];
        if($type=="Home")
            header("location:checkout_home.php");
        else if($type=="Shop")
            header("location:checkout_shop.php");
            ?>
    </body>
    
</html>