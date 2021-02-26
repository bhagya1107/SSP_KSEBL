<style>
/* width */
/*::-webkit-scrollbar {
  width: 10px;
}*/

/* Track */
/*::-webkit-scrollbar-track {
  background: #f1f1f1; 
}*/
 
/* Handle */
/*::-webkit-scrollbar-thumb {
  background: #888; 
}*/

/* Handle on hover */
/*::-webkit-scrollbar-thumb:hover { 
  background: #555; 
}*/
</style>

<main id="tg-main" class="tg-main tg-haslayout"> 
  <div class="container">
    
    <div class="row">
      <div id="tg-twocolumns" class="tg-twocolumns tg-main-section tg-haslayout">
        <div class="col-md-9 col-sm-8 col-xs-12 pull-right">

            <!-- <div class="table-responsive"> -->
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
  
        <div class="col-sm-11 col-xs-11 pull-right">
        <div class="row">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" placeholder="Key Word" name="" style="margin-left: 10px;">
                    <!--   <select class="form-control">
                      <option value="">
                        Select Subject 
                      </option>
                    </select> -->
                  </div>
                  <div class="col-md-4">
                  <a class="tg-btn" href="#">Search</a>
                  </div>
                  
  

                  </div>
                </div>
      </div>


          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr style="background-color:#26265f ;color:#FFF ">
                  <th>Sl No</th>
                  <th>Subject</th>
                  <th style="width:50%;">Description</th>
                  <th>Date Posted</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>test</td>
                  <td>testing</td>
                  <td>26/08/2020</td>
                  <td>
                   <button style="width:66px;color: #fff;background-color: #1e315d; border-color: #ffcc33;" data-toggle="modal" data-target="#notification" class="btn btn-primary btn-xs">Reply</button></td>
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
