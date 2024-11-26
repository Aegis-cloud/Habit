<html>
<?php
    include("connection.php");
    $id=$_POST['catid'];
    echo $id;
    $sql="Select * from sub_category where cat_id=$id";
    $res=mysqli_query($conn,$sql);
    
while($row=mysqli_fetch_assoc($res)){
    ?>
    <option value="<?php echo $row['sub_id']; ?>"><?php echo $row['sub_name']; ?></option>
    <?php
    }
    ?>
</html>