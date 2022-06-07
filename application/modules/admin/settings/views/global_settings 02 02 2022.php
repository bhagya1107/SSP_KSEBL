                
          <?php
          
        
          foreach ($globals as $key => $value) {

            if($value->name=='api_baseurl') $api_baseurl=$value->value;
            
          }
          ?>
                
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-12">
                                            <div class="page-header-title1">
                                                <div class="d-inline1 row">
                                                    <div class="col-lg-6"><h4>Settings</h4></div>
                                                    
                                                    <div class="col-lg-6">
                                                    </div>

                                              </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card querycard">
                                                    <div class="card-header">
                                                        <h4>Add Global Settings</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form id="tg-commentform" class="tg-commentform" method="POST"  action="<?php echo admin_url("settings/save_globals") ?>">

                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                                                                <fieldset>
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>Api Base URL</td>
                                                                            <td><input type="password" id="password"  name="api_baseurl" class="form-control" onclick="viewdata()" value="<?= $api_baseurl;?>"></td>
                                                                        </tr>
                                                                       
                                                                    </table>
                                                                    <div class="form-group">
                                                                        <button class="btn  btn-sm btn-out-dashed btn-info btn-square" type="submit">Save</button>
                                                                    </div>
                                                                </fieldset>
										                    </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Register your self card end -->
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>


            


         
           

            <!--  modal ends -->

            <style>
               @media (min-width: 576px){
                .modal-dialog {
                    max-width: 870px;
                }
               }

               .table_qs{
                width: 100%;
               }
               .table_qs td, .table_qs th {
                /* border: 1px solid #ddd; */
                padding: 3px;
                font-size:15px;
                }
               .img-icon{
                   width:8px!important;
                   
               }
               .pl-50{
                   margin-right:20px;
                   margin-left:20px;
               }
               .m5-50{
                    margin-left:50px;
               }
               li{
                   padding:10px;
               }
               .fa-plus, .fa-minus{
                cursor:pointer;

               }
               .floatright{
                   float:right
               }
               .qyeryrep_card{
                   max-height:500px;
                   overflow:auto;
               }
               table td {white-space: pre-wrap;;}
             
                
            </style>

<script>
function viewdata() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
 
</script>


             