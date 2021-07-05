<style>

@media screen and (max-width: 767px){
        .searchbar{
            display:none;
        }

    }
</style>
<!-- 
<main id="tg-main" class="tg-main tg-haslayout"> 
  <div class="container">
    
    <div class="row">
      <div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">

      <div class="col-md-3 col-sm-4 col-xs-12">
            <?php //$this->view('profile_sidebar',$page); ?>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12 pull-right"> -->

              <div>
  
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
      
              <div class="col-sm-12 col-xs-12" >
                  <div class="row">
                          <div class="form-group">
                            <div class="row" style="<?php if($notificationsview=="" or $notificationsview->preference_display_status=='false') echo "display: none;" ?>">
                              <!-- <div class="col-md-4" style="float:left"> -->
                              
                              <!--   <select class="form-control">
                                <option value="">
                                  Select Subject 
                                </option>
                              </select> -->
                            <!-- </div> -->
                            <div class="col-md-4"> 

                            <form method="post" action="<?php echo base_url('supplier/dashboard/search_notifications')?>">
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();;?>" value="<?=$this->security->get_csrf_hash();?>" />
                            
                            <input type="text" placeholder="Keyword" name="keyword" style="margin-left: 10px;">
                            <button type="submit" name="seach_notifications" value="search" class="tg-btn pull-center one_line"  data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987" ><span>Search</span></button>
                     
                              <!-- <input type="button" value="Search" name="submit" class="tg-btn" > -->
                              <form>
                            </div>
                             
            

                            </div>
                          </div>
                  </div>
                 
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="<?php if($notificationsview=="" or  $notificationsview->preference_display_status=='false') echo "display: none;" ?>" >
                      <thead>
                      <a style="<?php if($notificationsview!='') echo "display: none;" ?>" >No notifications </a>
      
                      <a href="<?php echo base_url('supplier/dashboard/preference_profile');?>" style="<?php if( $notificationsview=="" or $notificationsview->preference_display_status=='true') echo "display: none;" ?>"><b>Turn On Your Notification</b></a>
                        <tr style="background-color:#26265f ;color:#FFF ">
                          <th>Sl No</th>
                          <th>Subject</th>
                          <th style="width:50%;">Description </th>
                          <!-- <th>Date Posted</th> -->
                          <!-- <th>Action</th> -->
                          
                        </tr>
                      </thead>
                      <tbody> 
                      <?php 
                      $i=1;
                      foreach ($displaynotifications as $key => $value) { 
                        

?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td>Account info</td>
                          <td><?php echo $value->message;?></td>
                          
                          <!-- <td>26/08/2020</td>  -->
                          <!-- <td> -->
                          <!-- <button style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" data-toggle="modal" data-target="#notification" class="btn btn-primary btn-xs">Reply</button></td> -->
                        </tr>
                        <?php 
                       $i++;  } ?>
                
                      </tbody>
                    </table>
                  </div>

              </div>
            </div>
 
        <!-- </div>
       
      </div>
    </div>
  </div>
</main> -->
