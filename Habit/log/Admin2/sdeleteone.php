<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<div>Category ID </div>
    <form method="post" action="sviewdelete.php">   
<select id="seldepart" name="seldepart" onchange='updateMyText()'>
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM subcategory";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['cid'];
      $depart_name = $row['sname'];
	   $depart_sid=$row['sid'];
      
      // Option
      echo "<option value='".$departid."' >".$departid."</option>";
	 
   }
   ?>
</select>
<div class="clear"></div>

<input type="text" name="cid">
<input type="submit" value="view">
</form>
<script>function updateMyText()
{
var dd = document.getElementById("seldepart");
var ddtext = dd.options[dd.selectedIndex].text;
document.getElementsByName('cid')[0].value=ddtext;
}</script>
</body>
</html>