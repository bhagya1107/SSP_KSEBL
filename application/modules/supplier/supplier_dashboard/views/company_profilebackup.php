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
					<h1>Profile</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Profile</li>
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
									<td style="text-align:right">Company Name	</td>
									<td><input type="text" readonly class="form-control"  value="Havells India Ltd"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Registred Date	</td>
									<td><input type="text" readonly class="form-control"  value="20/08/2020"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Renewal Date	</td>
									<td><input type="text" readonly class="form-control"  value="19/08/2021"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">GST/TIN	</td>
									<td><input type="text" readonly class="form-control"  value="GST55554556"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Company Address	</td>
									<td><input type="text" readonly class="form-control"  value="Test Address"/>	</td>
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
									<td style="text-align:right">Website	</td>
									<td><input type="text" readonly class="form-control"  value="www.havells.com"/>	</td>
								</tr>
								<tr>
									<td style="text-align:right">Autorized Person	</td>
									<td><input type="text" readonly class="form-control"  value="Name of person"/>	</td>
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
