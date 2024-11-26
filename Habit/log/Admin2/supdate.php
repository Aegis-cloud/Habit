<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<div>Subcategory ID </div>
    <form method="post" action="sview.php">   
<select id="seldepart" name="seldepart" onchange='updateMyText()'>
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM subcategory";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['sid'];
      $depart_name = $row['sname'];
	   $depart_sid=$row['cid'];
      
      // Option
      echo "<option value='".$departid."' >".$departid."</option>";
	 
   }
   ?>
</select>
<div class="clear"></div>

<input type="text" name="sid">
<input type="submit" value="view">
</form>
<script>function updateMyText()
{
var dd = document.getElementById("seldepart");
var ddtext = dd.options[dd.selectedIndex].text;
document.getElementsByName('sid')[0].value=ddtext;
}</script>
</body>
</html>