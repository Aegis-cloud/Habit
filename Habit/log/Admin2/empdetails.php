<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
	$sql="select * from employe";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        echo"<table border='2'>";
        echo"<tr>";
        echo"<th>empid</th>";
        echo"<th>FIRST_NAME</th>";
         echo"<th>S NAME</th>";
         echo"<th>GENDER</th>";
        echo"<th>HOUSE NAME</th>";
         echo"<th>POST OFFICE</th>";
         echo"<th>CITY</th>";
        echo"<th>JOIN DATE</th>";
         echo"<th>DESIGNATION</th>";
         echo"<th>CONTACT NO</th>";
        echo"<th>EMAIL</th>";
        echo"</tr>";
         echo"<tr>";
         echo "<td>".$row['EMP_ID']."</td>";
        
         echo "<td>". $row['FIRST_NAME']."</td>";
        
         
       
         echo "<td>".$row['SECOND_NAME']."</td>";
        
        
        
         echo "<td>".$row['GENDER']."</td>";
    
    
         echo "<td>". $row['HOUSE_NAME']."</td>";
    
        
         echo "<td>".$row['POST_OFFICE']."</td>";
        
        
         echo "<td>".$row['CITY']."</td>";
    
         echo "<td>".$row['JOIN_DATE']."</td>";
        
         echo "<td>".$row['DESIGNATION']."</td>";
    
         echo "<td>".$row['CONTACT_NO']."</td>";
    
         echo "<td>".$row['EMAIL']."</td>";
        echo"</tr>";
        echo "</table>";
        
        
        
        
        
        
        
        
         
        
    }
	
	?>
</body>
</html>