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
    <title>final</title>
    <!-- write your code here -->
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="final.js"></script>
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
		
		
		
		
    </script>
    <!-- write your code here -->
	<style>
.triggerbtn:active , .triggerbtn:focus , .triggerbtn:hover{
				background-color:#272360;
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

			.about,
			.supplier,
			.newreg {
				/* cursor:pointer;
	width:200px;
	text-align:center;
    color: white;
    background: #2196F3;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 22px 0 #00000029; */
				/* cursor: pointer;
    text-align: center;
    color: white;
    background: #0e214c;
    padding: 12px;
    border-radius: 5px;
    box-shadow: 0 0 22px 0 #00000029; */
			}

			.newreg {
				/* position: absolute;
    top: 0px;
		right:0px; */
				cursor: pointer;
				text-align: center;
				color: #343434;
				padding: 12px;
				border-radius: 5px;
			}

			.faq {
				/* position: absolute;
    top: 0px;
		right:0px; */
				cursor: pointer;
				text-align: center;
				color: #ffffff;
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
				right: 0px;
				display: flex;
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
					color: #ffffff;
					padding: 12px;
					border-radius: 5px;
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
					position: relative !important;
					left: 165px !important;
				}

				.faq {
					color: white;
				}

				.newreg {
					color: white;
				}

				.about {
					color: white;
				}
			}

			/* .about{
	position: absolute;
    top: 50%;
    right: 0;
    margin: 50px;
    color: white;
    background: #2196F3;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 22px 0 #00000029;
} */

			.expand {
				/* position: fixed; */
				position: absolute;
				/* bottom: 4%;
    right: 4%;
    top: 4%;
    left: 4%; */
				width: 70vw !important;
				height: 82vh !important;
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
				/* color: black; */
				background: #ffffff4f;
				color: white;
				/* position: fixed; */
				position: absolute;
				/* align-items: center;
    justify-content: center; */
				padding: 35px;
				box-shadow: 0 0 25px 0 #00000026;
				opacity: 0;
				border-radius: 8px;
				transition: 0.4s ease-in;
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
				color: white;
				width: 30px;
				height: 30px;
			}

			.top-right {
				top: 50px;
				right: 22px;
			}

			.top-left {
				top: 50px;
				left: 22px;
			}

			.bg {
				background-image: linear-gradient(135deg, transparent 0%, transparent 15%, rgb(14 33 76 / 0.5) 15%, rgb(14 33 76 / 0.5) 33%, transparent 33%, transparent 79%, rgb(14 33 76 / 0.5) 79%, #0e214c80 100%), linear-gradient(45deg, transparent 0%, transparent 42%, rgb(14 33 76 / 0.8) 42%, rgb(14 33 76 / 0.8) 77%, rgb(18 44 104 / 0.8) 77%, #0e214c 87%, transparent 87%, transparent 100%), linear-gradient(90deg, rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)) !important;
				/* background-image: linear-gradient(135deg, transparent 0%, transparent 15%,rgb(14 33 76 / 0.5) 15%, rgb(14 33 76 / 0.5) 33%,transparent 33%, transparent 79%,rgb(14 33 76 / 0.5) 79%, #0e214c80 100%),linear-gradient(45deg, transparent 0%, transparent 42%,#0e214c 42%, #0e214c 77%,#122c68 77%, #0e214c 87%,transparent 87%, transparent 100%),linear-gradient(90deg, rgb(255 255 255 / 0%),rgb(255 255 255 / 0%)) !important; */
				/* background-image: linear-gradient(135deg, transparent 0%, transparent 15%,rgb(14 33 76 / 0.5) 15%, rgb(14 33 76 / 0.5) 33%,transparent 33%, transparent 79%,rgb(14 33 76 / 0.5) 79%, #0e214c80 100%),linear-gradient(45deg, transparent 0%, transparent 42%,#0e214c 42%, #0e214c 77%,#122c68 77%, #0e214c 87%,transparent 87%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255)) !important; */

			}


</style>

	
</head>

<body onload="init();" style="margin:0px;">
    <div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:5500px; height:5500px;float:right">
        <canvas id="canvas" width="5500" height="5500" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
        <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:5500px; height:5500px; position: absolute; left: 0px; top: 0px; display: block;">
        </div>
	
<body class="h-100"
	style="background-size: cover;background-position: center;background-repeat: no-repeat;">

	<div class="container-fluid icon-sidebar-nav h-100 bg">
		<div class="row h-100">

	
	
			<img class="auth-form__logo d-table mx-auto mb-3" src="<?=base_url('assets/logo.png')?>" 
										alt="Shards Dashboards - Register Template"
										style=" border-radius: 5px; background: white; width: 100px; padding: 17px; ">
									
									<?=form_open('supplier/home/admin_login');?>
									<div class="ttm">
					<div class="newreg triggerbtnx" onclick="window.location='<?=base_url('register')?>'">
						<span>

							<i class="fas fa-sign-in-alt"></i>
							SUPPLIER SIGNUP</span>
					</div>
					<div class="faq triggerbtn">
						<span>
							<i class="fas fa-question-circle"></i>
							FAQ</span>
					</div>
					<div class="top-right content">
						<div class="close" onclick="closex()">x</div>
						asdas dasd as dasd asdas123
					</div>
				</div>
			<div class="main-content-container container-fluid px-4 my-auto h-100">
					<div class="row no-gutters h-100">

						<div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
							<div class="card" style=" background: transparent; box-shadow: none !important;">
								<div class="card-body" >
									<img class="auth-form__logo d-table mx-auto mb-3" src="<?=base_url('assets/logo.png')?>" 
										alt="Shards Dashboards - Register Template"
										style=" border-radius: 5px; background: white; width: 100px; padding: 17px; ">
									<h5 class="auth-form__title text-center mb-4" style=" color: black; ">Access Your Account</h5>
									<?=form_open('supplier/home/admin_login');?>
									<div class="form-group dflex" style="color: white;">
										<label for="exampleInputEmail1" style=" min-width: 70px; color:black">Username</label>
										<input type="text" class="form-control w-300" name="username" id="username"
											aria-describedby="emailHelp" placeholder="Username">
									</div>
									<div class="form-group dflex" style="color: white;">
										<label for="exampleInputPassword1" style=" min-width: 70px;color:black">Password</label>
										<input type="password" class="form-control w-300" id="password" placeholder="password"
											name="password">
									</div>
									<div class="form-group mb-3 d-table mx-auto dflex">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" id="customCheck2">
											<label class="custom-control-label" for="customCheck2" style="color: black;">Remember me for 30 days.</label>
										</div>
										<div class="auth-form__meta d-flex mt-4" style="color:black">
								<a href="<?=base_url('forgot_pasword')?>" style="color:black">Forgot your password?</a>
							</div>


										<span style="color:red"> <br />   <?php
											$er= $this->session->flashdata("error");
										 echo $this->session->flashdata("error");
											if($er)
											{
											//  print '<script>alert("error")</script>';
											}
											?>
										</span>
									</div>

									<button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Access Account</button>
									</form>
								</div>
								<!-- <div class="card-footer border-top">
									<ul class="auth-form__social-icons d-table mx-auto">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-github"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div> -->
							</div>
							<!-- <div class="auth-form__meta d-flex mt-4">
								<a href="forgot-password.html">Forgot your password?</a>
								<a class="ml-auto" href="register.html">Create new account?</a>
							</div> -->
						</div>
					</div>
				</div>
				<div class="btm" style="position:fixed">

				<div style="position:relative">
					<div class="creps triggerbtn">
						<span>Corporate Responsibility</span>
					</div>
					<div class="bottom-left content">
						<div class="close" onclick="closex()">x</div>
						asdas dasd aqw3421s dasd asdas das d
					</div>
					</div>
					<div style="position:relative">
					<div class="stds triggerbtn">
						<span>Standards</span>
					</div>
					<div class="bottom-left2 content">
						<div class="close" onclick="closex()">x</div>
						asdas dasd 5as 5555 asdas das d
					</div>
					</div>
					<div style="position:relative">
					<div class="pln triggerbtn">
						<span>Procurement Plan</span>
					</div>
					<div class="bottom-left3 content">
						<div class="close" onclick="closex()">x</div>
						asdas dasd 5as 5555 asdas das d
					</div>
					</div>
				</div>
			</main>
			
    </div>
		</div>
	</div>
	
	
				<!-- </div> -->
				<!-- <div class="floating-right"> -->
				
				<!-- <div class="chatbot triggerbtn">
						<span>Chatbot</span>
					</div> -->
				<!-- <div class="content">
						<div class="close" onclick="closex()">x</div>
						asdas dasd as dasd asasd
						</div> -->
				<!-- </div> -->
				<style>
				.dflex {
					display: flex;
					align-items: center;
					justify-content: center;
				}
				</style>
				
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
	function closex() {
		var x = $(document).find('.expand');
		x.removeClass('expand');
		// x.fadeOut();
	}


// to close the modal outside the div
	$(document).mouseup(function(e) 
	{

		//alert();
		var container = $(document).find('.expand');

		// if the target of the click isn't the container nor a descendant of the container
		if (!container.is(e.target) && container.has(e.target).length === 0) 
		{
			container.removeClass('expand');
		}
	});

	// km
	
	$('.triggerbtn').click(function() {

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
				
</body>
</html>