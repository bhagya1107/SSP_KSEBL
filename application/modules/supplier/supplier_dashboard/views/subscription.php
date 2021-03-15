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

@media screen and (max-width: 767px){
        .searchbar{
            display:none;
        }

    }
	
</style>

<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

				<div class="col-md-3 col-sm-4 col-xs-12">
						<?php $this->view('profile_sidebar',$page); ?>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">
					<?php $created_date=$getsubscriptionstatus->created_date;
									$newEndingDate = date("d-m-Y", strtotime(date("Y-m-d", strtotime($created_date)) . " + 365 day"));

									$created_date1=date("d-m-Y", strtotime($created_date))
											?>
					
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tr >
									<td style="text-align:right" class="col-md-6"><b> Your Subscription Status is Active until</b> 	</td>
									<td> 
                           
                           <input type="text" name="" value="<?php echo $newEndingDate;?>" readonly >
                       </td>
								</tr>
								
								
							
								<tr>
									<td style="text-align:right"> Registration Date </td>
					<td>
						<input type="text" name="" value="<?php echo $created_date1;?>" readonly >
							</td>
								</tr>
							
								<tr>
									<td style="text-align:right">Renewal Date</td>
									<td><input type="text" name="" value="<?php echo $newEndingDate;?>" readonly > </td>
									
								</tr>
							
								
								
							</table>
							  
						</div>


				</div>
				
			</div>
		</div>
	</div>
</main>
