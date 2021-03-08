                
                
                
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
                                                    <div class="col-lg-6"><h4>Form Engine</h4></div>
                                                    
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
                                                        <h4>Add New Query</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form id="tg-commentform" class="tg-commentform" method="POST"  action="<?php echo admin_url("procurement/saveform_engine") ?>">

                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                                                                <fieldset>
                                                                    <!-- <input type="hidden" name="tenderId" value="<?php echo $tenderId;?>"> -->
                                                                    <div class="form-group">
                                                                        <label>Query</label>
                                                                        <textarea  name="question" class="form-control" required ></textarea>
                                                                        <!-- <input type="text" name="question" class="form-control" placeholder="" required> -->
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Type</label>
                                                                            <select class="form-control" name="type_id" onchange="GetDynamicfieldBox(this.value);"> 
                                                                                <option>Select </option>
                                                                                <?php 

                                                                                foreach ($form_types as $key => $value) {
                                                                                    echo "<option value='$value->type!$value->id'>$value->label</option>";
                                                                                }
                                                                                
                                                                                ?>
                                                                                 
                                                                                
                                                                            </select>                                                                    
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div id="dymaicfield" ></div>
                                                                    </div>
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
                                            <div class="col-sm-6">
                                                <div class="card qyeryrep_card">
                                                    <div class="card-header">
                                                      <h4>Query Repository</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <?php
                                                        $i=1;
                                                        echo "<table class='table_qs'>";
                                                        if($form_questions){
                                                            $qs=array_unique($form_questions['question']) ;
                                                            $qsId=array_unique($form_questions['questionid']) ;
                                                            // print_r($qs);print_r($qsId);
                                                            // print_r(array_unique($qs));print_r($qsId);

                                                            foreach ($qs as $key => $value) {
                                                                $questionId=$qsId[$key];

                                                                
                                                                echo    "<tr>
                                                                            <td>$i</td>
                                                                            <td>".ucfirst($value)."</td>

                                                                        </tr>";

                                                            if($form_questions['option_list']){
                                                                
                                                                $Listoption=$form_questions['option_list'][$key];
                                                                echo    "<tr>
                                                                            <td></td>
                                                                            <td>$Listoption</td>
                                                                            
                                                                        </tr>";
                                                            }


                                                

                                                            
                                                            $i++;
                                                            
                                                            }
                                                        }
                                                        echo "</table>";

                                                        ?>
                                                    </div>
                                                </div>
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


          <script>
            function GetDynamicfieldBox(inputtext){

                var inputArray=inputtext.split('!');
                var inputtype=inputArray[0];
                var inputtypeId=inputArray[1];
                
                $.ajax({
                type: "POST",
                url: '<?php echo admin_url("procurement/generateformfields") ?>',
                data:{
                    inputtype: inputtype,
                    inputclass : "form-control"

                } ,
                success: function(result){
                    console.log(result);
                    // alert(inputtype);
                    if(inputtypeId=='5' || inputtypeId =='4' || inputtypeId=='3')
                    $('#dymaicfield').html(result);
                }    
              });
            }

            function addOptions($thiss,$value){
              
                var ids = $($thiss).attr('id');
                var newids=parseInt(ids)+1;
                $('#'+ids).attr("placeholder","Option "+ids);
                $('#'+ids).attr("onclick", "").unbind("click");

              
                $AppendField="<input type='text'  name='attributes[]' placeholder='Add Option' class='no-border form-control' onclick=addOptions(this,'"+$value+"') id='"+newids+"'>";
                   
             
               $("#dymaicfield").append($AppendField);
            
            }
           

           
           
           



            
          </script>   


         
           

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

             