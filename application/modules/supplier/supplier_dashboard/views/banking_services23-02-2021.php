<style>
.h1{
	color:#171b82
}

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
 <?php 
        $msg=$this->session->flashdata('msg'); 
        if($msg)
        {
          ?>
          
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?php
           echo $msg;
            ?>
          </div>
        
        <?php 
        }
        ?>

                    <div class="row">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('supplier/dashboard/insert_bank_details')?>" >
                            
                        <div class="col-md-5" style="border: 1px solid #CCC;">
                        <br />
                        <div class="form-group">
                            <label>Select Bank</label>
                            <select class="form-control" name="bank">
                            <option value="SBI">
                                SBI
                            </option> <option value="Federal Bank">
                                Federal Bank
                            </option> <option value="ICICI">
                                ICICI
                            </option>
                            <option value="Central Bank of India">
                                Central Bank of India
                            </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Branch Name</label>
                              <select class="form-control" name="branch">
                            <option value="Thampanoor">
                                Thampanoor
                            </option> <option value="Pattom">
                                Pattom
                            </option> <option value="Kazhakootam">
                               Kazhakootam
                            </option>
                            <option value="Palayam">
                                Palayam
                            </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>IFSC Code</label>
                            <input type="text" class="form-control"  name="ifsc" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Account No</label>
                            <input type="number" class="form-control" name="accountno" required />
                        </div>
                       <div class="form-group">
                            <label>Cancel Cheque Leaf/Letter From Bank</label>
                            <input type="file" class="form-control" name="file" />
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" value="submit" name="submit" class="tg-btn pull-right" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                        </div>
                        </div>
                        </form>
                        <div class="col-md-7">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#26265f ;color:#FFF ">
                                    <th>Sl No</th>
                                    <th>Bank</th>
                                    <th>Branch</th>
                                    <th>IFSC</th>
                                    <th>Account No</th> 
                                    <th>Document</th> 
                                    <th>Delete</th>
                                
                                </tr>
                                </thead>
                                <tbody>

                                     <?php 
                                     $i=1;
                                     foreach ($getbankdetails as $key => $value) {

                                     ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $value->bankname;?></td>
                                    <td><?php echo $value->branchname;?></td>
                                    <td><?php echo $value->ifsccode;?></td>
                                    <td><?php echo $value->accountno;?></td>
                                    <td> <a target="_blank" style="<?php if($value->document=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/bank_details/'.$value->document)?>"  ><i class="icofont icofont-eye-alt"></i>View </a></td>

                                    <td><a href="<?php echo base_url('supplier/dashboard/delete/'.$value->id)?>" onclick="return confirm('Are you sure, you want to delete it?')"><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>

                                </tr>
                            <?php $i++; } ?>
                                </tbody>
                            </table>
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
