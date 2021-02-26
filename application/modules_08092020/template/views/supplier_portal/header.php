<!doctype html>
<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/normalize.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/transitions.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/prettyPhoto.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/swiper.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/jquery-ui.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/animate.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/owl.theme.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/customScrollbar.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/icomoon.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/main.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/color.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/supplier_portal/css/responsive.css">
	<script src="<?=base_url()?>assets/supplier_portal/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<script src="<?=base_url()?>assets/supplier_portal/js/vendor/jquery-library.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/vendor/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/customScrollbar.min.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/owl.carousel.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/isotope.pkgd.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/prettyPhoto.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/swiper.min.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/jquery-ui.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/countTo.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/appear.js"></script>
<script src="<?=base_url()?>assets/supplier_portal/js/main.js"></script>
<!-- HEADER CONTENT -->

<body>
<style>
.container {
    width: 95%;
}
</style>
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-close" class="tg-close fa fa-close"></span>
			<div class="tg-colhalf">

            </div>
            <div class="tg-colhalf">

            </div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<nav class="tg-addnav">
											<ul>
												<li title="profile"><a href="<?=supplier_url('dashboard/profile')?>"><i class="fa fa-users" aria-hidden="true"></i> Profile</a></li>
												<li title="logout"><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

											</ul>
										</nav>
									</div>
									<div class="tg-colhalf">
										<ul class="tg-socialicons">
										<li title="Dashboard"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> DASHBOARD</a></li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="#"><img src="<?=base_url()?>assets/logo2.png" alt="image description" width="30px"></a>
								</strong>
							</div>
							<div id="tg-navigation" class="tg-navigation">
                <div class="tg-colhalf">
                									<ul>
                										<li>
                											<a href="<?=supplier_url('procurement')?>">Procurement Plan</a>
                                    </li>
                                    <li>
                                      <a href="<?=supplier_url('dashboard')?>">Tenders</a>
                                    </li>
                                    <li>
                                      <a href="<?=supplier_url('purchase_order')?>">Purchase Order</a>
                                    </li>

                									</ul>
                								</div>
                                <div class="tg-colhalf">
									<ul>

										<li><a href="<?=supplier_url('delivery')?>">Delivery </a></li>
										<li><a href="<?=supplier_url('accounts/payments')?>">Payments</a></li>
										<li><a href="#s">Work Measurement</a></li>

									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
