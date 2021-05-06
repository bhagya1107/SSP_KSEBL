<!DOCTYPE html>
<!-- 
	NOTES:
	1. All tokens are represented by '$' sign in the template.
	2. You can write your code only wherever mentioned.
	3. All occurrences of existing tokens will be replaced by their appropriate values.
	4. Blank lines will be removed automatically.
	5. Remove unnecessary comments before creating your template.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="authoring-tool" content="Adobe_Animate_CC">
    <title>KSEB</title>
    <title>SSP HOME</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/cdns/')?>bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?=base_url('assets/public/')?>styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/public/')?>styles/extras.1.1.0.min.css">
    <script async defer src="<?=base_url('assets/cdns/')?>buttons.js"></script>





    <!-- loader start -->

    <style>
        .system-site-wrap .system-loader {
            top: 50%;
            left: 50%;
            position: absolute;
            margin: -23px 0 0 -70px;
        }
        
        div.system-loader-wrap {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.2);
        }
        
        .system-loader {
            top: 0;
            left: 45%;
            width: 70px;
            margin: 100px auto 0;
            text-align: center;
            position: absolute;
        }
        
        .system-loader>div {
            width: 18px;
            height: 18px;
            border-radius: 100%;
            display: inline-block;
            background-color: #5dc560;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }
        
        .system-loader .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }
        
        .system-loader .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }
        
        .sp-profile-brochure .file_icon {
            font-size: 20px;
            position: absolute;
            left: 10px;
            top: 10px;
        }
        
        .single-sp_jobs .tg-mapbox #location-pickr-map {
            height: 260px;
        }
        
        @-webkit-keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        @keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        
        .welcome-msg {
            left: 0px;
            width: 50px;
            float: left;
        }
        
        @media screen and (min-width: 767px) {
            .custom-menu {
                display: block!important;
            }
            #loader1 {
                padding-left: 40%!important;
                padding-top: 14%!important;
            }
            lottie-player {
                height: 300px;
                width: 300px;
            }
        }
        
        @media screen and (max-width: 1209px) {
            .tg-main-section {
                padding: 0
            }
        }
        
        @media screen and (max-width: 767px) {
            .searchbar {
                padding-top: 12%;
            }
            /* .bannerimg {
			display: none
		} */
        }
        
        @media screen and (max-width: 550px) {
            .searchbar {
                padding-top: 15%;
            }
        }
        /* km addons */
    </style>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <div id="loader1" class="center1">
        <lottie-player src='{"v":"5.5.9","fr":60,"ip":0,"op":90,"w":612,"h":792,"nm":"zap","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"zap Outlines 2","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":45,"s":[0]},{"t":70,"s":[100]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[306,396,0],"ix":2},"a":{"a":0,"k":[306,396,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":45,"s":[0,0,100]},{"t":70,"s":[100,100,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[1.894,3.342],[3.842,0],[0,0],[0,0],[5.893,0.618],[2.197,-3.378],[0,0],[-5.019,-3.086],[-1.972,0],[0,0],[0,0],[-5.909,-0.453],[-2.124,3.352],[0,0]],"o":[[-1.895,-3.342],[0,0],[0,0],[0.618,-5.893],[-4.008,-0.421],[0,0],[-3.086,5.019],[1.68,1.033],[0,0],[0,0],[-0.451,5.909],[3.956,0.301],[0,0],[1.973,-3.296]],"v":[[158.186,-58.532],[148.905,-63.94],[9.171,-63.94],[32.599,-242.933],[23.049,-254.722],[12.938,-249.904],[-156.993,47.806],[-153.493,62.48],[-147.908,64.06],[-10.262,64.06],[-28.828,243.324],[-18.947,254.842],[-9.065,249.886],[158.057,-47.793]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tr","p":{"a":0,"k":[306,396.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":1,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":0,"k":0,"ix":1},"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"fl","c":{"a":0,"k":[0.5647058823529412,0.5372549019607843,0.8862745098039215,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false}],"ip":0,"op":182,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":4,"nm":"zap Outlines","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[306,396,0],"ix":2},"a":{"a":0,"k":[306,396,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ef":[{"ty":5,"nm":"Emboss","np":6,"mn":"ADBE Emboss","ix":1,"en":1,"ef":[{"ty":0,"nm":"Direction","mn":"ADBE Emboss-0001","ix":1,"v":{"a":0,"k":45,"ix":1}},{"ty":0,"nm":"Relief","mn":"ADBE Emboss-0002","ix":2,"v":{"a":0,"k":1,"ix":2}},{"ty":0,"nm":"Contrast","mn":"ADBE Emboss-0003","ix":3,"v":{"a":0,"k":0,"ix":3}},{"ty":0,"nm":"Blend With Original","mn":"ADBE Emboss-0004","ix":4,"v":{"a":0,"k":2,"ix":4}}]}],"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[1.894,3.342],[3.842,0],[0,0],[0,0],[5.893,0.618],[2.197,-3.378],[0,0],[-5.019,-3.086],[-1.972,0],[0,0],[0,0],[-5.909,-0.453],[-2.124,3.352],[0,0]],"o":[[-1.895,-3.342],[0,0],[0,0],[0.618,-5.893],[-4.008,-0.421],[0,0],[-3.086,5.019],[1.68,1.033],[0,0],[0,0],[-0.451,5.909],[3.956,0.301],[0,0],[1.973,-3.296]],"v":[[158.186,-58.532],[148.905,-63.94],[9.171,-63.94],[32.599,-242.933],[23.049,-254.722],[12.938,-249.904],[-156.993,47.806],[-153.493,62.48],[-147.908,64.06],[-10.262,64.06],[-28.828,243.324],[-18.947,254.842],[-9.065,249.886],[158.057,-47.793]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0.5647058823529412,0.5372549019607843,0.8862745098039215,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[306,396.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"t":45,"s":[0]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"t":45,"s":[100]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false}],"ip":0,"op":182,"st":0,"bm":0}],"markers":[]}'
            background="transparent" speed="1" loop autoplay></lottie-player>
        <!-- height:300px; width:300px; -->
    </div>
    <div class="clearfix"></div>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";

                document.querySelector(
                    "#loader1").style.visibility = "visible";

            } else {
                document.querySelector(
                    "#loader1").style.display = "none";
                document.querySelector(
                    "body").style.visibility = "visible";

            }
        };
    </script>
    <style>
        /* #cover {position: fixed; height: 100%; width: 100%; top:0; left: 0; background: #000; z-index:9999;cursor:pointer;} */
        
        #loader1 {
            /* margin:auto; */
            /* padding-left:40%!important; 
				padding-top:14%!important;   */
            background: #FFF;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
            cursor: pointer;
            padding: 25%;
        }
        
        .center1 {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            cursor: pointer;
        }
        
        #tg-header {
            width: 100%;
            position: fixed;
            top: 0px;
        }
        /* select > option:hover{
                box-shadow: 0 0 10px 100px #FED20F inset;
                transition: all .2s ease-in-out;
				cursor:pointer;
            } */
    </style>

    <style>
        .container {
            width: 95%;
            cursor: pointer;
        }
        
        #tg-banner {
            z-index: 999;
        }
        
        .usernamecls {
            color: white;
        }
    </style>

    <!-- loader ends -->








    <script>
        setTimeout(function() {
            $('#mydivss').hide('fast');
        }, 15000);
    </script>
    
    <script>
        setTimeout(function() {
            $('.mydivssn').hide('fast');
        }, 15000);
    </script>

</head>

<body onload="init();" style="margin:0px;">

    <!-- <body class="h-100"
	style="background-size: cover;background-position: center;background-repeat: no-repeat;"> -->
    <!-- row col-md-12 -->
    <div class="row col-md-12 " style="padding-right:0px;margin-right:0px;margin-left:0px;">
        <div class="col-md-5 col-sm-12">
            <div class="container-fluid icon-sidebar-nav h-100 bg">

                <div class="ttm">

                    <!-- <div class="newreg  triggerbtn  emp-btn">
                        <span>

									<i class="fas fa-sign-in-alt"></i>
									EMPLOYEE LOGIN</span>
                    </div> -->


                    <div class="bottom-left2 content">

                        <?=form_open('supplier/home/user_login');?>
                            <img class="auth-form__logo d-table mx-auto mb-3" src="<?=base_url('assets/logo.png')?>" alt="Shards Dashboards - Register Template" style=" border-radius: 5px; background: white; width: 100px; padding: 17px; ">
                            <h5 class="auth-form__title text-center mb-4" style=" color: black; ">Access Your Account</h5>

                            <div class="form-group dflex" style="color: white;">
                                <label for="exampleInputEmail1" style=" min-width: 70px; color:black">Mobile</label>
                                <input type="text" class="form-control w-300 susername" name="username" id="username" aria-describedby="emailHelp" placeholder="Mobile Number" value="">
                            </div>
                            <div class="form-group dflex" style="color: white;">
                                <label for="exampleInputPassword1" style=" min-width: 70px;color:black">Password</label>
                                <input type="password" class="form-control w-300 password" id="password" placeholder="password" name="password" value="">
                            </div>
                            <div class="form-group mb-3 d-table mx-auto dflex">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2" style="color: black;">Remember me for 30 days.</label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <button type="submit" id="" onclick="" class="btn btn-pill btn-accent d-table mx-auto">Access Account</button>

                            <div class="form-group mb-3 d-table mx-auto dflex">
                                <div class="auth-form__meta d-flex mt-4" style="color:black">

                                    <a href="<?=base_url('forgot_pasword')?>" style="color:black"><b>Forgot your password?</b></a>
                                </div>
                            </div>


                            <span style="color:red" class="mydivssn"> <br />   <?php
													$er= $this->session->flashdata("msg");
												echo $this->session->flashdata("msg");
													if($er)
													{
													//  print '<script>alert("error")</script>';
													}
													?>
												</span>

                            </form>


                            <!-- ---------------	USER LOGIN END--------------------- -->
                    </div>
                    <div class="faq triggerbtn">
                        <span class="spanclass">
									<i class="fas fa-question-circle"></i>
									FAQ</span>
                    </div>
                    <div class="top-right content">
                        <!-- <div class="close" onclick="closex()">x</div> -->
                        asdas dasd as dasd asdas123 faq
                    </div>
                </div>

                <div class="row h-100 ">
                    <div class="main-content-container container-fluid px-4 my-auto h-100">
                        <div class="row no-gutters h-100">


                            <div class="auth-form mx-auto my-auto">
                                <div class="card" style=" background: transparent; box-shadow: none !important;min-height:545px;">
                                    <div class="card-body" style="margin-top:2rem;background:#fff;z-index:9;padding-bottom: 10px;">

                                        <?php 
													$rmsg=$this->session->flashdata('rmsg'); 
													if($rmsg)
													{
												?>
                                        <!-- <span aria-hidden="true">&times;</span> -->
                                        <span style="color:green" id="mydivss">
													<?php
														echo $rmsg;
													?>
														</span>


                                        <?php 
												}
												?>

                                        <div class="wrapper1 fadeInDown">
                                            <div id="formContent">
                                                <?php 
												// $tab=1;
												 $tab=$this->session->userdata('tabs');
                                                 if($tab=='')
                                                 {
                                                     $tab=1;
                                                 }
                                                 else{
                                                     $tab=2;
                                                 }
												?>
												<div style="text-align:center">
                                                <h2 style="cursor: pointer;" class="<?php if($tab=='1') echo 'active';  ?> signIn_btn" onclick="ViewSignin();">Supplier Sign In</h2>
                                                <h2 style="cursor: pointer;"  class="inactive signUp_btn <?php if($tab=='2') echo 'active';  ?>" onclick="ViewSignup();">Employee Sign In </h2>
												</div>
                                                <img class="auth-form__logo d-table mx-auto mb-3" src="<?=base_url('assets/logo.png')?>" alt="Shards Dashboards - Register Template" style=" border-radius: 5px; background: white; width: 100px; padding: 17px; ">
                                                <h5 class="auth-form__title text-center mb-4" style=" color: black; ">Access Your Account</h5>




                                                <!--  supplier login starts here -->
                                                <div class="login <?php if($tab=='2') echo 'hidedata';  ?>">

                                                    <?php  $attributes = array('id' => 'frm','style'=>'width:100%');  ?>
                                                    <?=form_open('supplier/home/admin_login',$attributes);?>



                                                        <div class="form-group dflex" style="color: white;">
                                                            <label for="exampleInputEmail1" style=" min-width: 70px; color:black">Username</label>
                                                            <input type="text" class="form-control w-300" name="username" aria-describedby="emailHelp" placeholder="Username" id="usnm">
                                                        </div>
                                                        <div class="form-group dflex" style="color: white;">
                                                            <label for="exampleInputPassword1" style=" min-width: 70px;color:black">Password</label>
                                                            <input type="password" class="form-control w-300" placeholder="password" name="password" id="pwd">
                                                        </div>
                                                        <div class="form-group mb-3 d-table mx-auto dflex">
                                                            <div class="custom-control custom-checkbox mb-1">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2" style="color: black;">Remember me for 30 days.</label>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Access Account</button>



                                                        <div class="newreg " onclick="window.location='<?=base_url('register')?>'" title="Supplier/Contractor signup">
                                                            <span title="Supplier/Contractor signup" style="color:blue;text-decoration:underline">

									
																		Signup</span>
                                                        </div>



                                                        <div class="form-group mb-3 d-table mx-auto dflex">
                                                            <div class="auth-form__meta d-flex mt-41" style="color:black">


                                                                <a href="<?=base_url('forgot_password')?>" style="color:black"><b>Forgot your password?</b></a>
                                                            </div>
                                                        </div>


                                                        <span style="color:red" class="mydivssn"> <br />   <?php
																		$er= $this->session->flashdata("error");
																		echo $this->session->flashdata("error");
																	
																		?>
														</span>

                                                        </form>
                                                </div>
                                                <!--  supplier login ends here -->


                                                <!--  employee login starts here -->
                                                <div class="signup <?php if($tab=='1') echo 'hidedata';  ?>">

                                                    <?php  $attributes = array('id' => 'frm','style'=>'width:100%');  ?>
                                                    <?=form_open('supplier/home/user_login',$attributes);?>



                                                        <div class="form-group dflex" style="color: white;">
                                                            <label for="exampleInputEmail1" style=" min-width: 70px; color:black">Username</label>
                                                            <input type="text" class="form-control w-300" name="username" aria-describedby="emailHelp" placeholder="Username" id="usnm">
                                                        </div>
                                                        <div class="form-group dflex" style="color: white;">
                                                            <label for="exampleInputPassword1" style=" min-width: 70px;color:black">Password</label>
                                                            <input type="password" class="form-control w-300" placeholder="password" name="password" id="pwd">
                                                        </div>
                                                        <div class="form-group mb-3 d-table mx-auto dflex">
                                                            <div class="custom-control custom-checkbox mb-1">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2" style="color: black;">Remember me for 30 days.</label>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Access Account</button>



                                                        <!-- <div class="newreg " onclick="window.location='<?=base_url('register')?>'" title="Supplier/Contractor signup">
                                                            <span title="Supplier/Contractor signup">

									
																		Signup</span>
                                                        </div> -->



                                                        <div class="form-group mb-3 d-table mx-auto dflex">
                                                            <div class="auth-form__meta d-flex mt-41" style="color:black">


                                                                <a href="<?=base_url('supplier/dashboard/emp_forgot_password')?>" style="color:black"><br><b>Forgot your password?</b></a>
                                                            </div>
                                                        </div>
                                                      

                                                        <span style="color:red" class="mydivssn"> <br />   <?php
																		$er= $this->session->flashdata("msg");
																		echo $this->session->flashdata("msg");
																	
																		?>
														</span>
                                                      
                                                        </form>


                                                </div>

                                                <!-- employee login ends here -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- </main> -->

    

		<div class="col-md-7 col-sm-12 bannerimg" style="padding-right:0px;">
			<!-- width:5500px; height:5500px; -->
			<div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); float:right">
				<!-- position: absolute; -->
				<!-- width="5500" height="5500" -->
				<canvas id="canvas" style=" display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
				<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden;  position: absolute; left: 0px; top: 0px; display: block;">
					<!-- width:5500px; height:5500px; -->
				</div>
			</div>
		</div>
    </div>


    <div class="btm" style="position:fixed">

        <div style="position:relative">
            <div class="creps triggerbtn" style="background-color:#6e6f6e;">
                <span class="spanclass">Corporate Responsibility</span>
            </div>
            <div class="bottom-left content">
                <!-- <div class="close" onclick="closex()">x</div> -->
                Corporate Responsibility test
            </div>
        </div>

        <div style="position:relative">
            <div class="stds triggerbtn" style="background-color:#6e6f6e;">
                <span class="spanclass">Standards</span>
            </div>
            <div class="bottom-left2 content">
                <!-- <div class="close" onclick="closex()">x</div> -->
                Standards test
            </div>
        </div>
        <div style="position:relative;">
            <div class="pln triggerbtn1" style="background-color:#6e6f6e;">
                <span class="spanclass">Procurement Plan</span>
            </div>
            <div class="bottom-left3 content pp">
                <!-- <div class="close" onclick="closex()">x</div> -->

                <div class="table-responsive">

                    <table id="questions" class="table table-striped table-bordered table-hover" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">sl no</th>
                                <th scope="col">Product</th>
                                <th scope="col">Scheme</th>
                                <th scope="col">Plan Duration</th>
                                <th scope="col">Plan Start Date</th>
                                <th scope="col">Expected Quantity</th>
                                <th scope="col">Procured So Far</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>DIST TFR 3PH 150kVA 11kV/433V </td>
                            <td>KSEB 20-21</td>
                            <td>120 Days</td>
                            <td>26-08-2020</td>
                            <td><a data-toggle="modal" data-target="#myModalexpected">1200</a></td>
                            <td><a data-toggle="modal" data-target="#myModal2">200</a></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>TOR STEEL 20 mm </td>
                            <td>KSEB 20-21</td>
                            <td>180 Days</td>
                            <td>26-08-2020</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">1500</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">400</a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Earth Connector120sq.mm </td>
                            <td>KSEB 20-21</td>
                            <td>110 Days</td>
                            <td>26-08-2020</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">1600</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">300</a></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>CEMENT GRADE 43 </td>
                            <td>KSEB 20-21</td>
                            <td>300 Days</td>
                            <td>26-08-2020</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">1800</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">100</a></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>GI PIPE- 100mm(4 INCH) </td>
                            <td>KSEB 21-22</td>
                            <td>220 Days</td>
                            <td>20-09-2021</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">1100</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">500</a></td>
                        </tr>


                        <tr>
                            <td>6</td>
                            <td>BOARD INSULATOR</td>
                            <td>KSEB 21-22</td>
                            <td>300 Days</td>
                            <td>20-05-2021</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">1200</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">600</a></td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>CLAMP FOR EARTH ELECTRODE</td>
                            <td>KSEB 20-20</td>
                            <td>150 Days</td>
                            <td>15-10-2021</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">700</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">100</a></td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>CLAMP FOR DTR METER BOX</td>
                            <td>KSEB 20-21</td>
                            <td>500 Days</td>
                            <td>30-10-2021</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">3000</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">300</a></td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>PIN FOR LT PIN INSULATOR</td>
                            <td>KSEB 20-21</td>
                            <td>200 Days</td>
                            <td>20-07-2021</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">900</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">300</a></td>
                        </tr>


                        <tr>
                            <td>10</td>
                            <td>STRIP ALUMINIUM FOR 25*10 MM </td>
                            <td>KSEB 20-21</td>
                            <td>100 Days</td>
                            <td>1-09-2020</td>
                            <td><a data-toggle="modal" data-target="#myModalp1">2000</a></td>
                            <td><a data-toggle="modal" data-target="#myModalp2">100</a></td>
                        </tr>
                        </tbody>
                        <tbody>
                            <tr class="gradeX">
                                <!--<td colspan="6" class="dataTables_empty">No data found</td>-->
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>

                </div>
            </div>
        </div>


    </div>


    <script src="<?=base_url('assets/cdns/')?>jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/cdns/')?>popper.min.js" crossorigin="anonymous">
    </script>
    <script src="<?=base_url('assets/cdns/')?>bootstrap.min.js" crossorigin="anonymous">
    </script>
    <!-- <script src="<?=base_url('assets/cdns/')?>Chart.min.js"></script> -->
    <script src="<?=base_url('assets/cdns/')?>shards.min.js"></script>
    <script src="<?=base_url('assets/cdns/')?>jquery.sharrre.min.js"></script>
    <script src="<?=base_url('assets/public/')?>scripts/extras.1.1.0.min.js"></script>
    <!-- <script src="<?=base_url('assets/public/')?>scripts/shards-dashboards.1.1.0.min.js"></script> -->
    <!-- <script src="<?=base_url('assets/public/')?>scripts/app/app-blog-overview.1.1.0.js"></script> -->
    <script>
        // <?php $data=  isset($_SESSION['showpop'])?  $_SESSION['showpop']:  'false';?>



        function closex() {
            var x = $(document).find('.expand');
            x.removeClass('expand');
            // x.fadeOut();
        }


        // to close the modal outside the div
        $(document).mouseup(function(e) {


            var container = $(document).find('.expand');

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.removeClass('expand');
            }
        });

        // km

        $('.triggerbtn').click(function() {

            var thiss = $(this);
            var title = $(this).next('.spanclass');
            console.log(thiss.find('.creps'));
            $(this).addClass('changeclr');
            //console.log(title.prevObject.text());
            var content = $(this).next('.content');

            $('.modal-title').empty().html(title.prevObject.text());
            $('.modal-body').empty().html(content.html());
            $('#exampleModal').modal();

            $('#exampleModal').on('hidden.bs.modal', function() {

                $('.triggerbtn').removeClass('changeclr');
            })

            return;

            var x1 = $(document).find('.expand');
            if (x1.length) {
                x1.removeClass('expand');
            }

            var content = $(this).next('.content');
            var x = $(document).find('.expand');
            console.log(x);
            if (!x.length) {
                content.addClass('expand');

            } else {
                x.html(content.html());
            }


        });


        $('.triggerbtn1').click(function() {

            var thiss = $(this);
            var title = $(this).next('.spanclass');
            console.log(thiss.find('.creps'));
            $(this).addClass('changeclr');
            //console.log(title.prevObject.text());
            var content = $(this).next('.content');

            $('.modal-title').empty().html(title.prevObject.text());
            $('.modal-body').empty().html(content.html());
            $('#exampleModal2').modal();

            $('#exampleModal2').on('hidden.bs.modal', function() {

                $('.triggerbtn1').removeClass('changeclr');
            })

            return;

            var x1 = $(document).find('.expand');
            if (x1.length) {
                x1.removeClass('expand');
            }

            var content = $(this).next('.content');
            var x = $(document).find('.expand');
            console.log(x);
            if (!x.length) {
                content.addClass('expand');

            } else {
                x.html(content.html());
            }


        });


        // var isShow = '<?php echo $data ;?>';
        //console.log(isShow);
        // if (isShow == 'true') {
            // alert('show');
            // setTimeout(function() {
                // $('.emp-btn').trigger('click');
            // }, 1000);
            // <?php unset($_SESSION['showpop']);?>
        }
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f45d830cc6a6a5947aed6f0/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>


    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="<?=base_url('assets/supplier/scripts/')?>final.js"></script>
    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

        function init() {
            canvas = document.getElementById("canvas");
            anim_container = document.getElementById("animation_container");
            dom_overlay_container = document.getElementById("dom_overlay_container");
            var comp = AdobeAn.getComposition("F1988807AE641A4C98F78AB7F6B4A69F");
            var lib = comp.getLibrary();
            handleComplete({}, comp);
        }

        function handleComplete(evt, comp) {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            var lib = comp.getLibrary();
            var ss = comp.getSpriteSheet();
            exportRoot = new lib._final();
            stage = new lib.Stage(canvas);
            //Registers the "tick" event listener.
            fnStartAnimation = function() {
                    stage.addChild(exportRoot);
                    createjs.Ticker.framerate = lib.properties.fps;
                    createjs.Ticker.addEventListener("tick", stage);
                }
                //Code to support hidpi screens and responsive scaling.
            AdobeAn.makeResponsive(true, 'both', true, 1, [canvas, anim_container, dom_overlay_container]);
            AdobeAn.compositionLoaded(lib.properties.id);
            fnStartAnimation();
        }

        $(document).on('click', '#user_login', function() {
            alert();
            var username = $('#exampleModal').find('#susername').val()
            console.log("hiiii");
            // console.log(username);
            var password = $('#exampleModal').find('#spassword').val()
            var data = {
                username: username,
                password: password,
                <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
            };
            console.log(data);
            $.post("<?php echo site_url('supplier/home/user_login')?>", data, function(msg) {
                alert(msg);
                // window.location.reload();
                //    if (msg) {
                //     $("#display").html(msg);
                // }

            });
        });
    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">

                </div>
                <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div> -->
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog exple2" role="document">
            <div class=".col-xs-4 modal-content example2">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">

                </div>
                <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div> -->
            </div>
        </div>
    </div>


</body>

</html>

<script>
    $(document).ready(function() {
        $("input").attr("autocomplete", "off");



        $('#frm').submit(function(e) {

            e.preventDefault();
            var p = window.btoa($('#pwd').val());
            $('#pwd').val(p);
            var p2 = window.btoa($('#usnm').val());
            $('#usnm').val(p2);

            this.submit();

        });



    });

    // $('body').on('submit', '#frm_modal',function (e) {

    // 	e.preventDefault();
    // 	var p = window.btoa($('#password').val());
    // 	$('.password').val(p).trigger('change');		

    // 	var p2 = window.btoa($('#susername').val());
    // 	$('.susername').val(p2).trigger('change');

    // 	this.submit();
    // });
</script>

<style>
    @media screen and (max-width: 767px) {
        .bannerimg {
            display: none
        }
    }
    
    @media screen and (max-width: 1200px) {
        .card-body {
            margin-top: 4rem!important;
            margin-bottom: 4rem!important;
        }
    }
    
    .ttm {
        z-index: 99;
    }
    
    .triggerbtn:active,
    .triggerbtn1:active {
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        background-color: #272360;
    }
    
    .triggerbtn:active,
    .triggerbtn:focus,
    .triggerbtn:hover {
        background-color: #272360;
    }
    
    .floating-right {
        position: absolute;
        bottom: 0;
        right: 40px;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
    }
    
    .triggerbtnx:hover {
        background-color: #272360;
        color: white;
    }
    
    .floating {
        position: absolute;
        bottom: 0;
        left: 40px;
        /* top: 0; */
        display: flex;
        align-items: center;
        justify-content: space-around;
        /* flex-direction: column; */
    }
    
    .newreg {
        cursor: pointer;
        text-align: center;
        /* color: #343434; */
        color: black;
        padding: 12px;
        border-radius: 5px;
    }
    
    .faq {
        cursor: pointer;
        text-align: center;
        /* color: #ffffff; */
        color: black;
        padding: 12px;
        border-radius: 5px;
    }
    
    .about {
        position: absolute;
        top: 0px;
        left: 0px;
        cursor: pointer;
        text-align: center;
        color: #343434;
        padding: 12px;
        border-radius: 5px;
    }
    
    .btm {
        position: absolute;
        bottom: 0px;
        left: 0px;
        display: flex;
    }
    
    .ttm {
        position: absolute;
        top: 0px;
        /* right: 0px; */
        display: flex;
        left: 0px;
    }
    
    .chatbot {
        display: none;
        position: absolute;
        bottom: 0px;
        right: 0px;
        padding: 10px 37px;
        background: white;
        border-radius: 10px 10px 0 0;
        margin: 0px 12px;
    }
    
    .pln {
        cursor: pointer;
        text-align: center;
        color: white;
        padding: 10px 37px;
        background: #343434;
        border-radius: 10px 10px 0 0;
        margin: 0px 12px;
    }
    
    .stds {
        cursor: pointer;
        text-align: center;
        color: white;
        padding: 10px 37px;
        background: #343434;
        border-radius: 10px 10px 0 0;
        margin: 0px 12px;
    }
    
    .creps {
        cursor: pointer;
        text-align: center;
        color: white;
        padding: 10px 37px;
        background: #343434;
        border-radius: 10px 10px 0 0;
        margin: 0px 12px;
    }
    
    .supplier {
        cursor: pointer;
        text-align: center;
        color: #343434;
        padding: 12px;
        border-radius: 5px;
    }
    
    @media only screen and (max-width:700px) {
        .bottom-left {
            bottom: 50px;
            left: 15px;
        }
        .bottom-left2 {
            bottom: 50px;
            left: 15px;
        }
        .bottom-left3 {
            bottom: 50px;
            left: 15px;
        }
        .creps {
            cursor: pointer;
            text-align: center;
            color: white;
            padding: 6px 9px;
            background: #343434;
            border-radius: 10px 10px 0 0;
            margin: 0px 5px;
        }
        .stds {
            cursor: pointer;
            text-align: center;
            color: white;
            padding: 6px 9px;
            background: #343434;
            border-radius: 10px 10px 0 0;
            margin: 0px 5px;
        }
        .triggerbtn {
            min-height: 50px;
        }
        .pln {
            cursor: pointer;
            text-align: center;
            color: white;
            padding: 6px 9px;
            background: #343434;
            border-radius: 10px 10px 0 0;
            margin: 0px 5px;
        }
        .chatbot {
            position: absolute;
            bottom: 0px;
            right: 0px;
            padding: 6px 20px;
            background: white;
            border-radius: 10px 10px 0 0;
            margin: 0px 12px;
        }
        .newreg {
            cursor: pointer;
            text-align: center;
            /* color: #ffffff; */
            padding: 12px;
            border-radius: 5px;
            color: black;
        }
        .about {
            position: absolute;
            top: 0px;
            left: 0px;
            cursor: pointer;
            text-align: center;
            color: #ffffff;
            padding: 12px;
            border-radius: 5px;
        }
    }
    
    @media only screen and (min-width:700px) {
        .bottom-left {
            bottom: 50px;
            left: 15px;
        }
        .bottom-left2 {
            bottom: 50px;
            left: 15px;
        }
        .bottom-left3 {
            bottom: 50px;
            left: 15px;
        }
        .w-300 {
            width: 300px;
        }
        .card {
            position: relative;
            left: 165px;
        }
        .faq {
            /* color: white; */
            color: black;
        }
        .newreg {
            /* color: white; */
            color: black;
        }
        .about {
            color: white;
        }
    }
    
    .expand {
        /* position: fixed; */
        position: absolute;
        /* bottom: 4%;
				right: 4%;
				top: 4%;
				left: 4%; */
        /* min-width: 50vw !important; */
        min-width: 300%!important;
        min-height: 76vh !important;
        /* margin: 0px 11vw !important; */
        background: white;
        z-index: 8;
        display: flex !important;
        opacity: 1 !important;
        transition: 0.4s ease-in;
    }
    
    .content {
        height: 1px;
        width: 1px;
        overflow: hidden;
        /* margin: 0px 11vw !important; */
        /* background: white; */
        color: black;
        background: #e1e5eb;
        /* color: white; */
        position: fixed;
        /* position: absolute; */
        /* align-items: center;
    			justify-content: center; */
        padding: 35px;
        /* box-shadow: 0 0 25px 0 #00000026; */
        opacity: 0;
        border-radius: 8px;
        transition: 0.4s ease-in;
        z-index: 9999999999999!important;
    }
    
    .content .pp {
        left: -148%!important;
    }
    
    .content.expand .close {
        display: block;
    }
    
    .content .close {
        opacity: 0.8 !important;
        text-align: center;
        display: none;
        position: absolute;
        top: 0;
        right: 0;
        background: #ffffff00;
        color: black;
        width: 30px;
        height: 30px;
        cursor: pointer!important;
    }
    
    .top-right {
        top: 50px;
        /* right: 22px; */
        left: 10%;
    }
    
    .top-left {
        top: 50px;
        left: 22px;
    }
    
    .bg {
        background-color: #fff!important;
    }
    
    .col-md-5 {
        float: left;
    }
    
    body {
        background-color: #fff!important;
    }
    
    .triggerbtn:hover {
        color: #FFFF;
    }
    
    .card-body {
        border: 1px solid #FFF;
        box-shadow: 0 0 22px 0 #00000029;
    }
    
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 35%;
            margin: 1.875rem auto;
        }
    }
    
    .dflex {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .changeclr {
        background: #272360;
        color: #fff;
    }
    
    .example2 {
        overflow: auto;
        margin-left: -8%;
        width: 150%;
        height: 80vh;
    }
    
    .modal-dialog {
        overflow-y: initial !important
    }
    
    #exampleModal2 {
        overflow-y: auto;
    }
</style>

<!-- km -->
<style>
    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 10px 8px 10px 8px;
        color: #cccccc;
    }
    /* STRUCTURE */
    
    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }
    /* 
#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
} */
    /* TABS */
    
    h2.inactive {
        color: #cccccc;
    }
    
    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #017cff;
    }
    /* ANIMATIONS */
    /* Simple CSS3 Fade-in-down Animation */
    
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    
    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }
    
    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }
    /* Simple CSS3 Fade-in Animation */
    
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }
    
    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }
    
    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }
    
    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }
    
    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }
    /* Simple CSS3 Fade-in Animation */
    
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
    }
    
    .underlineHover:hover {
        color: #0d0d0d;
    }
    
    .underlineHover:hover:after {
        width: 100%;
    }
    /* OTHERS */
    
    *:focus {
        outline: none;
    }
    
    #icon {
        width: 60%;
    }
    
    * {
        box-sizing: border-box;
    }
    
    .hidedata {
        display: none;
    }
    
    .input-error,
    .login-error {
        color: red;
        font-size: 12px;
    }
    
    .input-success {
        color: green;
        font-size: 12px;
    }
</style>
<script>
    function ViewSignin() {

        $('.login').removeClass('hidedata');
        $('.signup').addClass('hidedata');
        $('.signUp_btn').removeClass('active');
        $('.signIn_btn').addClass('active');

    }

    function ViewSignup() {
        $('.login').addClass('hidedata');
        $('.signup').removeClass('hidedata');
        $('.signUp_btn').addClass('active');
        $('.signIn_btn').removeClass('active');
    }
</script>