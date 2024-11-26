<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<div>Employee  </div>
    <form method="post" action="viewupdate.php">   
<select id="sel" name="sel">
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   $con=new MySQLi("localhost","root","","tms");
   $sql_department = "SELECT * FROM employe";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['EMP_ID'];
      echo "<option value='".$departid."' >".$departid."</option>";
	 
   }
   ?>
</select>
    </form>
    </body>
</html>