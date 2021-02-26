
<!-- theme fonic -->
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Fonik - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ml-2">
                            <h4 class="page-title font-size-18">Dashboard</h4>
                        </div>

                    </div>

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-md-block ml-2">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="mr-2" src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/germany_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> German </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/italy_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> Italian </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/french_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> French </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/spain_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> Spanish </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/flags/russia_flag.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"> Russian </span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ion ion-md-notifications"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                                    <i class="mdi mdi-glass-cocktail"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It is a long established fact that a reader will</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        View all
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle mr-2"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">5</span><i class="dripicons-gear font-size-16 align-middle mr-2"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-lock font-size-16 align-middle mr-2"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="dripicons-exit font-size-16 align-middle mr-2"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-spin mdi-cog"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header> 
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="dripicons-device-desktop"></i>
                                    <span>DASHBOARD</span>
                                </a>
                            </li>

                            <li><a href="#" title="" class="waves-effect"> <i class="dripicons-suitcase"></i>PROCUREMENT PLAN</a>	</li>

                            <li>
                                <a href="#" title="" class="has-arrow waves-effect">
                                    <i class="dripicons-suitcase"></i>TENDERS</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="#" title="">MY TENDERS</a>	</li>
                                    </ul>
                            </li>	
							
                            <li>
                                <a href="#" title="" class=" waves-effect">
                                    <i class="dripicons-blog"></i>PURCHASE ORDER</a>	
                            </li>

                            <li>

                                <a href="calendar.html" class=" waves-effect">
                                    <i class="dripicons-calendar"></i>DELIVERY
                                </a>
                            </li>

                            <li>
                                <a href="#" title="" class="has-arrow waves-effect">
                                    <i class="dripicons-suitcase"></i>ACCOUNTS</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="#" title="">INVOICES</a>	</li>
                                        <li><a href="#" title="">PAYMENTS</a>	</li>

                                    </ul>
                            </li>
                            
						

                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="header-bg">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 mb-4 pt-5">
                                    <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>

                                    <div class="mt-4 text-center">
                                        <button type="button" class="btn btn-outline-primary ml-1 waves-effect waves-light">Year 2017</button>
                                        <button type="button" class="btn btn-outline-info ml-1 waves-effect waves-light">Year 2018</button>
                                        <button type="button" class="btn btn-outline-primary ml-1 waves-effect waves-light">Year 2019</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-info mt-2">15,852</h3> Monthly Statistics
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-purple mt-2">9,514</h3> New Orders
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-primary mt-2">289</h3> New Users
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-danger mt-2">5,220</h3> Unique Visitors
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Earnings</h4>

                                        <div class="row text-center mt-4">
                                            <div class="col-6">
                                                <h5 class="mb-2 font-size-18">56241</h5>
                                                <p class="text-muted text-truncate">Marketplace</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-2 font-size-18">23651</h5>
                                                <p class="text-muted text-truncate">Total Income</p>
                                            </div>
                                        </div>

                                        <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Email Sent</h4>

                                        <div class="row text-center mt-4">
                                            <div class="col-4">
                                                <h5 class="mb-2 font-size-18">56241</h5>
                                                <p class="text-muted text-truncate">Marketplace</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-2 font-size-18">23651</h5>
                                                <p class="text-muted text-truncate">Total Income</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-2 font-size-18">23651</h5>
                                                <p class="text-muted text-truncate">Total Month</p>
                                            </div>
                                        </div>

                                        <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transactions</h4>

                                        <div class="table-responsive">
                                            <table class="table mt-4 mb-0 table-centered table-nowrap">

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-2.jpg" alt="user-image" class="avatar-sm rounded-circle mr-2" /> Herbert C. Patton
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                        <td>
                                                            $14,584
                                                            <p class="m-0 text-muted">Amount</p>
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                            <p class="m-0 text-muted">Date</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-3.jpg" alt="user-image" class="avatar-sm rounded-circle mr-2" /> Mathias N. Klausen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                                        <td>
                                                            $8,541
                                                            <p class="m-0 text-muted">Amount</p>
                                                        </td>
                                                        <td>
                                                            10/11/2016
                                                            <p class="m-0 text-muted">Date</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-4.jpg" alt="user-image" class="avatar-sm rounded-circle mr-2" /> Nikolaj S. Henriksen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                        <td>
                                                            $954
                                                            <p class="m-0 text-muted">Amount</p>
                                                        </td>
                                                        <td>
                                                            8/11/2016
                                                            <p class="m-0 text-muted">Date</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-5.jpg" alt="user-image" class="avatar-sm rounded-circle mr-2" /> Lasse C. Overgaard
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                                        <td>
                                                            $44,584
                                                            <p class="m-0 text-muted">Amount</p>
                                                        </td>
                                                        <td>
                                                            7/11/2016
                                                            <p class="m-0 text-muted">Date</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/images/users/avatar-6.jpg" alt="user-image" class="avatar-sm rounded-circle mr-2" /> Kasper S. Jessen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                        <td>
                                                            $8,844
                                                            <p class="m-0 text-muted">Amount</p>
                                                        </td>
                                                        <td>
                                                            1/11/2016
                                                            <p class="m-0 text-muted">Date</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Recent Activity Feed</h4>

                                        <ol class="activity-feed mb-0">
                                            <li class="feed-item">
                                                <span class="date">Sep 25</span>
                                                <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                            </li>

                                            <li class="feed-item">
                                                <span class="date">Sep 24</span>
                                                <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 23</span>
                                                <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 21</span>
                                                <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 18</span>
                                                <span class="activity-text">Created need “Volunteer Activities”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 17</span>
                                                <span class="activity-text">Attending the event “Some New Event”. Responded to needed.</span>
                                            </li>
                                            <li class="feed-item pb-0">
                                                <span class="activity-text">
                                                        <a href="" class="text-primary">More Activities</a>
                                                    </span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © 2018 - <script>document.write(new Date().getFullYear())</script> Fonik<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>
<ul class="metismenu list-unstyled" id="side-menu">
                <li  style="margin:10px;" class="waves-effect"><a href="#" title="">PROCUREMENT PLAN</a>	</li>
							<li style="margin:10px;"><a href="#" title="">TENDERS</a>	</li>	
							<li style="margin:10px;"><a href="#" title="">MY TENDERS</a>	</li>
							<li style="margin:10px;"><a href="#" title="">PURCHASE ORDER</a>	</li>
							<li style="margin:10px;"><a href="#" title="">DELIVERY</a>	</li>
							<li style="margin:10px;"><a href="#" title="">WORK MEASUREMENT</a>	</li>
							<li style="margin:10px;"><a href="#" title="">ACCOUNTS</a>	</li>
							<li style="margin:10px;"><a href="#" title="">INVOICES</a>	</li>
							<li style="margin:10px;"><a href="#" title="">PAYMENTS</a>	</li></ul>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/node-waves/waves.min.js"></script>

        <!--Morris Chart-->
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/morris.js/morris.min.js"></script>
        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/libs/raphael/raphael.min.js"></script>

        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/js/pages/dashboard.init.js"></script>

        <script src="<?= base_url()?>assets/supplier_portal/fonic_theme/assets/js/app.js"></script>

    </body>

</html>