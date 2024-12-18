<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Habit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     
  </head>
  <body class="goto-here">
      <?php
      include('connection.php');
      session_start();
      include('cart_count.php');
      $u=$_SESSION['u'];
                $a="SELECT * FROM reg where Uname='$u'";
	            $sql=mysqli_query($conn,$a);
                $row=mysqli_fetch_assoc($sql);
	            
      ?>
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91 70 35 33 5555</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">habitktm@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="user.php">HABIT</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="user.php" class="nav-link"><strong>Home</strong></a></li>
                    <li class="nav-item cta cta-colored"><a href="shop1.php" class="nav-link"><strong>shop</strong></a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link"><strong>About</strong></a></li>
                    
                    <li class="nav-item"><a href="contact.php" class="nav-link"><strong>Contact</strong></a></li>
                   <li class="nav-item"><a href="cart_check.php" class="nav-link"><strong><span class="icon-shopping_cart"></span><?php echo "[".$_SESSION['cart_count']."]" ?></strong></a>
					</li>
                    
                </ul>
            </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="account.php"><b>My Account</b></a></span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
        
              
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Picture</th>
						        <th>Product</th>
						        <th>Price</th>
                                <th></th>  
						        <th>Quantity</th>
                                <th></th>
						        <th>Total</th>
						        <th>Remove</th>
						      </tr>
						    </thead>
                            <?php
                                include('connection.php');
                                $u=$_SESSION['u'];
                                $a="SELECT * FROM cart where Uname='$u'";
	                            $sql=mysqli_query($conn,$a);
                                $_SESSION['t']=0;
                                while($row=mysqli_fetch_assoc($sql))
                                {
                                    $a=$row['item_quan'];
                                    $b=$row['item_price'];
                                    $s=$a*$b;
                                    $_SESSION['t']+=$s;
	                               ?>
						    <tbody>
                                <tr class="text-center">
						      <td class="image-prod"><div class="img" style="background-image:url(<?php echo $row['item_pic'];?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3> <?php echo $row['item_name'];?> </h3>
						      </td>
						        
						        <td class="price"> <?php echo $row['item_price'];?> </td>
                                 <td class="product-remove"><a href="decrement.php?name=<?php echo $row['item_name']; ?>&quan=<?php echo $row['item_quan']; ?>">-</a></td>  
						        <td class="quantity">
						        	<div class="input-group mb-3">
                                     <input type="text" name="quantity" id="input-quantity-" class="quantity form-control input-number" value="<?php echo $row['item_quan'];?>">
                                </div>
					          </td>
						        <td class="product-remove"><a href="increment.php?id=<?php echo $row['item_id'];?>&name=<?php echo $row['item_name']; ?>&quan=<?php echo $row['item_quan']; ?>">+</a></td> 
						        
						        <td class="total" id="cart-price-"> <?php echo ($row["item_price"] * $row["item_quan"]); ?> </td>
                                
						        <td class="product-remove"><a href="remove.php?name=<?php echo $row['item_name']; ?>"><span class="ion-ios-close"></span></a></td>
						      </tr><!-- END TR-->
                                </tbody>
                            <?php } ?>
						  </table>
					  </div>
    			</div>
    		</div>
               
    		<div class="row justify-content-start">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <form method="post" action="check.php">
                    <div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
                        <p class="d-flex total-price">
    						<span>Amount Payable</span>
    						<span><?php echo "₹".$_SESSION['t']; ?></span>
                        </p>
                        <h3>Delivery Method</h3>
                        <div class="radio">
				            <label><input type="radio" name="delivery" class="mr-2" value="Shop">In Shop</label>
						</div>
                        <div class="radio">
						  <label><input type="radio" name="delivery" class="mr-2" value="Home" >Home Delivery</label>
						</div>
                        
            </div>
                    <div>
                        <input type="submit" value="Buy Now" class="btn btn-primary py-3 px-5">
                    </div>
                    </form>
                </div>
    		</div>
        </div>
      </section>
		

       <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><strong>habit</strong><br>
              </h2>
              <p>Mens Shop For All Seasons</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mb-4">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/habitktm/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/habit_ktm/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="user.php" class="py-2 d-block">Home</a></li>
                <li><a href="shop1.php" class="py-2 d-block">Shop</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="account.php" class="py-2 d-block">My Account</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">HABIT,OPP.AIDA HOTEL,
						TB ROAD,KOTTAYAM </span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">7035335555</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">habit@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>