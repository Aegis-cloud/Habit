<!DOCTYPE html>
<html lang="en">

<head>
    <title>HABIT</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="images/lg.png" alt="" width="150" height="100">
            <a class="navbar-brand" href="index1.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
             <?php
                include('connection.php');
                session_start();
                include('cart_count.php');
                $u=$_SESSION['u'];
                $a="SELECT * FROM reg where Uname='$u'";
	            $sql=mysqli_query($conn,$a);
                $row=mysqli_fetch_assoc($sql);
            ?>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="user.php" class="nav-link"><strong>Home</strong></a></li>
                    <li class="nav-item cta cta-colored"><a href="shop1.php" class="nav-link"><strong>shop</strong></a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link"><strong>About</strong></a></li>
                    
                    <li class="nav-item"><a href="contact.php" class="nav-link"><strong>Contact</strong></a></li>
                   <li class="nav-item"><a href="cart_check.php" class="nav-link"><strong><span class="icon-shopping_cart"></span><?php echo "[".$_SESSION['cart_count']."]" ?></strong></a>
					</li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><img alt="" class="rounded-circle" src="<?php echo $row['Image'];?>" width="40"></strong></a>
	            <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="account.php">My Account</a>
                <a class="dropdown-item" href="settings.php">Settings</a>
                <a class="dropdown-item" href="cart_check.php">Cart</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->

  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                
                    <h1 class="mb-0 bread" style="color:Black; ">Shop</h1>
                
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">
                        <?php
                        include('connection.php');      
                 $c=$_GET['cat'];
                        $i=$_GET['id'];
                        
                       $_SESSION['sid']=$c;
                 $a="SELECT * FROM item where sub_id='$c' AND cat_id='$i'";
	            $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_assoc($sql))
                {
                    
        ?>
                        <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="singleproduct1.php?id= <?php echo $row['id']; ?>" class="img-prod"><img class="img-fluid" src="<?php echo $row['pic']; ?>" alt="Colorlib Template">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <div class="d-flex">
                                        <div class="cat">
                                            <span>Lifestyle</span>
                                        </div>
                                    </div>
                                    <h3><?php echo $row['name']; ?></h3>
                                    <div class="pricing">
                                        <p class="price"><span>₹<?php echo $row['price']; ?></span></p>
                                    </div>
                                    <p class="bottom-area d-flex px-3">
                                       <a href="addcart.php?id=<?php echo $row['id']; ?>&name= <?php echo $row['name']; ?>&price= <?php echo $row['price']; ?>&pic= <?php echo $row['pic']; ?>" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                         <a href="buynow.php?id=<?php echo $row['id']; ?>&name= <?php echo $row['name']; ?>&price= <?php echo $row['price']; ?>&pic= <?php echo $row['pic']; ?>" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                }
                ?>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

               <div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading">Categories</h2>
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php
                                    include("connection.php");
                                    $sql="Select * from category";
                                    $a=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($a))
                                    {
                                        $cat=$row['cat_id']
                                        ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#<?php echo $row['cat_name']; ?>" aria-expanded="true" aria-controls="collapseOne"><?php echo $row['cat_name']; ?>
                                                </a>
                                            </h4>
                                        </div>
                                      <div id="<?php echo $row['cat_name']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul>
                                 <?php
                                    $sql1="Select * from sub_category where cat_id=$cat ";
                                    $b=mysqli_query($conn,$sql1);
                                    while($row1=mysqli_fetch_assoc($b))
                                    {
                                        ?>
                                 <li><a href="shopcat1.php?cat=<?php echo $row1['sub_id']; ?>&id= <?php echo $row1['cat_id']; ?>"><?php echo $row1['sub_name']; ?></a></li>
                                        <?php
                                    }
                                        ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                  <?php
                                    }
                                        ?>    
                                    </div>
                            </div>
                        </div>
                        <div class="sidebar-box-2">
                            <h2 class="heading">Price Range</h2>
                            <form method="post" class="colorlib-form-2" action="filter1.php">
                                
                               <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price from:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                               <select name="low" id="low" class="form-control">
                                                    <option value="500">500</option>
                                                    <option value="700">700</option>
                                                    <option value="1000">1000</option>
                                                    <option value="1500">1500</option>
                                                    <option value="2000">2000</option>
                                                 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price to:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="high" id="high" class="form-control">
                                                   
                                                    <option value="800">800</option>
                                                    <option value="1000">1000</option>
                                                    <option value="1500">1500</option>
                                                    <option value="2000">2000</option>
                                                    <option value="3000">3000</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Apply Filter" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                    <h2 class="mb-4">Follow Us On Instagram</h2>
                    <p>:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</p>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i6.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i5.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i8.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i8.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/i3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/i3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
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
                            <li><a href="account.php" class="py-2 d-block">My account</a></li>
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
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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

</body>

</html>
