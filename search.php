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

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="inline-popups">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html"><img class="logo" src="img/logo.png" alt="image of course hero logo"></a>
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
                <li class="list-inline-item  my-cart-icon">
                    <span class="mini-cart-icon js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right">
                        <span class="icon-bag icons"></span>
                        <span class="minicart-number badge badge-notify my-cart-badge" id="my-cart-badge"></span>
                    </span>
                </li>
            </ul><!-- /.top-right-list -->
        </div><!-- /.container -->
    </nav><!-- /Navigation -->

    <div class="center-container">
        <h1>Search: Please select one of our filters</h1>
        <div class="input-group">
            <div class="row search-row"> <input type="text" class="form-control" placeholder="Search for ABC Book...">
                <div class="col-md-3 offset-1">
                    <div class="input-group-append"> <select class="selectpicker" name="filter1"> <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
                            <option disabled selected>Filtering</option>
                            <option value="courseName">Course name</option>
                            <option value="Course number">Course number</option>
                            <option value="Book name">Book name</option>
                            <option value="Name of professor">Name of professor</option>
                        </select> </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <form action="search.php" method="POST">
                                <input name="searchquery" type="text" class="form-control" placeholder="Search for ABC Book...">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit" name="search" id="button-addon2">Search</button> </div>
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
                        <a href="#product-popup-2" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/CIS4800.PNG" alt="">
                            <div class="product-small-des">
                                <h2>Agile Model-Driven Development with UML 2.0</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-3" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/ECO1001.PNG" alt="">
                            <div class="product-small-des">
                                <h2>Principles of Microeconomics</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-4" class="product-box light-box-popup" data-effect="mfp-zoom-in">
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
                        <a href="#product-popup-5" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/MTH2003.PNG" alt="">
                            <div class="product-small-des">
                                <h2>Applied Calculus for Business, Economics, and Finance</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-6" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/POL1101.PNG" alt="">
                            <div class="product-small-des">
                                <h2>We the People An Introduction to American Government</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-7" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/STA2000.PNG" alt="">
                            <div class="product-small-des">
                                <h2>Business Statistics</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-8" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/ACC%202101.png" alt="">
                            <div class="product-small-des">
                                <h2>Financial Accounting</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                        <a href="#product-popup-9" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/CIS%203400.jpg" alt="">
                            <div class="product-small-des">
                                <h2>Database Management</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-10" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/ECO%203220.jpg" alt="">
                            <div class="product-small-des">
                                <h2>The Economics of World Banking and Financial Markets</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-11" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/HIS%201005.jpg" alt="">
                            <div class="product-small-des">
                                <h2>America: A Concise History</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-12" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/RES%203100.jpg" alt="">
                            <div class="product-small-des">
                                <h2>Real Estate Principles: A Value Approach</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                        <a href="#product-popup-13" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/LAW%204900.jpg" alt="">
                            <div class="product-small-des">
                                <h2>Thinking Like a Lawyer: A New Introduction to Legal</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-14" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/STA%203920.jpg" alt="">
                            <div class="product-small-des">
                                <h2>An Introduction to Statistical Learning</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <a href="#product-popup-15" class="product-box light-box-popup" data-effect="mfp-zoom-in">
                            <img class="img-fluid" src="img/book/FIN%203710.jpg" alt="">
                            <div class="product-small-des">
                                <h2>Essentials of Investments</h2>
                                <p class="price">$55.00 – $56.00</p>
                                <p class="book-rent">Rent: $10/M</p>
                            </div><!-- /.product-small-des -->
                        </a><!-- /.product-box -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.home-product-view -->
        </div><!-- /.input-group --->
    </div><!-- /.center-container -->

    <footer>
        <div class="center-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget-1">
                        <img src="img/logo.png" alt="">
                        <p class="copyright">© CourseTrader, Inc. 2018</p>
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
                                <button class="btn btn-dark" type="button" id="button-addon2"><img src="img/icon/mail.png" alt=""></button>
                            </div>
                        </div><!-- /.input-group -->
                        <img class="img-fluid mt-4" src="img/pay-method.jpg" alt="">
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
            </div> <!-- /.row -->
        </div><!-- /.center-container -->
    </footer><!-- /.footer -->



    <!-- Product Popup -->
    <div id="products">
        <div id="product-popup-1" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/ACC2203.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Introduction to Managerial Accounting</h1>
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
                        <button type="button" class="btn btn-dark js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="1" data-id="1" data-name="product 1" data-summary="summary 1" data-price="55" data-quantity="1" data-image="img/product/small/1.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-1 -->

        <div id="product-popup-2" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/CIS4800.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Agile Model-Driven Development with UML 2.0</h1>
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
                        <button type="button" class="btn btn-dark js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="2" data-id="2" data-name="product 2" data-summary="summary 2" data-price="55" data-quantity="1" data-image="img/product/small/2.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-2 -->

        <div id="product-popup-3" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/ECO1001.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Principles of Microeconomics</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="3" data-id="3" data-name="product 3" data-summary="summary 3" data-price="55" data-quantity="1" data-image="img/product/small/3.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-3 -->

        <div id="product-popup-4" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/ENG2800.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>The Norton Anthology World Literature</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="4" data-id="4" data-name="product 4" data-summary="summary 4" data-price="55" data-quantity="1" data-image="img/product/small/4.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-4 -->

        <div id="product-popup-5" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/MTH2003.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Applied Calculus for Business, Economics, and Finance</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="5" data-id="5" data-name="product 5" data-summary="summary 5" data-price="55" data-quantity="1" data-image="img/product/small/5.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-5 -->

        <div id="product-popup-6" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/POL1101.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>We the People An Introduction to American Government</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="6" data-id="6" data-name="product 6" data-summary="summary 6" data-price="55" data-quantity="1" data-image="img/product/small/6.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-6 -->

        <div id="product-popup-7" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/STA2000.PNG" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Business Statistics</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="7" data-id="7" data-name="product 7" data-summary="summary 7" data-price="55" data-quantity="1" data-image="img/product/small/7.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-7 -->

        <div id="product-popup-8" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/ACC 2101.png" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Financial Accounting</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="8" data-id="8" data-name="product 8" data-summary="summary 8" data-price="55" data-quantity="1" data-image="img/product/small/8.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-8 -->

        <div id="product-popup-9" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/CIS 3400.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Database Management</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="9" data-id="9" data-name="product 9" data-summary="summary 9" data-price="55" data-quantity="1" data-image="img/product/small/9.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-9 -->

        <div id="product-popup-10" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/ECO 3220.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>The Economics of World Banking and Financial Markets</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="10" data-id="10" data-name="product 10" data-summary="summary 10" data-price="55" data-quantity="1" data-image="img/product/small/10.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-10 -->

        <div id="product-popup-11" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/HIS 1005.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>America: A Concise History</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="11" data-id="11" data-name="product 11" data-summary="summary 11" data-price="55" data-quantity="1" data-image="img/product/small/11.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-11 -->

        <div id="product-popup-12" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/RES 3100.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Real Estate Principles: A Value Approach</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="12" data-id="12" data-name="product 12" data-summary="summary 12" data-price="55" data-quantity="1" data-image="img/product/small/12.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-12 -->

        <div id="product-popup-13" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/LAW 4900.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Thinking Like a Lawyer: A New Introduction to Legal</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="13" data-id="13" data-name="product 13" data-summary="summary 13" data-price="55" data-quantity="1" data-image="img/product/small/13.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-13 -->

        <div id="product-popup-14" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/STA 3920.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>An Introduction to Statistical Learning</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="14" data-id="14" data-name="product 14" data-summary="summary 14" data-price="55" data-quantity="1" data-image="img/product/small/14.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-14 -->

        <div id="product-popup-15" class="white-popup mfp-with-anim mfp-hide">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="img/book/FIN 3710.jpg" alt="">
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="product-summary">
                        <h1>Essentials of Investments</h1>
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
                        <button type="button" class="btn btn-dark pr-btn js-offcanvas-trigger add-to-cart" data-offcanvas-trigger="off-canvas-right" id="15" data-id="15" data-name="product 15" data-summary="summary 15" data-price="55" data-quantity="1" data-image="img/product/small/15.jpg">add to cart</button>
                        <a href="#" class="fav-btn"><span class="icon-heart icons"></span></a>
                    </div><!-- /.product-summary -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.product-popup-15 -->
    </div>

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
            <form action="login.php" method="POST">
                <input type="text" class="form-control" placeholder="Username" name="username" required>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
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
                <button type="submit" class="btn btn-dark" href="my-account.html">login</button>
            </form>
            <div class="spec"><span>Or</span></div>
            <p class="create-acc">Create an account</p>
        </div><!-- /.login-screen -->

        <div class="create-account">
            <form>
                <div class="login-icon"> <span class="flaticon-login"></span>
                    <p class="des-res">Register</p>
                </div>
                <form action="insert.php" method="POST">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <button type="submit" class="btn btn-dark">Register</button>
                </form>
                <div class="spec"><span>Or</span></div>
                <p class="login-screen-back">Back to login</p>
            </form>
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
                        <span value="" id="offcanvas-cart-number">0</span>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.cart-right-header -->

            <!-- div that gets populated with cart items -->
            <div class="products-in-cart" id="products-in-cart"></div>

            <button><a href="checkout.html" id="cart-checkout">Checkout</a></button>
            <button id="empty-cart-button">Empty cart</button>
            <div class="empty-cart-body" id="empty-cart-body">
                <p>No products in the cart.</p>
                <a href="index.html" class="btn btn-dark">Start shopping</a>
                <a href="#" class="our-shiping-link">Our Shipping &amp; Return Policy</a>
            </div>
        </div><!-- /.c-offcanvas__inner -->
    </aside><!-- End of Offcanvas Right-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="vendor/jquery/jquery-3.2.1.min.js"><\/script>')

    </script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Magnific Popup -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>

    <!-- offcanvas -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
    <script src='https://npmcdn.com/js-offcanvas/dist/_js/js-offcanvas.pkgd.min.js'></script>
    <script src="vendor/offcanvas/offcanvas.js"></script>

    <!-- Main CSS -->
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>


    <script>
        // HideShow Create Account and Login 
        $(".create-account").hide();
        $("p.create-acc").click(function() {
            $(".create-account").show();
            $(".login-screen").hide();
        });
        $("p.login-screen-back").click(function() {
            $(".create-account").hide();
            $(".login-screen").show();
        });

    </script>

</body>

</html>
