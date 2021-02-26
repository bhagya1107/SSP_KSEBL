<!--************************************
		Banner Start
*************************************-->
<style>

</style>
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Personal Profile</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Personal Profile</li>
				</ol>
				<br />
			</div>
		</div>
	</div>
</div> -->
<!--************************************
		Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr>
									<td style="text-align:right"> Time Zone	</td>
									<td> 
                           
                            <select class="form-control">
                            <option value="0">
                             Asia/Kolkata
                            </option> <option value="0">
                               Asia/Katmandu
                            </option> <option value="0">
                              Asia/Bangkok
                            </option>
                            <option value="0">
                              Asia/Krasnoyarsk
                            </option>
							 <option value="0">
                               Pacific/Midway
                            </option>
                            </select>
                       </td>
								</tr>
								
								
									<tr>
									<td style="text-align:right">Character Encoding	</td>
									<td><input type="text"  class="form-control"  value=""/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Acessibility</td>
									<td><input type="text"  class="form-control"  value=""/>	</td>
								</tr>
								<tr>
									<td style="text-align:right"> Notification </td>
					<td><input type="radio" style="margin-left: -88px;"  class="custom-control custom-radio custom-control-inline"  name="display_status" id="display_status" checked="" /> &nbsp ON
					 
					<input type="radio" style="margin-left: 108px;"  class="custom-control custom-radio custom-control-inline"  name="display_status" id="display_status" checked="" /> &nbsp OFF
</td>
								</tr>
								<tr>
									<td style="text-align:right">Date Format</td>
									<td> <select class="form-control">
                            <option value="0">
                            MM-DD-YYYY
                            </option> <option value="0">
                             YYYY-MM-DD
                            </option> <option value="0">
                            DD-MM-YYYY
                            </option>
                            
                            </select></td>
									
								</tr>
								<!--<tr>
									<td style="text-align:right">Password</td>
									<td><input type="password"  class="form-control"  value="123"/>	</td>
								</tr>-->
								
								
							</table>
							 <div class="form-group">
                     <button type="submit" class="tg-btn pull-right" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                   </div>
						</div>

				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
$( ".datepicker" ).datepicker({
   format: 'yyyy-mm-dd'
});
</script>
