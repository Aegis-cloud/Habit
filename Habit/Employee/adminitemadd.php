<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Habit</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/menu.css">
	</head>
	<body>
        <?php
        session_start();
        ?>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo"></div>
				  <div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="employee.html">Home</a>
                                <div class="dropdown">
  
 
</div>
								
                                                             
                                
        
        
                            
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
        
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
					<div class="col-lg-12">
						<div class="banner-content">
						  <p class="text-white">&nbsp;</p>
                            <center><p><font size="25"><strong>ITEM</strong> <strong>INFORMATION</strong></font></p></center>
                         <center>   <div><form id="form1" name="form1" method="post" action="iteminsert.php">
  <table>
    <tbody>
        <tr>
        <td>Item name</td>
        <td><label for="textfield2"></label>
        <input type="text" name="f_name" id="f_name" required></td>
      </tr>
          <tr>
              
        <td>Category</td>
        <td><label for="textfield5"></label>
            <select id="seldepart" name="seldepart" onchange='updateMyText()'>
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   include('connection.php');
   $sql_department = "SELECT * FROM category";
   $department_data = mysqli_query($conn,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
     	   $depart_sid=$row['cat_name'];
      
      // Option
      echo "<option value=".$row['cat_id']." >".$depart_sid."</option>";
	 
   }
   ?>
</select>
        </td>

      <tr>
        <td>Price</td>
        <td><label for="textfield3"></label>
        <input type="text" name="s_name" id="s_name" required></td>
      </tr>
      <tr>
                </tr>
         <tr>
              
        <td>Sub Category</td>
        <td><label for="textfield9"></label>
            <select id="sel" name="sel">
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   include('connection.php');
       $sql_department = "SELECT * FROM sub_category";
   $department_data = mysqli_query($conn,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
     	   $depart_sid=$row['sub_name'];
      
      // Option
      echo "<option value=".$row['sub_id']." >".$depart_sid."</option>";
	 
   }
   ?>
</select>
        </td>
      </tr>
        <tr>
        <td>Quantity</td>
		<td><label for="textfield8"></label>
        <input type="text" name="p_name" id="p_name" required></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><label for="textfield4"></label>
        <input type="file" name="h_name" id="h_name" required></td>
      </tr>
      <tr>
        <td>Fabric</td>
        <td><label for="textfield5"></label>
        <input type="text" name="fabric" id="fabric" required></td>
      </tr>
       <tr>
        <td>Color</td>
        <td><label for="textfield6"></label>
        <input type="text" name="color" id="color" required></td>
      </tr>
       <tr>
        <td>Pattern</td>
        <td><label for="textfield7"></label>
        <input type="text" name="pattern" id="pattern" required></td>
      </tr>
     
    </tbody>
  </table>
<script>function updateMyText()
{
var dd = document.getElementById("seldepart");
var ddtext = dd.options[dd.selectedIndex].text; 
document.getElementsByName('sela')[0].value=ddtext;
}</script>                             
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
  </p>
  <p>&nbsp;</p>
                             </form></div></center>
						</div>
					</div>
				</div>
			</div>
            
		</section>
		<!-- End Banner Area -->
		<!-- Start Exprience Area --><!-- End Exprience Area -->
		<!-- Start Service Area --><!-- End Service Area -->
		<!-- Start Projects Area --><!-- Start Projects Area -->
		<!-- Start Video Area --><!-- End Video Area -->
		<!-- Start Projects Area --><!-- Start Projects Area -->
		<!-- Start Contact Area --><!-- Start Contact Area -->

		<!-- Strat Footer Area --><!-- End Footer Area -->
        

<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
