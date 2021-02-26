<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
                            <tr>
                            <td><h3>Your Subscription Status is Active until 13/11/2021 </h3></td>
                            </tr>
								<tr>
								<td style="text-align:center"> <h4>Registration Date:11/12/2020</h4>	</td>
									
									
								</tr>
								<tr>
									<td style="text-align:center"> <h4>Renewal Date:13/11/2021</h4>	</td>
									
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
