
</div>
</div>
<!--  closing tag from $page & $banner -->
<footer id="tg-footer" class="tg-footer tg-haslayout">

  <div class="tg-footerbar">
    <div class="container">
      <span class="tg-copyright">© <?php echo date("Y"); ?>  |  All Rights Reserved</span>
      <nav class="tg-footernav">
        <ul>
          <li><a href="#">Developed By | Netroxe IT Solutions Pvt. Ltd.</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<!--************************************
    Footer End
*************************************-->
</div>


<script>
			$(document).ready(function(){
			
				$('.changefont').click(function(e){
					
					e.preventDefault();
					var fontsize=$(this).data('name');


          $.ajax({
           type: "POST",
           url: '<?php echo supplier_url() ?>home/changeFontsize',
           data: {"fontsize" : fontsize} ,
           success: function(result){
            //  alert(result);
            location.reload();
           }
          });
				
				});
				

			});
		</script>
