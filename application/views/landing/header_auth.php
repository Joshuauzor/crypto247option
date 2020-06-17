<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="<?= base_url() ?>" class="site-logo">
			<img src="<?=base_url('img/artboard.png')?>">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href="<?= base_url('client/login') ?>" class="site-btn">Sign Up for free</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<!-- <li><a href="">Contact</a></li>
					<li><a href="#features">Features</a></li> -->
					<li><a href="<?= base_url('landing/login') ?>">Login</a></li>
					<li><a href="<?= base_url('landing/register') ?>">Register</a></li>
				</ul>
			</nav>
		</div>
    </header>
    	<!-- Header section end -->
