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
                $r=mysqli_fetch_assoc($sql);
            ?>

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
                
                    <h1 class="mb-0 bread" style="color:Black; ">Single product</h1>
                
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                 <?php
      include('connection.php');
      $id=$_GET['id'];
      $sql="SELECT * FROM item where id=$id";
      $a=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($a);
      ?>
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="<?php echo $row['pic']; ?>" class="image-popup prod-img-bg"><img src="<?php echo $row['pic']; ?>" class="img-fluid" alt="Colorlib Template"></a>
                </div>
               <div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $row['name']; ?></h3>
    				<p class="price"><span>₹<?php echo $row['price']; ?></span></p>
    				<?php
                $b="SELECT * FROM offers where id=$id";
	            $sql1=mysqli_query($conn,$b);
                while($row1=mysqli_fetch_assoc($sql1))
                {
                    ?>
                    
                    <div class="text-deal">
                       <p class="price">OFFER PRICE: <span class="price-sale" style="color:red">₹<?php echo $row1['offerprice']."*"; ?></span></p></div>
                        <?php
                }
                   ?> 
				   
					<p>FABRIC: <?php echo $row['fabric'];?></p>
					<p>COLOR: <?php echo $row['color'];?></p>
					<p>PATTERN: <?php echo $row['pattern'];?></p>
          
                
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                         
                        </div>
                        <div class="w-100"></div>
                          <?php if($row['quan']==0) {?>
                            <h3 style="color:red"><?php echo "Out of Stock" ?></h3>
                            <?php } else { ?>
                        <div class="col-md-12">
                            <p style="color: #000;"><?php echo $row['quan'];?> available</p>
                        </div>
                        <?php
                        $c="SELECT * FROM offers where id=$id";
	            $sql2=mysqli_query($conn,$c);
                $row2=mysqli_fetch_assoc($sql2);
                
                   if($id==$row2['id']){ ?>
                    <p><a href="addcart.php?id=<?php echo $row['id']; ?>&name= <?php echo $row['name']; ?>&price= <?php echo $row2['offerprice']; ?>&pic= <?php echo $row['pic']; ?>" class="btn btn-black py-3 px-5 mr-2">Add to Cart</a><a href="buynow.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&price=<?php echo $row2['offerprice']; ?>&pic=<?php echo $row['pic']; ?>" class="btn btn-primary py-3 px-5">Buy now</a></p>
                   <?php } else { ?>
                     <p><a href="addcart.php?id=<?php echo $row['id']; ?>&name= <?php echo $row['name']; ?>&price= <?php echo $row['price']; ?>&pic= <?php echo $row['pic']; ?>" class="btn btn-black py-3 px-5 mr-2">Add to Cart</a><a href="buynow.php?id=<?php echo $row['id']; ?>&name= <?php echo $row['name']; ?>&price= <?php echo $row['price']; ?>&pic= <?php echo $row['pic']; ?>" class="btn btn-primary py-3 px-5">Buy now</a></p>
                   <?php } }?>
                    </div>
                     
                </div>
            </div>




            <div class="row mt-5">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate  mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>
                        
                          <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-3" aria-selected="false">Feedback</a>

                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content bg-light" id="v-pills-tabContent">

                        <div class="tab-pane fade show " id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="p-4">
                                <h3 class="mb-4"><?php echo $row['name']; ?></h3>
                                <p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend,this is just the range of apparel that ensures you'd never miss that admirable glance or compliment.Pair it with other apparels like loafers to add the style.Suitable for western wear.</p>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row p-4">
                                <div class="carousel-testimony owl-carousel">
                 
            <?php
                 $query="Select * from feedback where id=$id";
                 $a=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($a))
                    {
                        $n=$row['Uname'];
                      $q="Select Image from reg where Uname='$n'";
                    $b=mysqli_query($conn,$q);
                    $res=mysqli_fetch_assoc($b);
                 ?>
            <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(<?php echo $res['Image']; ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line"> <?php echo $row['content']; ?></p>
                    <p class="name" style="color:black;"><?php echo $row['Uname']; ?></p>
                    <span class="position" style="color:Red;">Rating : <?php echo $row['Rate']; ?></span>
                  </div>
                </div>
              </div>
                 <?php
                    }
                 ?>
                </div>    
             
                                <div class="col-md-4">
                                    <div class="rating-wrap">
                                        <h3 class="mb-4"></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row p-4">
                     <strong><img alt="" class="rounded-circle" src="<?php echo $r['Image'];?>" width="40"></strong>
                                <form method="post" action="addfeed.php">
                                    <div class="form-group">
                                        <br><input type="text" name="fdata" class="form-control" placeholder="Add your comment.." id="fdata"  size="100px">
                                   
                                   <br> Rating  <input type="text" name="frate" id="frate" >
                                        <input type="hidden" name="fname" class="form-control"  id="fname" value="<?php echo $u ?>">
                                        <input type="hidden" name="fid" class="form-control" id="fid" value="<?php echo $id ?>">
                                   
                                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                    </div>
                                </form>
                             </div>
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
                    <p>:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::</p>
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
