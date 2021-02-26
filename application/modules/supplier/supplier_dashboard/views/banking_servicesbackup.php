
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
			<div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">

                    <div class="row">
                        <div class="col-md-5" style="border: 1px solid #CCC;">
                        <br />
                        <div class="form-group">
                            <label>Select Bank</label>
                            <select class="form-control">
                            <option value="0">
                                SBI
                            </option> <option value="0">
                                Federal Bank
                            </option> <option value="0">
                                ICICI
                            </option>
                            <option value="0">
                                Central Bank of India
                            </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Branch Name</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>IFSC Code</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Account No</label>
                            <input type="text" class="form-control" />
                        </div>

                        
                        <div class="form-group">
                            <button type="submit" class="tg-btn pull-right" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Save</span></button>
                        </div>
                        </div>
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
                                    <th>Delete</th>
                                
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SBI</td>
                                    <td>TVM</td>
                                    <td>SBIN00234A</td>
                                    <td>SB00008756780</td>
                                    <td><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></td>

                                </tr>
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
