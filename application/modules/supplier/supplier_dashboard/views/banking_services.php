<style>
.h1{
	color:#171b82
}

/* width */
::-webkit-scrollbar {
  width: 0px;
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
        /* .searchbar{
            display:none;
        } */
        div.scrollmenu {
        width :100%;
        /* overflow: auto;
        white-space: nowrap; */
        }
        .one_line {
      
      width: 50%!important;
      display:table-cell;
      padding:0 16px;
                          
          }

    }

    .col-md-5 {
          width: 41.66666667%;
          float:left;
      }
    
</style>
<script>

        setTimeout(function() {
            $('#mydivss').hide('fast');
        }, 1000);
   
</script>

                    <?php 
                            $msg=$this->session->flashdata('msg');  
                            if($msg)
                            {
                            ?>
                            
                            <div class="alert alert-success" id="mydivss">
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

                    <div class="row1 col-md-12">
                        <form method="post" id="p" enctype="multipart/form-data" action="<?php echo base_url('supplier/dashboard/insert_bank_details')?>" >
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                        <div class="col-md-5 scrollmenu" style="border: 1px solid #CCC;height:600px!important;">
                        <br />
                        <div class="form-group">
                        <input type="hidden" id="productcategory" value="1"> 
                            <label>Select Bank</label>

                            <select class="form-control materialdata" id="materialinput" placeholder="Company name" name="bank" required >
                            <?php if($materialdata!="") { ?>
                                                    <option value="">Select Bank </option>
                                                    <?php }else{ ?>
                                                        <option value=""> <p class="apidropdown"><?php echo api_error_message(); ?></p></option>
                                                  <?php } ?>
                                                        <?php foreach ($materialdata as $materialdatas) { ?>
                                                    <option value="<?php echo $materialdatas->material_group_code; ?>">
                                                        <?php echo $materialdatas->material_group_name; ?></option>
                                                <?php } ?>
                                               
                          </select>

                            <!-- <select class="form-control" name="bank"> 
                            
                                 
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
                            </select> -->
                        </div>

                        <div class="form-group">
                            <label>Branch Name</label>
                            <select class="form-control material" id="material" placeholder="Year of  registration" name="branch" required>
                            <?php if($materialdata!="") { ?>
                                                    <option value="">Select Branch</option>
                                                    <?php }else{ ?>
                                                        <option value=""> <p class="apidropdown"><?php echo api_error_message(); ?></p></option>
                                                  <?php } ?>
                            </select>

                              <!-- <select class="form-control" name="branch">
                             
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
                            </select> -->
                        </div>

                        <div class="form-group">
                            <label>IFSC Code</label>
                            <input type="text" class="form-control"  name="ifsc" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Account No</label>
                            <input type="number" class="form-control" id="accountno" name="accountno" required />
                        </div>
                       <div class="form-group">
                            <label>Cancel Cheque Leaf/Letter From Bank<br>(pdf up to 10mb)</label>
                            <input type="file" class="form-control" name="file" />
                        </div>
                        
                        <div class="form-group">
                            <button type="submit"  value="submit" name="submit" class="tg-btn one_line"  id="subbtnn" onclick="myFunction()" ><span>Save</span></button>
                            <button type="reset" value="cancel" id="cnbtnn" style="background-color: #ff6666!important; "  name="cancel" class="tg-btn pull-right one_line" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987"><span>Clear</span></button>
                        
                        </div>
                        </div>
                        </form>

                       <!-- <script>
                        function myFunction() {
                                document.getElementById("subbtnn").style.display = "none";

                                $('#subbtnn').css('display','none');
                                $('#cnbtnn').css('display','none');
                                                               }
                           
                        </script>  -->
                        
                      
                        <!-- <div class="col-md-7" > -->
                            <div class="table-responsive" style="padding-left:10px">
                            <table class="table table-bordered table-hover" style="<?php if($getbankdetails1=='') echo "display: none;" ?>" >
                                <thead>
                                <tr style="background-color:#26265f ;color:#FFF ">
                                    <th>Sl No</th>
                                    <th>Bank</th>
                                    <th>Branch</th>
                                    <th>IFSC</th>
                                    <th>Account No</th> 
                                    <th>Document</th> 
                                    <th>Status</th>
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
                                    <td> <?php if($value->document=='')
                                    { ?>
                                        <p>No Document</p>
                                  <?php   }
                                  else
                                  { ?>
                                    <a target="_blank" style="<?php if($value->document=='') echo "display: none;" ?>" href="<?php echo site_url('uploads/bank_details/'.$value->document)?>"  ><i class="icofont icofont-eye-alt"></i>View </a>
                                 <?php  }
                                    ?>

                
                                    </td>
                                     <td><?php if($value->is_approved==1)
                                    { ?>
                                        <p>Approved</p>
                                  <?php   }
                                  else
                                  { ?>
                                    <p>Waiting for Approval</p>
                                 <?php  }
                                    ?>
                                    </td>

                                    <td><a href="<?php echo base_url('supplier/dashboard/delete/'.$value->id)?>" onclick="return confirm('Are you sure, you want to delete it?')"><span style="color:red"><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>

                                </tr>
                            <?php $i++; } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    <!-- </div> -->


<!-- 
				</div>
			
			</div>
		</div>
	</div>
</main> -->

<script>
    var materiallistdata = {};

    $(".materialdata").change(function() {
        var materialgroup = $('#materialinput').val();
        var productcategory = $('#productcategory').val();
        console.log(materialgroup);
        console.log(productcategory);
        if (materialgroup != "" && productcategory != "") {
            var load = '<option value="">Loading...</option>';
            $('#material').html(load);
            $.post("<?php echo site_url('supplier/dashboard/getMaterialProductsDetails'); ?>", { 
                    materialgroup: materialgroup,
                    productcategory: productcategory,
                    <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash() ?>"
                
                },
                function(data) {
                       var res = JSON.parse(data);
                    console.log(res);
                    var html = '<option value="">Select Branch</option>';

                    res.forEach(function(item, index) {
                        html += '<option value="' + item.id + '" data-name="' + item.material_name + '">' + item.material_name + '</option>';
                    });
                    console.log(html);
                    $('#material').html(html);
                    $('#savemicro').removeAttr("disabled");
                    $(".ajaxLoader").css("display", "none");
                }); 
        }

    });

</script>
