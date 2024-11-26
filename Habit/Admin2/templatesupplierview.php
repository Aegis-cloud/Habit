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
								<a href="../admin/index.php">Home</a>
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
						  <p class="text-#248F0B">&nbsp;</p>
                            <div>
								
								<?php
	include('connection.php');
	$sql="select * from supplier";
    $result=mysqli_query($conn,$sql);
								echo"<table border='2'>";
        echo"<tr>";
        echo"<th>Supplier id</th>";
			
        echo"<th>Supplier name</th>";
         echo"<th>House number</th>";
         echo"<th>Street name</th>";
	echo"<th>Street type</th>";
								echo"<th>Post Office</th>";
								echo"<th>Contact no.</th>";
								echo"<th>E-mail</th>";
								
        echo"</tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        
         echo"<tr>";
         echo "<td>".$row['SUPPLIER_ID']."</td>";
        
         echo "<td>". $row['SUPPLIER_NAME']."</td>";
        
         
       
         echo "<td>".$row['HOUSE_NUMBER']."</td>";
        
        
        
         echo "<td>".$row['STREET_NAME']."</td>";
		echo "<td>".$row['STREET_TYPE']."</td>";
		echo "<td>".$row['POST_OFFICE']."</td>";
		echo "<td>".$row['CONTACT']."</td>";
		echo "<td>".$row['EMAIL']."</td>";
    
    
         
    
         
    
                echo"</tr>";
       
        
        
        
      
    }
								 echo "</table>";
	
	?>
								   
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



