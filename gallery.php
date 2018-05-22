<?php


$servername = "localhost";
$username = "ssingh19";
$password = "Group4123!";
$dbname = "NatParks";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT USERNAME, LIKES FROM USER WHERE SAVE_STATE = 10 AND LIKES >= 50";

$result = $conn->query($sql);

	

	// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "id: " . $row["USERNAME"]. "<br>";
     $username = $row["USERNAME"];
     $likes = $row["LIKES"];
        
    }
} else {
    echo "0 results";
}

$conn->close();

?>
<html>





<!--[if lt IE 9 ]> <html class="lt_ie9"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Gallery</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//logo.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	
	<!-- Library -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->

								<!-- Header Section -->
<header class="container-fluid no-padding header-section">

<!-- SidePanel -->
<div id="slidepanel">


<div class="container-fluid no-padding menu-block">
<!-- Container -->
<div class="container">
<!-- nav -->
<nav class="navbar navbar-default ow-navigation">
<div class="navbar-header">
<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a>
</div>
<div class="navbar-collapse collapse" id="navbar">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
<i class="ddl-switch fa fa-angle-down"></i>
<ul class="dropdown-menu">
</ul>
</li>
<li><a href="directory.html" title="directory">Directory</a></li>
<li><a href="ticketing.html" title="Tickets">Tickets</a></li>
<li><a href="gallery.php" title="Gallery">Gallery</a></li>
<li class="active dropdown">
<a href="#" title="Donations" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Donations</a>
<i class="ddl-switch fa fa-angle-down"></i>
<ul class="dropdown-menu">
<li><a href="donations.html" title="Donations">Donations</a></li>

<li><a href="cart.html" title="Cart">cart</a></li>
<li><a href="checkout.html" title="Checkout">checkout</a></li>

</ul>
</li>
<li class="dropdown">
<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
<i class="ddl-switch fa fa-angle-down"></i>
<ul class="dropdown-menu">
<li><a href="login.php" title="Login">Log In</a></li>
<li><a href="sign-up.html" title="Sign-Up">Sign Up</a></li>
</ul>
</li>
<li><a href="contactus.html" title="Contact Us">Contact Us</a></li>
</ul>
</div><!--/.nav-collapse -->
<div id="loginpanel" class="desktop-hide">
<div class="right" id="toggle">
<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
</div>
</div>
</nav><!-- nav /- -->
</div><!-- Container /- -->
</div>
</header><!-- Header Section /- -->
	
		<main>
			
			<!-- Page Header -->
			<div class="container-fluid no-padding page-header">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Gallery</li>
					</ol>
				</div>
			</div><!-- Page Header /- -->
			
			<!-- Destination Section -->
			<div id="destination-section" class="container-fluid no-left-padding no-right-padding destination-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Attractive Travel Plans</h3>
						<h6>our destinations</h6>
					</div><!-- Section Header /- -->
					
					<!-- Row -->
					<div class="row">


						<!-- Destination Box -->
						

						<div class="col-md-6 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/high-rock.jpg" alt="Destination" />
								<h3><span>High Rock, MD</span></h3>
								<div class="destination-content-box">
									<h4>User:<br> <?php echo $username; ?>  </h4>
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2><?php echo $likes; ?> Likes</h2>
									<ul>
										<input type="submit" class="button" name="insert" value="Like" />
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>

										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										
							
										
									</span>
									
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<!-- Destination Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/yellow-stone.jpg" alt="Destination" />
								<h3><span>Yellowstone National Park, WY </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>2k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										
							
										
									</span>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<!-- Destination Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/yosemite.jpg" alt="Destination" />
								<h3><span>Yosemite National Park, CA </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>10k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/grandcanyon.jpg" alt="Destination" />
								<h3><span>Grand Canyon National Park, AZ </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>10k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/grandteton.jpg" alt="Destination" />
								<h3><span>Grand Teton National Park, WY </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/glacier.jpg" alt="Destination" />
								<h3><span>Glacier National Park, MT </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>4.5k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/greatsmokeymountains.jpg" alt="Destination" />
								<h3><span>Great Smokey Mountains National Park, NC & TN </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>15k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/mountrainier.jpg" alt="Destination" />
								<h3><span>Mount Rainier National Park, WA </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>3k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/craterlake.jpg" alt="Destination" />
								<h3><span>Crater Lake National Park, OR </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>5.5k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/canyonlands.jpg" alt="Destination" />
								<h3><span>Canyonlands National Park, UT </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>5.5k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/denali.jpg" alt="Destination" />
								<h3><span>Denali National Park, AK </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>3.5k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										
									</span>
									</ul>
								</div>
							</div>
						</div><!-- Destination Box /- -->
						<div class="col-md-4 col-sm-6 col-xs-6 destination-box">
							<div class="destination-content">
								<img src="images/kingscanyon.jpg" alt="Destination" />
								<h3><span>KIngs Canyon National Park, CA </span></h3>
								<div class="destination-content-box">
									<h5>Date Uploaded : <span> March 22, 2018</span></h5>
									<h2>10k Likes</h2>
									<ul>
										<li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
										<li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
								
									</ul>
									<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										
									</span>
									</ul>
								</div>
							</div>

						</div><!-- Destination Box /- -->


				<!-- Pagination -->
				<nav class="ow-pagination">
					<ul class="pager">
						<li class="previous"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#"><i class="fa fa-angle-right "></i></a></li>
					</ul>
				</nav>
			</div><!-- Gallery Page -->
		</main>			

		<!-- Footer Section -->
		<footer class="footer-main container-fluid no-padding footer-section2">
			<!-- Container -->
			<div class="container">
				<div class="row">

					<!-- Widget Block -->
					<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
						<!-- About Widget -->
						<div class="ftr-widget ftr_widget_about">
							<h3>about us</h3>
							<div class="ftr-about-content">
								<p>Guys like us we had it made. Those were the days. The mate was a mighty sailin' man the Skipper brave and sure. Five passengers.</p>
								<a href="#" title="Read More">Read More</a>
							</div>
						</div><!-- About Widget /- -->
					</div><!-- Widget Block /- -->
					
					<!-- Widget Block -->
					<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
						<!-- Latest Post Widget -->
						<div class="ftr-widget widget_hours">
							<h3>visiting hours</h3>
							<p>Monday To Friday : <span>(9.00 am - 5.30 pm)</span></p>
							<p>Saturday and Sunday : <span>(11.00 am - 2.00 pm)</span></p>
							<ul>
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
								<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
								<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
						</div><!-- Latest Post Widget /- -->
					</div><!-- Widget Block /- --> 
					
					<!-- Widget Block --> 
					<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
						<!-- Subscribe Widget -->
						<div class="ftr-widget ftr_latest_tweet">
							<h3>latest tweets</h3>
							<div class="tweet-box">
								<i class="fa fa-twitter"></i>
								<p>Travel Advisor Services is a modern, flexible and highly customizable theme for your financialorate.</p>
								<a href="#">@Traveladviser123</a>
							</div>
						</div><!-- Subscribe Widget /- -->
					</div><!-- Widget Block /- --> 
					
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- Widget Instagram -->
						<div class="ftr-widget ftr_widget_instagram">
							<ul>
								<li><a href="#"><img src="images/ftr-insta1.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta2.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta3.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta4.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta5.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta6.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta7.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta8.jpg" alt="Instagram" /></a></li>
								<li><a href="#"><img src="images/ftr-insta9.jpg" alt="Instagram" /></a></li>
							</ul>
						</div><!-- Widget Instagram /- -->
					</div>
					
				</div>
			</div><!-- Container /- -->
			<!-- Footer Bottom -->
			<div class="container-fluid no-padding btm-ftr">
				<div class="container">
					<p>Max Guider <i class="fa fa-copyright"></i> 2016.  All Rights Reserved.</p>
				</div>
			</div><!-- Footer Bottom /- -->
		</footer><!-- Footer Section /- -->
			
	</div>

	<!-- JQuery v1.12.4 -->
	<script src="js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
	
</body>
</html>