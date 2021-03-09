<!DOCTYPE html>
<html lang="en">


<head> 
	<title><?php echo $title; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="#">
	<meta name="keywords" content="Collection Agency,ERP,Bank Management,STaff salary,Staff App">
	<meta name="author" content="Cipher Technologies">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap\css\bootstrap.min.css">
	<!-- radial chart.css -->
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/files\assets\pages\chart\radial\css\radial.css" type="text/css" media="all"> -->
	<!-- feather Awesome -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\icon\themify-icons\themify-icons.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\icon\icofont\css\icofont.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\icon\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\icon\feather\css\feather.css">

	<link rel="stylesheet"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\select2\css\select2.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\multiselect\css\">


	<!-- Switch component css -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\switchery\css\switchery.min.css">
	<!-- Tags css -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap-tagsinput\css\bootstrap-tagsinput.css">

	<!-- Multi Select css -->


	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\css\style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\css\loading.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\css\jquery.mCustomScrollbar.css">


	<!-- sweet alert framework -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\sweetalert\css\sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/files\assets\css\component.css">

	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\assets\pages\notification\notification.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/admin/files\bower_components\animate.css\css\animate.css">

	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/datepicker/datepicker.css"> -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next\js\i18next.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
	<!-- Custom js -->
	<!-- <script src="<?php echo base_url(); ?>/assets/files\assets\pages\data-table\js\data-table-custom.js"></script> -->


	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\jquery\js\jquery.min.js"></script>


	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\popper.js\js\popper.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap\js\bootstrap.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin//files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js">
	</script>
	<!-- modernizr js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\modernizr\js\modernizr.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\modernizr\js\css-scrollbars.js"></script>
	<!-- Chart js -->

	<!-- Switch component js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin//files\bower_components\switchery\js\switchery.min.js"></script>
	<!-- Tags js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin//files\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js">
	</script>
	<!-- Max-length js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap-maxlength\js\bootstrap-maxlength.js">
	</script>

	<!-- i18next.min.js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next\js\i18next.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\jquery-i18next\js\jquery-i18next.min.js">
	</script>


	<!-- USE THIS WHEN WITCHES IS NEEDED
	   <script type="text/javascript" src="<?php //echo base_url(); ?>assets/admin//files\assets\pages\advance-elements\swithces.js"></script> -->
	<!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin//files\assets\pages\advance-elements\swithces.js"></script> -->

	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\select2\js\select2.full.min.js"></script>
	<!-- Multiselect js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\bootstrap-multiselect\js\bootstrap-multiselect.js">
	</script>

	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\multiselect\js\jquery.multi-select.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\assets\js\jquery.quicksearch.js">
	</script>

	<!-- Custom js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\assets\pages\advance-elements\select2-custom.js"></script>

	<!-- sweet alert js -->
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin/files\bower_components\sweetalert\js\sweetalert.min.js"></script>

	<!-- sweet alert modal.js intialize js -->
	<!-- modalEffects js nifty modal window effects -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\assets\js\modalEffects.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/files\assets\js\classie.js"></script>

	<script src="<?php echo base_url(); ?>assets/admin/files\assets\js\pcoded.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/files\assets\js\vartical-layout.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>



	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin//files\bower_components\jstree\js\jstree.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url(); ?>assets/admin//files\assets\pages\treeview\jquery.tree.js"></script>


	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin//files\assets\js\script.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin//files\assets\js\bootstrap-growl.min.js">
	</script>
	<style>
	.select2-container--default .select2-selection--single .select2-selection__rendered {
		background-color: #FFFFFF;
		color: #000000;
		/* padding: 8px 30px 8px 20px; */
		padding: .25rem .5rem;
		height: calc(1.8125rem + 2px);
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow b {
		border-color: #000 transparent transparent transparent;
		border-style: solid;
		border-width: 5px 4px 0 4px;
		height: 0;
		left: 50%;
		margin-left: -4px;
		margin-top: -2px;
		position: absolute;
		top: 33%;
		width: 0;

	}

	.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
		border-color: transparent transparent #fff transparent;
	}

	.select2-container--default .select2-selection--single {
		background-color: #fff;
		border: 1px solid #aaa;
		border-radius: 2px;
	}

	.star {
		color: red;
	}
	</style>

</head>
<!-- Menu sidebar static layout -->

<body>

	<audio id="audio">
		<source src="<?php echo base_url() ?>assets\admin/sounds\error.mp3" type="audio/mpeg">
	</audio>

	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
			<!--Loader -->
	<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<!--Loader end-->
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">

					<div class="navbar-logo" style="background-color:white">
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="feather icon-menu"></i>
						</a>
						<a href="#">
							<img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/files\assets\images\kseb.png"
								alt="Theme-Logo" width="50%">
							<!-- <h1><span style="color:red">K</span><span style="color:#FFF">SITIL</span></h1> -->
						</a>
						<a class="mobile-options">
							<i class="feather icon-more-horizontal"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li class="header-search" style="color:blue;font-size:18px;font-weight:600">
								KERALA STATE ELECTRICITY BOARD
							</li>
						</ul>
						<!-- <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul> -->
						<ul class="nav-right">
							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="feather icon-bell" style="display:none;"></i>
										<!-- <span class="badge bg-c-pink" >5</span>-->
									</div>
									<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn"
										data-dropdown-out="fadeOut">
										<!-- <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>-->
										<li>
											<div class="media">
												<img class="d-flex align-self-center img-radius"
													src="<?php echo base_url(); ?>assets/admin/files\assets\images\avatar-4.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">John Doe</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img class="d-flex align-self-center img-radius"
													src="<?php echo base_url(); ?>assets/admin/files\assets\images\avatar-3.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Joseph William</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img class="d-flex align-self-center img-radius"
													src="<?php echo base_url(); ?>assets/admin/files\assets\images\avatar-4.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Sara Soudein</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="header-notification" style="display:none">
								<div class="dropdown-primary dropdown">
									<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
										<i class="feather icon-message-square"></i>
										<span class="badge bg-c-green">3</span>
									</div>
								</div>
							</li>
							<li class="user-profile header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<img src="<?php echo base_url(); ?>assets/admin/files\assets\images\avatar-4.jpg" class="img-radius"
											alt="User-Profile-Image">
										<span><?= $_SESSION['username'] ?></span>
										<i class="feather icon-chevron-down"></i>
									</div>
									<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
										data-dropdown-out="fadeOut">

										<li>
											<a href="<?=admin_url('profile')?>">
												<i class="feather icon-user"></i> Profile
											</a>
										</li>

										<li>
											<a href="<?=admin_url('logout')?>">
												<i class="feather icon-log-out"></i> Logout
											</a>
										</li>
									</ul>

								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
<style>
/* Style the buttons */
ul.nav a { cursor: pointer; }
</style>
<script type="text/javascript">
$(document).ready(function () {
        var url = window.location;
    // Will only work if string in href matches with location
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');
    });

</script> 

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="pcoded-inner-navbar main-menu mCustomScrollbar _mCS_1 mCS_no_scrollbar">
							<!-- <div class="pcoded-navigatio-lavel">Navigation</div> -->
							<ul class="pcoded-item pcoded-left-item nav">
								<!-- <?php if($main_menulabel==$page) ?> -->
								<li class="">
									<a href="<?=admin_url('dashboard')?>">
										<span class="pcoded-micon"><i class="feather icon-home" style="color:red"></i></span>
										<span class="pcoded-mtext">Dashboard</span>
									</a> 
								</li>
								<li class="">
										<a href="<?=admin_url('user_management/suppliers')?>"  >
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:blue"></i></span>
												<span class="pcoded-mtext">Suppliers</span>
										</a>
								</li>
								<!-- <li class="">
										<a href="<?=admin_url('user_management/supervisors')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:yellow"></i></span>
												<span class="pcoded-mtext">Supervisors</span>
										</a>
								</li> -->
								<li class="">
										<a href="<?=admin_url('procurement/tenders')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:pink"></i></span>
												<span class="pcoded-mtext">Procurement</span>
										</a>
								</li>
						<!-- 		
								<li class="">
										<a href="<?=admin_url('purchase_order')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:orange"></i></span>
												<span class="pcoded-mtext">Purchase Order</span>
										</a>
								</li> -->
<!-- 
								<li class="">
										<a href="<?=admin_url('delivery')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:green"></i></span>
												<span class="pcoded-mtext">Delivery Management</span>
										</a>
								</li> -->
								
							<!-- 	<li class="">
										<a href="<?=admin_url('accounts')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:yellow"></i></span>
												<span class="pcoded-mtext">Accounts</span>
										</a>
								</li> -->
								
								

								<!-- <li class="">
										<a href="<?=admin_url('quotations')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:green"></i></span>
												<span class="pcoded-mtext">Quotations</span>
										</a>
								</li> -->
								<!-- <li class="">
										<a href="<?=admin_url('dashboard')?>">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:violet"></i></span>
												<span class="pcoded-mtext">Work Measurement</span>
										</a>
								</li> -->
								<li class="pcoded-hasmenu">
										<a href="#">
												<span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh" style="color:red"></i></span>
												<span class="pcoded-mtext">Settings</span>
										</a>
										<ul class="pcoded-submenu">
											<li class="">
												<a href="<?=admin_url('settings/query_rep')?>">
													<span class="pcoded-mtext">Query Repository</span>
												</a>
								  			</li>
								  		</ul>
										  <ul class="pcoded-submenu">
											<li class="">
												<a href="<?=admin_url('settings/fee_management')?>">
													<span class="pcoded-mtext">Fee management</span>
												</a>
								  			</li>
								  		</ul>
								</li>
								
								<li class="">
										<a href="">
												<span class="pcoded-micon"><i class="feather icon-layers" style="color:red"></i></span>
												<span class="pcoded-mtext">Reports</span>
										</a>
								</li>
							</ul>
						</div>
					</nav>
