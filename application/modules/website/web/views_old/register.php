<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SSP REGISTRATION</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/public/register')?>/css/bd-wizard.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?=base_url('assets/logo.png')?>" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('');?>">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="d-flex align-items-center">
    <div class="container">
        <div id="wizard">
          <h3>Step 1</h3>
          <section>
           <h5 class="bd-wizard-step-title">Step 1</h5>
           <h3 class="section-heading">Agree terms and conditions </h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						<label for="">
							<input type="checkbox" name="" id=""> I agree to the terms and conditon
						</label>
          </section>
          <h3>Step 2</h3>
          <section>
           <h5 class="bd-wizard-step-title">Step 2</h5>
           <h2 class="section-heading">COMPANY NAME </h2>
           <p><input type="text" class="form-control" placeholder="Enter company" name="" id=""></p>
           <h2 class="section-heading">PAN CARD </h2>
           <p><input type="text" class="form-control" placeholder="Enter your pan" name="" id=""></p>
          </section>
          <h3>Step 3</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 3</h5>
            <h2 class="section-heading">Primary contact</h2>
            <div class="form-group">
              <label for="firstName" class="sr-only">First Name</label>
              <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="lastName" class="sr-only">Last Name</label>
              <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="phoneNumber" class="sr-only">Phone Number</label>
              <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <label for="emailAddress" class="sr-only">Email Address</label>
              <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <label for="Password" class="sr-only">Password</label>
              <input type="password" name="password" id="Password" class="form-control" placeholder="Email password">
            </div>
          </section>
        </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/public/register')?>/js/jquery.steps.min.js"></script>
  <script src="<?=base_url('assets/public/register')?>/js/bd-wizard.js"></script>
</body>
</html>
