<html>
    <body>
<?php
include('connection.php');
$id=$_POST['fid'];
$n=$_POST['fname'];
$d=$_POST['fdata'];
$r=$_POST['frate'];
$sql="insert into feedback(content,id,Uname,Rate) values ('$d','$id','$n','$r')";
if(mysqli_query($conn,$sql)==TRUE) 
            echo "<script type='text/javascript'>alert('Feedback Submitted.. '); window.history.go(-1);</script>";
else
    echo "Error: ".$sql;
        ?>
        
        </body>
</html>