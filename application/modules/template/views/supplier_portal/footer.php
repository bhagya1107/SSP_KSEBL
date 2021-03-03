
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

<button id="buttonscroll" class="scroltop" onclick="topFunction()" ><i class=" fa fa-arrow-up"></i></button>

</div>

<style>
.scroltop {
    background: #504c7e;
    border-width: 2px;
    border-style: solid;
    border-color: #ffcc33;
    position: fixed;
    right: 15px;
    bottom: 15px;
    padding: 0;
    color: #ffcc33;
    font-size: 15px;
    margin: 0;
    cursor: pointer;
    display: none;
    height: 35px;
    width: 35px;
    line-height: 26px;
    text-align: center;
    z-index: 999;
}

</style>



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



<script>


  var mybutton = document.getElementById("buttonscroll");
  var tg_wrapper =document.getElementById("tg-wrapper");
  var innerscroll=document.getElementById("innerscroll");

  // When the user scrolls down 20px from the top of the document, show the button
  tg_wrapper.onscroll = function() { scrollFunction()};

  if(innerscroll){
    innerscroll.onscroll = function() { scrollFunction()};

  }

function scrollFunction() {

  // alert(tg_wrapper.scrollTop);
  if (tg_wrapper.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }


  if(innerscroll){
    if (innerscroll.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }



}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  tg_wrapper.scrollTop = 0;
  innerscroll.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



// $('#tg-wrapper').on('scroll', function () {
//         alert('scrolling');
//     });

</script>
