<html>
<body>
    
<?php
    include('connection.php');
    session_start();
    extract($_POST);
    $u=$_SESSION['u'];
    $img='';
    $fname=$_FILES["image"]["name"];
    $path="avatar/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
    $a="SELECT * FROM reg where Uname='$u'";
	            $b=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($b))
                      $img=$row['Image'];  
    if(empty($fname))
        $sql="Update reg set Uname='$uname',Pass='$pass',Email='$email',Phone='$phone',Gender='$gender',Image='$img' where Uname='$u'";
    else
        $sql="Update reg set Uname='$uname',Pass='$pass',Email='$email',Phone='$phone',Gender='$gender',Image='$path' where Uname='$u'";
            
    $sql1="Update login set username='$uname',password='$pass' where username='$u'";
    $sql2="Update cart set Uname='$uname' where Uname='$u'";
    $sql3="Update myorder set Uname='$uname' where Uname='$u'";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql3);
    $_SESSION['u']=$uname;
    
    header("location:settings.php");
    ?>
    </body>
</html>