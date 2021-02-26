<!--************************************
		Banner Start
*************************************-->
<style>
.h1{
	color:#171b82
}
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
									<td style="text-align:right"> Name	</td>
									<td><input type="text" readonly class="form-control"  value="Administrator"/>	</td>
								</tr>

								<tr>
									<td style="text-align:right">Mobile	</td>
									<td><input type="text" readonly class="form-control"  value="0004446669"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Email	</td>
									<td><input type="text" readonly class="form-control"  value="abc@gmail.com"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">username	</td>
									<td><input type="text" readonly class="form-control"  value="user"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Password	</td>
									<td><input type="password" readonly class="form-control"  value="Name of person"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Change Password	</td>
									<td><p>
                                            <a style="color:#3343ff" href="<?php echo site_url('supplier/dashboard/forgot_password');?>" title="Reset Password"> Click Here For Change password</a>
                                        </p>	</td>
								</tr>
							</table>
						</div>

				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
			</div>
		</div>
	</div>
</main>
