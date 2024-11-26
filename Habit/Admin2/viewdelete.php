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
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo"></div>
				  <div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="../Admin/index.php">Home</a>
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
                            <div>
<?php
$cid=$_POST['cid'];
    
 $con=new MySQLi("localhost","root","","habit");
   $sql_department = "SELECT * FROM employe where EMP_ID=$cid";
   $department_data = mysqli_query($con,$sql_department);
 while($row = mysqli_fetch_assoc($department_data) ){
      //$departid = $row['c'];
      //$depart_name = $row['Description'];
	  //echo $depart_name;
	  
?>
<form method="post" action="deletefinal.php">
<table>
    <tbody>
      <tr>
        <td width="125" height="48">C_ID</td>
        <td width="140"><label for="textfield"></label>
          <input type="text" value="<?php echo $row['EMP_ID']; ?>" name="cid"></td>
      </tr>
      <tr>
        <td height="49">FIRST NAME</td>
        <td><label for="textfield2"></label>
         <input type="text" name="cname" value="<?php echo $row['FIRST_NAME']; ?>"></td>
      </tr>
      <tr>
        <td height="50"><p>SECOND NAME</p></td>
        <td><label for="textfield3"></label>
          <input type="text" name="Des" value="<?php echo $row['SECOND_NAME']; ?>"></td>
      </tr>
      <tr>
        <td height="48">GENDER</td>
        <td><label for="textfield4"></label>
         <input type="text" value="<?php echo $row['GENDER']; ?>"></td>
      </tr>
      <tr>
        <td height="48">HOUSE NAME</td>
        <td><label for="textfield5"></label>
          <input type="text" value="<?php echo $row['HOUSE_NAME']; ?>"></td>
      </tr>
      <tr>
        <td height="53">POST OFFICE</td>
        <td><label for="textfield6"></label>
          <input type="text" value="<?php echo $row['POST_OFFICE']; ?>"></td>
      </tr>
      <tr>
        <td height="60">CITY</td>
        <td><label for="textfield8"></label>
          <input type="text" value="<?php echo $row['CITY']; ?>"></td>
      </tr>
      <tr>
        <td height="59">JOIN DATE</td>
        <td><label for="textfield9"></label>
          <input type="text" value="<?php echo $row['JOIN_DATE']; ?>"></td>
      </tr>
		<tr>
        <td height="59">DESIGNATION</td>
        <td><label for="textfield10"></label>
         <input type="text" value="<?php echo $row['DESIGNATION']; ?>"></td>
      </tr>
		<tr>
        <td height="59">CONTACT NO</td>
        <td><label for="textfield11"></label>
          <input type="text" value="<?php echo $row['CONTACT_NO']; ?>"></td>
      </tr>
		<tr>
        <td height="59">EMAIL</td>
        <td><label for="email"></label>
          <input type="text" value="<?php echo $row['EMAIL']; ?>"></td>
      </tr>
    </tbody>
  </table>
<input type="submit" name="delete" value="Delete">
</form>
<?php }?>
</div>
					</div>
				</div>
			</div>
            
            </div>
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

