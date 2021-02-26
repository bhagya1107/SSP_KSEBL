<!doctype html>
<html class="no-js h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SSP HOME</title>
	<meta name="description"
		content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/cdns/')?>bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
		href="<?=base_url('assets/public/')?>styles/shards-dashboards.1.1.0.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>styles/extras.1.1.0.min.css">
	<script async defer src="<?=base_url('assets/cdns/')?>buttons.js"></script>
</head>

<!-- <body class="h-100 "  > -->

<body class="h-100"
	style="background:url('<?=base_url('assets/public/bg1.jpg')?>');background-size: cover;background-position: center;background-repeat: no-repeat;">

	<div class="container-fluid icon-sidebar-nav h-100 bg">
		<div class="row h-100">
			<!-- Main Sidebar -->

			<!-- End Main Sidebar -->
			<style>
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



			<main class="main-content col">
				<!-- <div class="floating"> -->
				<div class="about triggerbtn">
					<span>
						<i class="fas fa-info-circle"></i> About SSP</span>
				</div>
				<div class="top-left content">
					<div class="close" onclick="closex()">x</div>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, repellendus quis quidem, quaerat nemo
					molestias fugiat harum nisi facere dolores corrupti pariatur possimus aut quo atque voluptates laborum.
					Doloremque totam reiciendis quidem dolores necessitatibus, consequuntur laudantium ducimus ullam consectetur.
					Veritatis neque nemo excepturi sed tempora omnis similique fugit sapiente voluptatem facilis, laudantium
					aperiam repellendus iste mollitia enim, eaque debitis ipsa ea asperiores pariatur. Consequatur numquam tenetur
					voluptatibus nobis a vel quas odio cupiditate soluta sapiente. Et ab, deserunt, repellendus facilis vitae
					perspiciatis excepturi repudiandae tempore in voluptatibus quo aut. Debitis repellendus autem minus, soluta
					sit dolorem. Odio facere eaque sunt.
				</div>
				<div class="btm">
				
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
				<!-- </div> -->
				<!-- <div class="floating-right"> -->
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
				<div class="main-content-container container-fluid px-4 my-auto h-100">
					<div class="row no-gutters h-100">

						<div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
							<div class="card" style=" background: transparent; box-shadow: none !important;">
								<div class="card-body">
									<img class="auth-form__logo d-table mx-auto mb-3" src="<?=base_url('assets/logo.png')?>"
										alt="Shards Dashboards - Register Template"
										style=" border-radius: 5px; background: white; width: 100px; padding: 17px; ">
									<h5 class="auth-form__title text-center mb-4" style=" color: white; ">Access Your Account</h5>
									<?=form_open('supplier/home/admin_login');?>
									<div class="form-group dflex">
										<label for="exampleInputEmail1" style=" min-width: 70px; ">Email</label>
										<input type="text" class="form-control w-300" name="username" id="username"
											aria-describedby="emailHelp" placeholder="Enter email">
									</div>
									<div class="form-group dflex">
										<label for="exampleInputPassword1" style=" min-width: 70px; ">Password</label>
										<input type="password" class="form-control w-300" id="password" placeholder="password"
											name="password">
									</div>
									<div class="form-group mb-3 d-table mx-auto dflex">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" id="customCheck2">
											<label class="custom-control-label" for="customCheck2">Remember me for 30 days.</label>
										</div>
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
			</main>
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
	function closex() {
		var x = $(document).find('.expand');
		x.removeClass('expand');
		// x.fadeOut();
	}
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
	<!--End of Tawk.to Script-->
</body>

</html>