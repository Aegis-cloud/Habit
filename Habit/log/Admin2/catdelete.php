<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<div>Employe  </div>
    <form method="post" action="viewcatdelete.php">   
<select id="seldepart" name="seldepart" onchange='updateMyText()'>
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM category";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['CATEGORY_ID'];
      //$depart_name = $row['cname'];
      
      // Option
      echo "<option value='".$departid."' >".$departid."</option>";
	 
   }
   ?>
</select>
<div class="clear"></div>

<div>Users </div>
<input type="text" name="cid">
<input type="submit">
<select id="sel_user">
   <option value="0">- Select -</option>
</select>
</form>
<script>function updateMyText()
{
var dd = document.getElementById("seldepart");
var ddtext = dd.options[dd.selectedIndex].text;
document.getElementsByName('cid')[0].value=ddtext;
}</script>
</body>
</html>