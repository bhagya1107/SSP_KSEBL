<!doctype html>
<html class="no-js h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
	<meta name="description"
		content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
		href="<?=base_url('assets/public/')?>styles/shards-dashboards.1.1.0.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/public/')?>styles/extras.1.1.0.min.css">
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body class="h-100">

	<div class="container-fluid icon-sidebar-nav h-100">
		<div class="row h-100">
			<!-- Main Sidebar -->

			<!-- End Main Sidebar -->
			<main class="main-content col">
				<div class="main-content-container container-fluid px-4 my-auto h-100">
					<div class="row no-gutters h-100">
						<div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
							<div class="card">
								<div class="card-body" style="background:#272360">
									<img class="auth-form__logo d-table mx-auto mb-3" src="images/shards-dashboards-logo.svg"
										alt="Shards Dashboards - Register Template">
									<h5 class="auth-form__title text-center mb-4">Access Your Account</h5>
									<?=form_open('supplier/home/admin_login');?>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"
												placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="password" placeholder="password" name="password">
										</div>
										<div class="form-group mb-3 d-table mx-auto">
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
							<div class="auth-form__meta d-flex mt-4">
								<a href="forgot-password.html">Forgot your password?</a>
								<a class="ml-auto" href="register.html">Create new account?</a>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
	<script src="<?=base_url('assets/public/')?>scripts/extras.1.1.0.min.js"></script>
	<script src="<?=base_url('assets/public/')?>scripts/shards-dashboards.1.1.0.min.js"></script>
	<script src="<?=base_url('assets/public/')?>scripts/app/app-blog-overview.1.1.0.js"></script>
</body>

</html>