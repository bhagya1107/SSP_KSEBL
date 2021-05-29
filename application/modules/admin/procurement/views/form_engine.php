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
                                                    <div class="col-lg-6"><h4>Form Engine</h4>
                                                    <br>
                                                     <h5>TENDER NUM:<?php echo $tendernum ?></h5> 
                                                    </div>
                                                    
                                                    <?php 
                                                    $count =0;
                                                    if($form_questions){
                                                        foreach ($form_questions['question'] as $key => $value) {
                                                            if($form_questions['tenderid'][$key] != "$tenderId"){
                                                                continue;
                                                            }

                                                            $count++;
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-lg-6 row" style="float:right">

                                                        <div class="col-lg-9">
                                                        
                                                            <button id="" class="btn  btn-sm btn-out-dashed btn-primary btn-square"  style="float:right" onclick="ImportTemplateOnLoad();">Import Template</button>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <button id="preview" class="btn  btn-sm btn-out-dashed btn-info btn-square" style="float:right">Preview <span class="badge badge-light"><?php echo $count;?></span></button>
                                                        </div>
                                                    </div>

                                              </div>
                                            </div>
                                            <div class="col-lg-12" style="float-right">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="<?php echo admin_url();?>dashboard"> <i class="feather icon-home"></i> </a>
                                                        </li>

                                                        <li class="breadcrumb-item"><a href="<?php echo admin_url("procurement/tenders") ?>">Procurement</a>
                                                        </li>
														 <li class="breadcrumb-item"><a href="#!">Form Engine</a>
                                                        </li>
                                                    </ul>
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
                                                                    <input type="hidden" name="tenderId" value="<?php echo $tenderId;?>">
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
                                                            $qs=array_unique($form_questions['question']);
                                                            // print_r($qs);
                                                            // print_r($tenderIds_qs);
                                                            foreach ($qs as $key => $value) {
                                                                $color="";
                                                                $questionId=$form_questions['questionid'][$key];
                                                                $tdrow="";

                                                                $tdrow="<td class='addquestion' id='$questionId'><i class='fa fa-plus' aria-hidden='true' data-toggle='tooltip' title='Add this question to current Tender!'></i></td>
                                                                ";
                                                                // if($form_questions['tenderid'][$key] == "$tenderId"){
                                                                //     $color="style='background:#2dcee3'";
                                                                //     $tdrow="<td></td>";
                                                                // }

                                                                if(in_array($questionId,$tenderIds_qs)){
                                                                    $color="style='background:#2dcee3'";
                                                                    $tdrow="<td></td>";
                                                                }
                                                                
                                                                echo    "<tr $color>
                                                                            <td>$i</td>
                                                                            <td>".ucfirst($value)."</td>
                                                                            $tdrow
                                                                        </tr>";

                                                            if($form_questions['option_list']){
                                                                
                                                                $Listoption=$form_questions['option_list'][$key];
                                                                echo    "<tr $color>
                                                                            <td></td>
                                                                            <td>$Listoption</td>
                                                                            <td></td>
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
            $('#preview').click(function(e){
                e.preventDefault();
                $("#categorysavemessage").html("");
                $('#myModal').modal();
                $('.template_name').addClass('hidedata');
            });

            $( function() {
                $( "#sortable" ).sortable({
                    change: function(event, ui) {
                        $("#categorysavemessage").html("Changes are not saved");
                        $('#categorysavemessage').css("color","red");
                    }
                });
                $( "#sortable" ).disableSelection();
               
            } );

            function saveTemplate(){

                $('.template_name').removeClass('hidedata');
            }
           
            function saveDisplayChanges()
            {
                var order = $("#sortable").sortable("serialize");
                var template_name = $('#template_name').val();
              //  var template_name = 
                // order.push(template_name);
                // console.log(order);
                $('#categorysavemessage').html('Saving changes..');
                $.post(" <?php echo admin_url("procurement/update_displayorder") ?>",order+'&template_name='+template_name+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',function(theResponse){
                    $("#categorysavemessage").html(theResponse);
                    $('#categorysavemessage').css("color","green");
                });
            }

            $('document').ready(function(){
                $('.addquestion').click(function(){
                   var questionIds= $(this).attr('id');
                   var tenderId ="<?php echo $tenderId;?>";
                   swal({
                        title: "Are you sure?",
                        text: "Do you want to add this query to the Form Engine ?",
                        icon: "warning",
                        buttons: [
                            'No, cancel it!',
                            'Yes, I am sure!'
                        ],
                        dangerMode: true,
                        },function(isConfirm){
                            if (isConfirm) {
                                $.post(" <?php echo admin_url("procurement/tender_operations") ?>",{questionIds : questionIds,tenderId:tenderId, process:"add",'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},function(theResponse){
                                    swal({
                                        title: theResponse
                                    });

                                    location.reload();
                                });

                               
                            } 
                        });

                  
                });

                $('.removequestion').click(function(){
                    
                   var questionIds= $(this).attr('id');
                   var tenderId ="<?php echo $tenderId;?>";
                   $('#myModal').modal('toggle');
                   swal({
                        title: "Are you sure?",
                        text: "Do you want to delete the question from this template!",
                        icon: "warning",
                        buttons: [
                            'No, cancel it!',
                            'Yes, I am sure!'
                        ],
                        dangerMode: true,
                        },function(isConfirm){
                            if (isConfirm) {
                                $.post(" <?php echo admin_url("procurement/tender_operations") ?>",{questionIds : questionIds,tenderId:tenderId,process:"remove"},function(theResponse){
                                    swal({
                                        title: theResponse
                                    });

                                  //  location.reload();
                                });

                               
                            } 

                            
                        });

                  
                });

                var QuestionCount=<?php echo $count;?>;
                if(QuestionCount <=0){
                    ImportTemplateOnLoad();
                }

                function ImportTemplateOnLoad(){
                    $('#myModal_template').modal();
                }

                
                window.ImportTemplateOnLoad=function(){
                    $('#myModal_template').modal();

                   
                 
                }

             
                $('body').on('click', '.istender_required', function() { 
                    var checked= $('.istender_required').prop("checked");
                
                    if(checked){
                        $('.templatedropdown').removeClass('hidedata');
                    }else{
                        $('.templatedropdown').addClass('hidedata');
                    }
                    
                    
                });
                
                $('body').on('click', '#ImportTemplate', function() { 
                    var templateid=$('.templatedropdown').val();
                    var tenderId="<?php echo $tenderId;?>";
                  //  alert(templateid);
                    $.ajax({
                        type: "POST",
                        url: '<?php echo admin_url("procurement/ImportTemplateToTender") ?>',
                        data:{
                            tender_id: tenderId,
                            templateid : templateid

                        } ,
                        success: function(result){
                            console.log(result);
                           if(result ==1){
                            $('#myModal_template').modal('toggle');
                            swal({
                                title: "Successfully Imported",
                                icon: "success",
                            });
                           location.reload();
                           }else{
                                swal({
                                    title: "Import Failed",
                                    icon: "error",
                                });
                           }
                           


                          
                        }    
                    });
                });

                   
            });





            
          </script>   


         
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Preview for this Tender</h4>
                    </div>
                    <form>
                         <div class="modal-body">
                   
                            <?php
                            if($form_questions){
                                $i=1;
                                echo "<ul id='sortable'>";
                            //    print_r($form_questions);
                                foreach ($form_questions['question'] as $key => $value) {
                                    if($form_questions['tenderid'][$key] != "$tenderId"){
                                        continue;
                                    }

                                        $questionId=$form_questions['questionid'][$key];  


                                       $tenderquestionId=$form_questions['tenderqsid'][$key];  // id from tender_questions
                                    echo "<li class='ui-state-default' id='ID_$tenderquestionId'><img  class='img-icon pl-50' src='".base_url()."assets/admin/files/assets/icon/sort-solid.svg'>".ucfirst($value)." ";
                                    echo "<i class='fa fa-minus floatright removequestion' id='$questionId' aria-hidden='true'></i>
                                    ";
                                    if($form_questions['option_list']){
                                        $Listoption=$form_questions['option_list'][$key];
                                    echo "<br><div class='m5-50'>$Listoption</div></li>";
                                    }


                                                                
                                    $i++;
                                                                
                                }
                                echo "</ul>";
                            }else{
                                echo "Nothing to preview";
                            }

                            ?>
                        <div id="categorysavemessage"></div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary" onclick="saveTemplate()" >Save as template</button><br><br>
                            <input type="text" name="template_name" class="form-control template_name hidedata" id="template_name">
                        
                        </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="saveDisplayChanges()" >Save</button>
                           
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                </div>
                
                </div>
            </div>


            <div class="modal fade" id="myModal_template" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Templates</h4>
                    </div>
                    <form>
                         <div class="modal-body">

                         <label>Do you wish to import any template for this tender</label>
                         <input type="checkbox" class="istender_required">
                         <select class="form-control templatedropdown hidedata">
                         <option>Select</option>
                           <?php

                           foreach ($templates as $key => $value) {
                            $Templatename=$value->template_name;
                            $id=$value->id;
                               echo "<option value='$id'>$Templatename</option>";
                           }

                           ?>
                         
                         </select>

                         </div>
                   
                            
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="ImportTemplate" onclick="()" >Import</button>
                           
                            <button type="button" class="btn btn-default" data-dismiss="modal">Skip</button>
                        </div>

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
             
   .hidedata{
       display:none;
   }
                
            </style>

             