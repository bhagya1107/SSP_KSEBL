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
                            <td><h3>Access Permission</h3></td>
                            </tr>
								
							</table>
						</div>
						<div>
						 <div class="form-group" style="width:200px;">
                     <label>User Type</label>
                     <select class="form-control">
					 <option value="0">
                        Select All
                       </option>
                      <option value="0">
                         Accounts Manager
                       </option> <option value="0">
                         Delivery Manager
                       </option>
                       <option value="0">
                         Basic User
                       </option>
                     </select>
                   </div>
				   <div class="row">
						<div class="col-md-3">
							<input type="checkbox" id="accounts" name="accounts" value="accounts Mager">
  <label for="accounts"style="margin-top:-21px;margin-left:27px;"> Procurement Plan</label><br>
						</div>
						
						<div class="col-md-3">
							<input type="checkbox" id="delivery" name="delivery" value="delivery Mager">
  <label for="delivery" style="margin-top:-21px;margin-left:27px;"> Tenders</label><br>
  </div>
  
  <div class="col-md-3">
  <input type="checkbox" id="delivery" name="delivery" value="delivery Mager">
  <label for="delivery" style="margin-top:-21px;margin-left:27px;"> My Tenders</label><br>
  </div>
  
  <div class="col-md-3">
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Purchase Order</label><br>
  </div>
  
  <div class="col-md-3">
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Delivery</label><br>
  </div>
  
   <div class="col-md-3">
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Accounts</label><br>
  </div>
  
   <div class="col-md-3">
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Invoices</label><br>
  </div>
  
   <div class="col-md-3">
  <input type="checkbox" id="Basic" name="Basic" value="Basic Manager">
  <label for="Basic" style="margin-top:-21px;margin-left:27px;"> Payments</label><br>
  </div>
  <div class="form-group">
                            <button type="submit" class="tg-btn pull-center editbutton" id="editprofilefn" style="margin-left:243px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Submit</span></button>

									</div>
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
