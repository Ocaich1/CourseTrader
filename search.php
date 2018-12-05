<?php
$hostname = "localhost";
$dbname = "books";
$Username = "root";
$Password="Violater06!";

$conn = mysqli_connect($hostname,$Username,$Password,$dbname);

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
    if(isset($_POST['search'])) {
        $courseName = $_POST['searchquery'];
        $query = mysqli_query($conn,"SELECT * FROM books Where courseName LIKE '%$courseName%'");
        $count = mysqli_num_rows($query);
        if ($count == "0"){
            $output = '<h2> No Name Found !</h2>';
        }
        else {
            while($row = mysqli_fetch_array($query)){
                $result = $row['courseName'];
                $output = '<h1>'.$result.'</h1><br/>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Search</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    
    <!-- FlatICON -->
    <link rel='stylesheet' href="vendor/flaticon/flaticon.css" />
    
    <!-- Magnific Popup -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    
  </head>

  <body id="inline-popups">    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"><img class="" src="img/logo.png" alt=""></a>
        <ul class="list-inline top-right-list">
            <li class="list-inline-item">
                <a href="#search-box-popup" data-effect="mfp-zoom-out" class="light-box-popup">
                    <span class="icon-magnifier icons"></span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#user-box-popup" data-effect="mfp-zoom-in" class="light-box-popup">
                   <span class="flaticon-user"></span>
                </a>
            </li>
            <li class="list-inline-item">
                <span class="mini-cart-icon js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right">
                    <span class="icon-bag icons"></span>
                    <span class="minicart-number">0</span>
                </span>
            </li>
        </ul><!-- /.top-right-list -->
      </div><!-- /.container -->
    </nav><!-- /Navigation -->
    
    <div class="center-container">
        <div class="home-center-header text-center">
            <h1>Search: Please select one of our filters</h1>
            <div class="row search-row">
                <div class="col-md-3 offset-1">
                    <select class="selectpicker" name="filter1">
                      <option disabled selected>Filtering</option>
                      <option value="courseName">Course name</option>
                      <option value="Course number">Course number</option>
                      <option value="Book name">Book name</option>
                      <option value="Name of professor">Name of professor</option>                      
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <form action="search.php" method="POST">
                      <input name="searchquery" type="text" class="form-control" placeholder="Search for ABC Book...">
                      <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" name="search" id="button-addon2">Search</button>
                      </div>
                        </form>
                        <?php echo $output; ?>
                    </div>
                </div>
            </div>
        </div><!-- /.home-center-header -->
        <div class="home-product-view">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#product-popup-1" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                        <img class="img-fluid" src="img/book/ACC2203.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Introduction to Managerial Accounting</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/CIS4800.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Agile Model-Driven Development with UML 2.0</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/ECO1001.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Principles of Microeconomics</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/ENG2800.PNG" alt="">
                        <div class="product-small-des">
                            <h2>The Norton Anthology World Literature</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/MTH2003.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Applied Calculus for Business, Economics, and Finance</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/POL1101.PNG" alt="">
                        <div class="product-small-des">
                            <h2>We the People An Introduction to American Government</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/STA2000.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Business Statistics</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <a href="#" class="product-box">
                        <img class="img-fluid" src="img/book/CIS4800.PNG" alt="">
                        <div class="product-small-des">
                            <h2>Concepts of Database Managment</h2>
                            <p class="price">$55.00 – $56.00</p>
                            <p class="book-rent">Rent: $10/M</p>
                        </div><!-- /.product-small-des -->
                    </a><!-- /.product-box -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            
        </div><!-- /.home-product-view -->
    </div><!-- /.center-container -->

    <footer>
        <div class="center-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget-1">
                        <img src="img/logo.png" alt="">
                        <p class="copyright">© CourseTrade, Inc. 2018</p>
                        <div class="socials style2">
                          <a class="social-item" href="https://facebook.com" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                          <a class="social-item" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a class="social-item" href="https://pinterest.com" target="_blank">
                            <i class="fa fa-pinterest-p"></i>
                          </a>
                          <a class="social-item" href="https://nomos.famithemes.com/feed/" target="_blank">
                            <i class="fa fa-rss"></i>
                          </a>
                        </div>
                    </div><!-- footer-widget-1 -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h2 class="widgettitle">
                            HELP
                        </h2>
                    </div>
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h2 class="widgettitle">
                            SHOP
                        </h2>
                        <ul class="list-unstyled footer-shop-menu">
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-4">
                    <div class="footer-widget newsletter-widget">
                        <h2 class="widgettitle">
                            NEWSLETTER
                        </h2>
                        <div class="newsletter-subtitle">Sign up for our newsletter to receive special offers, news &amp; great events.</div>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Email address here">
                          <div class="input-group-append">
                            <button  class="btn btn-dark" type="button" id="button-addon2"><img src="img/icon/mail.png" alt=""></button>
                          </div>
                        </div><!-- /.input-group -->
                        <img class="img-fluid mt-4" src="img/pay-method.jpg" alt="">
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
            </div> <!-- /.row -->       
        </div><!-- /.center-container -->
    </footer><!-- /.footer -->



    <!-- Product Popup -->
    <div id="product-popup-1" class="white-popup mfp-with-anim mfp-hide">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="img/product/product-big.jpg" alt="">
            </div><!-- /.col-md-4 -->
            <div class="col-md-8">
                <div class="product-summary">
                    <h1>Portable Bluetooth Speaker</h1>
                    <p class="price">$55.00 – $56.00</p>
                    <h4>Intro</h4>
                    <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <div class="quantity">
                        Quantity        
                        <div class="control">
                            <a class="btn-number qtyminus quantity-minus" href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                            <input type="text" data-step="1" data-min="1" data-max="" name="quantity" value="1" title="Qty" class="input-qty qty" size="4">
                            <a class="btn-number qtyplus quantity-plus" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div><!-- /.quantity -->
                    <button type="button" class="btn btn-dark js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right">add to cart</button>
                    <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                </div><!-- /.product-summary -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.product-popup-1 -->

    <!-- Search Box Popup-->
    <div id="search-box-popup" class="search-box-popup mfp-with-anim mfp-hide">
        <form action="#">
            <input class="form-control" type="text" placeholder="Start typing...">
        </form>
    </div><!-- /Search Box Popup -->


    <!-- Search Box Popup-->
    <div id="user-box-popup" class="user-box-popup mfp-with-anim mfp-hide">
        <div class="login-screen">            
            <div class="user-box-popup-header text-center">
                <span class="flaticon-user"></span>
                <p class="text-left">Create an account to expedite future checkouts, track order history & receive emails, discounts, & special offers</p>
            </div>
            <form action="#">
                <input type="text" class="form-control" placeholder="Username">
                <input type="text" class="form-control" placeholder="Password">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 text-right">
                        <a href="#">Lost your password?</a>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                <button type="button" class="btn btn-dark">login</button>
            </form>        
            <div class="spec"><span>Or</span></div>
            <p class="create-acc">Create an account</p>
        </div><!-- /.login-screen -->
        <div class="create-account">
            <div class="login-icon"> <span class="flaticon-login"></span><p class="des-res">Register</p></div>
            <form action="#" >
                <input type="text" class="form-control" placeholder="Username">
                <input type="text" class="form-control" placeholder="Password">
                <button type="button" class="btn btn-dark">Register</button>
            </form>  
            <div class="spec"><span>Or</span></div>
            <p class="login-screen-back">Back to login</p>  
        </div><!-- /.create-account -->
    </div><!-- /Search Box Popup -->
    

     <!-- Offcanvas Right-->
    <aside class="js-offcanvas js-open" data-offcanvas-options='{"modifiers":"right,overlay"}' id="off-canvas-right" role="complementary">
        <div class="c-offcanvas__inner o-box u-pos-relative">
            <div class="cart-right-header">
                <div class="row">
                    <div class="col-md-3">
                        <div class="js-offcanvas-close border-right" data-button-options='{"modifiers":"blue,hard,close-right"}'>
                            <img src="img/icon/close.svg" alt="">
                        </div><!-- /.js-offcanvas-close --> 
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6 text-center your-cart">
                        <span>YOUR CART</span>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3 border-left your-cart-number">
                        <span>0</span>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.cart-right-header -->
            <div class="empty-cart-body">
                <p>No products in the cart.</p>
                <a href="#" class="btn btn-dark">Start shopping</a>
                <a href="#" class="our-shiping-link">Our Shipping &amp; Return Policy</a>
            </div>
        </div><!-- /.c-offcanvas__inner -->        
    </aside><!-- End of Offcanvas Right-->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Magnific Popup -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- offcanvas -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
    <script src='https://npmcdn.com/js-offcanvas/dist/_js/js-offcanvas.pkgd.min.js'></script>
    <script src="vendor/offcanvas/offcanvas.js"></script>

	<!-- Main CSS -->
	<script src="js/main.js"></script>


    <script>
        // HideShow Create Account and Login 
          $(".create-account").hide();
          
          $("p.create-acc").click(function(){
              $(".create-account").show();
              $(".login-screen").hide();
          });

           $("p.login-screen-back").click(function(){
              $(".create-account").hide();
              $(".login-screen").show();
          });
    </script>

	
	</body>
</html>
