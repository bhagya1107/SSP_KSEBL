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
  <main class="d-flex align-items-center m-50">
    <div class="container">
        <!-- <div id="wizard">
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
        </div> -->
     <?php $s=$this->session->set_userdata('supplier',8); ?>  
     <script>
        function validateAndSend() {
            if (regform.companyname.value == '' && regform.individualname.value == '') {
                alert('You have to enter Name.');
                return false;
            }
            // else {
            //   regform.submit();
            // }
        }
    </script>
       <form method="POST" action="<?php echo base_url().'supplier/dashboard/regcompany'?>" id="frm" name="regform"> 
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
      <!-- 'supplier/dashboard/regcompany' -->
      <!-- <?=form_open('');?> -->
      <div class="col-md-3"></div>
          
          <div class="col-md-8">
          <h1>SUPPLIER REGISTRATION</h1>
            <p>
              <h4 class=""> 
                 <input type="radio" id="is_individual" name="comp_type" required checked> &nbsp;Contractor &nbsp; &nbsp; &nbsp;
                <input type="radio" id="is_company" name="comp_type" required > &nbsp;Supplier  
              </h4>
            </p>
    <div class="checkbox-group required">
      
          
      <div class="individualStatus " >
              <h4 class="section-heading"> NAME (AS PER THE PAN CARD)</h4> 
              <p><input type="text" class="form-control" placeholder="Enter Name" name="individualname" id="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" ></p>
            </div>
            <div class="companyStatus hidedata">
              <h4 class="section-heading">COMPANY NAME </h4> 
              <p><input type="text" class="form-control" placeholder="Enter company" name="companyname" id="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" ></p>
            </div>
  </div>
      
            <h4 class="section-heading">PAN CARD NO</h4>
            <p><input type="text" class="form-control" required placeholder="Enter your PAN No" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}" name="pannumber" id="panNumber"  ></p>
            <span class="error"></span>
            <div class="companyStatus hidedata">
            <h4 class="section-heading ">Registration Type </h4>
            <p>
              <select class="form-control" name="registrationtype">
                <option selected disabled >Select</option>  
                <option value="3">Supplier</option>
                <!-- <option value="2">Contractor</option> -->
                <option value="1">Both (Supplier,Contractor )</option>
              </select>           
            </p>
          </div>
            <span class="error"></span>

            <section>
            
              <h4 class="section-heading">Primary contact</h4>
              <div class="form-group">
                <label for="firstName" class="sr-only">Full Name</label>
                <input type="text"  name="firstname" required id="fullName" class="form-control" placeholder="Full Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" >
              </div>
             <!-- <div class="form-group">
                <label for="lastName" class="sr-only">Last Name</label>
                <input type="text" name="lastName" required id="lastName" class="form-control" placeholder="Last Name">
              </div>-->
              <div class="form-group">
                <label for="phoneNumber" class="sr-only">Mobile Number</label>
                <input type="text" name="phonenumber" required id="phoneNumber" class="form-control" placeholder="Mobile Number" pattern="[6789][0-9]{9}">
              </div> 
              <div class="form-group">
                <label for="emailAddress" class="sr-only">Email Address</label>
                <input type="email" name="emailaddress" autocomplete="off" required id="emailAddress" class="form-control" placeholder="Email Address">
              </div>
                <div class="form-group">
                <label for="emailAddress" class="sr-only">User Name</label>
                <input type="text" name="username" autocomplete="off" required id="emailAddress" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group">
                <label for="Password" class="sr-only">Password</label>
                <input type="password" name="password" autocomplete="off" required id="Password" class="form-control" placeholder="Password" >  
                <span id="pwderror" style="color:red;font-size:small"></span>    
              </div>

              <!-- pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->

          </section>

          <label for="">
              <input type="checkbox" name="" id="agree_terms"> I agree to the  <a href="#">Terms and condition</a>
          </label>
          <input type="submit" class="form-control submit" onclick="validateAndSend()" value="Register" disabled>

        </div>
  
        </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/public/register')?>/js/jquery.steps.min.js"></script>
  <script src="<?=base_url('assets/public/register')?>/js/bd-wizard.js"></script>
  <style>
    .hidedata{
      display:none;
    }
    .submit{
      background:#272360 !important;
      color:#fff;
    }
    .m-50{
      margin-bottom:50px;
    }
    .submit:disabled{
      cursor: not-allowed !important;
    }

    .error{
      color:red;
    }
    .navbar-light .navbar-brand img{
      height:50px!important;
    }

    .navbar{
      padding:0px;
    }
  </style>
  <script>
    $('#is_company').click(function(){
      $('.companyStatus').removeClass('hidedata');
    });
    $('#is_individual').click(function(){
      $('.companyStatus').addClass('hidedata');
    });
   $('#is_individual').click(function(){
      $('.individualStatus').removeClass('hidedata');
    });
   $('#is_company').click(function(){
      $('.individualStatus').addClass('hidedata');
    });
    $('#agree_terms').click(function(){
            if($(this).prop("checked") == true){
              $('.submit').prop('disabled',false);
            }
            else if($(this).prop("checked") == false){
              $('.submit').prop('disabled',true);
            }
    });
    // $('.submit').click(function(e){

     
    //   $('.error').html("");
    //   e.preventDefault();
    //   var panVal = $('#panNumber').val();
    //   var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

    //   if(!regpan.test(panVal)){
    //     $('.error').html("Invalid Pan Number");
    //     return;
    //   } 
    //   $('form').submit();
     
    // });

    // $('#registerbtn').click(function(e){
    //   e.preventDefault();
    //   alert();
    //    $.post("<?php echo site_url('supplier/dashboard')?>", {
    //      <?php echo $this->security->get_csrf_token_name();?>: "<?php echo $this->security->get_csrf_hash()?>"
    //     }, function(data) {
    //       alert();

    //     })
    //    });

  
  </script>
  <script>
    $('#frm').submit(function(e){
      e.preventDefault();
      var password=$('#Password').val();
      $('#pwderror').text("");

      var validated =  true;
        if(password.length < 8)
            validated = false;
        if(!/\d/.test(password))
            validated = false;
        if(!/[a-z]/.test(password))
            validated = false;
        if(!/[A-Z]/.test(password))
            validated = false;
        // if(/[^0-9a-zA-Z]/.test(password))
        //     validated = false;

      $('#pwderror').text(validated ? "" : "Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");


      if(validated){
        $('#frm')[0].submit();
      }
      

    });
  
  </script>
  
  
  
   
</body>
</html>
