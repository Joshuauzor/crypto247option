<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/bit.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="<?= base_url() ?>" class="site-logo">
				<!-- <img src="img/logo.png" alt=""> -->
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href="<?= base_url('client/login') ?>" class="site-btn">Sign In</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="">Contact</a></li>
					<li><a href="#features">Features</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="<?= base_url('client/register') ?>">Register</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Invest in <span>Today In</span> <br>Bitcoin Trading</h2>
					<h4>INVEST WITH 247smartoptions EARN UP TO 350% OF YOUR FIRST INVESTMENT 100% GUARANTEED

Get 100% Of Your First Deposit On Your Welcome Bonus When You Invest With Bitcoin Crypto. We Offer Trade On Forex, Stocks, Commodities, Crypto.</h4>
					<form class="hero-subscribe-from">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn sb-gradients">Get Started</button>
					</form>
				</div>
				<div class="col-md-6">
					<img src="img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>What is Bitcoin</h2>
					<h5>Bitcoin is an innovative payment network and a new kind of money.</h5>
					<p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
					<a href="<?= base_url('client/login')?>" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
				</div>
			</div>
			<div class="about-img">
				<img src="img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white" id="features">
			<div class="section-title text-center">
				<h2>Our Features</h2>
				<!-- <p>Bitcoin is the simplest way to exchange money at very low cost.</p> -->
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-mobile"></i>
					<div class="feature-content">
						<h4>Mobile Apps</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>Safe & Secure</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>Wallet</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-headphone-alt"></i>
					<div class="feature-content">
						<h4>Experts Support</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>Instant Exchange</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Recuring Buys</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Get Started With Bitcoin</h2>
				<p>Start learning about Bitcoin with interactive tutorials. It’s fun, easy, and takes only a few minutes! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/1.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/2.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/3.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<!-- <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>96</h2>
						<p>Support <br> Countries</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>17K</h2>
						<p>Transactions  <br> per hour</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>8B</h2>
						<p>Largest <br> Transactions</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>270</h2>
						<p>Years <br> of Experience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Team section -->
	<!-- Team section -->


	<!-- Review section -->
	<section class="review-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 push-8">
					<img src="img/quote.png" alt="" class="quote mb-5">
					<div class="review-text-slider owl-carousel">
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0 pull-3">
					<div class="review-meta-slider owl-carousel pt-5">
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/1.jpg"></div>
							<div class="author-name">
								<h4>Aaron Ballance</h4>
								<p>Ceo Bitcoin</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/2.jpg"></div>
							<div class="author-name">
								<h4>Jackson Nash</h4>
								<p>Head of Design</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/3.jpg"></div>
							<div class="author-name">
								<h4>Katy Abrams</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Welcome to 247smartoptions</h2>
					<p>The fastest payout on binary options trade. Invest in the right place now!</p>
				</div>
				<div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
					<form class="newsletter-form">
						<input type="text" placeholder="Enter your email">
						<button>Get Started</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->



	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest News</h2>
				<p>Bitcoin is the simplest way to exchange money at very low cost.</p>
			</div>
			<div class="row">
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/1.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">03 jan 2020</div>
							<h4 class="blog-title"><a href="">Coinbase to Reopen the GDAX Bitcoin Cash-Euro Order Book</a></h4>
							<!-- <div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div> -->
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/2.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">28 mar 2020</div>
							<h4 class="blog-title"><a href="">Blockchain Rolls Out Trading Feature for 22 States in the U.S</a></h4>
							<!-- <div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div> -->
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/3.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">31 may 2020</div>
							<h4 class="blog-title"><a href="">This Week in Bitcoin: Up, Down and Sideways</a></h4>
							<!-- <div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Footer section -->
	<footer class="footer-section" style="background: #333;">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
          <!-- <img src="img/logo.png" class="mb-4" alt=""> -->
          <p id="head">247SMARTOPTIONS</p>
            <style>
                #head{
                    font-size: 20px;
                    font-weight: bold;
                    font-family: 'Roboto', sans-serif;
                    color: #004deb;
                }
            </style>
					<p>247smartoptions is one of the leading platforms in the United States offering Binary Options, Forex Trade and spreads. Regulated by the Securities Investor Protection Corporation (SIPC) and based in New York. It is also regulated by the IFSC of Belize, as well as the Cyprus Securities and Exchange Commission. The company is also registered with the Financial Conduct Authority of the USA.</p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 247SMARTOPTIONS Powered by <a href="https://web.facebook.com/Zealtechnologized/" target="_blank">Zeal Technologies</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Resources</h5>
					<ul>
						<li><a href="#">How to Buy Coin</a></li>
						<li><a href="#">Coin Overview</a></li>
						<li><a href="#">Blog News</a></li>
						<li><a href="#">How to Sell Coin</a></li>

					</ul>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
						<a href=""><img src="img/appstore.png" alt="" class="mr-2"></a>
						<a href=""><img src="img/playstore.png" alt=""></a>
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy </a></li>
							<li><a href="">support@247smartoptions.online</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
